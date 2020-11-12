@extends('layouts.user-master-layout');
@section('page-title','UserProfile')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginForm_css/user_login.css')}}">
    <script src="{{asset('js/user_login.js')}}"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.css">

    <!-- partial -->
    <div class="main-panel">
        <div class="container">
            <div class="row">

                {{--Profile Image--}}
                <div class="col-md-3 grid-margin stretch-card">
                    @if(empty(\Illuminate\Support\Facades\Auth::guard('customer')->user()->avatar))
                        <img src="{{asset('img/avatar/avatar_2x.jpg')}}" class="avatar rounded-circle p-1 img-thumbnail" alt="avatar" width="200" height="200">
                    @else
                        <img src="{{asset('img/avatar')}}/{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->avatar}}" class="avatar rounded-circle p-1 img-thumbnail" alt="avatar" width="200" height="200">
                    @endif
                    <form action="{{route('profile.avatar')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <div class="card">
                            <div class="card-header">Change Your Avatar</div>
                            <div class="card-body">
                                <input type="file" name="avatar" class="form-control">
                                <br>
                                <button class="btn btn-primary">Update</button>
                            </div>

                        </div>
                    </form>
                </div>

                {{--Update Profile--}}
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header" >Update Your Information</div>
                        <form action="{{route('profile.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <textarea class="form-control" name="full_name" rows="1" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <textarea class="form-control" name="phone" rows="1" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="address" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success">Update</button>
                                </div>
                            </div>
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>

                {{--Profile Header--}}
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title font-weight-light text-primary">Điểm tích luỹ: <span class="header-cart-item-txt text-danger font-weight-bold ">{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->point}}</span> <i class ="fa fa-usd text-danger" aria-hidden="true"></i></p>
                            <span class="card-description">( 1$ ~ 1.000 VND ) </span>
                            <hr>
                            <p class="card-description">User Information</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Full Name:</span><span class="about-item-detail">{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->full_name}}</span></li>
                                <li class="about-items"><i class="mdi mdi-mail-ru icon-sm "></i><span class="about-item-name">username:</span><span class="about-item-detail">{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->username}}</span> </li>
                            </ul>

                            <p class="card-description">Contact Information</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span class="about-item-name">Phone:</span><span class="about-item-detail">{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->phone}}</span></li>
                                <li class="about-items"><i class="mdi mdi-map-marker icon-sm "></i><span class="about-item-name">Address:</span><span class="about-item-detail">{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->address}}</span></li>
                                <li class="about-items"><i class="mdi mdi-email-outline icon-sm "></i><span class="about-item-name">Email:</span><span class="about-item-detail"><a href="">{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->email}}</a></span></li>
                            </ul>
                            <p class="card-description">Basic Information</p>
                            <ul class="about">
                                <li class="about-items"><i class="mdi mdi-cake icon-sm "></i><span class="about-item-name">Birthday:</span><span class="about-item-detail">{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->DOB}}</span></li>
                                @if(\Illuminate\Support\Facades\Auth::guard('customer')->user()->gender == 1)
                                    <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Gender:</span><span class="about-item-detail">Nữ</span></li>
                                @else
                                    <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Gender:</span><span class="about-item-detail">Nam</span></li>
                                @endif
                                <li class="about-items"><i class="mdi mdi-clipboard-account icon-sm "></i><span class="about-item-name">Member Since:</span><span class="about-item-detail">{{\Illuminate\Support\Facades\Auth::guard('customer')->user()->created_at->diffForHumans()}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection