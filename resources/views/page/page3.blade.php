@extends('layouts.main')

@section('title', 'Page Title')


@section('content')


<form action="/page9" method="post">


    <select name="select"><br>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>
    <textarea name="area"></textarea><br>
    <input type="submit" value="ส่งค่า">

</form>



    
@endsection