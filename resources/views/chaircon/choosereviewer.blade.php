<!Doctype html>
<html>
  <head>
    <title>ระบบผู้ตรวจConference</title>

     @include('chaircon.head')
    
  </head>
<body>
<div class="body">


@include('chaircon.headerchair')
<br>


<div style="margin-left: 10%;margin-right: 10%;margin-bottom: 10%">
<div class="ui segments">
<!--Main topic -->
  <div class="ui black message" style="margin-bottom: 1.5%">
    <h1> PAPER NAME : {{$values[0]->paper_name}}</h1>
  </div>
  <div class="ui green message"  >
  <div class="item">
   
      <h1><i class="black big handshake icon"> </i> &nbsp;&nbsp;&nbsp;&nbsp;<u>Topics</u></h1>

    <div class="content">

      <h5 style="color: blue">
        @if($values[0]->keyword1!=null)
          {{$values[0]->keyword1}}
        @endif
        |
        @if($values[0]->add_keyword1!=null)
          ,{{$values[0]->add_keyword1}}
        @endif
        @if($values[0]->add_keyword2!=null)
          ,{{$values[0]->add_keyword2}}
        @endif
        @if($values[0]->add_keyword3!=null)
          ,{{$values[0]->add_keyword3}}
        @endif
        </h5>
    </div>
  </div>
  
</div>
<!-- End-Main-topic -->

<!--Choose reviewer -->
  <div class="ui green message">
    <h3>เลือกกรรมการ </h3>
  </div>
  <form class="ui green message"  id="form1" method="post"  action="{{ url('/chair/setreviewer/'.$id) }}" onsubmit="checkForm(); return false;">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="ui horizontal segments">
    <div class="ui segment">
      <p>กรรมการท่านที่1</p>
    <div class="ui form">
        <div class="field required">
      <label>ชื่อ</label>
        <input id="name1" name="name1" type="text"  placeholder="ชื่อ" required>
   </div>

   <div class="field required">
      <label>นามสกุล</label>
        <input id="lname1" name="lname1" type="text"  placeholder="นามสกุล" required>
    </div>
    <div class="field required">
            <label>ตำเเหน่ง</label>
            <select id="rank1" name="rank1" class="ui fluid dropdown" required>
            <option value="">เลือกตำเเหน่ง*</option>
            <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
            <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>
            <option value="ศาสตราจารย์">ศาสตราจารย์</option>
            <option value="บุคคลฝ่ายวิชาการ">บุคคลฝ่ายวิชาการ</option>
            <option value="หัวหน้าภาควิชา">หัวหน้าภาควิชา</option>
            <option value="คณบดี">คณบดี</option>
            <option value="อธิการบดี">อธิการบดี</option>
            </select>
      </div>
    
    <div class="field required">
      <label>เลขประจำตัวประชาชน</label>
    <input id="PID1" name="PID1" type="text" onKeyPress="CheckNum()"  maxlength="13" minlength="13" placeholder="เลขประจำตัวประชาชน" required></input>
    </div>
    <div class="field required">
      <label>Email</label>
        <input id="mail1" name="mail1" type="Email"  placeholder="Email" >
   </div>

   <div class="field required">
      <label>เบอร์โทรศัพท์</label>
        <input id="phone1" name="phone1" type="text" onKeyPress="CheckNum()" maxlength="10" minlength="10"  placeholder="เบอร์โทรศัพท์" required>
    </div>
    </div>
    </div>



    <div class="ui segment">
      <p>กรรมการท่านที่2</p>
      <div class="ui form">
        <div class="field required">
      <label>ชื่อ</label>
        <input id="name2" name="name2" type="text"  placeholder="ชื่อ" required>
   </div>

   <div class="field required">
      <label>นามสกุล</label>
        <input id="lname2" name="lname2" type="text"  placeholder="นามสกุล" required>
    </div>
    <div class="field required">
            <label>ตำเเหน่ง</label>
            <select id="rank2" name="rank2" class="ui fluid dropdown" required>
            <option value="">เลือกตำเเหน่ง*</option>
            <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
            <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>
            <option value="ศาสตราจารย์">ศาสตราจารย์</option>
            <option value="บุคคลฝ่ายวิชาการ">บุคคลฝ่ายวิชาการ</option>
            <option value="หัวหน้าภาควิชา">หัวหน้าภาควิชา</option>
            <option value="คณบดี">คณบดี</option>
            <option value="อธิการบดี">อธิการบดี</option>
            </select>
      </div>
    <div class="field required">
      <label>เลขประจำตัวประชาชน</label>
    <input id="PID2" name="PID2" type="text" onKeyPress="CheckNum()" maxlength="13" minlength="13" placeholder="เลขประจำตัวประชาชน" required></input>
    </div>
    <div class="field required">
      <label>Email</label>
        <input id="mail2" name="mail2" type="Email"  placeholder="Email" required>
   </div>

   <div class="field required" >
      <label>เบอร์โทรศัพท์</label>
        <input id="phone2" name="phone2" type="text" onKeyPress="CheckNum()" maxlength="10" minlength="10"  placeholder="เบอร์โทรศัพท์" required>
    </div>
    </div>
    </div>
    <div class="ui segment">
      <p>กรรมการท่านที่3</p>
      <div class="ui form">
        <div class="field required">
      <label>ชื่อ</label>
        <input id="name3" name="name3" type="text"  placeholder="ชื่อ" required>
   </div>

   <div class="field required">
      <label>นามสกุล</label>
        <input id="lname3[]" name="lname3" type="text"  placeholder="นามสกุล" required>
    </div>
    <div class="field required">
            <label>ตำเเหน่ง</label>
            <select id="rank3" name="rank3" class="ui fluid dropdown" required>
            <option value="" >เลือกตำเเหน่ง*</option>
            <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
            <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>
            <option value="ศาสตราจารย์">ศาสตราจารย์</option>
            <option value="บุคคลฝ่ายวิชาการ">บุคคลฝ่ายวิชาการ</option>
            <option value="หัวหน้าภาควิชา">หัวหน้าภาควิชา</option>
            <option value="คณบดี">คณบดี</option>
            <option value="อธิการบดี">อธิการบดี</option>
            
            </select>
      </div>
    <div class="field required">
      <label>เลขประจำตัวประชาชน</label>
    <input id="PID3" name="PID3" type="text" onKeyPress="CheckNum()" maxlength="13" minlength="13" placeholder="เลขประจำตัวประชาชน" required></input>
    </div>
    <div class="field required">
      <label>Email</label>
        <input id="mail3" name="mail3" type="Email"  placeholder="Email" required>
   </div>

   <div class="field required">
      <label>เบอร์โทรศัพท์</label>
        <input id="phone3" name="phone3" type="text" onKeyPress="CheckNum()" maxlength="10" minlength="10" placeholder="เบอร์โทรศัพท์" required>
    </div>
    </div>
    </div>
  </div>
  <button type="button" class="ui primary earth button" style="margin-left: 45%;margin-right: 25%;background-color: #99ffce;color: black" onclick="myFunction()">Save</button>
    </form>
 
    

  </div>


