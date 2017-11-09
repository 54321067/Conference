<!DOCTYPE html>
<html>
<head>
    <title>สร้างการประชุม</title>
  @include('adminconference.head')
</head>

<body>
<div class="body">

@include('adminconference.headeradmin')
<!--forminstall-->

<div class="ui piled segments" style="margin-right: 15%;margin-left: 15%;background-color:#ebfcf2">
<h2 class="ui horizontal divider"><div class="ui center aligned segment" style="background-color:#99ffce">
              <label>
              <h3 color="#006600" align="center">Create Conference</h3>
              </label>  
            </div>  </h2>
<form class="ui form" style="margin:3%;" id="form1" method="post"  action="{{ url('/get') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="field">
    
        <div class="field">
            <label>ประเภทการประชุม</label>
            <select id="type" name="type" class="ui dropdown">
            <option value="">เลือกการประชุม*</option>
            <option value="การประชุม">การประชุม</option>
            <option value="หนังสือ">หนังสือ</option>
            <option value="ใช้สำหรับการเรียนการสอน">ใช้สำหรับการเรียนการสอน</option>
            <option value="ารสารฉบับพิเศษ">วารสารฉบับพิเศษ</option>
            <option value="วารสาร">วารสาร</option>
            <option value="การดำเนินงานประชุม">การดำเนินงานประชุม</option>
            <option value="การประมวลผลคำขอเงินทุนหรือข้อเสนออื่นๆ">การประมวลผลคำขอเงินทุนหรือข้อเสนออื่นๆ</option>
            <option value="อื่นๆ">อื่นๆ</option>
            </select>
      </div>
  </div>

    
 

  <div class="field">
        <label>หัวข้อหลัก</label>
            <select name="main[]" multiple="multiple" class="ui dropdown" id="main">

                  <option value="">เลือกหัวข้อหลัก*</option>
                
                  <option value="Artificial Intelligence">Artificial Intelligence</option>
                  <option value="Big Data">Big Data</option>

                  <option value="Data Analytic">Data Analytic</option>

                  <option value="Data Mining">Data Mining</option>

                  <option value="Database Technology">Database Technology</option>

                  <option value="Pattern Recognition">Pattern Recognition</option>

                  <option value="Information Extraction / Information Retrieval">Information Extraction / Information Retrieval</option>

                  <option value="Cloud Computing">Cloud Computing</option>

                  <option value="Communications and Networking">Communications and Networking</option>

                  <option value="IT Security and Privacy">IT Security and Privacy</option>


                  <option value="Digital Media Technology">Digital Media Technology</option>
                 <option value="IT in Education">IT in Education</option>

            
          </select>
  </div>
  <div class="field">
        <label>หัวข้อรอง</label>
        <select name="subcon[]" multiple="multiple" id="subcon" class="ui dropdown">
          <option value=""> เลือกหัวข้อรอง*</option>
               
                  <option value="Software Engineering">Software Engineering</option>
                  <option value="Digital Media Technology">Computer Game</option>
                  <option value="Other Related Topics">Other Related Topics</option>

       
        </select>
  </div>
  <div class="field">
        <label>เลือก Chair ของการประชุม</label>
          <select id="chair" name="chair" class="ui dropdown"> 
            <option value="">เลือกchair*</option>
            <?php foreach ($chair as $a) {?>
                <option value="{{$a->id}}">{{$a->name}}</option>
            <?php }?>
          </select>
  </div>
  <div class="field">
      <label>ชื่อการประชุม</label>
        <input id="name"   maxlength="200" name="name" type="text"  placeholder="ชื่อการประชุม">
  </div>

  <div class="field">
      <label>ชื่อย่อการประชุม</label>
        <input id="subname"   maxlength="35"  name="subname" type="text"  placeholder="ชื่อย่อการประชุม">
  </div>

  <div class="field">
    <div class="two fields">
      <div class="field">
      <label>วันสิ้นสุดส่งบทความ</label>
      <div class="ui calendar" id="example1">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input id="deadlinetime" name="deadlinetime" type="text" placeholder="Date/Time">
        </div>
      </div>
      </div>
      <div class="field">
      <label>วันแจ้งผลการคัดเลือกบทความวิจัย</label>
        <div class="ui calendar" id="example2">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input id="completetime" name="completetime" type="text" placeholder="Date/Time">
        </div>
      </div>
      </div>
    </div>
  </div>
  <div class="field">
    <div class="two fields">
      <div class="field">
      <label>วันนำเสนอผลงาน</label>
        <div class="ui calendar" id="example3">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input id="showtime" name="showtime" type="text" placeholder="Date/Time">
        </div>
      </div>
      </div>
    <div class="field">
      <label>url website</label>
        <div class="ui calendar" id="example4">
        <div class="ui input left icon">
          <i class="flag icon"></i>
          <input id="i9" name="i9" type="website"  placeholder="such as -> www.conference.org"
        </div>
      </div>
      </div>
    </div>
  </div>

   <div class="field">
      <label>ตำแหน่งการประชุม</label>
        <input id="locate" name="locate" type="text"  placeholder="สถานที่">
   </div>

   <div class="field">
      <label>แนวคิดหลักการประชุม</label>
        <input id="maincontent" name="maincontent" type="text"  placeholder="ชื่อการประชุม">
    </div>
    <div class="field">
      <label>รายละเอียดการประชุม</label>
    <textarea id="detail" name="detail" rows="2" placeholder="กรอกรายละเอียด"></textarea>
    </div>

  

  
