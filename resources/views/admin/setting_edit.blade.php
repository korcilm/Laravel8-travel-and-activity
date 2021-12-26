@extends('layouts.admin')
@section('title','Edit Content')
@section('description')
    Türkiye'nin en iyi aktivite sitesi
@endsection
@section('content')
    <div class="main-content-inner">
        <div class="row">
            <!-- nav tab start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <form method="post" action="{{route('admin_setting_update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="header-title ">Edit Setting</h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="smtp-tab" data-toggle="tab" href="#smtp" role="tab" aria-controls="smtp" aria-selected="false">Smtp Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contactus-tab" data-toggle="tab" href="#contactus" role="tab" aria-controls="contactus" aria-selected="false">Contact Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="refence-tab" data-toggle="tab" href="#refence" role="tab" aria-controls="refence" aria-selected="false">References</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <input type="hidden" class="form-control" value="{{$data->id}}" id="id" name="id" >
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" class="form-control" value="{{$data->title}}"  name="title" >
                                    </div>
                                    <div class="form-group">
                                        <label >Keywords</label>
                                        <input type="text" class="form-control" value="{{$data->keywords}}"  name="keywords" >
                                    </div>
                                    <div class="form-group">
                                        <label >Description</label>
                                        <input type="text" class="form-control" value="{{$data->description}}"  name="description" >
                                    </div>
                                    <div class="form-group">
                                        <label >Company</label>
                                        <input type="text" class="form-control" value="{{$data->company}}"  name="company" >
                                    </div>
                                    <div class="form-group">
                                        <label >Address</label>
                                        <input type="text" class="form-control" value="{{$data->address}}"  name="address" >
                                    </div>
                                    <div class="form-group">
                                        <label >Phone</label>
                                        <input type="number" class="form-control" value="{{$data->phone}}" name="phone" >
                                    </div>
                                    <div class="form-group">
                                        <label >Fax</label>
                                        <input type="text" class="form-control" value="{{$data->fax}}"  name="fax" >
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="text" class="form-control" value="{{$data->email}}" name="email" >
                                    </div>
                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status" value="{{$data->status}}" >
                                            <option selected="selected">{{$data->status}}</option>
                                            @if($data->status=='True')
                                                <option>False</option>
                                            @else
                                                <option>True</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab">
                                    <div class="form-group">
                                        <label >smtpserver</label>
                                        <input type="text" class="form-control" value="{{$data->smtpserver}}" name="smtpserver" >
                                    </div>
                                    <div class="form-group">
                                        <label >smtpemail</label>
                                        <input type="text" class="form-control" value="{{$data->smtpemail}}" name="smtpemail" >
                                    </div>
                                    <div class="form-group">
                                        <label >smtppassword</label>
                                        <input type="password" class="form-control" value="{{$data->smtppassword}}" name="smtppassword" >
                                    </div>
                                    <div class="form-group">
                                        <label >smtpport</label>
                                        <input type="number" class="form-control" value="{{$data->smtpport}}" name="smtpport" >
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                    <div class="form-group">
                                        <label >Facebook</label>
                                        <input type="text" class="form-control" value="{{$data->facebook}}" name="facebook" >
                                    </div>
                                    <div class="form-group">
                                        <label >Instagram</label>
                                        <input type="text" class="form-control" value="{{$data->instagram}}" name="instagram" >
                                    </div>
                                    <div class="form-group">
                                        <label >Twitter</label>
                                        <input type="text" class="form-control" value="{{$data->twitter}}" name="twitter" >
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <div class="form-group">
                                        <label >About Us</label>
                                        <textarea name="aboutus" id="aboutus" class="form-control" cols="30" rows="10">{{$data->aboutus}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contactus" role="tabpanel" aria-labelledby="contactus-tab">
                                    <div class="form-group">
                                        <label >Contact</label>
                                        <textarea name="contact" id="contact" class="form-control" cols="30" rows="10">{{$data->contact}}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="refence" role="tabpanel" aria-labelledby="refence-tab">
                                    <div class="form-group">
                                        <label >References</label>
                                        <textarea name="references" id="references" class="form-control" cols="30" rows="10">{{$data->references}}</textarea>
                                    </div>
                                </div>
                                <script>
                                    CKEDITOR.replace( 'references' );
                                    CKEDITOR.replace( 'contact' );
                                    CKEDITOR.replace( 'aboutus' );
                                </script>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4 pr-4 pl-4">Update Setting</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
