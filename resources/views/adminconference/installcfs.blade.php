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

<div class="ui piled segments" style="margin-right: 15%;margin-left: 15%;">
<h2 class="ui horizontal divider"><u>New conference</u></h2>
<form class="ui form segment" style="margin:3%;" id="form1" method="post"  action="{{ url('/get') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="field">
    
        <div class="field">
            <label>ประเภทการประชุม</label>
            <select id="type" name="type" class="ui fluid dropdown">
            <option value="ยังไม่ได้เลือก">เลือกการประชุม*</option>
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
          <div class="ui fluid multiple search selection dropdown">
            <input name="main" id="main" type="hidden" name="country">
            <i class="dropdown icon"></i>
              <div class="default text">เลือกหัวข้อหลัก*</div>
                <div class="menu">
                  <div class="item" data-value="Artificial Intelligence">Artificial Intelligence</div>
                  <div class="item" data-value="Big Data">Big Data</div>

                  <div class="item" data-value="Data Analytic">Data Analytic</div>

                  <div class="item" data-value="Data Mining">Data Mining</div>

                  <div class="item" data-value="Database Technology">Database Technology</div>

                  <div class="item" data-value="Pattern Recognition">Pattern Recognition</div>

                  <div class="item" data-value="Information Extraction / Information Retrieval">Information Extraction / Information Retrieval</div>

                  <div class="item" data-value="Cloud Computing">Cloud Computing</div>

                  <div class="item" data-value="Communications and Networking">Communications and Networking</div>

                  <div class="item" data-value="IT Security and Privacy">IT Security and Privacy</div>


                  <div class="item" data-value="Digital Media Technology">Digital Media Technology</div>
                  <div class="item" data-value="IT in Education">IT in Education</div>

            </div>
          </div>
  </div>
  <div class="field">
        <label>หัวข้อรอง</label>
          <div class="ui fluid multiple search selection dropdown">
            <input name="subcon" id="subcon" type="hidden" name="country">
            <i class="dropdown icon"></i>
              <div class="default text">เลือกหัวข้อรอง*</div>
                <div class="menu">
                  <div class="item" data-value="Software Engineering">Software Engineering</div>
                  <div class="item" data-value="Digital Media Technology">Computer Game</div>
                  <div class="item" data-value="Other Related Topics">Other Related Topics</div>

            </div>
          </div>
  </div>
  <div class="field">
      <label>ชื่อการประชุม</label>
        <input id="name" name="name" type="text"  placeholder="ชื่อการประชุม">
  </div>

  <div class="field">
      <label>ชื่อย่อการประชุม</label>
        <input id="subname"  name="subname" type="text"  placeholder="ชื่อย่อการประชุม">
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
      <label>วันอื่นๆ</label>
        <div class="ui calendar" id="example4">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input id="i9" name="i9" type="text" placeholder="Date/Time">
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

  

  
<button type="button" class="ui primary test button" onclick="myFunction()">สร้างหัวข้อ</button>

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
    <div class="left" style="margin-left: 2%">
    	<h2 class="ui horizontal divider" style="color: black;">ประเภทการประชุม</h2>
    	<h3 id="ctype" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">ชื่อการประชุม</h2>
    	<h3 id="cname" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">ชื่อย่อ</h2>
    	<h3 id="csubname" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">หัวข้อหลัก</h2>
    	<h3 id="cmain" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">หัวข้อรอง</h2>
    	<h3 id="csubcon" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">วันนำเสนอผลงาน</h2>
    	<h3 id="cshowtime" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">วันที่สิ้นสุด</h2>
    	<h3 id="cdeadlinetime" style="color: black;"></h3>
      <br>
      <h2 class="ui horizontal divider" style="color: black;">วันแจ้งผลการคัดเลือกบทความวิจัย</h2>
    	<h3 id="ccompletetime" style="color: black;"></h3>
    	<br>
      <h2 class="ui horizontal divider" style="color: black;">วันอื่นๆ</h2>
      <h3 id="c9" style="color: black;"></h3>
      <br>
    	<h2 class="ui horizontal divider" style="color: black;">สถานที่</h2>
    	<h3 id="clocate" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">แนวคิดหลักการประชุม</h2>
    	<h3 id="cmaincontent" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">รายละเอียดการประชุม</h2>
    	<h3 id="cdetail" style="color: black;"></h3>
    </div>
  </div>
  <div class="actions">
      <div class="ui black deny button">
        ยกเลิก
      </div>
      <button type="submit" form="form1" class="ui positive button">
			<a><font color="black">Okay</font></a>
	  </button>
    </div>
</div>
<!--end Modal-->
<script>
function myFunction() {

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

}
</script>
</div>
</body>
</html>
