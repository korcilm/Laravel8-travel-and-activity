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
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="row">{{$data->id}}</th>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <td>{{$data->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Email</th>
                                                                <td>{{$data->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Roles</th>
                                                                <td>
                                                                    <table>
                                                                        @foreach($data->roles as $row)
                                                                            <tr>
                                                                               <td>{{$row->name}}</td>
                                                                               <td>
                                                                                   <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete ! Are you sure?')" ><i class="fa fa-trash text-danger"></i></a>
                                                                               </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Add Role</th>
                                                                <td>
                                                                    <form action="{{route('admin_user_roles_add', ['id'=>$data->id])}}" method="post" >
                                                                        @csrf
                                                                        <select name="roleid">
                                                                            @foreach($datalist as $rs)
                                                                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <button type="submit" class="btn btn-primary">Add Role</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        </thead>

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
