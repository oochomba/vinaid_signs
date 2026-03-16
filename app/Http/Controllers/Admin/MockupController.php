<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BrandModel;
use App\Models\CategoryModel;
use App\Models\ColorModel;
use App\Models\MockupColorModel;
use App\Models\ProductImageModel;
use App\Models\MockupModel;
use App\Models\MockupSizeModel;
use App\Models\SettingModel;
use Auth;
use Illuminate\Http\Request;
use Str;

class MockupController extends Controller
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
        if (is_null(Auth::user()) || !Auth::user()->can('mockup.view')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }

        $this->data['mockups'] = MockupModel::getMockup();
        return view('admin.mockup.list', $this->data);
    }
    /**
     * add mockup
     */
    public function add()
    {
        if (is_null(Auth::user()) || !Auth::user()->can('mockup.create')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $this->data['page_title'] = 'Add mockup';
        return view('admin.mockup.add', $this->data);
    }

    /**
     * save resource info
     */
    public function store(Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('mockup.create')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $rules = [
            'title' => 'required|unique:mockup',
        ];

        $request->validate($rules, [
            'title.required' => 'Please enter mockup title',
        ]);

        $mockup = new MockupModel();
        $title = trim($request->title);
        $mockup->title = $title;
        $mockup->created_by = Auth::user()->id;
        $mockup->save();
        //generate slug
        $slug = Str::slug(str_replace(' ', '-', $title));

        $checkSlugExists = MockupModel::where('slug', $slug)->first();
        if ($checkSlugExists == null) {
            $mockup->slug = $slug;
            $mockup->save();
        } else {
            $mockup->slug = $slug . '-' . $mockup->id;
            $mockup->save();
        }
        return redirect('admin/mockup/edit/' . $mockup->id)->with('success', 'Mockup created !!');
    }

    /**
     * edit mockup details
     */
    public function edit($id)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('mockup.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        if (!is_numeric($id)) {
            return redirect('admin/mockup/list')->with('error', 'Some technical error occurred. Please try again later');
        }
        $this->data['mockup'] = MockupModel::where(['id' => $id])->get()->first();
        if (empty($this->data['mockup'])) {
            return redirect('admin/mockup/list')->with('error', 'Some technical error occurred. Please try again later');
        }

        $this->data['page_title'] = ucfirst($this->data['mockup']->title);
        return view('admin.mockup.edit', $this->data);
    }

    /**
     * update entry
     */
    public function update($id, Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('mockup.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $mockup = MockupModel::where(['id' => $id])->get()->first();
        if (empty($mockup)) {
            return redirect('admin/mockup/list')->with('error', 'Some technical error occurred. Please try again later');
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
            'description' => trim($request->description),
            'status' => trim($request->status),
            'created_by' => Auth::user()->id,
        ];

        MockupModel::where('id', $id)->update($updateData);

        //mockup before images upload
        if (!empty($request->file('before'))) {
            foreach ($request->file('before') as $file) {
                if ($file->isValid()) {
                    $ext = $file->getClientOriginalExtension();
                    $randomStr = $mockup->id . Str::random(10);
                    $filename = $randomStr . '.' . $ext;

                    //save images data only if image files have successively uploaded
                    if (!$file->move('uploads/products', $filename)) {
                        return redirect()->back()->with('error', 'error occurred while uploading your mockup image!!');
                    }

                    $imageUpload = new ProductImageModel();
                    $imageUpload->mockup_id = $mockup->id;
                    $imageUpload->mockup_before_after = 0;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_extension = $ext;
                    $imageUpload->save();
                }
            }
        }
        //mockup after images upload
        if (!empty($request->file('after'))) {
            foreach ($request->file('after') as $file) {
                if ($file->isValid()) {
                    $ext = $file->getClientOriginalExtension();
                    $randomStr = $mockup->id . Str::random(10);
                    $filename = $randomStr . '.' . $ext;

                    //save images data only if image files have successively uploaded
                    if (!$file->move('uploads/products', $filename)) {
                        return redirect()->back()->with('error', 'error occurred while uploading your mockup image!!');
                    }

                    $imageUpload = new ProductImageModel();
                    $imageUpload->mockup_id = $mockup->id;
                    $imageUpload->mockup_before_after = 1;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_extension = $ext;
                    $imageUpload->save();
                }
            }
        }

        return redirect(url('admin/mockup/list'))->with('success', 'Mockup successively updated !!');
    }

    /**
     * delete mockup image
     */
    public function delete($id)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('mockup.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $mockup = MockupModel::where(['id' => $id])->get()->first();

        //get all images related
        $mockupImages = $mockup->getImage;
        if (!empty($mockupImages)) {
            foreach ($mockupImages as $mockupImage) {
                $mockupImageInfo = $mockupImage->getImageInfoUnlink();
                if (!empty($mockupImageInfo)) {
                    unlink($mockupImageInfo);
                }
                $mockupImage->delete();
            }
        }
        $mockup->delete();
        $json['success'] = true;
        echo json_encode($json);
    }

    /**
     * sort mockup images
     */
    public function mockupImageSortable(Request $request)
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
}
