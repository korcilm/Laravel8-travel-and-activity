@extends('layouts.home')

@section('content')
    <div class="container py-5" style="max-width: 1600px;">
        <div class="row">
           @include('home.user_menu')
            <div class="col-md-10 ">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8"><h4 class="header-title">Katıldığım Etkinlikler</h4></div>


                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @php
                                       $counter=0;
                                   @endphp
                                   @foreach($datalist as $rs)
                                            <tr>
                                                <th scope="row">{{$rs->id}}</th>
                                                <td>{{$collection[$counter++]}} </td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li><a href="{{route('user_attend_delete',['id'=>$rs->id])}}"
                                                               onclick="return confirm('Delete ! Are you sure?')"
                                                               class="text-danger"><i class="ti-trash "></i></a></li>
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
        </div>
    </div>

@endsection
