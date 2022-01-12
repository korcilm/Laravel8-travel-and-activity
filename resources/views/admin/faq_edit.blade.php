@extends('layouts.admin')
@section('title','Edit Content')
@section('description')
    Türkiye'nin en iyi aktivite sitesi
@endsection
@section('content')
    <div class="main-content-inner">
        <div class="row">

            <div class="col-lg-12 col-ml-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body mx-auto col-8">
                                <h4 class="header-title text-center">Edit Faq</h4>
                                <form method="post" action="{{route('admin_faq_update',['id'=>$data->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label >Question</label>
                                        <input type="text" class="form-control" value="{{$data->question}}" name="question" >
                                    </div>
                                    <div class="form-group">
                                        <label >Answer</label>
                                        <textarea name="answer" id="editor" class="form-control" cols="30" rows="10">{{$data->answer}}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor' );
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status" value="{{$data->status}}" >
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Update Faq</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- basic form end -->

                </div>
            </div>
        </div>
    </div>

@endsection
