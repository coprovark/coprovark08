@extends('layouts.main')

@section('title', 'Page Title')


@section('content')



<h1>list_User</h1>
<hr>
<form action="/list_users_find" method="post" class="form-inline">

<a type="submit" class="btn btn-info" href="/form_register">เพิ่มข้อมูล</a>
    <div style="float:right">
        <div class="form-group">
            <input type="text" name="find" class="form-control" value="{{ $find }}" placeholder="ค้นหา....">
        </div>
        <button type="submit" class="btn btn-warning">ค้นหา</button>
    </div>

</form><br>
<table class="table table-bordered" style="text-align:center;" >
    <tr>
        <th >ID</th>
        <th >Username</th>
        <th>password</th>
        <th>status</th> 
        <th>ลบข้อมูล</th>
        <th>แก้ไขข้อมูล</th>
       
</tr>
    @foreach($data_list as $item)
    <tr>
        <td>{{$item -> id}}</td>
        <td>{{$item -> username}}</td>
        <td>{{$item -> password}}</td>
        <td>{{$item -> status}}</td>
        <td><button class="btn btn-danger btn-xs" onclick="return _confirm('{{ $item->id }}')">
            <span class="glyphicon glyphicon-remove"></span>ลบรายการ </button></td>
        <td><a type="button" href="#" class="btn btn-warning">แก้ไขข้อมูล</a></td>
</tr>
    @endforeach
</table>




<!-- ลบข้อมูล -->
<script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_user/'+id;
        }
    }
</script>
@endsection
