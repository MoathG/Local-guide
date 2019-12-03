@extends('layouts.app')

@section('content')




    <div class="card text card border-success mb-3" style="margin-left: 50px; margin-right: 50px">
        <div class="card-header border-success ">
            Reservation Information
        </div>
        <div class="card-body">
            <h5 class="card-title">Date</h5>
            <p class="card-text">From {{$from}} To {{$to}}</p>
             <h5 class="card-title">Days</h5>
            <p class="card-text"> {{$days}}</p>
              <h5 class="card-title">Payment</h5>
            <p class="card-text"> ${{100*$days}} </p>


        </div>
 <div class="card-footer text-center">
     100 Dollar Per Day
  </div>
    </div>



    <div class="card text card border-success mb-3" style="margin-left: 50px; margin-right: 50px">
        <div class="card-header border-success ">
            Guide & Place Information
        </div>
        <div class="card-body">
            <h5 class="card-title">Name</h5>
            <p class="card-text"> {{$guides[0]->name}}</p>
             <h5 class="card-title">Nationality</h5>
            <p class="card-text"> {{$guides[0]->National_id}}</p>
              <h5 class="card-title">Description</h5>
            <p class="card-text">{{$guides[0]->certification}} </p>
               <h5 class="card-title">Place</h5>
            <p class="card-text">{{$guides[0]->place['name']}} </p>


        </div>

    </div>





    <div class="card text card border-success mb-3" style="margin-left: 50px; margin-right: 50px">
        <div class="card-header border-success ">
            Payment Information
        </div>
 <div class="card-body">
 <h5 class="card-title">Card Number</h5>
     <input class="form-control"  type="number" name="" aria-label="Search">
 </div>
 <div class="card-body">
 <h5 class="card-title">Name on Card </h5>
     <input class="form-control"  type="string" name="" aria-label="Search">
 </div>

<br>

                <form method="post" action="/Conformation/{{$guides[0]->id}}/{{$from}}/{{$to}}">
@csrf
                    <button class="btn btn-outline-success my-2 my-sm-0" style="margin-left: 10px" type="submit">Pay  <span class='amount'>${{100*$days}}</span> </button>

                </form>

<br>
    </div>






@endsection
