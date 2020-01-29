
@extends('layouts.admin')

@section('content')

<form method="post" action="{{route('forms.store')}}">
    @csrf
    <input type="text"  name="item_name"  placeholder="Enter Item name"><br>
    <input type="text"  name="model"  placeholder="Enter model" ><br><br>
    <input type="text"  name="Serial_Number"  placeholder="Enter Serial number" ><br><br>
    <input type="text"  name="operating_system"  placeholder="Enter operating system" ><br><br>
    <input type="text"  name="type"  placeholder="Enter type" ><br><br>
    <input type="text"  name="hard_drive"  placeholder="Enter hard drive" ><br><br>
    <input type="text"  name="processor"  placeholder="Enter processor" ><br><br>
    <input type="text"  name="Ram"  placeholder="Enter Ram" ><br><br>



    <input type="submit"  value="submit" >


</form>
@endsection
