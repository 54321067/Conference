<!Doctype html>
<html>
	<head>
		<title>My Submition</title>
		 @include('cfs.header')
		<style>
		.body { 
			/*overflow:scroll;*/
			background-image: -o-linear-gradient(top, #FFFFFF, #abdb92);
			background: -moz-linear-gradient(top, #FFFFFF, #abdb92);
			background-image: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#abdb92));
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFF', endColorstr='#abdb92');
			background: -ms-linear-gradient(top, #FFFFFF, #abdb92);
			 
			background: red; /* For browsers that do not support gradients */
			 /* For Safari 5.1 to 6.0 */
			background: -webkit-linear-gradient(top,#FFFFFF,#abdb92,#FFFFFF);
			 /* For Opera 11.1 to 12.0 */
			background: -o-linear-gradient(top,#FFFFFF,#abdb92,#FFFFFF);
			 /* For Fx 3.6 to 15 */
			background: -moz-linear-gradient(top,#FFFFFF,#abdb92,#FFFFFF);
			/* Standard syntax */
			background: linear-gradient(to bottom, #FFFFFF,#abdb92,#FFFFFF); 
			height: 100%;
			width: 100%;
			left: 0;
			top: 0;
			background-repeat: no-repeat;
    		background-attachment: fixed;
		}
		</style>
	</head>
	<body>
		<div class="body">
				@include('cfs.userheader')
			<div class="ui grid" style="margin-left:4.5%;margin-top:3%;margin-bottom:3%;margin-right:4.5%;">
				<div class="row">
			    	<div class="ui inverted segment sixteen wide column" style="background-color:#99ffce">
						<label>
							<h1 align="center" style="color: black">
								<font color="green">Paper</font>ของฉัน
							</h1> 
						</label>
					</div>
					<div class="ui styled accordion sixteen wide column" style="background-color:#ebfcf2">
					  	<div class="title">
					    	<h3 style="color: green"><i class="dropdown icon"></i>
					    	รายละเอียดการประชุมในขณะนี้</h3>
					  	</div>
					  	<div class="content">
					    	<h4><font color="#006600">หัวข้อการประชุมของฉัน</font></h4>		   
					   	 	<div class="accordion transition">
					
					   	 	<?php 
					   	 	date_default_timezone_set("Asia/Bangkok");
					   	 	foreach ($values as $value) {
					   	 		$S=strtotime($value->R_Line);
					   	 		if(date("Y-m-d h:i:sa", $S) >= date("Y-m-d h:i:sa")) {
					   	 		?>
					      		<div class="title">
					          		<h4><i class="dropdown icon"></i>
					          		{{$value->Acronym_N}}<a style="float: right;" href="{{ route('cfs.coninfo',['id'=>$value->conid ]) }}"> รายละเอียดการประชุม </a></h4>
					      		</div>
					      		
					      		<div class="content">
					        		<div class="transition "><h4><font color="#006600">งานวิจัยของฉัน</font></h4></div>
					        		<div class="accordion transition hidden">
					        			<?php $i=1;?>

					        			<?php foreach ($papers as $paper) {

					        				if ($value->conid == $paper->con_id and $paper->user_id == $userid) {
					        					
					        				
					        				?>
						          			<div class="title" style="background-color:#fcf4f4">
						              			<h5><i class="dropdown icon"></i>
						              			{{$paper->paper_name}}</h5>
						          			</div>
						          			<div class="content" style="background-color:#fcf4f4">	
						              			<a id="pp1" href="{{ route('cfs.paperDetails',['id'=>$value->conid,'pname'=>$paper->paper_name,'paperid'=>$paper->paper_id,'i'=> $i]) }}"><h5>เอกสารลำดับที่ {{$i}} : {{$paper->paper_name}}</h5></a>
						          			</div>
						          		<?php $i++;}
						          		} ?>
					          		</div>
					        	</div>
					        
					        <?php }
					    			} ?>	
						    </div>							
					    </div>

					</div>
					<script>
						$('.ui.accordion').accordion();
					</script>
					<style>
						a{
							color: green;
							text-decoration: underline;
						}
						a:hover {
							color: red;
							text-decoration: underline;
						}
					</style>
					<div class="ui styled accordion sixteen wide column" style="background-color:#ebfcf2">
					  	<div class="title">
					    	<h3 style="color: black"><i class="dropdown icon"></i>
					    	รายละเอียดการประชุมที่จบไปแล้ว</h3>
					  	</div>
					  	<div class="content">
					    	<h4><font color="#006600">หัวข้อการประชุมของฉัน</font></h4>		   
					   	 	<div class="accordion transition">
					
					   	 	<?php 
					   	 	date_default_timezone_set("Asia/Bangkok");
					   	 	foreach ($values as $value) {
					   	 		$S=strtotime($value->R_Line);
					   	 		if(date("Y-m-d h:i:sa", $S) < date("Y-m-d h:i:sa")) {
					   	 		?>
					      		<div class="title">
					          		<h4><i class="dropdown icon"></i>
					          		{{$value->Acronym_N}}<a style="float: right;" href="{{ route('cfs.coninfo',['id'=>$value->conid ]) }}"> รายละเอียดการประชุม </a></h4>
					      		</div>
					      		
					      		<div class="content">
					        		<div class="transition "><h4><font color="#006600">งานวิจัยของฉัน</font></h4></div>
					        		<div class="accordion transition hidden">
					        			<?php $i=1;?>

					        			<?php foreach ($papers as $paper) {

					        				if ($value->conid == $paper->con_id and $paper->user_id == $userid) {
					        					
					        				
					        				?>
						          			<div class="title" style="background-color:#fcf4f4">
						              			<h5><i class="dropdown icon"></i>
						              			{{$paper->paper_name}}</h5>
						          			</div>
						          			<div class="content" style="background-color:#fcf4f4">	
						              			<a id="pp1" href="{{ route('cfs.paperDetails',['id'=>$value->conid,'pname'=>$paper->paper_name,'paperid'=>$paper->paper_id,'i'=> $i]) }}"><h5>เอกสารลำดับที่ {{$i}} : {{$paper->paper_name}}</h5></a>
						          			</div>
						          		<?php $i++;}
						          		} ?>
					          		</div>
					        	</div>
					        
					        <?php }
					    			} ?>	
						    </div>							
					    </div>

					</div>
				</div>

			</div>
		</div>
	</body>
<html>
