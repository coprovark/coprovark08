@extends('layouts.main')

@section('content')
            <h1 class="page-header">เข้าสู่ระบบ</h1>
            <form action="/page" method="post">
                <!-- User -->
            <center>    <div class="form-group" >
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="user"style="width:30%" >
                </div>
                <!-- Password -->
                <div class="form-group" >
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password"style="width:30%" >
                </div>

                <button type="submit" class="btn btn-info">เข้าสู่ระบบ</button>
                <a href="/form_register">
                    <button type="button" class="btn btn-warning">สมัครสมาชิก</button>
            </center>    </a>
            </form>

            <center>     
                <h3>ข้อมูลที่เซ็ตไว้</h3>
                    Username = admin<br>
                    Password = 0<br>
                    <br>
                <h3>ข้อมูลที่รับมา</h3>
                    Username = {{$USER}}<br>
                    Password = {{$PASSWORD}}<br>
                    <br>
                <h2>
                    <?php
                        if($USER=='admin' && $PASSWORD=='0'){
                            echo "เข้าสู้ระบบสำเร็จ";
                        }else{
                            echo "กรุณาเข้าสู่ระบบใหม่<br>ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
                        }
                    ?>
          </h2> </center>     

@endsection