<!Doctype html>
<html>
	<head>
		<title>ตารางงานวิจัยรวม</title>

		<?php  include_once __DIR__ . '\headlink.php';?>
  		<style type="text/css">
          table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
          
          }

          td, th {
              border: 1px solid #dddddd;
              text-align: center;
              padding: 8px;
              
          }

          tr:nth-child(even) {
              background-color: #dddddd;
          }
    </style>
	</head>
	<body>
	<?php  include_once __DIR__ . '\header.php';?>
<div class="ui modal" id="modal-login" style="border-left: 5%; width:480px;height: 300px">
  <div class="header">
    <h1 class="ui header">
      Login
      <div class="sub header">
        เข้าสู่ระบบ
      </div>
    </h1>
  </div>
  <div class="ui grid" style="width:1000px;height: 1000px;margin-top: 2px;">
            <div class="eight wide column">
            @if(Auth::check())
                <a href="{{ route('users.logout') }}" class="ui button">Logout</a>
            @else
            <div class="ui segment" style="margin-top: 5%;margin-left: 1% ">
                <form action="{{ route('users.setLogin') }}" method="post" class="ui form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="two fields">
                        <div class="field">
                            <label>Username</label>
                            <input type="text" name="email" placeholder="Username" required>
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="field">
                        <button type="submit" class="ui button google plus">Login</button>
                        <a href="{{ route('users.getRegister') }}" class="ui button">Register</a>
                        <a style="margin-left: 30%" href="{{ route('adminconference.index') }}" class="ui button">Cancel</a>
                    </div>
             </form>
            </div>
            @endif
                @yield('content')
            </div>
            <div class="four wide column" style="margin-left: 10%; margin-bottom: 25%"><img src="GOW.png"></div>
      </div>
</div>

	 <div class="ui segment" style="margin-left: 5%;margin-right: 5%;margin-bottom: 5%">
            <h1>เก้าอี้นวม News</h1>
            <table>
                <tr>
                  <th>หน้านี้แสดงข่าวล่าสุด</th>
                </tr> 
            </table>
            <hr>
      </div>
   		
</body>
</html>