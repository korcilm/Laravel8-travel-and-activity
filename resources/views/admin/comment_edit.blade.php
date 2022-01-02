<link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/themify-icons.css">
<link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/metisMenu.css">
<link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/slicknav.min.css">
<div class="main-content-inner">
    <div class="row">

        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <!-- basic form start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body mx-auto col-8">
                            @include('home.message')
                            <h4 class="header-title text-center">Show Message</h4>
                            <form method="post" action="{{route('admin_comment_update',['id'=>$data->id])}}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="row">{{$data->id}}</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <td>{{$data->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Place</th>
                                            <td>{{$data->content->title}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Comment</th>
                                            <td>{{$data->comment}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">IP</th>
                                            <td>{{$data->IP}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Created Date</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Updated Date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Status</th>
                                            <td>
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Update Comment</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- basic form end -->

            </div>
        </div>
    </div>
</div>
