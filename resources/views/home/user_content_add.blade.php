@extends('layouts.home')

@section('content')
    <div class="container py-5" style="max-width: 1600px;">
        <div class="row">
            <div class="col-md-2">
                <div class="card bg-light">
                    <a href="/"
                       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <h3 class="p-2">Profil</h3>
                    </a>

                    <ul class="text-white list-group">
                        <li class=" list-group-item ">
                            <a href="{{route('myprofile')}}"  aria-current="page">
                                <i class="fa fa-user-circle mr-2"></i>
                                Profilim
                            </a>
                        </li>
                        <li class="list-group-item ">
                            <a href="{{route('mycomments')}}" >
                                <i class="fa fa-comment mr-2"></i>
                                Yorumlarım
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="{{route('user_content')}}" class=" text-white" >
                                <i class="fa fa-comment mr-2"></i>
                                İçeriklerim
                            </a>
                        </li>
                        <li class="list-group-item text-white">
                            <a href="{{route('logout')}}" class="link-dark">
                                <i class="fa fa-sign-out mr-2"></i>
                                Çıkış Yap
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-10 ">
                    <div class="card ">
                        <div class="card-body">
                            <h4 class="header-title text-center">Add Content</h4>
                            <form method="post" action="{{route('user_content_create')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group ">
                                    <label >Categories</label><br>
                                    <select class="form-control " name="category_id" >
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="form-group mt-2">
                                    <label >Type</label>
                                    <input type="text" class="form-control" name="type" >
                                </div>
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" class="form-control" name="title" >
                                </div>
                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" class="form-control" name="keywords" >
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" class="form-control" name="description" >
                                </div>
                                <div class="form-group">
                                    <label >Image</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>
                                <div class="form-group">
                                    <label >City</label>
                                    <input type="text" class="form-control" name="city" >
                                </div>
                                <div class="form-group">
                                    <label >Country</label>
                                    <input type="text" class="form-control" name="country" >
                                </div>
                                <div class="form-group">
                                    <label >Location</label>
                                    <input type="text" class="form-control" name="location" >
                                </div>
                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea name="detail" id="editor" class="form-control" cols="30" rows="10"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'editor' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="form-control" name="status">
                                        <option selected="selected">False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Add Content</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
