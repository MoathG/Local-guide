@extends('layouts.app')

@section('content')


<div class=" container " >
<div class="border border-dark " style="height: 800px ;width:1000px">




    <form method="post" enctype="multipart/form-data" action="/userinfo/{{$info->id}}">
        @csrf
        {{method_field('PATCH')}}
        <div class="form-group">
            <br>
            <label>name</label>
            <input name="name" value={{$info->name}} type="text" class="form-control">

        </div>
{{--        <div   class="form-group">--}}
{{--            <label for="exampleInputPassword1">Password</label>--}}
            <input hidden name="password" value={{$info->password}} type="password" class="form-control">
{{--        </div>--}}
        <br>

        <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input name="email" value={{$info->email}} type="text" class="form-control">

        </div>
        <br>

        <div class="form-group">
            <label for="exampleInputEmail1">phone</label>
            <input name="phone" value={{$info->phone}} type="text" class="form-control">

        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">country</label>
            <input name="country" value={{$info->country}} type="text" class="form-control">

        </div>
        <br>

        <div class="form-group">
 <label for="exampleInputEmail1">Gender</label>
        <select name="Gender" class="form-control" id="exampleFormControlSelect1">

            @if($info['Gender']==='male')
                <option value="male" selected>male</option>
                <option value="female"> female</option>
            @else
                <option value='male'>male</option>
                <option value="female" selected>female</option>
            @endif


        </select>
 </div>
        <br>

        <div class="form-group">
            <label for="exampleInputEmail1">Profile picture</label>
            <br>
            <input name="Photo" type="file" >

        </div>
        <br>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </form>



</div>

</div>




@endsection
