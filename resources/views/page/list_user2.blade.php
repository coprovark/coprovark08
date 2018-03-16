@extends('layouts.main2')

@section('title', 'Page Title')


@section('content')

<div class="bobby">

<h1>ตารางแสดงข้อมูลสมาชิก</h1>
<hr>
<form action="/list_users_find2" method="post" class="form-inline">

<a type="submit" class="btn btn-info button2" href="/form_register2">เพิ่มข้อมูล</a>
    <div style="float:right">
        <div class="form-group">
            <input type="text" name="find" class="form-control" value="{{ $find }}" placeholder="ค้นหาเฉพาะ ID น่ะจ๊ะ">
        </div>
        <button type="submit" class="btn btn-warning button2">ค้นหา</button>
    </div>

</form><br>

<div class="datagrid"><table style="text-align:center;" >
<thead>  <tr>
        <th style="width:10%;text-align:center;" >ลำดับที่</th>
        <th style="width:15%;text-align:center;">รหัสนักศึกษา</th>
        <th style="width:30%;text-align:center;">ชื่อ-นามสกุล</th>
        <th style="width:15%;text-align:center;">วัน เดือน ปีเกิด</th> 
        <th style="width:10%;text-align:center;">สังกัดคณะ</th>
        <th style="width:25%;text-align:center;">ดำเนินการ</th>
       
</tr></thead>
    @foreach($data_list as $item)
  <tbody>  <tr >
        <td>{{$item -> id}}</td>
        <td>{{$item -> sid}}</td>
        <td>{{$item -> fullName}}</td>
        <td>{{$item -> birthDay}}</td>
        <td>{{$item -> facultyID}}</td>
        <td><button class="btn btn-danger btn-xs button2" onclick="return _confirm('{{ $item->id }}')">
        <span class="glyphicon glyphicon-remove "></span>ลบรายการ </button>
        <a type="button" href="#" class="btn btn-warning btn-xs button2">แก้ไขข้อมูล</a></td>
        
</tr>
</tbody>
    @endforeach
</table></div>


<!-- ลบข้อมูล -->
<script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_user/'+id;
        }
    }
</script>
@endsection
