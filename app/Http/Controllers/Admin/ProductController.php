<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ColorModel;
use App\Models\ProductColorModel;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\ProductSizeModel;
use Auth;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    public $data;
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    //
    public function index()
    {
        if (is_null(Auth::user()) || !Auth::user()->can('product.view')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }

        $this->data['products'] = ProductModel::getProduct();
        return view('admin.product.list', $this->data);
    }
    /**
     * add product
     */
    public function add()
    {
        if (is_null(Auth::user()) || !Auth::user()->can('product.create')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $this->data['page_title'] = 'Add product';
        return view('admin.product.add', $this->data);
    }

    /**
     * save resource info
     */
    public function store(Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('product.create')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $rules = [
            'title' => 'required|unique:product',
        ];

        $request->validate($rules, [
            'title.required' => 'Please enter product title',
        ]);

        $product = new ProductModel();
        $title = trim($request->title);
        $product->title = $title;
        $product->created_by = Auth::user()->id;
        $product->save();
        //generate slug
        $slug = Str::slug(str_replace(' ', '-', $title));

        $checkSlugExists = ProductModel::where('slug', $slug)->first();
        if ($checkSlugExists == null) {
            $product->slug = $slug;
            $product->save();
        } else {
            $product->slug = $slug . '-' . $product->id;
            $product->save();
        }
        return redirect('admin/product/edit/' . $product->id)->with('success', 'Product category created !!');
    }

    /**
     * edit product details
     */
    public function edit($id)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('product.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        if (!is_numeric($id)) {
            return redirect('admin/product/list')->with('error', 'Some technical error occurred. Please try again later');
        }
        $this->data['product'] = ProductModel::where(['id' => $id])->get()->first();
        if (empty($this->data['product'])) {
            return redirect('admin/product/list')->with('error', 'Some technical error occurred. Please try again later');
        }
        //check categories set if not redirect with error
        $this->data['categories'] = CategoryModel::getRootCategories();
        if ($this->data['categories'] == null) {
            return redirect('admin/category/add')->with('error', 'Please set the Category first before adding sub categories');
        }

        //get sub categories

        $this->data['sub_categories'] = CategoryModel::getCategoriesParentId($this->data['product']->category_id);

        $this->data['sub_sub_categories'] = CategoryModel::getCategoriesParentId($this->data['product']->sub_category_id);

        $this->data['page_title'] = ucfirst($this->data['product']->title);
        return view('admin.product.edit', $this->data);
    }

    /**
     * update entry
     */
    public function update($id, Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('product.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $product = ProductModel::where(['id' => $id])->get()->first();
        if (empty($product)) {
            return redirect('admin/product/list')->with('error', 'Some technical error occurred. Please try again later');
        }

        // $rules = [
        //     'name'     => 'required',
        //     'slug'    => 'required|unique:brand,slug,' . $id,
        //     'meta_title'    => 'required',
        //     'status'   => 'required',
        // ];

        // $request->validate(
        //     $rules,
        //     [
        //         'name.required'   => 'Please enter brand name',
        //         'slug.required'  => 'Please enter brand slug',
        //         'status.required' => 'Please select brand status',
        //     ]
        // );

        $updateData = [
            'title' => trim($request->title),
            'slug' => Str::slug(trim($request->title)),
            'client' => trim($request->client),
            'category_id' => trim($request->category_id),
            'sub_category_id' => trim($request->sub_category_id),
            'sub_subcategory_id' => trim($request->sub_subcategory_id),
            'description' => trim($request->description),
            'status' => trim($request->status),
            'created_by' => Auth::user()->id,
        ];

        ProductModel::where('id', $id)->update($updateData);

        //product images upload
        if (!empty($request->file('image'))) {
            foreach ($request->file('image') as $file) {
                if ($file->isValid()) {
                    $ext = $file->getClientOriginalExtension();
                    $randomStr = $product->id . Str::random(10);
                    $filename = $randomStr . '.' . $ext;

                    //save images data only if image files have successively uploaded
                    if (!$file->move('uploads/products', $filename)) {
                        return redirect()->back()->with('error', 'error occurred while uploading your product image!!');
                    }

                    $imageUpload = new ProductImageModel();
                    $imageUpload->product_id = $product->id;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_extension = $ext;
                    $imageUpload->save();
                }
            }
        }

        return redirect()->back()->with('success', 'Product successively updated !!');
    }

    /**
     * delete product image
     */
    public function deleteProductImage($id)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('product.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $image = ProductImageModel::where(['id' => $id])->get()->first();
        if (!empty($image->getImageInfo())) {
            unlink('uploads/products/' . $image->image_name);
        }
        if ($image->delete()) {
            $json['success'] = true;
        }
        $image->delete();
        $json['success'] = true;
        $json['message'] = 'Successifuly Deleted';
        echo json_encode($json);
    }

    /**
     * sort product images
     */
    public function productImageSortable(Request $request)
    {
        if (!empty($request->photo_id)) {
            $i = 1;
            foreach ($request->photo_id as $photo_id) {
                $image = ProductImageModel::where(['id' => $photo_id])->get()->first();
                $image->order_by = $i;
                $image->save();
                $i++;
            }
        }
        $json['success'] = true;
        echo json_encode($json);
    }

    public function get_sub_category(Request $request)
    {
        $sub_categories = CategoryModel::select('category.*')
            ->where(['category.parent_id' => $request->id, 'category.status' => 0, 'category.is_delete' => 0])
            ->where('parent_id', '!=', 0)
            ->orderBy("category.name", "asc")
            ->get();
        $html = '';
        if (!empty($sub_categories->count())) {

            $html .= ' <select class="form-control select2 mt-2" name="sub_category_id" id="childCategory" required>';
            $html .= '<option value="">Select Category</option>';
            foreach ($sub_categories as $sub_category) {
                $html .= '<option value="' . $sub_category->id . '">' . $sub_category->name . '</option>';
            }
            $html .= '</select>';
        }
        $json['html'] = $html;
        echo json_encode($json);
    }

    public function get_sub_category_child(Request $request)
    {
        $sub_categories = CategoryModel::select('category.*')
            ->where(['category.parent_id' => $request->id, 'category.status' => 0, 'category.is_delete' => 0])
            ->where('parent_id', '!=', 0)
            ->orderBy("category.name", "asc")
            ->get();

        $html = '';
        if (!empty($sub_categories->count())) {
            $html .= ' <select class="form-control select2 mt-2" name="sub_subcategory_id" id="childSubCategory" required>';
            $html .= '<option value="">Select Category</option>';
            foreach ($sub_categories as $sub_category) {
                $html .= '<option value="' . $sub_category->id . '">' . $sub_category->name . '</option>';
            }
            $html .= '</select>';
        }

        $json['html'] = $html;
        echo json_encode($json);
    }
    public function search_product(Request $request)
    {
        $products = ProductModel::getProduct();
        return response()->json([
            "status" => true,
            "success" => view("admin.banner._search", [
                "products" => $products,
            ])->render(),
        ], 200);
    }
}
