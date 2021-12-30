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
                            <form method="post" action="{{route('admin_message_update',['id'=>$data->id])}}"
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
                                            <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Phone</th>
                                            <td>{{$data->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Subject</th>
                                            <td>{{$data->subject}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Message</th>
                                            <td>{{$data->message}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Admin Note</th>
                                            <td>
                                                <textarea name="note" id="editor" class="form-control" cols="30" rows="5">{{$data->note}}</textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Update Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- basic form end -->

            </div>
        </div>
    </div>
</div>
