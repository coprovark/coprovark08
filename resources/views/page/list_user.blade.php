@extends('layouts.main')

@section('title', 'Page Title')


@section('content')
<h1>list_User<h1>
<hr>

<table class="table">
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>pasword</td>
        <td>satatus</td>
    <tr>
    @foreach($data_list as $item)
    <tr>
        <td>{{$item -> id}}</td>
        <td>{{$item -> username}}</td>
        <td>{{$item -> password}}</td>
        <td>{{$item -> status}}</td>
    <tr>
    @endforeach
</table>

@endsection