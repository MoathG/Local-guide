@extends('layouts.app')

@section('content')
{{--    Email :{{$info->email}}</h3>--}}
    {{--                    <h3 class="card-body">Phone:{{$info->phone}}</h3>--}}
    {{--                    <h3 class="card-body">Country:{{$info->country}}</h3>--}}
    {{--                    <h3 class="card-body">Gender:{{$info->Gender}}</h3>--}}
    {{--                    <form method="post" action="/Userinfo/{{$info->id}}">--}}

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <div style="width: 100vw; height: 100vh;">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="well profile">
                    <h2><strong> {{$info->name}}  Information </strong> </h2>
                    <br>
                    <div class="col-sm-12">
                        <br>
                        <div class="col-xs-12 col-sm-8">

                            <h3><strong>Phone: </strong> {{$info->phone}} </h3>
                            <h3><strong>E-mail: </strong>{{$info->email}}</h3>
                            <h3><strong>Country: </strong> {{$info->country}} </h3>
                            <h3><strong>Gender: </strong>{{$info->Gender}}</h3>

{{--                            <p><strong>Gender: </strong>{{$info->Gender}}</p>--}}
                        </div>
                        <div class="col-xs-10 col-sm-4 " style="margin-top:50px;">
                            <figure>
                                <img src="{{asset('storage').'/'.Auth::user()->Photo}}" alt="" class="img-circle img-responsive">
{{--                                <figcaption class="ratings">--}}
{{--                                    <p>Ratings--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="fa fa-star"></span>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="fa fa-star"></span>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="fa fa-star"></span>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="fa fa-star"></span>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <span class="fa fa-star-o"></span>--}}
{{--                                        </a>--}}
{{--                                    </p>--}}
{{--                                </figcaption>--}}
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-12 divider text-center">
{{--                        <div class="col-xs-12 col-sm-4 emphasis">--}}
{{--                            <h2><strong> 20,7K </strong></h2>--}}
{{--                            <p><small>Followers</small></p>--}}
{{--                            <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>--}}
{{--                        </div>--}}
                        <div class="col-xs-12 col-sm-4 emphasis">
{{--                            <h2><strong>245</strong></h2>--}}
{{--                            <p><small>Following</small></p>--}}
                            <form method="post" action="/Userinfo/{{$info->id}}">
                                @csrf
{{--                                <button ><span class="fa fa-user"></span> Edit Profile </button>--}}
                                <button class="btn btn-info btn-block"><span class="fa fa-user"></span> Edit Profile </button>
                            </form>

                        </div>
{{--                        <div class="col-xs-12 col-sm-4 emphasis">--}}
{{--                            <h2><strong>43</strong></h2>--}}
{{--                            <p><small>Snippets</small></p>--}}
{{--                            <div class="btn-group dropup btn-block">--}}
{{--                                <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>--}}
{{--                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
{{--                                    <span class="caret"></span>--}}
{{--                                    <span class="sr-only">Toggle Dropdown</span>--}}
{{--                                </button>--}}
{{--                                <ul class="dropdown-menu text-left" role="menu">--}}
{{--                                    <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>--}}
{{--                                    <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>--}}
{{--                                    <li class="divider"></li>--}}
{{--                                    <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>--}}
{{--                                    <li class="divider"></li>--}}
{{--                                    <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--    <div class="container">--}}
{{--        <div class="row">--}}



{{--            <div  >--}}
{{--                <div >--}}
{{--                    <h3><strong>{{$info->name}}</strong> Information</h3></div>--}}

{{--                <img src="{{asset('storage').'/'.Auth::user()->Photo}}"--}}
{{--                     style=" " class="card-img-top w-50" alt="..."/>--}}


{{--                <div  >--}}
{{--                    <br>--}}
{{--                    <h3 class="card-title">Email :{{$info->email}}</h3>--}}
{{--                    <h3 class="card-body">Phone:{{$info->phone}}</h3>--}}
{{--                    <h3 class="card-body">Country:{{$info->country}}</h3>--}}
{{--                    <h3 class="card-body">Gender:{{$info->Gender}}</h3>--}}
{{--                    <form method="post" action="/Userinfo/{{$info->id}}">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class=" btn-primary w-25">Edit</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}


@endsection

