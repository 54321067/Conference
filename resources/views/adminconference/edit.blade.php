<!Doctype html>
<html>
	<head>
		<title>{{ $Project->ProjectNameTH }}</title>

		<meta charset="utf-8">
		<link href="{{asset('semantic/semantic.min.css')}}" rel="stylesheet">
		<link href="{{asset('style2.css')}}" rel="stylesheet">
		<script src="{{asset('jquery-3.1.0.min.js')}}"></script>
		<script src="{{asset('semantic/semantic.min.js')}}"></script>
		<script src="{{asset('moment.js')}}"></script>
		<script src="{{asset('script.js')}}"></script>
  
	</head>
	<body>
		<section id ="mainbox">
			<div class="ui inverted menu fixed">
  				<hgroup class="item ">
   				 <i class="icon film"></i><a>
					P R O J E C T _ {{ $Project->ProjectID }}</a>
  				</hgroup>
  				<hgroup class="right menu">
   				 <form method="POST" action="/list/{{ $Project->ProjectID }}">
      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      		<input type="hidden" name="_method" value="DELETE">
      		<button type="submit" class="ui secondary button" style=",margin-top: 4%"><font color="red">D E L E T E</font></button>
	</form>
  				</hgroup>
  			</div>
  		</section>


	<div class="right grid" style="margin-left: 85%;border-top: 2%;margin-bottom: 2%">
	</div>
<form action="{{ url('/list/'.$Project->ProjectID) }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="_method" value="PUT">
<div class="ui internally celled grid" style="margin-top: 5%">
  <div class="row">
    <div class="four wide black column">
    	<div class="ui tertiary inverted segment">
				<label style="margin-left: 20%;margin-left: 15%">
					<h1 align="center" style="margin-left: 5%;margin-right: 5%">
						<font color="black">PRE PROJECT</font>
					</h1>
				</label>
			<div class="ui inverted segment" style="margin-left:2%;" >
				<label style="margin-left: 2%;margin-bottom: 3%"><h1 align="center"><font color="lavender">Project NameTH </font></h1></label>
				<div class="shop_top_box_input">
				<input size="39" style="margin-left: 0%;color:green;margin-bottom: 3%" type="text" name="ProjectNameTH" value="{{ $Project->ProjectNameTH }}" ></div>
			</div>
      <div class="ui inverted segment" style="margin-left:2%;" >
        <label style="margin-left: 2%;margin-bottom: 3%"><h1 align="center"><font color="lavender">Project NameEN </font></h1></label>
        <div class="shop_top_box_input">
        <input size="39" style="margin-left: 0%;color:green;margin-bottom: 3%" type="text" name="ProjectNameEN" value="{{ $Project->ProjectNameEN }}" ></div>
      </div>
    <div class="five wide column" style="margin-bottom: 3%">
    	<div class="ui inverted segment" style="margin-left:2%;margin-bottom: 3%"" >
			<label><h1 align="center" style="margin-bottom: 3%"><font color="lavender">Project Members</font></h1></label>
			<font color="black"><div class="shop_top_box_input">
				<input size="39" style="margin-left: 0%;color:green;margin-bottom: 3%" type="text" name="ProjectMember" value="{{ $Project->ProjectMember }}"></div></font>
		</div>
    </div>
    <div class="five wide column">
    	<div class="ui inverted segment" style="margin-left:2%;" >
			<label><h1 align="center" style="margin-bottom: 3%"><font color="lavender">StatusPreproject</font></h1></label>
			<font color="black"><div class="shop_top_box_input">
				<input size="39" style="margin-left: 0%;color:green;margin-bottom: 3%" type="text" name="StatusPreproject" value="{{ $Project->StatusPreproject }}" ></div></font>
		</div>
    </div>
   </div>
  </div>
  	<div class="eight wide black column">
  		<div class="ui inverted LightSteelBlue segment" style="margin-left:15%;margin-right: 15%" >
  			<h1 align="center"><font color="lavender">Project Number  :  {{ $Project->ProjectID }}</font></h1>
  		</div>
  		<br>
     <iframe width="850" height="480"  src="{{ $Project->ProjectImage }}" frameborder="0" allowfullscreen></iframe>
  		<br><br><br><br><br>

    </div>
    <div class="four wide black column">

    	<div class="ui card" style="margin-left: 15%;margin-top: 10%">
      <div class="image">
        <img src="{{ $Project->ProjectImage }}">
      </div>
      <div class="content">
        <div class="header"><p class="small" align = 'center'>{{ $Project->ProjectNameTH }}</p></div>
        <div class="description">
        </div>
      </div>
    	</div>
            <div class="ui inverted segment" style="margin-left:7%;margin-right: 7%" >
        <h1><font color="LightSteelBlue"><u>Project Description:</u></font></h1><p>{{ $Project->ProjectDescription }}</p>
      </div>
<br><br><br>

		<div class="four wide black column">
			<button type="submit" class="ui positive button" style="margin-left: 35%">
			  		<font color="black">Okay</font>
			</button></form>
			<button class="ui button">
			  		<a href="/list/admin">Cancel</a>
			</button>
 
		</div>
		</div>
  </div>
</div>

  <div class="row">
  
  </div>
</div>
</body>
</html>