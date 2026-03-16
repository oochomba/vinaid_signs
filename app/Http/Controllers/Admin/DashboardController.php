<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\ContactModel;
use App\Models\ProductImageModel;
use App\Models\SettingModel;
use Auth;
use Str;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    var $data;
    public $user;
    var $setting;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
        $this->setting = SettingModel::getSingle();
        $this->data['setting'] = $this->setting;
    }
    /**
     * @Route("admin/dashboard")
     * load admin dashboard
     */
    public function index()
    {
        if (is_null(Auth::user()) || !Auth::user()->can('dashboard.view')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $this->data['page_title'] = 'Dashboard';
        return view('admin.dashboard', $this->data);
    }
    public function customer_contacts()
    {
        $this->data['page_title'] = 'Customer Contacts';
        $this->data['contacts'] = ContactModel::all();
        return view('admin.customer_contacts', $this->data);
    }


    public function banner_list()
    {
        $this->data['page_title'] = 'Product banners';
        $this->data['banners'] = BannerModel::getRecord();
        return view('admin.banner.list', $this->data);
    }

    public function banner_add()
    {
        $this->data['page_title'] = 'Add banner';
        return view('admin.banner.add', $this->data);
    }

    public static function banner_store(Request $request)
    {

        $rules = [
            'product_id'     => 'required',
        ];

        $request->validate(
            $rules,
            [
                'product_id.required'   => 'Please select a product to link',
            ]
        );
        $banner = new BannerModel();
        $banner->type = $request->type;
        $banner->caption = $request->caption;
        $banner->short_description = trim($request->short_description);
        $banner->product_id = $request->product_id;
        $banner->status = $request->status;
        $banner->save();

        if (!empty($request->file('image'))) {
            foreach ($request->file('image') as $file) {
                if ($file->isValid()) {
                    $ext = $file->getClientOriginalExtension();
                    $randomStr = $banner->id . Str::random(10);
                    $filename = $randomStr . '.' . $ext;

                    if (!$file->move('uploads/products', $filename)) {
                        return redirect()->back()->with('error', 'Error occurred while uploading your banner image!!');
                    }

                    $imageUpload = new ProductImageModel();
                    $imageUpload->banner_id = $banner->id;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_extension = $ext;
                    $imageUpload->save();
                }
            }
        }
        return redirect('admin/banners')->with('success', 'Banner successivel uploaded !!');
    }

    public function edit_banner($id)
    {
        if (!is_numeric($id)) {
            return redirect('admin/banners')->with('error', 'Some technical error occurred. Please try again later');
        }
        $this->data['banner'] = BannerModel::getSingle($id);
        if (empty($this->data['banner'])) {
            return redirect('admin/banners')->with('error', 'Some technical error occurred. Please try again later');
        }

        $this->data['page_title'] = ucfirst($this->data['banner']->caption);
        return view('admin.banner.edit', $this->data);
    }

    public function banner_update($id, Request $request)
    {
        $banner = BannerModel::getSingle($id);
        if (empty($banner)) {
            return redirect('admin/banners')->with('error', 'Some technical error occurred. Please try again later');
        }


        $banner->type = trim($request->type);
        $banner->caption = trim($request->caption);
        $banner->short_description = trim($request->short_description);
        if (!empty($request->product_id)) {
            $banner->product_id = trim($request->product_id);
        }
        $banner->status = trim($request->status);
        // dd($banner);
        $banner->save();

        if (!empty($request->file('image'))) {
            foreach ($request->file('image') as $file) {
                if ($file->isValid()) {
                    $ext = $file->getClientOriginalExtension();
                    $randomStr = $banner->id . Str::random(10);
                    $filename = $randomStr . '.' . $ext;

                    ProductImageModel::where(['banner_id'=> $id])->delete();

                    //save images data only if image files have successively uploaded
                    if (!$file->move('uploads/products', $filename)) {
                        return redirect()->back()->with('error', 'error occurred while uploading your banner image!!');
                    }

                    $imageUpload = new ProductImageModel();
                    $imageUpload->banner_id = $banner->id;
                    $imageUpload->image_name = $filename;
                    $imageUpload->image_extension = $ext;
                    $imageUpload->save();
                }
            }
        }
        return redirect('admin/banners')->with('success', 'Banner image updated successfully');
    }


    // delete banner image

    public function delete_banner($id,Request $request)
    {
        $record = ProductImageModel::where('id', $id)->get()->first();
        if (empty($record)) {
            return redirect()->back()->with('error', 'Sorry, there was an error. Please try again later.');
        }
        if (!empty($record->getImageInfo())) {
            unlink('uploads/products/' . $record->image_name);
        }
        $record->delete();
        $json['status'] =true;
        $json['message'] ='Banner successfully deleted';
        $json['redirect']=$request->redirect;
        echo json_encode($json);
    }

    //delete bammer entry
    public function delete_banner_record($id,Request $request)
    {
        $record = BannerModel::where('id', $id)->get()->first();
        if (empty($record)) {
            return redirect()->back()->with('error', 'Sorry, there was an error. Please try again later.');
        }
        //get the image info
        $imageInfo = $record->getImageSingle($record->id);
        $imageInfo->delete();
        if (!empty($imageInfo->getImageInfo())) {
            unlink('uploads/products/' . $imageInfo->image_name);
        }
        $record->delete();
        $json['status'] =true;
        $json['message'] ='Banner successfully deleted';
        $json['redirect']=url('admin/banners');
        echo json_encode($json);
    }
    
}