<!Doctype html>
<html>
	<head>
		<title>CreateMovie</title>

		<meta charset="utf-8">
		<link href="{{asset('semantic/semantic.min.css')}}" rel="stylesheet">
		<link href="{{asset('style4.css')}}" rel="stylesheet">
		<script src="{{asset('jquery-3.1.0.min.js')}}"></script>
		<script src="{{asset('semantic/semantic.min.js')}}"></script>
		<script src="{{asset('moment.js')}}"></script>
		<script src="{{asset('script.js')}}"></script>
  
	</head>
	<body>
	<form action="{{ url('/movies') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="ui internally  grid">
 		<div class="ui secondary segment" style="margin-left: 9%">
			<h1><u><font color="black">Create Movie</font></u></h1>
		</div>
  		<div class="row">
    		<div class="five wide column">
    			<div class="black column">
    				<div class="ui secondary segment" style="margin-left:2%;">
					<label style="margin-left: 20%;margin-left: 15%">
					<h1 align="center">
						<font color="black">Config Movie :</font>
					</h1>
					</label>
					</div>
				<div class="ui  inverted segment" style="margin-left:2%;" >
				<label style="margin-left: 20%;margin-bottom: 3%"><h1 align="center"><font color="white">Movie Name</font></h1></label>

				<div class="shop_top_box_input"><input type="text" name="MovieName" placeholder="Enter your MovieName"></div>

				</div>
    			<div class="five wide column" style="margin-bottom: 3%">

    	
    			</div>
    			</div>
    		</div>
        <div class="five wide column">
    		<div class="ui internally inverted segment" style="margin-left:2%;" >
				<div class="ui secondary segment" style="margin-left:15%;margin-right:15%"><h1 align="center"><font color="black"><u>MovieDescription</u></font></h1></div>
				<font color="black"><div class="shop_top_box_input"><input type="text" name="MovieDescription" placeholder="Enter your MovieDescription" rows="8" cols="55"></div></font>
			</div>
			<div class="ui internally inverted segment" style="margin-left:2%;" >
				<div class="ui secondary segment" style="margin-left:20%;margin-right:20%"><h1 align="center"><font color="black"><u>MovieImage</u></font></h1></div>
				<font color="black"><div class="shop_top_box_input"><input type="text" name="MovieImage" placeholder="Enter your MovieImage" rows="10" cols="55"></div></font>
			</div>
   		 </div>
 
    	
		<div class="five wide column">

				<div class="ui internally inverted segment" style="margin-left:2%;margin-bottom: 3%"" >
					<div class="ui secondary segment" style="margin-left:20%;margin-right:20%"><h1 align="center"><font color="black"><u>MovieAddress:</u></font></h1></div>
					<font color="black"><div class="shop_top_box_input" ><input  type="text" name="MovieAddress" placeholder="Enter your MovieAddress" rows="6" cols="40">
						</div></font>
					</div>




			<button type="submit" class="ui positive button" style="margin-left: 32%" >
			<a href="/movies/admin" ><font color="black">Okay</font></a>
			  		
			</button>
			<button class="ui button">
			  		<a href="/movies/admin">Cancel</a>
			</button>
 	</div>
		</div>
		</form>
		</div>
		</div>

</body>
</html>