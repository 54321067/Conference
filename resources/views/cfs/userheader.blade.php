<body class="body">
<h1 class="ui menu" style="margin: 0%;margin-left: 4.5%;margin-right: 4.5%">
    <img src="/images/garland_logo.png">
</h1>
<section id ="mainbox" style="margin-top: 0%;margin-left: 4.5%;margin-right: 4.5%">
<div class="ui menu" style="background-color: #4dffa6">
@if(Auth::check())

    <a href="/homecon" class="item">
      Home
    </a>
    <a href='/Mysubmition' class="item">การประชุมของฉัน
    </a>
    <div class="right menu">
              <a class="item" href='/viewinfo'><font color="black">Wellcome : {{ Auth::user()->name }}</font></a>
              <a href="{{ route('users.logout') }}" class="right item">Logout</a>
      </div>
    @else
        <a class ="ui btn-modal item" href="#">
            <i class="icon rocket"></i><font color="black">Login</font>
        </a>

    @endif

  </div>
   
    
</section>


