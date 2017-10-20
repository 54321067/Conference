<!Doctype html>
<html>
	<head>
		<title>ระบบผู้ดูแลConference</title>

		 @include('adminconference.head')
		
	</head>
<body>
<div class="body">


@include('adminconference.headeradmin')
<br>

<h3 class="ui horizontal divider">Hello!->paperid = {{$id}}</h3>
<div style="margin-left: 10%;margin-right: 10%;margin-bottom: 10%">
<div class="ui segments">
<!--Main topic -->
  <div class="ui segment" style="margin-bottom: 1.5%">
    <h1>Main</h1>
  </div>
  <div class="ui horizontal list" style="margin-left: 2%;margin-bottom: 2%">
  <div class="item">
    <img class="ui mini circular image" src="/images/main.png">
    <div class="content">
      <div class="ui sub header">Molly</div>
      Coordinator
    </div>
  </div>
  <div class="item">
    <img class="ui mini circular image" src="/images/main.png">
    <div class="content">
      <div class="ui sub header">Elyse</div>
      Developer
    </div>
  </div>
  <div class="item">
    <img src="/images/main.png" class="ui mini circular image">
    <div class="content">
      <div class="ui sub header">Eve</div>
      Project Manager
    </div>
  </div>
</div>
<!-- End-Main-topic -->

<!--Choose reviewer -->
  <div class="ui segment">
    <h3>เลือกกกรรมการ </h3>
  </div>
  <form class="ui form segment" style="background-color: #99ffce" id="form1" method="post"  action="{{ url('/setreviewer/'.$id) }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="ui horizontal segments">
    <div class="ui segment">
      <p>กรรมการท่านที่1</p>
 		<div class="ui form">
			  <div class="field">
      <label>ชื่อ</label>
        <input id="A1" name="A1" type="text"  placeholder="ชื่อ">
   </div>

   <div class="field">
      <label>นามสกุล</label>
        <input id="A2" name="A2" type="text"  placeholder="นามสกุล">
    </div>
    <div class="field">
      <label>ตำเเหน่ง</label>
    <input id="A3" name="A3" type="text" placeholder="ตำเเหน่ง"></input>
    </div>
    <div class="field">
      <label>เลขประจำตัวประชาชน</label>
    <input id="A4" name="A4" type="text" placeholder="เลขประจำตัวประชาชน"></input>
    </div>
    <div class="field">
      <label>Email</label>
        <input id="A5" name="A5" type="text"  placeholder="Email">
   </div>

   <div class="field">
      <label>เบอร์โทรศัพท์</label>
        <input id="A6" name="A6" type="text"  placeholder="เบอร์โทรศัพท์">
    </div>
		</div>
    </div>


    <div class="ui segment">
      <p>กรรมการท่านที่2</p>
      <div class="ui form">
        <div class="field">
      <label>ชื่อ</label>
        <input id="B1" name="B1" type="text"  placeholder="ชื่อ">
   </div>

   <div class="field">
      <label>นามสกุล</label>
        <input id="B2" name="B2" type="text"  placeholder="นามสกุล">
    </div>
    <div class="field">
      <label>ตำเเหน่ง</label>
    <input id="B3" name="B3" type="text" placeholder="ตำเเหน่ง"></input>
    </div>
    <div class="field">
      <label>เลขประจำตัวประชาชน</label>
    <input id="B4" name="B4" type="text" placeholder="เลขประจำตัวประชาชน"></input>
    </div>
    <div class="field">
      <label>Email</label>
        <input id="B5" name="B5" type="text"  placeholder="Email<">
   </div>

   <div class="field">
      <label>เบอร์โทรศัพท์</label>
        <input id="B6" name="B6" type="text"  placeholder="เบอร์โทรศัพท์">
    </div>
    </div>
    </div>
    <div class="ui segment">
      <p>กรรมการท่านที่3</p>
      <div class="ui form">
        <div class="field">
      <label>ชื่อ</label>
        <input id="C1" name="C1" type="text"  placeholder="ชื่อ">
   </div>

   <div class="field">
      <label>นามสกุล</label>
        <input id="C2" name="C2" type="text"  placeholder="นามสกุล">
    </div>
    <div class="field">
      <label>ตำเเหน่ง</label>
    <input id="C3" name="C3" type="text" placeholder="ตำเเหน่ง"></input>
    </div>
    <div class="field">
      <label>เลขประจำตัวประชาชน</label>
    <input id="C4" name="C4" type="text" placeholder="เลขประจำตัวประชาชน"></input>
    </div>
    <div class="field">
      <label>Email</label>
        <input id="C5" name="C5" type="text"  placeholder="Email<">
   </div>

   <div class="field">
      <label>เบอร์โทรศัพท์</label>
        <input id="C6" name="C6" type="text"  placeholder="เบอร์โทรศัพท์">
    </div>
    </div>
    </div>
  </div>
<button type="submit" form="form1" class="ui positive button">
      <a><font color="black">Submit</font></a>
    </button>
    </form>

  <div class="ui segment">
    <p></p>
  </div>
</div>


</div>
</body>
</html>