<!Doctype html>
<html>
	<head>
		<title>Create New Project</title>

		<meta charset="utf-8">
		<link href="{{asset('semantic/semantic.min.css')}}" rel="stylesheet">
		<link href="{{asset('style4.css')}}" rel="stylesheet">
		<script src="{{asset('jquery-3.1.0.min.js')}}"></script>
		<script src="{{asset('semantic/semantic.min.js')}}"></script>
		<script src="{{asset('moment.js')}}"></script>
		<script src="{{asset('script.js')}}"></script>
  
	</head>
	<body>
	 <div class="ui internally grid">
		<div class="row" style="margin-left: 45%">
 			<div class="eleven wide black column">
     			
			</div>
			<div class="five wide black column">
				<h1><font color="#00ff80" style="margin-left: 15%">C R E A T E</font></h1>
   			</div>
   		</div>
   		<div class="row">
			<div class="ten wide green column">
     			<h1><font color="black" style="margin-left: 15%">N E W _ P R O J E C T</font></h1>
			</div>

   		</div>
   	</div>


   	<form action="{{ url('/list/add') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="ui internally  grid" style="margin-top: 2%">
  			
		<div class="row">
    		<div class="five wide black column">
    			<div class="black column">
				<div class="ui  inverted segment"  >
				<h1 align="center" style="margin-right: 20%"><img src="{{asset('k.png')}}" style="margin-right: 7%"><font color="white">ProjectNameTH</font></h1>

				<div class="shop_top_box_input"><input type="text" name="ProjectNameTH" placeholder="Enter your ProjectNameTH"></div>
				</div>
    			</div>
    			<div class="black column">
				<div class="ui  inverted segment"  >
				<h1 align="center" style="margin-right: 20%;margin-top: 13% "><img src="{{asset('k.png')}}" style="margin-right: 7%"><font color="white">ProjectNameEN</font></h1>

				<div class="shop_top_box_input"><input type="text" name="ProjectNameEN" placeholder="Enter your ProjectNameEN"></div>
				</div>
    			</div>
    			<img src="{{asset('ce.png')}}" style="margin-left: 20%">
    		</div>
        	<div class="six wide black column">
    		<div class="ui internally inverted segment" style="margin-left:2%;" >
				<h1 align="center" style="margin-right: 15%"><img src="{{asset('y.png')}}" style="margin-right: 7%"><font color="white"> ProjectMember</font></h1>
				<font color="black"><div class="shop_top_box_input"><input type="text" name="ProjectMember" placeholder="Enter your ProjectMember" rows="8" cols="55"></div></font>
			</div>
			<div class="ui internally inverted segment" style="margin-left:2%;margin-top: 10%" >

				<h1 align="center" style="margin-right: 15%"><img src="{{asset('h.png')}}" style="margin-right: 5%"><font color="white"> ProjectPid</font></h1>
				<font color="black"><div class="shop_top_box_input"><input type="text" name="ProjectPid" placeholder="Enter your ProjectPid" rows="10" cols="55"></div></font>
			</div>
   		 	</div>
			<div class="five wide black column">
				<div class="ui internally inverted segment" style="margin-left:2%;margin-bottom: 3%">
					<h1 align="center" style="margin-right: 15%"><img src="{{asset('h.png')}}" style="margin-left: 5%"><font color="white"> ProjectDescription</font></h1>
					<font color="black"><div class="shop_top_box_input" ><input  type="text" name="ProjectDescription" placeholder="Enter your ProjectDescription" rows="6" cols="40">
						</div></font>
				</div>
				<div class="ui internally inverted segment" style="margin-left:2%;margin-bottom: 3%;margin-top: 12%">
					<h1 align="center"  style="margin-right: 15%"><img src="{{asset('i.png')}}" style="margin-left: 5%"><font color="white"> ProjectImage</font></h1>
					<font color="black"><div class="shop_top_box_input" ><input  type="text" name="ProjectImage" placeholder="Enter your ProjectImage" rows="6" cols="40">
						</div></font>
				</div>


				<br><br><br>
	
				<div class="ui header">
				<h1 style="margin-left: 31%"><font color="white">Please Submit</font></h1>
				</div>
			<button type="submit" class="ui positive button" style="margin-left: 32%;" >
			<a href="/list" ><font color="black">Okay</font></a>
			  		
			</button>
			<button class="ui button">
			  		<a href="/list">Cancel</a>
			</button>
 			</div>
			</div>
	</div>
  </form>


   		
</body>
</html>