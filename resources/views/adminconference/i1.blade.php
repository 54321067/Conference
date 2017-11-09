<!Doctype html>
<html>
	<head>
		<title>admin {{$infos[0]->id}}</title>
		@include('adminconference.head')
    
</head>


<body style="background-color:#333333">
  @include('adminconference.headeradmin')
  <div class="ui internally grid" style="margin-top:1%;margin-bottom: 0.2%;margin-left: 3%">
      <div class="row">
        <div class="three wide black column" style="margin-left: 1.5%">
              <div class="ui card">
                <div class="image">
                  <img src="{{$infos[0]->image}}">
                </div>
                <div class="content">
                  <div class="header">
                      <p class="small" align = 'center'>{{$infos[0]->name}}</p>
                  </div>
                </div>
                <div class="content">
                      <h2 class="small" align = 'left' style="color: black">สร้างการประชุม : {{$count}}</h2>   
                  </div>
              </div>
        </div>
        <div class="eleven wide black column" style="margin-left: 1.5%">
              
                <div class="content">
                  <div class="header">
                    <form method="post" id="form" action="{{ url('/list/info/'.$infos[0]->id)}}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <h1><u>ข้อมูลส่วนตัว</u>
                            <button type="button" onclick="" style="float: right;" class="ui google test button">D E L E T E</button>
                      </h1>
                    </form>
                  </div>
                </div>
                <hr>
                <div class="content">
                      รายละเอียดเบื้องต้น
                </div>
              
        </div>
      </div>
  </div>
  <div class="ui tiny modal" id="modal-test">
  <i class="close icon"></i>
  <div class="header" style="background-color: #80ffaa">
    <h1>#ยืนยันการลบ</h1>
  </div>
  <div class="actions">
      <button type="submit" style="float: left" form="form"  onclick="return checkMe()"  class="ui positive button">
      <a><font color="black">ยืนยัน</font></a>
    </button>
    <div class="ui black deny button">
        ยกเลิก
      </div>
    </div>
</div>
 <script type="text/javascript">
       function checkMe() {
    if (confirm("Are you sure")) {
        alert("Thank you");
        return true;
    } else {
        
        return false;
    }
}
     </script>
</body>

</html>
