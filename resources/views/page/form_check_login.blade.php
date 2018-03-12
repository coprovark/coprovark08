

            <form action="/form_check_login" method="post">
                <!-- User -->
            <center>    <div class="form-group" >
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="username" name="username"style="width:30%" >
                </div>
                <!-- Password -->
                <div class="form-group" >
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="password" name="password"style="width:30%" >
                </div>

                <button type="submit" class="btn btn-info">เข้าสู่ระบบ</button>
                <a href="/form_register">
                    <button type="button" class="btn btn-warning">สมัครสมาชิก</button>
            </center>    </a>
            </form>
<hr>

@foreach ($users as $user) 
   {{  $user->id}}
@endforeach
