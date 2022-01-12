<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
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
    public static function countcomment($id)
    {
        return Comment::where('content_id',$id)->count();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Content::select('id', 'title', 'image', 'city')->limit(4)->get();
        $popularTourAndActivity = Content::select('id', 'title', 'image', 'city')->limit(5)->inRandomOrder()->get();
        $lastTourAndActivity = Content::select('id', 'title', 'image', 'city', 'country')->orderByDesc('id')->get();

        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'popularTourAndActivity' => $popularTourAndActivity,
            'lastTourAndActivity' => $lastTourAndActivity,
            'page' => 'home'
        ];
        return view('home.index', $data);
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
    public function faq()
    {
        $datalist = Faq::all()->get();
        return view('home.faq', ['datalist' => $datalist]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function place($id)
    {
        $data = Content::find($id);
        $dataList = Image::where('content_id', $id)->get();
        $comments = Comment::where('content_id', $id)->get();
        return view('home.place_detail', ['data' => $data, 'dataList' => $dataList, 'comments' => $comments]);
    }

    public function getplace(Request $request)
    {
        $search = $request->input('search');
        $count = Content::where('title', 'like', '%' . $search . '%')->get()->count();
        if ($count == 1) {
            $data = Content::where('title', 'like', '%' . $search . '%')->first();
            return redirect()->route('place',['id'=>$data->id]);
        } else {
            return redirect()->route('getplacelist', ['search' => $search]);
        }
    }

    public function getplacelist($search)
    {
        $datalist = Content::where('title', 'like', '%' . $search . '%')->get();

        return view('home.search_places', ['search' => $search, 'datalist' => $datalist]);
    }

    public function placeDetail($id)
    {
        $data = Content::find($id);
        $dataList = Image::where('content_id', $id)->get();
        $comments = Comment::where('content_id', $id)->get();
        return view('home.place_detail', ['data' => $data, 'dataList' => $dataList, 'comments' => $comments]);
    }

    public function categoryplaces($id)
    {
        $datalist = Content::where('category_id', $id)->get();
        $data = Category::find($id);
        return view('home.category_places', ['datalist' => $datalist, 'data' => $data]);
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
        Session::flash('message', 'this is a message');
        return redirect()->route('home_contact')->with('success', 'Mesajınız kaydedilmiştir');
    }

}
