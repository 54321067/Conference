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
    <h1>MainTopic</h1>
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
  <div class="ui horizontal segments">
    <div class="ui segment">
      <p>กรรมการท่านที่1</p>
 		<div class="ui form">
			  <div class="field">
			      <label>เลือกคณะ</label>
			      <div class="ui selection dropdown">
			          <input type="hidden" name="gender">
			          <i class="dropdown icon"></i>
			          <div class="default text">กรุณาเลือกคณะ</div>
			          <div class="menu">
			              <div class="item" data-value="1">วิศวกรรมศาสตร์</div>
			              <div class="item" data-value="0">เศรษฐศาสตร์</div>
			              <div class="item" data-value="0">วิทยาศาสตร์</div>
			              <div class="item" data-value="0">พาณิชย์นาวี</div>
			              <div class="item" data-value="0">วิทยาการจัดการ</div>
			          </div>
			      </div>
			  </div>
		</div>
	<br>
      <div class="ui form">
		  <div class="field">
		      <label>เลือกสาขา</label>
		      <div class="ui selection dropdown">
		          <input type="hidden" name="gender">
		          <i class="dropdown icon"></i>
		          <div class="default text">กรุณาเลือกสาขา</div>
		          <div class="menu">
		              <div class="item" data-value="0">หัวข้อ1</div>
		              <div class="item" data-value="0">หัวข้อ2</div>
		              <div class="item" data-value="0">หัวข้อ3</div>
		          </div>
		      </div>
		  </div>
		</div>
	<br>
		<div class="ui form">
		  <div class="field">
		      <label>เลือกหัวข้อ</label>
		      <div class="ui selection dropdown">
		          <input type="hidden" name="gender">
		          <i class="dropdown icon"></i>
		          <div class="default text">กรุณาเลือกหัวข้อ</div>
		          <div class="menu">
		              <div class="item" data-value="0">หัวข้อ1</div>
		              <div class="item" data-value="0">หัวข้อ2</div>
		              <div class="item" data-value="0">หัวข้อ3</div>
		          </div>
		      </div>
		  </div>
		</div>
    </div>


    <div class="ui segment">
      <p>กรรมการท่านที่2</p>
      <div class="ui form">
  <div class="field">
      <label>เลือกคณะ</label>
      <div class="ui selection dropdown">
          <input type="hidden" name="gender">
          <i class="dropdown icon"></i>
          <div class="default text">กรุณาเลือกคณะ</div>
          <div class="menu">
              <div class="item" data-value="1">วิศวกรรมศาสตร์</div>
              <div class="item" data-value="0">เศรษฐศาสตร์</div>
              <div class="item" data-value="0">วิทยาศาสตร์</div>
              <div class="item" data-value="0">พาณิชย์นาวี</div>
              <div class="item" data-value="0">วิทยาการจัดการ</div>
          </div>
      </div>
  </div>
</div>
<br>
      <div class="ui form">
  <div class="field">
      <label>เลือกสาขา</label>
      <div class="ui selection dropdown">
          <input type="hidden" name="gender">
          <i class="dropdown icon"></i>
          <div class="default text">กรุณาเลือกสาขา</div>
          <div class="menu">
              <div class="item" data-value="1">หัวข้อ1</div>
              <div class="item" data-value="0">หัวข้อ2</div>
              <div class="item" data-value="0">หัวข้อ3</div>
          </div>
      </div>
  </div>
</div>
<br>
		<div class="ui form">
		  <div class="field">
		      <label>เลือกหัวข้อ</label>
		      <div class="ui selection dropdown">
		          <input type="hidden" name="gender">
		          <i class="dropdown icon"></i>
		          <div class="default text">กรุณาเลือกหัวข้อ</div>
		          <div class="menu">
		              <div class="item" data-value="0">หัวข้อ1</div>
		              <div class="item" data-value="0">หัวข้อ2</div>
		              <div class="item" data-value="0">หัวข้อ3</div>
		          </div>
		      </div>
		  </div>
		</div>
    </div>
    <div class="ui segment">
      <p>กรรมการท่านที่3</p>
      <div class="ui form">
  <div class="field">
      <label>เลือกคณะ</label>
      <div class="ui selection dropdown">
          <input type="hidden" name="gender">
          <i class="dropdown icon"></i>
          <div class="default text">กรุณาเลือกคณะ</div>
          <div class="menu">
              <div class="item" data-value="1">วิศวกรรมศาสตร์</div>
              <div class="item" data-value="0">เศรษฐศาสตร์</div>
              <div class="item" data-value="0">วิทยาศาสตร์</div>
              <div class="item" data-value="0">พาณิชย์นาวี</div>
              <div class="item" data-value="0">วิทยาการจัดการ</div>
          </div>
      </div>
  </div>
</div>
<br>
      <div class="ui form">
  <div class="field">
      <label>เลือกสาขา</label>
      <div class="ui selection dropdown">
          <input type="hidden" name="gender">
          <i class="dropdown icon"></i>
          <div class="default text">กรุณาเลือกสาขา</div>
          <div class="menu">
              <div class="item" data-value="1">หัวข้อ1</div>
              <div class="item" data-value="0">หัวข้อ2</div>
              <div class="item" data-value="0">หัวข้อ3</div>
          </div>
      </div>
  </div>
</div>
<br>
		<div class="ui form">
		  <div class="field">
		      <label>เลือกหัวข้อ</label>
		      <div class="ui selection dropdown">
		          <input type="hidden" name="gender">
		          <i class="dropdown icon"></i>
		          <div class="default text">กรุณาเลือกหัวข้อ</div>
		          <div class="menu">
		              <div class="item" data-value="0">หัวข้อ1</div>
		              <div class="item" data-value="0">หัวข้อ2</div>
		              <div class="item" data-value="0">หัวข้อ3</div>
		          </div>
		      </div>
		  </div>
		</div>
    </div>
  </div>
  <div class="ui segment">
    <p></p>
  </div>
</div>


</div>
</body>
</html>