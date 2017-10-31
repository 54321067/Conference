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
                    <form method="post" action="{{ url('/list/info/'.$infos[0]->id)}}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <h1><u>ข้อมูลส่วนตัว</u>
                            <button type="submit" style="float: right;" class="ui google plus button">D E L E T E</button>
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
  

</body>

</html>
