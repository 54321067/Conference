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

<div class="ui piled segments" style="margin-right: 15%;margin-left: 15%">
<h2 class="ui horizontal divider">New conference</h2>
<form class="ui form segment" style="background-color: #99ffce;margin:3%;" id="form1" method="post"  action="{{ url('/get') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="field">
    <div class="three fields">
        <div class="field">
            <label>ประเภทการประชุม</label>
            <select id="i1" name="i1" class="ui fluid dropdown">
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
      <div class="field">
      <label>หัวข้อหลัก</label>
        <select id="i2" name="i2" class="ui fluid dropdown">
            <option value="ยังไม่ได้เลือก">เลือกหัวข้อหลัก*</option>
            <option value="Artificial Intelligence">Artificial Intelligence</option>
            <option value="Digital Media Technology">Digital Media Technology</option>
            <option value="IT in Education">IT in Education</option>
        </select>
      </div>
      <div class="field">
      <label>หัวข้อรอง</label>
        <select id="i3" name="i3" class="ui fluid dropdown">
            <option value="ยังไม่ได้เลือก">เลือกหัวข้อรอง*</option>
            <option value="Software Engineering">Software Engineering</option>
            <option value="Computer Game">Computer Game</option>
            <option value="Other Related Topics">Other Related Topics</option>
        </select>
      </div>

    </div>
  </div>

  <div class="field">
    <div class="two fields">
      <div class="field">
      <label>ชื่อการประชุม</label>
        <input id="i4" name="i4" type="text"  placeholder="ชื่อการประชุม">
      </div>
      <div class="field">
      <label>ชื่อย่อการประชุม</label>
        <input id="i5"  name="i5" type="text"  placeholder="ชื่อย่อการประชุม">
      </div>
    </div>
  </div>

  <div class="field">
    <div class="three fields">
      <div class="field">
      <label>วันที่สิ้นสุด</label>
      <div class="ui calendar" id="example1">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input id="i6" name="i6" type="text" placeholder="Date/Time">
        </div>
      </div>
      </div>
      <div class="field">
      <label>วันแจ้งผลการคัดเลือกบทความวิจัย</label>
        <div class="ui calendar" id="example2">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input id="i7" name="i7" type="text" placeholder="Date/Time">
        </div>
      </div>
      </div>
      <div class="field">
      <label>วันนำเสนอผลงาน</label>
        <div class="ui calendar" id="example3">
        <div class="ui input left icon">
          <i class="calendar icon"></i>
          <input id="i8" name="i8" type="text" placeholder="Date/Time">
        </div>
      </div>
      </div>
    </div>
  </div>

   <div class="field">
      <label>ตำแหน่งการประชุม</label>
        <input id="i9" name="i9" type="text"  placeholder="สถานที่">
   </div>

   <div class="field">
      <label>แนวคิดหลักการประชุม</label>
        <input id="i10" name="i10" type="text"  placeholder="ชื่อการประชุม">
    </div>
    <div class="field">
      <label>รายละเอียดการประชุม</label>
    <textarea id="i11" name="i11" rows="2" placeholder="กรอกรายละเอียด"></textarea>
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
    	<h3 id="c1" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">ชื่อการประชุม</h2>
    	<h3 id="c2" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">ชื่อย่อ</h2>
    	<h3 id="c3" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">หัวข้อหลัก</h2>
    	<h3 id="c4" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">หัวข้อรอง</h2>
    	<h3 id="c5" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">วันนำเสนอผลงาน</h2>
    	<h3 id="c6" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">วันที่สิ้นสุด</h2>
    	<h3 id="c7" style="color: black;"></h3>
      	<br>
      	<h2 class="ui horizontal divider" style="color: black;">วันแจ้งผลการคัดเลือกบทความวิจัย</h2>
    	<h3 id="c8" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">สถานที่</h2>
    	<h3 id="c9" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">แนวคิดหลักการประชุม</h2>
    	<h3 id="c10" style="color: black;"></h3>
    	<br>
    	<h2 class="ui horizontal divider" style="color: black;">รายละเอียดการประชุม</h2>
    	<h3 id="c11" style="color: black;"></h3>
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

	var typecon = document.getElementById("i1");
    document.getElementById("c1").innerHTML = typecon.value;
    var namecon = document.getElementById("i4");
    document.getElementById("c2").innerHTML = namecon.value;
    var mdnamecon = document.getElementById("i5");
    document.getElementById("c3").innerHTML = mdnamecon.value;
    var maincon = document.getElementById("i2");
    document.getElementById("c4").innerHTML = maincon.value;
    var subcon = document.getElementById("i3");
    document.getElementById("c5").innerHTML = subcon.value;
    var sendtime = document.getElementById("i6");
    document.getElementById("c6").innerHTML = sendtime.value;
    var reviewtime = document.getElementById("i7");
    document.getElementById("c7").innerHTML = reviewtime.value;
    var publishtime = document.getElementById("i8");
    document.getElementById("c8").innerHTML = publishtime.value;
    var locate = document.getElementById("i9");
    document.getElementById("c9").innerHTML = locate.value;
    var content = document.getElementById("i10");
    document.getElementById("c10").innerHTML = content.value;
    var detail = document.getElementById("i11");
    document.getElementById("c11").innerHTML = detail.value;

}
</script>
</div>
</body>
</html>
