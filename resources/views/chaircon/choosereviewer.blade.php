<!Doctype html>
<html>
	<head>
		<title>ระบบผู้ดูแลConference</title>

		 @include('chaircon.head')
		
	</head>
<body>
<div class="body">


@include('chaircon.headeradmin')
<br>


<div style="margin-left: 10%;margin-right: 10%;margin-bottom: 10%">
<div class="ui segments">
<!--Main topic -->
  <div class="ui black message" style="margin-bottom: 1.5%">
    <h1>PAPER ID : {{$id}} <a  style="float: right;">
    PAPER NAME : {{$values[0]->paper_name}}</a></h1>
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
    <h3>เลือกกกรรมการ </h3>
  </div>
  <form class="ui green message"  id="form1" method="post"  action="{{ url('/chair/setreviewer/'.$id) }}">
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
        <input id="B5" name="B5" type="text"  placeholder="Email">
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
        <input id="C5" name="C5" type="text"  placeholder="Email">
   </div>

   <div class="field">
      <label>เบอร์โทรศัพท์</label>
        <input id="C6" name="C6" type="text"  placeholder="เบอร์โทรศัพท์">
    </div>
    </div>
    </div>
  </div>
<button type="submit" form="form1" class="ui positive button">
      <a><font color="black">Save</font></a>
    </button>
    </form>

  </div>


</div>
</body>
</html>