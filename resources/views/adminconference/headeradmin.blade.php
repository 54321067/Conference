<section id ="mainbox">
		<div class="ui inverted menu fixed">
        @if(Auth::check())
        <hgroup class ="item">
      		<i class="icon github alternate"></i>
          <a href="/list/admin">
      			<font color="white">Admin</font>
          </a>
        </hgroup>
        <a class="ui simple dropdown item">
            เก้าอี้นวม
            <i class="dropdown icon"></i>
            <div class="menu">
                <div onclick="location.href='/list/install'" class="item">
                  <i class="icon file text outline"></i>
                  Create Conference
                </div>
                <div onclick="location.href='/adminhome'" class="item">
                  <i class="icon book"></i>
                  View All Conference
                </div> 
                <div class="item">
                    <i class="icon payment"></i>
                    Payment Status
                </div>
                <div  onclick="location.href='/list'" class="item">
                    <i class="icon spy"></i>
                    Admin team
                </div>    
            </div>
      </a>
      <hgroup class="item ">
                  <font color="green">W E l l C O M E </font> __ {{ Auth::user()->name }} __
      </hgroup>
      <hgroup class ="right item">
              <a href="{{ route('users.logout') }}" class="ui google plus button">Logout</a>
      </hgroup>
      @else
      <a class ="ui btn-modal item" href="#">
            <i class="icon rocket"></i>Login
      </a>
        <!-- Modal Form Login -->
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
                              <a style="margin-left: 30%" href="/home" class="ui button">Cancel</a>
                          </div>
                   </form>
                  </div>
                  @endif
                      @yield('content')
                  </div>
                  <div class="four wide column" style="margin-left: 10%; margin-bottom: 25%"><img src="GOW.png"></div>
            </div>
      </div>
      <!--end module-->
      @endif
	</div>
</section>
