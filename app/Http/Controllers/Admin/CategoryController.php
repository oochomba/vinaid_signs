<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ProductImageModel;
use App\Models\SettingModel;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    public $data;
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
        $this->setting = SettingModel::getSingle();
        $this->data['setting'] = $this->setting;
    }
    //
    public function index()
    {
        if (is_null(Auth::user()) || !Auth::user()->can('category.view')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $this->data['categories'] = CategoryModel::tree();
        $this->data['page_title'] = 'Product Categories';
        return view('admin.category.list', $this->data);
    }
    /**
     * add product category
     */
    public function add()
    {
        if (is_null(Auth::user()) || !Auth::user()->can('category.create')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $this->data['page_title'] = 'Add Category';
        return view('admin.category.add', $this->data);
    }

    /**
     * save resource info
     */
    public function store(Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('category.create')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $rules = [
            'name' => 'required',
            'meta_title' => 'required',
            'status' => 'required',
        ];

        $request->validate($rules, [
            'name.required' => 'Please enter product name',
            'status.required' => 'Please select product status',
        ]);
        $slug = Str::slug(str_replace(' ', '-', $request->name));

        $checkSlugExists = CategoryModel::where(['slug' => $slug])->get()->first();

        if (!empty($checkSlugExists)) {
            $slug = $checkSlugExists->slug . base64_encode($request->name);
        }

        if (count($request->parent_id) == 1) {
            $parent_id = $request->parent_id[array_key_last($request->parent_id)];
        } else {
            $parentIds = [];
            foreach ($request->parent_id as $key => $value) {
                if (!empty($value)) {
                    $parentIds[$key] = $value;
                }
            }
            $parent_id = $request->parent_id[array_key_last($parentIds)];
        }


        $category = new CategoryModel();
        $category->name = trim($request->name);
        $category->slug = $slug;
        $category->description = trim($request->description);
        $category->parent_id = $parent_id;
        $category->status = trim($request->status);
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim($request->meta_description);
        $category->meta_keywords = trim($request->meta_keywords);
        $category->created_by = Auth::user()->id;
        $category->save();

        if (!empty($request->file('image'))) {
            foreach ($request->file('image') as $file) {
                if ($file->isValid()) {
                    $ext = $file->getClientOriginalExtension();
                    $randomStr = $category->id . Str::random(10);
                    $filename = $randomStr . '.' . $ext;
                    //save images data only if image files have successively uploaded
                    if (!$file->move('uploads/products', $filename)) {
                        return redirect()->back()->with('error', 'error occurred while uploading your product image!!');
                    }

                    $imageUpload = new ProductImageModel();
                    $imageUpload->category_id = $category->id;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_extension = $ext;
                    $imageUpload->save();
                }
            }
        }

        return redirect('admin/category/list')->with('success', 'Product category created !!');
    }

    /**
     * edit  details
     */
    public function edit($id)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('category.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        if (!is_numeric($id)) {
            return redirect('admin/category/list')->with('error', 'Some technical error occurred. Please try again later');
        }
        $this->data['category'] = CategoryModel::where(['id' => $id])->get()->first();
        if (empty($this->data['category'])) {
            return redirect('admin/category/list')->with('error', 'Some technical error occurred. Please try again later');
        }
        $this->data['page_title'] = ucfirst($this->data['category']->name);
        return view('admin.category.edit', $this->data);
    }

    /**
     * update category
     */
    public function update($id, Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('category.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $category = CategoryModel::getSingle($id);
        if (empty($category)) {
            return redirect()->back()->with('error', 'Sorry !! Some technical error occurred. Please try again');
        }
        $rules = [
            'name' => 'required',
            'meta_title' => 'required',
            'status' => 'required',
        ];

        $request->validate($rules, [
            'name.required' => 'Please enter product name',
            'status.required' => 'Please select product status',
            'meta_title.required' => 'Please enter meta title',
        ]);

        $slug = Str::slug(str_replace(' ', '-', $request->name));

        $checkSlugExists = CategoryModel::checkSlugExistsOnEdit($category->id, $request->slug);
        // dd($checkSlugExists);
        if (!empty($checkSlugExists)) {
            $slug = $checkSlugExists->slug . base64_encode($request->name);
        }

        $category->name = trim($request->name);
        $category->parent_id = trim($request->parent_id);
        $category->slug = $slug;
        $category->description = trim($request->description);
        $category->status = trim($request->status);
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim($request->meta_description);
        $category->meta_keywords = trim($request->meta_keywords);
        $category->created_by = Auth::user()->id;
        $category->save();

        if (!empty($request->file('image'))) {
            foreach ($request->file('image') as $file) {
                if ($file->isValid()) {
                    $ext = $file->getClientOriginalExtension();
                    $randomStr = $category->id . Str::random(10);
                    $filename = $randomStr . '.' . $ext;
                    //save images data only if image files have successively uploaded
                    if (!$file->move('uploads/products', $filename)) {
                        return redirect()->back()->with('error', 'error occurred while uploading your product image!!');
                    }

                    $imageUpload = new ProductImageModel();
                    $imageUpload->category_id = $category->id;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_extension = $ext;
                    $imageUpload->save();
                }
            }
        }

        return redirect('admin/category/list')->with('success', 'Category successively updated !!');
    }
    /**
     * delete category
     */
    public function delete(int $id, Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('category.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }

        $row = CategoryModel::where(['id' => $id])->get()->first();

        if (!is_null($row)) {
            // $sub_categories = CategoryModel::getSubCategoriesByParentId($row);

            // if (!empty($sub_categories->children->count())) {

            // }
            $deleteData = [
                'is_delete' => 1,
                'deleted_by' => Auth::user()->id,
                'deleted_on' => Carbon::now(),
            ];
            $json['status'] = true;
            $json['message'] = 'Category deleted successfully';
            CategoryModel::where('id', $id)->update($deleteData);
            toastr()->success('Category deleted successfully');

            // $row->delete();
        } else {
            $json['status'] = false;
            $json['message'] = 'Oops! Some technical error occurred. Please try again';
            toastr()->error('Oops! Some technical error occurred. Please try again');
        }
        $json['redirect'] = url('admin/category/list');
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

            $html .= ' <select class="form-control select2 mt-2" name="parent_id[]" id="childCategory">';
            $html .= '<option value="">None</option>';
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
            ->where('parent_id_child', '!=', 0)
            ->orderBy("category.name", "asc")
            ->get();

        $html = '';
        if (!empty($sub_categories->count())) {
            $html .= ' <select class="form-control select2 mt-2" name="parent_id[]" id="childSubCategory">';
            $html .= '<option value="">None</option>';
            foreach ($sub_categories as $sub_category) {
                $html .= '<option value="' . $sub_category->id . '">' . $sub_category->name . '</option>';
            }
            $html .= '</select>';
        }

        $json['html'] = $html;
        echo json_encode($json);
    }

    public function del_category_image($id, Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('category.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }

        $row = ProductImageModel::where(['id' => $id])->get()->first();

        if (!is_null($row)) {
            if (file_exists('uploads/products/' . $row->imaage_name)) {
                unlink('uploads/products/' . $row->image_name);
            }
            $row->delete();
            $json['status'] = true;
            $json['message'] = 'Image deleted successfully';
            toastr()->success('Image deleted successfully');
        } else {
            $json['status'] = false;
            $json['message'] = 'Oops! Some technical error occurred. Please try again';
            toastr()->error('Oops! Some technical error occurred. Please try again');
        }
        $json['redirect'] = $request->redirect;
        echo json_encode($json);
    }
}
