<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NotificationModel;
use App\Models\PageModel;
use App\Models\PaymentSettingModel;
use App\Models\SettingModel;
use App\Models\SMTPModel;
use Auth;
use Illuminate\Http\Request;
use Str;

class PageController extends Controller
{
    public $data;
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
    //
    public function list()
    {
        if (is_null(Auth::user()) || !Auth::user()->can('page.view')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }

        $this->data['pages'] = PageModel::getRecord('admin');
        $this->data['page_title'] = 'Page list';
        return view('admin.page.list', $this->data);
    }


    public function notification()
    {
        $this->data['notifications'] = NotificationModel::getRecord();
        $this->data['page_title'] = 'Notifications';
        return view('admin.page.notification', $this->data);
    }


    public function edit($id)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('page.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        if (!is_numeric($id)) {
            return redirect('admin/page/list')->with('error', 'Some technical error occurred. Please try again later');
        }
        $this->data['page'] = PageModel::getSingle($id);
        if (empty($this->data['page'])) {
            return redirect('admin/page/list')->with('error', 'Some technical error occurred. Please try again later');
        }
        $this->data['page_title'] = 'Edit Page';
        return view('admin.page.edit', $this->data);
    }

    /**
     * update entry
     */
    public function update($id, Request $request)
    {
        if (is_null(Auth::user()) || !Auth::user()->can('page.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }
        $page = PageModel::getSingle($id);
        $imageUnlink = $page->image_name;
        if (empty($page)) {
            return redirect('admin/page/list')->with('error', 'Some technical error occurred. Please try again later');
        }

        $rules = [
            'name'     => 'required',
            'title' => 'required',
            // 'description'    => 'required',
            // 'meta_title'    => 'required',
            'status'   => 'required',
        ];

        $request->validate(
            $rules,
            [
                'name.required'   => 'Please enter page name',
                'title.required'  => 'Please enter page title',
                // 'description.required'  => 'Please enter page content',
                // 'meta_title.required'  => 'Please enter page meta title',
                'status.required' => 'Please select brand status',
            ]
        );

        $page->title = trim($request->title);
        $page->name = trim($request->name);
        $page->description = trim($request->description);
        $page->meta_title = trim($request->meta_title);
        $page->meta_description = trim($request->meta_description);
        $page->meta_keywords = trim($request->meta_keywords);
        $page->status = trim($request->status);
        $page->save();



        if (!empty($request->file('image'))) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $randomStr = $page->id . Str::random(10);
            $filename = $randomStr . '.' . $ext;

            if (!$file->move('uploads/pages', $filename)) {
                return redirect()->back()->with('error', 'error occurred while uploading your page image!!');
            }
            //delete previous
            if (!empty($imageUnlink) && file_exists('uploads/pages/' . $imageUnlink)) {
                unlink('uploads/pages/' . $imageUnlink);
            }
            $page->image_name = $filename;
            $page->save();
        }

        return redirect()->back()->with('success', 'Page successively updated !!');
    }

    public function system_setting()
    {
        if (is_null(Auth::user()) || !Auth::user()->can('setting.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to access this page');
        }

        $this->data['setting'] = SettingModel::getSingle();

        $this->data['page_title'] = 'System setting';
        return view('admin.setting.system_setting', $this->data);
    }
    public function update_system_setting(Request $request)
    {
        $setting = SettingModel::getSingle();
        $setting->website_name = trim($request->website_name);
        $setting->phone = trim($request->phone);
        $setting->phone_two = trim($request->phone_two);
        $setting->email = trim($request->email);
        $setting->submit_email = trim($request->submit_email);
        $setting->admin_email = trim($request->admin_email);
        $setting->footer_text = trim($request->footer_text);
        $setting->address = trim($request->address);
        $setting->work_hours = trim($request->work_hours);
        $setting->facebook_link = trim($request->facebook_link);
        $setting->google_link = trim($request->google_link);
        $setting->twitter_link = trim($request->twitter_link);
        $setting->instagram_link = trim($request->instagram_link);
        $setting->youtube_link = trim($request->youtube_link);
        $setting->linkedin_link = trim($request->linkedin_link);
        $setting->pinterest_link = trim($request->pinterest_link);
        $setting->save();

        if (!empty($request->file('logo'))) {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $randomStr = 'logo_' . Str::random(10);
            $filename = $randomStr . '.' . $ext;

            if (!$file->move('uploads/setting', $filename)) {
                return redirect()->back()->with('error', 'error occurred while uploading your logo image!!');
            }
            $setting->logo = trim($filename);
            $setting->save();
        }

        if (!empty($request->file('favicon'))) {
            $file = $request->file('favicon');
            $ext = $file->getClientOriginalExtension();
            $randomStr = 'favicon_' . Str::random(10);
            $filename = $randomStr . '.' . $ext;

            if (!$file->move('uploads/setting', $filename)) {
                return redirect()->back()->with('error', 'error occurred while uploading your logo image!!');
            }
            $setting->favicon = trim($filename);
            $setting->save();
        }

        if (!empty($request->file('footer_logo'))) {
            $file = $request->file('footer_logo');
            $ext = $file->getClientOriginalExtension();
            $randomStr = 'p_methods_' . Str::random(10);
            $filename = $randomStr . '.' . $ext;

            if (!$file->move('uploads/setting', $filename)) {
                return redirect()->back()->with('error', 'error occurred while uploading your logo image!!');
            }
            $setting->footer_logo = trim($filename);
            $setting->save();
        }
        return redirect()->back()->with('success', 'Setting successfully updated');
    }

    public function smtp_setting()
    {
        $this->data['smtp_setting'] = SMTPModel::getSingle();
        $this->data['page_title'] = 'SMTP Setting';
        return view('admin.setting.smtp', $this->data);
    }

    public function update_smtp_setting(Request $request)
    {
        $smtp_setting = SMTPModel::getSingle();
        $smtp_setting->name = trim($request->name);
        $smtp_setting->mail_mailer = trim($request->mail_mailer);
        $smtp_setting->mail_host = trim($request->mail_host);
        $smtp_setting->mail_port = trim($request->mail_port);
        $smtp_setting->mail_username = trim($request->mail_username);
        $smtp_setting->mail_password = trim($request->mail_password);
        $smtp_setting->mail_encryption = trim($request->mail_encryption);
        $smtp_setting->mail_from_address = trim($request->mail_from_address);
        $smtp_setting->save();
        return redirect()->back()->with('success', 'SMTP setting updated successively');
    }
}
