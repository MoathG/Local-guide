@extends('layouts.app')

@section('content')









    <table class="table table-hover container"  >
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th> Phone</th>
            <th>Description</th>
            <th> Email</th>
            <th> Nationality</th>
            <th> Reservation</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($guide as $feild )
            <tr>


                <td>{{$feild->id}}</td>
                <td>{{$feild->name}}</td>
                <td>{{$feild->phone}}</td>
                <td>{{$feild->certification}}</td>
                <td>{{$feild->email}}</td>
                <td>{{$feild->National_id}}</td>

                <td>
                    <a href="/guide/{{$feild->id}}">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Reservation</button>
                    </a>

                </td>

            </tr>

    @endforeach

 </tbody>
    </table>
@endsection
