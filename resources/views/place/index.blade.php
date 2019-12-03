@extends('layouts.app')

@section('content')
    {{--    <div class="container">--}}



    {{--  <form method="post" action="{{route('filter',$place[0]->id)}}">--}}
    {{--                        @csrf--}}
    {{--                        <select class="btn btn-success" name="language_id" >--}}
    {{--                            <option value="1"> Arabic</option>--}}
    {{--                            <option value="2">English</option>--}}
    {{--                            <option value="3">French</option>--}}

    {{--                        </select>--}}


    {{--                        from--}}
    {{--                        <input type="date"  name="from">--}}

    {{--                        to--}}
    {{--                        <input type="date"  name="to">--}}
    {{--                        <button  class="btn-info" type="submit">search</button>--}}
    {{--                    </form>--}}

    {{--<br>--}}
    {{--  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSrEl2aUmGPv2IzHJ5aDUiGm-o1IRk4T9gO2ZSJNGk2Okbd0Oij" class="card-img-top" style="width: 900px"  alt="...">--}}
    {{--  <div class="card-body">--}}
    {{--    <h1 class="card-title">{{$place[0]->name}}</h1>--}}
    {{--    <p class="card-text">{{$place[0]->description}}</p>--}}

    {{--  </div>--}}
    {{--</div>--}}



    {{--                    {{$availble}}--}}
    {{--                    @if(isset($availble))--}}
    {{--                            {{dd($request['to'])}}--}}
    {{--                        @if(count($availble)>0)--}}
    {{--{{$x=$availble->guide}}--}}
    {{--                        <h1>{{$x}}</h1>--}}
    {{--             @foreach($availble as $data)--}}
    {{--                                @foreach($data->guide as $one)--}}
    {{--                 <h1>{{$one->name}}</h1>--}}
    {{--                                <form method="get" action="/Reservation/{{$one->id}}/{{$place[0]->id}}/{{$request['from']}}/{{$request['to']}}" >--}}
    {{--                                    @csrf--}}

    {{--                                  <button type="submit">Book</button>--}}
    {{--                                </form>--}}
    {{--                                    @endforeach--}}
    {{--                 <button type="submit">Book</button>--}}
    {{--                            @endforeach--}}



    {{--@else--}}
    {{--                            <h1>no reservation </h1>--}}
    {{--                        @endif--}}
    {{--                    @endif--}}



    {{--                </div>--}}
    {{--</div>--}}
    {{--</div>--}}





    {{--<div class="container">--}}




    {{--                            <div >--}}

    {{--                                <div class="card-body">--}}
    {{--                                    <form method="post" action="{{route('filter',$place[0]->id)}}">--}}
    {{--                                        @csrf--}}
    {{--                                        <select class="btn btn-success" name="language_id" >--}}
    {{--                                            <option value="1"> Arabic</option>--}}
    {{--                                            <option value="2">English</option>--}}
    {{--                                            <option value="3">French</option>--}}

    {{--                                        </select>--}}


    {{--                                        from--}}
    {{--                                        <input type="date"  name="from">--}}

    {{--                                        to--}}
    {{--                                        <input type="date"  name="to">--}}
    {{--                                        <button  class="btn-info" type="submit">search</button>--}}
    {{--                                    </form>--}}

    {{--                                    <h3 class="card-title">{{$place[0]->name}}</h3>--}}
    {{--                                    <p class="card-text"> {{$place[0]->description}}</p>--}}

    {{--                                </div>--}}
    {{--                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSrEl2aUmGPv2IzHJ5aDUiGm-o1IRk4T9gO2ZSJNGk2Okbd0Oij" class="card-img-top" style="width: 1000px;" alt="...">--}}

    {{--                            </div>--}}

    {{--</div>--}}


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container ">
        <div class="row pt-1 pb-1">
            <div class="col-lg-12">

                <img src="{{$place[0]->photo}}" class="d-block w-50 mx-auto" alt="...">
                <br>
                <h4 class="text-center">{{$place[0]->name}}</h4>

                <h6 class="text-center">{{$place[0]->description}}</h6>
            </div>
        </div>
    </div>
    {{--<section>--}}
    {{--    <div id="carouselExampleFade"  data-ride="carousel">--}}
    {{--        <div class="carousel-inner">--}}

    {{--            <div class="carousel-item">--}}
    {{--            </div>--}}
    {{--            <!--https://upload.wikimedia.org/wikipedia/commons/8/8d/Yarra_Night_Panorama%2C_Melbourne_-_Feb_2005.jpg-->--}}
    {{--        </div>--}}
    {{--        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">--}}
    {{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--            <span class="sr-only">Previous</span>--}}
    {{--        </a>--}}
    {{--        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">--}}
    {{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--            <span class="sr-only">Next</span>--}}
    {{--        </a>--}}
    {{--    </div>--}}
    {{--</section>--}}


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <div class="card">

                </div>
                <br>
                Search for Guide
                <br><br>
                <form method="post" action="{{route('filter',$place[0]->id)}}">
                    @csrf
                    <label for="exampleInputPassword1">Language</label>
                    <select class="form-control mr-sm-2" name="language_id">
                        <option value="1"> Arabic</option>
                        <option value="2">English</option>
                        <option value="3">French</option>
                    </select>

                    <div class="form-group">
                        <label for="exampleInputPassword1">from</label>
                        <input class="form-control mr-sm-2" type="date" name="from" aria-label="Search">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">to</label>
                        <input class="form-control mr-sm-2" type="date" name="to" aria-label="Search">
                    </div>


                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>
        </div>
    </div>
    <br>
    @if(isset($availble))

        @if(count($availble)>0)
            <div class="container">
                <div class="row justify-content">
                    <div class="col-md-10" style="display: flex">
                        @foreach($availble as $data)

                            @foreach($data->guide as $one)

                                <br>


                                <div class="card col-6 offset-1" style="width: 18rem;">
                                    <img src="{{ $one->Photo  }}" style="width:300px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $one->name  }}</h5>
                                        <p class="card-text">{{ $one->certification }}</p>
                                        <p class="card-text">{{ $one->email }}</p>
                                        <p>&#11088; &#11088;&#11088; &#11088;</p>


                                        <form method="get"
                                              action="/Reservation/{{$one->id}}/{{$place[0]->id}}/{{$request['from']}}/{{$request['to']}}">
                                            @csrf
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Book
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                        @else
                            <h1>no reservation </h1>
        @endif
    @endif
@endsection
