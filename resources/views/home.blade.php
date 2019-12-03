@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
      @foreach($places as $place)
          <div class="card col-4 offset-1" style="width: 18rem;">
              <img src="{{ $place->photo  }}" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">{{ $place->name  }}</h5>
                  <p class="card-text">{{ $place->description  }}</p>
                  <a href="/place/{{$place->id}}" class="btn btn-primary">ask for a guide</a>
                  <a href="{{ $place->location  }}" target="_blank" class="btn btn-success  float-right">see the location</a>
              </div>
          </div>
      @endforeach
  </div>
</div>

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Dashboard</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    You are logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
