<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets')}}/admin/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/typography.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/default-css.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/styles.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{asset('assets')}}/admin/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

</head>

<body>

    <div class="main-content-inner">
        <div class="row">

            <div class="col-lg-12 col-ml-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body mx-auto col-8">
                                <h4 class="header-title text-center">Content Title : {{$data->title}}</h4>
                                <form method="post" action="{{route('admin_image_create',['content_id'=>$data->id])}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" class="form-control" name="title" >
                                    </div>

                                    <div class="form-group">
                                        <label >Image</label>
                                        <input type="file" class="form-control" name="image" >
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Add Image</button>
                                </form>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body popup_box">
                                <!-- Progress Table start -->
                                <div class="col-12 mt-5">
                                    <div class="card " style="box-shadow: 0.5rem 0.5rem black, -0.5rem -0.5rem #ccc;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8"><h4 class="header-title">Image List</h4></div>
                                            </div>
                                            <div class="single-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover progress-table text-center">
                                                        <thead class="text-uppercase">
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($images as $rs)
                                                            <tr>
                                                                <th scope="row">{{$rs->id}}</th>
                                                                <td>{{$rs->title}}</td>
                                                               <td>
                                                                    @if($rs->image)
                                                                        <img src="{{Storage::url($rs->image) }}" height="70" width="70" alt="">
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <ul class="d-flex justify-content-center">
                                                                         <li><a href="{{route('admin_image_delete',['id'=>$rs->id,'content_id'=>$data->id])}}" onclick="return confirm('Delete ! Are you sure?')" class="text-danger"><i class="ti-trash "></i></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Progress Table end -->

                            </div>
                        </div>
                    </div>
                    <!-- basic form end -->

                </div>
            </div>
        </div>
    </div>


</body>
