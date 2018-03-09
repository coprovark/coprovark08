@extends('layouts.main')

@section('title', 'Page Title')


@section('content')


<form action="/page" method="post">


    <input type="text" name="name"><br>

    
     <input type="checkbox" name="checkbox" value="10">10 บาท <br> 
    <input type="checkbox" name="checkbox" value="20">20 บาท <br> 

    รหัสผ่าน<br>
    <input type="password" name="password"> <br>
    
     <input type="radio" name="radio" value="หญิง">หญิง <br>
     <input type="radio" name="radio" value="=ชาย">ชาย <br>

    <input type="hidden" name="hidden" value="59122420226"><br>

    <input type="submit" name="ส่งค่า">

</form>

<h2>แสดงค่า</h2>

ชื่อ = {{ $NAME}} <br>
A = {{ $A}} <br>
เพศ = {{ $B}} <br>
รหัส = {{ $GEN}} <br>
pass = {{$ID}}<br>



    
@endsection