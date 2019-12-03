
@extends('layouts.app')

@section('content')


             @foreach($info as $data)

      <div class="container">
        <div class="row justify-content">
            <div class="col-md-10 " >
        <div class="card-header border-success ">
           Reservation Information

        <div class="card-body">
            <h5 class="card-title">Date</h5>
            <p class="card-text"> {{$data->to}} Until {{$data->from}}</p>
             <h5 class="card-title">Guide Name</h5>
            <p class="card-text"> {{$data->guide['name']}}</p>
              <h5 class="card-title">Guide Phone</h5>
            <p class="card-text">{{$data->guide['phone']}} </p>
             <h5 class="card-title">Place</h5>
            <p class="card-text">{{$data->guide['place']['name']}} </p>
             <h5 class="card-title">Location</h5>
            <button class="btn btn-outline-success my-2 my-sm-0"><a href="{{$data->place['location']}}">{{$data->guide['place']['name']}}</a> </button>


        </div>

    </div>


</div>

  </div></div>

<br>

                            @endforeach







@endsection
