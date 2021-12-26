<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$dataList=DB::select('select * from contents');
        $dataList = Content::all();
        return view('admin.content',['datalist'=>$dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        $dataList=Category::with('children')->get();
        return view('admin.content_add',['datalist'=>$dataList]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        DB::table('contents')->insert([
            'type'=>$request->input('type'),
            'title'=>$request->input('title'),
            'keywords'=>$request->input('keywords'),
            'description'=>$request->input('description'),
            'image'=>Storage::putFile('images',$request->file('image')),
            'city'=>$request->input('city'),
            'country'=>$request->input('country'),
            'location'=>$request->input('location'),
            'detail'=>$request->input('detail'),
            'user_id'=>Auth::id(),
            'status'=>$request->input('status'),
        ]);
        return redirect()->route('admin_content');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content,$id)
    {
        //
        $data=Content::find($id);
        $dataList=Category::with('children')->get();
        return view('admin.content_edit',['data'=>$data],['datalist'=>$dataList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content,$id)
    {
        //
        $data=Content::find($id);
        $data->type=$request->input('type');
        $data->title=$request->input('title');
        $data->keywords=$request->input('keywords');
        $data->description=$request->input('description');
        $data->city=$request->input('city');
        $data->country=$request->input('country');
        $data->location=$request->input('location');
        $data->detail=$request->input('detail');
        $data->user_id=Auth::id();
        $data->category_id=$request->input('category_id');
        $data->status=$request->input('status');
        if ($request->file('image')!=null){
            $data->image=Storage::putFile('images',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content,$id)
    {
        //
        DB::table('contents')->where('id','=',$id)->delete();
        return redirect()->route('admin_content');
    }
}