</div>
<div class="ui small modal" id="modal-test">
  <i class="close icon"></i>
  <div class="header" style="background-color: #80ffaa">
    <h1>#ยืนยันการเลือกreviewer</h1>
  </div>
  <div class="scrolling content">
    <div class="ui segment">
      <p>กรรมการท่านที่1</p>
      <div class="ui form">
        <div class="field">
      <label>ชื่อ : <label id="cname1"></label></label>
   </div>

   <div class="field">
      <label>นามสกุล : <label id="clname1"></label>
    </div>
    <div class="field">
            <label>ตำเเหน่ง : <label id="crank1"></label>
            
      </div>
    <div class="field">
      <label>เลขประจำตัวประชาชน : <label id="cPID1"></label>
    
    </div>
    <div class="field">
      <label>Email : <label id="cmail1"></label>
   </div>
   <div class="field" >
      <label>เบอร์โทรศัพท์ : <label id="cphone1"></label>
       
    </div>
    </div>
    </div>

    <div class="ui segment">
      <p>กรรมการท่านที่2</p>
      <div class="ui form">
        <div class="field">
      <label>ชื่อ : <label id="cname2"></label>
   </div>

   <div class="field">
      <label>นามสกุล : <label id="clname2"></label>
    </div>
    <div class="field">
            <label>ตำเเหน่ง : <label id="crank2"></label>
            
      </div>
    <div class="field">
      <label>เลขประจำตัวประชาชน : <label id="cPID2"></label>
    
    </div>
    <div class="field">
      <label>Email : <label id="cmail2"></label>
   </div>
   <div class="field" >
      <label>เบอร์โทรศัพท์ : <label id="cphone2"></label>
       
    </div>
    </div>
    </div>

    <div class="ui segment">
      <p>กรรมการท่านที่3</p>
      <div class="ui form">
        <div class="field">
      <label>ชื่อ : <label id="cname3"></label>
   </div>

   <div class="field">
      <label>นามสกุล : <label id="clname3"></label>
    </div>
    <div class="field">
            <label>ตำเเหน่ง : <label id="crank3"></label>
            
      </div>
    <div class="field">
      <label>เลขประจำตัวประชาชน : <label id="cPID3"></label>
    
    </div>
    <div class="field">
      <label>Email : <label id="cmail3"></label>
   </div>
   <div class="field" >
      <label>เบอร์โทรศัพท์ : <label id="cphone3"></label>
       
    </div>
    </div>
    </div>
    </div>
    
  <div class="actions">
      <button style="float: left;width: 100px" type="submit" form="form1" class="ui positive button">
      <a><font color="black">ยืนยัน</font></a>
    </button>
          <div class="ui black deny button">
        ยกเลิก
      </div>
    </div>
