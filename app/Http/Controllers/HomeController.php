<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\SubscriptionMail;
use App\Models\BannerModel;
use App\Models\ContactModel;
use App\Models\MockupModel;
use App\Models\PageModel;
use App\Models\ProductImageModel;
use App\Models\ProductModel;
use App\Models\SubscriberModel;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    var $data;

    public function index()
    {
        $this->data['sliderImages'] = BannerModel::getBunnerType('slider', 5);
        $this->data['recent_projects'] = ProductModel::getProduct(6);
        $this->data['mockups'] = MockupModel::getMockup();

        $this->data['projects'] = ProductModel::getProduct();
        $this->data['galleryImages'] = ProductImageModel::getGallery();

        $this->data['meta_title'] = 'Home';
        $this->data['meta_description'] = '';
        $this->data['meta_keywords'] = '';
        return view($this->version . "index", $this->data);
    }
    public function contact()
    {
        $this->data['meta_title'] = 'Contact Us';
        $this->data['meta_description'] = '';
        $this->data['meta_keywords'] = '';
        return view($this->version . "contact", $this->data);
    }
    public function contact_post(Request $request)
    {
        $rules = [
            'name'     => 'required',
            'email'    => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];

        $request->validate($rules, [
            'name.required'   => 'Please enter your name',
            'email.required'  => 'Please your email address',
            'subject.required'   => 'Please enter the email subject',
            'message.required'  => 'Please enter your message',
        ]);
        $contact = new ContactModel();
        $contact->name = trim($request->name);
        $contact->email = trim($request->email);
        $contact->phone = trim($request->phone);
        $contact->subject = trim($request->subject);
        $contact->message = trim($request->message);
        $contact->save();
        $sendTo = $this->setting->submit_email;
        if (!empty($sendTo)) {
            Mail::to([$sendTo, $this->setting->admin_email])->send(new ContactMail($contact));
        }
        return redirect()->back()->with('success', 'Your email has been sent');
    }

    public function about()
    {
        $this->data['meta_title'] = 'About Us';
        $this->data['meta_description'] = 'About Us';
        $this->data['meta_keywords'] = '';
        $this->data['galleryImages'] = ProductImageModel::getGallery();
        return view($this->version . "about", $this->data);
    }
    public function faq()
    {
        $page = PageModel::findBySlug('faq');
        $this->data['meta_title'] = $page->meta_title;
        $this->data['meta_description'] = $page->meta_description;
        $this->data['meta_keywords'] = $page->meta_keywords;
        $this->data['page'] = $page;
        return view($this->version . "page.faq", $this->data);
    }
    public function terms_conditions()
    {
        $page = PageModel::findBySlug('terms-conditions');
        $this->data['meta_title'] = $page->meta_title;
        $this->data['meta_description'] = $page->meta_description;
        $this->data['meta_keywords'] = $page->meta_keywords;
        $this->data['page'] = $page;
        return view($this->version . "page.terms_conditions", $this->data);
    }
    public function privacy_policy()
    {
        $page = PageModel::findBySlug('privacy-policy');
        $this->data['meta_title'] = $page->meta_title;
        $this->data['meta_description'] = $page->meta_description;
        $this->data['meta_keywords'] = $page->meta_keywords;
        $this->data['page'] = $page;
        return view($this->version . "page.privacy_policy", $this->data);
    }

    public function get_mockup($slug)
    {
        $mockup = MockupModel::getSingleSlug($slug);
        if (empty($mockup)) {
            return redirect('')->with('error', 'Sorry! Something went wrong while viewing this item. Please try again later');
        }
        $this->data['meta_title'] = $mockup->title;
        $this->data['mockup'] = $mockup;
        return view($this->version . "mockup.detail", $this->data);
    }
    public function portfolio()
    {
        $this->data['galleryImages'] = ProductImageModel::getGallery();
        $this->data['meta_title'] = 'Our Portfolio';
        return view($this->version . "portfolio.index", $this->data);
    }


    public function newsletter_subscription(Request $request)
    {
        $rules = [
            'email' => 'required|email|unique:subscribers|max:30'
        ];

        $request->validate(
            $rules,
            [
                'email.required'   => 'Please enter your email address',
            ]
        );
        $token = hash('sha256', time());
        $subscriber = new SubscriberModel();
        $subscriber->email = trim($request->email);
        $subscriber->token =  $token;
        $subscriber->status = 0;

        $subscriber->save() ? 'You have successfully subscribed.' : 'Something went wrong, please try again.';

        // Send email
        $subscriberData = [
            'verification_link' => url('subscriber/verify/' . $token . '/' . $request->email),
            'subject' => 'Please Comfirm Subscription',
        ];
        try {
            Mail::to($subscriber->email)->send(new SubscriptionMail((object)$subscriberData));
        } catch (\Exception $e) {
        }
        return redirect()->back()->with('success', 'Thanks, please check your inbox to confirm subscription');
    }

    public function subscriber_verify($token, $email)
    {
        $subscriber = SubscriberModel::where('token', $token)->where('email', $email)->first();
        if ($subscriber) {
            $subscriber->token = '';
            $subscriber->status = 1;
            $subscriber->update();
            return redirect()->back()->with('success', 'You are successfully verified as a subscribe to this system');
        } else {
            return redirect('/');
        }
    }
}
