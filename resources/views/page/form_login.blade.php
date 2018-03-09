@extends('layouts.main')

@section('title', 'Page Title')


@section('content')

<h1 class="page-header">เข้าสู่ระบบ</h1>
 <form>            
                            <div class="form-group">            
                            <label for="exampleInputPassword1">Username</label> 
                                <input type="text" class="form-control" placeholder="username" name="name" >
                            </div> 
                           

                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br>
                            </div>

                            
                            
                            <center>
                                <button type="submit" class="btn btn-info">เข้าสู่ระบบ</button>
                                <button type="submit" class="btn btn-warning">Reset</button><br><br>
                            </div>
                        </center>
</form>
    
@endsection