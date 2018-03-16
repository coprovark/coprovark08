@extends('layouts.main2')

@section('content')
        <form action="/form_login2" method="post" style="font-size : 15px">
            <h1>เข้าสู่ระบบ</h1><hr>
            <center>
             <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" style="width : 300px" placeholder="Username">
                <label>Password</label>
                <input type="password" name="password" class="form-control" style="width : 300px" placeholder="Password">
            </div>
                <button type="submit" class="btn btn-info">เข้าสู่ระบบ</button>
                <a type="button" href="/form_register2" class="btn btn-warning">สมัครสมาชิก</a>
                            
                            
            </center>                 
</form>

<hr>

<h1>username = {{ $username }}<br>
ID={{$name}}
</h1>
@endsection
