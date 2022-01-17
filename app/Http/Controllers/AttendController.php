<?php

namespace App\Http\Controllers;

use App\Models\Attend;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AttendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = collect([]);
        $dataList = Attend::where('user_id',Auth::id())->get();
        //$contentList=new Content([]);
        foreach ($dataList as $rs){
            $content= Content::where('id',$rs->content_id)->get();
            $collection->add($content->first()->title);
        }
        return view('home.user_attend',['datalist'=>$dataList,'collection'=>$collection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $isExistControl = Attend::where('user_id','=',Auth::id() )->where( 'content_id','=',$id)->count();
        if ($isExistControl>0){
            return redirect()->route('home_placeDetail',$id)->with('error','Bu etkinliğe zaten katıldınız.');
        }else{
            $data=new Attend;
            $data->user_id=Auth::id();
            $data->content_id=$id;
            $data->status='True';
            $data->save();
            return redirect()->route('home_placeDetail',$id)->with('success','Etkinliğe başarılı bir şekilde katıldınız.');
        }

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
     * @param  \App\Models\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function show(Attend $attend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function edit(Attend $attend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attend $attend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attend $attend,$id)
    {
        //
        DB::table('attends')->where('id','=',$id)->delete();
        return redirect()->route('user_attend');
    }
}