<button type="button" class="ui button" style="margin-left: 45%;margin-right: 25%;background-color: #99ffce;color: black" onclick="myFunction()">สร้างหัวข้อ</button>

</form>
<!--endform-->
</div>
<!--Modal Submit -->
<div class="ui small modal" id="modal-test">
  <i class="close icon"></i>
  <div class="header" style="background-color: #80ffaa">
    <h1>#ยืนยันการสร้างหัวข้อ</h1>
  </div>
  <div class="scrolling content">
    <table class="ui selectable definition table">
      <tr>
    	<td  style="color: black;">ประเภทการประชุม</td>
    	<td id="ctype" style="color: black;"></td>
    	</tr>
      <tr>
    	<td  style="color: black;">ชื่อการประชุม</td>
    	<td id="cname" style="color: black;"></td>
    	</tr>
      <tr>
    	<td  style="color: black;">ชื่อย่อ</td>
    	<td id="csubname" style="color: black;"></td>
    	</tr>
      <tr>
    	<td  style="color: black;">หัวข้อหลัก</td>
    	<td id="cmain" style="color: black;"></td>
    	</tr>
      <tr>
    	<td  style="color: black;">หัวข้อรอง</td>
    	<td id="csubcon" style="color: black;"></td>
    	</tr>
      <tr>
      <td  style="color: black;">Chair ของ การประชุม</td>
      <td id="cchair" style="color: black;"></td>
      </tr>
      <tr>
    	<td style="color: black;">วันนำเสนอผลงาน</td>
    	<td id="cshowtime" style="color: black;"></td>
    	</tr>
      <tr>
    	<td  style="color: black;">วันที่สิ้นสุด</td>
    	<td id="cdeadlinetime" style="color: black;"></td>
      </tr>
      <tr>
      <td  style="color: black;">วันแจ้งผลการคัดเลือกบทความวิจัย</td>
    	<td id="ccompletetime" style="color: black;"></td>
    	</tr>
      <tr>
      <td  style="color: black;">Url-website</td>
      <td id="c9" style="color: black;"></td>
      </tr>
      <tr>
    	<td  style="color: black;">สถานที่</td>
    	<td id="clocate" style="color: black;"></td>
    	</tr>
      <tr>
    	<td  style="color: black;">แนวคิดหลักการประชุม</td>
    	<td id="cmaincontent" style="color: black;"></td>
    	</tr>
      <tr>
    	<td  style="color: black;">รายละเอียดการประชุม</td>
    	<td id="cdetail" style="color: black;"></td>
      </tr>
  </table>
  </div>
  <div class="actions">
      <button style="float: left" type="submit" form="form1" class="ui positive button">
			<a><font color="black">ยืนยัน</font></a>
	  </button>
    <div class="ui black deny button">
        ยกเลิก
      </div>
    </div>
</div>
<!--end Modal-->
<script>
  $('#form1').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
  });

$('#form1')
    .form({
      fields: {
      type     : ['minCount[1]', 'empty'],
      name   : 'empty',
      subname : 'empty',
      main : ['minCount[1]', 'empty'],
      subcon   : ['minCount[1]', 'empty'],
      chair : ['minCount[1]', 'empty'],
      deadlinetime    : 'empty',
      completetime : 'empty',
      showtime : 'empty',
      i9 : 'url',
      locate :  'empty',
      maincontent :  'empty',
      detail : 'empty'

      }
    });
function myFunction() {


    if( $('#form1').form('is valid') ){
	  var typecon = document.getElementById("type");
    document.getElementById("ctype").innerHTML = typecon.value;
    var namecon = document.getElementById("name");
    document.getElementById("cname").innerHTML = namecon.value;
    var mdnamecon = document.getElementById("subname");
    document.getElementById("csubname").innerHTML = mdnamecon.value;
    var maincon = document.getElementById("main");
    document.getElementById("cmain").innerHTML = maincon.value;
    var subcon = document.getElementById("subcon");
    document.getElementById("csubcon").innerHTML = subcon.value;
    var sendtime = document.getElementById("deadlinetime");
    document.getElementById("cdeadlinetime").innerHTML = sendtime.value;
    var reviewtime = document.getElementById("completetime");
    document.getElementById("ccompletetime").innerHTML = reviewtime.value;
    var reviewtime = document.getElementById("chair");
    document.getElementById("cchair").innerHTML = reviewtime.value;
    var publishtime = document.getElementById("showtime");
    document.getElementById("cshowtime").innerHTML = publishtime.value;
    var time = document.getElementById("i9");
    document.getElementById("c9").innerHTML = time.value;
    var locate = document.getElementById("locate");
    document.getElementById("clocate").innerHTML = locate.value;
    var content = document.getElementById("maincontent");
    document.getElementById("cmaincontent").innerHTML = content.value;
    var detail = document.getElementById("detail");
    document.getElementById("cdetail").innerHTML = detail.value;
    $('#modal-test').modal('show');
    }else{
      $('#form1').form('validate form');
    }
}
</script>
</div>
</body>
</html>
