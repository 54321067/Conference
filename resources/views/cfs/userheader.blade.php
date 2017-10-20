<body class="body">
<h1 class="ui menu" style="margin: 0%;margin-left: 4.5%;margin-right: 4.5%">
    <img src="../images/garland_logo.png">
</h1>
<section id ="mainbox" style="margin-top: 0%;margin-left: 4.5%;margin-right: 4.5%">
<div class="ui menu" style="background-color: #4dffa6">
@if(Auth::check())

    <a href="/homecon" class="item">
      Home
    </a>

    
    <div>

  <a class="ui simple dropdown link item">
    <span class="text">Factuly</span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <div class="item">
        <i class="dropdown icon"></i>
        <span class="text">Engineer</span>
        <div class="menu">
          <div class="header">Computer Engineer</div>
       
        </div>
      </div>
    </div>
  </a>
    </div>

        <a class="ui simple dropdown item">
      เก้าอี้นวม
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item">บัญชีของฉัน(กำลังปรับปรุง)</div>
        <div onclick="location.href='/Mysubmition'" class="item">การประชุมของฉัน</div>
        <div class="item">เงื่อนไขการให้บริการ(กำลังปรับปรุง)</div>     
      </div>
    </a>
    @if(Auth::user()->status == 'admin' or Auth::user()->status=='superadmin')
      <a href="/list/admin" class="item">
      @if(Auth::user()->status=='superadmin') 
      นั่งเก้าอี้<i class="icon rocket"></i>
      @else
      ประจำที่<i class="icon rocket"></i>
      @endif
    </a>
    @endif
    <a class="item">Wellcome : {{ Auth::user()->name }}</a>
    <a href="{{ route('users.logout') }}" class="item">Logout</a>
    @else
        <a class ="ui btn-modal item" href="#">
            <i class="icon rocket"></i><font color="black">Login</font>
        </a>

    @endif

  </div>
   
    
</section>


