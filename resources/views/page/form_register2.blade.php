@extends('layouts.main2')

@section('title', 'Page Title')


@section('content')
        <div class="bobby">

<h1 style="background-color:#A9A9F5;">กรอกข้อมูลนักศึกษา</h1>



<hr>

<form action="/form_register_save2" method="post" style="border: 0.1px solid black">          
          
                <div class="form-group" style="margin: 10px 0px 0px 80px;"><br>
                        <div class="form-inline">
                                <label style="margin: 0px 150px 30px 0px;">รหัสนักศึกษา</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="รหัสนักศึกษา"style="width:60%"name="SID">
                        </div>

                        <div class="form-inline">
                                <label style="margin: 0px 150px 30px 0px;">ชื่อ-นามสกุล</label>
                                <select class="form-control" style="width:9%" name="TITLENAME" >
                                              <option value="1">นาย</option>
                                              <option value="2">นางสาว</option>
                                              <option value="3">นาง</option>
                                </select>
                                <input type="text" class="form-control" placeholder="ชื่อ-สกุล" name="FULLNAME" style="width:49% ;margin: 0px 0px 0px 16px;"> 
                        </div>

                        <div class="form-inline">
                              <label style="margin: 0px 200px 20px 0px;">เพศ</label>
                              <input type="radio"  name="GENDER" value="1"> ชาย
                              <input type="radio" name="GENDER" value="2"> หญิง
                              <input type="radio" name="GENDER" value="3"> เพศทางเลือก
                        </div>

                        <div class="form-inline">
                                <label style="margin: 0px 140px 30px 0px;">วัน เดือน ปีเกิด</label>
                                <input type="date" id="date" onchange="calAge(this);" class="form-control" placeholder="วว//ดด/ปปปป" name="BIRTHDAY" style="width:20%" required>
                                <label style="margin: 0px 30px 0px 50px;">อายุ (ปี)</label>
                                <input type="text" id="age" class="form-control" placeholder="อายุ" style="width:20%">
                        </div>



                        <div class="form-inline">
                            <label style="margin: 0px 165px 30px 0px;">สังกัดคณะ</label>
                                <select class="form-control" style="width:60%" name="FACULTYID">
                                              <option value="1" >วิทยาการคอมพิวเตอร์</option>
                                              <option value="2" >วิทยาศาสตร์</option>
                                              <option value="3" >มนุษศาสตร์</option>
                                </select>
                        </div>

                        <div class="form-inline">
                              <label style="margin: 0px 175px 20px 0px;">สาขาวิชา</label>
                              <input type="radio"  name="MAJORID" value="1"> CS
                              <input type="radio" name="MAJORID" value="2"> SE
                              <input type="radio" name="MAJORID" value="3"> IMA
                              <input type="radio" name="MAJORID" value="4"> ITM
                        </div>

                        <div class="form-inline">
                            <label >ที่อยู่ปัจจุบัน</label>
                            <textarea name="ADDRESS" class="form-control" style="width :550px;height:70px;margin:0px 0px 30px 160px;" placeholder="กรุณาใส่ที่อยู่" ></textarea>
                        </div>
                           
                        <div class="form-inline">
                              <label style="margin: 0px 150px 30px 0px;">เบอร์โทรศัพท์</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ใส่เบอร์โทร" style="width :60%" name="MOBILE">
                        </div>

                         <div class="form-inline">
                            <label style="margin: 0px 120px 20px 0px;">รายการอาหารที่ชอบ</label>
                            
                                <input type="checkbox" name="FOOD1" value="1">     ส้มตำ
                                <input type="checkbox" name="FOOD2" value="2">     ลาบ
                                <input type="checkbox" name="FOOD3" value="3">     ก้อย 
                                <input type="checkbox" name="FOOD4" value="4">     พิซซ่า
                            </div>
                 </div>
        <hr>
                <div class="form-group" style="margin: 0px 0px 0px 80px;">

                <div class="form-inline">
                            <label style="margin:0px 160px 30px 0px;">Username</label>
                            <input type="text" name="USERNAME" class="form-control"  placeholder="ใส่ Username" style="width :61%"></input>
                </div>
                <div class="form-inline">
                            <label style=";margin:0px 164px 30px 0px;">Password</label>
                            <input type="password" name="PASSWORD" class="form-control"  placeholder="ใส่ Password" style="width :61%"></input>
                </div>


                </div>       
                        <center>
                                <button type="submit" class="btn btn-success button2">บันทึกข้อมูล</button>
                                <button type="submit" class="btn btn-danger button2">ล้างข้อมูล</button><br><br>
                        </center>    
                   
</form>

        </div>
@endsection