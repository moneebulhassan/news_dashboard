@extends('layouts.app')


@section('content')

<form method="post" action="{{route('forms.update',$computer->id)}}">
    @csrf
    @method('PUT')
    <!-- <h1>{{ $computer->item_name}}</h1/ -->
    <input type="text"  name="item_name" value="{{$computer->Item_Name}}"><br>
    <input type="text"  name="model" value="{{$computer->model}}"> <br><br>
    <input type="text"  name="Serial_Number" value="{{$computer->Serial_Number}}" ><br><br>
    <input type="text"  name="operating_system" value="{{$computer->operating_system}}"  ><br><br>
    <input type="text"  name="type" value="{{$computer->type}}" ><br><br>
    <input type="text"  name="hard_drive" value="{{$computer->hard_drive}}" ><br><br>
    <input type="text"  name="processor" value="{{$computer->processor}}" ><br><br>
    <input type="text"  name="Ram"  value="{{$computer->Ram}}" ><br><br>



    <input type="submit"  value="Update" >


</form>
@endsection