</div>
<script>

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
// $('#form1')
//     .form({
//       fields: {
//         name1     : 'empty',
//         lname1   : 'empty',
//         rank1 : ['minCount[1]', 'empty'],
//         PID1 : 'empty',
//         mail1   : 'empty',
//         phone1 : 'empty',
        
//         name2     : 'empty',
//         lname2   : 'empty',
//         rank2 : ['minCount[1]', 'empty'],
//         PID2 : 'empty',
//         mail2   : 'empty',
//         phone2 : 'empty',
        
//         name3     : 'empty',
//         lname3   : 'empty',
//         rank3 : ['minCount[1]', 'empty'],
//         PID3 : 'empty',
//         mail3   : 'empty',
//         phone3 : 'empty'
//       }
//     });
  

  function myFunction() {
    
   if( $('#form1').form('is valid') ){


    var pid1 = document.getElementsByName("PID1");
    var pid2 = document.getElementsByName("PID2");
    var pid3 = document.getElementsByName("PID3");
    var check =0;
        if(!checkID(pid1[0].value)){
          alert(pid1[0].value+'  :  รหัสประชาชนไม่ถูกต้อง');
          
        }else{ 
          alert(pid1[0].value+'  :  รหัสประชาชนถูกต้อง');
          check +=1;
        }
        if(!checkID(pid2[0].value)){
          alert(pid2[0].value+'  :  รหัสประชาชนไม่ถูกต้อง');
          
        }else{ 
          alert(pid2[0].value+'  :  รหัสประชาชนถูกต้อง');
          check +=1;
        }
        if(!checkID(pid3[0].value)){
          alert(pid3[0].value+'  :  รหัสประชาชนไม่ถูกต้อง');
          
        }else{ 
          alert(pid3[0].value+'  :  รหัสประชาชนถูกต้อง');
          check +=1;
        }



    
    
    if (check == 3) {
      var name1 = document.getElementById("name1");
      document.getElementById("cname1").innerHTML = name1.value;
      var lname1 = document.getElementById("lname1");
      document.getElementById("clname1").innerHTML = lname1.value;
      var rank1 = document.getElementById("rank1");
      document.getElementById("crank1").innerHTML = rank1.value;
      var PID1 = document.getElementById("PID1");
      document.getElementById("cPID1").innerHTML = PID1.value;
      var mail1 = document.getElementById("mail1");
      document.getElementById("cmail1").innerHTML = mail1.value;
      var phone1 = document.getElementById("phone1");
      document.getElementById("cphone1").innerHTML = phone1.value;

      var name2 = document.getElementById("name2");
      document.getElementById("cname2").innerHTML = name2.value;
      var lname2 = document.getElementById("lname2");
      document.getElementById("clname2").innerHTML = lname2.value;
      var rank2 = document.getElementById("rank2");
      document.getElementById("crank2").innerHTML = rank2.value;
      var PID2 = document.getElementById("PID2");
      document.getElementById("cPID2").innerHTML = PID2.value;
      var mail2 = document.getElementById("mail2");
      document.getElementById("cmail2").innerHTML = mail2.value;
      var phone2 = document.getElementById("phone2");
      document.getElementById("cphone2").innerHTML = phone2.value;

      var name3 = document.getElementById("name3");
      document.getElementById("cname3").innerHTML = name3.value;
      var lname3 = document.getElementById("lname3");
      document.getElementById("clname3").innerHTML = lname3.value;
      var rank3 = document.getElementById("rank3");
      document.getElementById("crank3").innerHTML = rank3.value;
      var PID3 = document.getElementById("PID3");
      document.getElementById("cPID3").innerHTML = PID3.value;
      var mail3 = document.getElementById("mail3");
      document.getElementById("cmail3").innerHTML = mail3.value;
      var phone3 = document.getElementById("phone3");
      document.getElementById("cphone3").innerHTML = phone3.value;
      $('#modal-test').modal('show');
    }

    }else{
      $('#form1').form('validate form');
    }

}


  </script>
</body>
</html>