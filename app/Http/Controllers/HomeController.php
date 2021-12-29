<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting]);
    }

    public function reference()
    {
        $setting = Setting::first();
        return view('home.reference', ['setting' => $setting]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.aboutus', ['setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function place()
    {
        $setting = Setting::first();
        return view('home.place', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        Session::flash('message','this is a message');
        return redirect()->route('home_contact')->with('success','Mesajınız kaydedilmiştir');
    }

}
