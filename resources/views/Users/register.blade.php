@extends('layouts.index')
 
@section('content')
   
   
            <div class="ui segment" style="margin-top: 0%">
                <h2 class="ui header">Create a new Account
                    <div class="sub header">สร้างบัญชีใหม่</div>
                </h2>
                <form id="form1" class="ui form" action="{{ route('users.setRegister') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="field required">
                        <label>Firstname - Lastname</label>
                        <input id="n" type="text" name="name" required>
                    </div>
                    <div class="two fields required">
                        <div class="field required">
                            <label>Username</label>
                            <input id="u" minlength="5"  type="text" name="username" required>
                        </div>
                        <div class="field required">
                            <label>Password</label>
                            <input id="p"  type="password" name="password" required>
                        </div>
                    </div>
                    <div class="field required">
                        <label>Email</label>
                        <input id="e" type="email" name="email" required>
                    </div>
                    <div class="field required">
                        <label>Nation number</label>
                        <input id="nt" onKeyPress="CheckNum()"  type="text" minlength="13" maxlength="13" name="nation" required>
                    </div>
                    <div class="field required">
                        <label>Department</label>
                        <input id="d" type="text" name="department" required>
                    </div>
                    <div class="field required">
                        <label>Phone</label>
                        <input id="ph" onKeyPress="CheckNum()" type="text" minlength="10" maxlength="11" name="phone" required>
                    </div>
                    <div class="field required">
                        <label>Address</label>
                        <textarea id="a" type="text" name="address" required></textarea>
                    </div>

                    <div class="field">
                        <div class="ui error message"></div>
                        <button type="submit" class="ui button google plus" onclick="myFunction()">Submit</button>
                    </div>
                </form>
            </div>
<div class="ui small modal" id="modal-test">
  <i class="close icon"></i>
  <div class="header" style="background-color: #80ffaa">
    <h1>#ยืนยันการสมัคร</h1>
  </div>
  <div class="scrolling content">
    <div class="ui segment">
        <div class="field">
            <label>Name : <label id="name"></label></label>
        </div>

        <div class="field">
            <label>username : <label id="username"></label>
        </div>
        <div class="field">
            <label>password : <label id="password"></label>
        </div>
        <div class="field">
            <label>Nation number : <label id="num"></label>
        </div>
        <div class="field">
            <label>Department : <label id="de"></label>
        </div>
        <div class="field">
            <label>Email : <label id="mail"></label>
        </div>
        <div class="field" >
            <label>Phone : <label id="phone"></label>
        </div>
        <div class="field" >
            <label>Address : <label id="address"></label>
        </div>
    </div>
    </div>
    
  <div class="actions">
      <button type="submit" form="form1" class="ui positive button">
      <a><font color="black">ยืนยัน</font></a>
    </button>
    <div class="ui black deny button">
        ยกเลิก
      </div>
    </div>
</div>
<script type="text/javascript">

$('#form1')
    .form({
      fields: {
      name   : 'empty',
      username : 'empty',
      password : 'empty',
      email   : 'email',
      nation : 'empty',
      department  : 'empty',
      phone :  'empty',
      address : 'empty'

      }
    });

  function CheckNum(){
      if (event.keyCode < 48 || event.keyCode > 57){
            event.returnValue = false;
          }
    }
  function checkID(id) 
    { 
    if(id.length != 13) return false; 
    for(i=0, sum=0; i < 12; i++) 
      sum += parseFloat(id.charAt(i))*(13-i); 
    if((11-sum%11)%10!=parseFloat(id.charAt(12))) 
      return false; 
    return true;}
function myFunction() {
   var pid1 = document.getElementsByName("nation");
   //alert(pid1[0].value);
   $check = 1;
   if(!checkID(pid1[0].value)){
          //alert(pid1[0].value+'  :  รหัสประชาชนไม่ถูกต้อง');
          $check = 0;
    }else{ 
          //alert(pid1[0].value+'  :  รหัสประชาชนถูกต้อง');
    }

    if( $('#form1').form('is valid') ){
    if($check){
    var name = document.getElementById("n");
    document.getElementById("name").innerHTML = name.value;
    var user = document.getElementById("u");
    document.getElementById("username").innerHTML = user.value;
    var pass = document.getElementById("p");
    document.getElementById("password").innerHTML = pass.value;
    var nations = document.getElementById("nt");
    document.getElementById("num").innerHTML = nations.value;
    var mails = document.getElementById("e");
    document.getElementById("mail").innerHTML = mails.value;
    var depart = document.getElementById("d");
    document.getElementById("de").innerHTML = depart.value;
    var phone = document.getElementById("ph");
    document.getElementById("phone").innerHTML = phone.value;
    var add= document.getElementById("a");
    document.getElementById("address").innerHTML = add.value;
    }else{
        $('#form1').form('validate form');
        return false;
    }
    }
}
</script>
@stop