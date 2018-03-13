@extends('layouts.main')

@section('title', 'Page Title')


@section('content')
<h1 class="page-header">สมัครสมาชิก</h1>
<form action="/form_register_save" method="post">          
         <center>   
                <div class="form-group">
                        <div class="form-group">
                                <label >id</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ใส่ID"style="width:30%"name="ID">
                        </div>

                        <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" class="form-control" placeholder="ชื่อ-สกุล" name="USERNAME" style="width:30%"> 
                        </div>

                        <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"style="width:30%"name="PASSWORD"><br>   
                        </div>

                        <div class="form-group">
                                <label for="name">status</label>
                                <input type="text" class="form-control" placeholder="status" name="STATUS" style="width:30%"> 
                        </div>

                            
                            
                        
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="submit" class="btn btn-warning">Reset</button><br><br>
                            </div>
                        </center>
</form>
    
@endsection