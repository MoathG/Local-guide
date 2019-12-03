
@extends('layouts.app')

@section('content')



@if(count($info)>0)

    <table class="table table-hover container"  >
        <thead class="thead-dark">
        <tr>
            <th>Tuorist Name</th>
             <th>Tuorist Phone</th>
            <th>Tuorist Country</th>
            <th>From</th>
            <th> To </th>

        </tr>
        </thead>
        <tbody>

        @foreach ($info as $feild )
            <tr>


                <td>{{$feild->user['name']}}</td>
                <td>{{$feild->user['phone']}}</td>
                <td>{{$feild->user['country']}}</td>
                <td>{{$feild->from}}</td>
                <td>{{$feild->to}}</td>
                <td>{{$feild->National_id}}</td>



</tr>

    @endforeach

        </tbody>
    </table>

@else
<h1>NO Reservation</h1>
@endif



@endsection








