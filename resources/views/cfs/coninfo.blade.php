<!DOCTYPE html>
<html>
<head>
	<title>Conferences information</title>
    @include('cfs.header')
    <style>
		.body { 
			
			/*overflow:scroll;*/
			background-image: -o-linear-gradient(top, #FFFFFF, #abdb92);
			background: -moz-linear-gradient(top, #FFFFFF, #abdb92);
			background-image: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#abdb92));
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFF', endColorstr='#abdb92');
			background: -ms-linear-gradient(top, #FFFFFF, #abdb92);*/
			 
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
			overflow: scroll;
			background-repeat: no-repeat;
    		background-attachment: fixed;
		}
		p {
		    font-size: 120%;
		}
		
	</style>
</head>
<body class="body">
	@include('cfs.userheader')
	<div class="ui segment" style="padding: 3%;margin: 4.5%;margin-top: 1%">
		<div class="ui tertiary segment"
			style="margin: 2%;
			border-top: thick solid #358C3E;
    		border-bottom: thick solid #358C3E;
    		box-shadow: 0 0 20px gray, 0 0 2px darkgray;
    		height: auto">
    		<table style="min-width: 100%;">
    			<tr>
    				<td style="width: 20%;
    				height:auto;">
    					@if($con->name == "การประชุม")
    					<img src="/images/Conference.jpg" class="ui small image" style="margin: 0 auto;">
    					@elseif($con->name == "หนังสือ")
    					<img src="/images/book.png" class="ui small image" style="margin: 0 auto;">
    					@elseif($con->name == "ใช้สำหรับการเรียนการสอน")
    					<img src="/images/teach.png" class="ui small image" style="margin: 0 auto;">
    					@elseif($con->name == "วารสารฉบับพิเศษ")
    					<img src="/images/special journal.png" class="ui small image" style="margin: 0 auto;">
    					@elseif($con->name == "วารสาร")
    					<img src="/images/journal.png" class="ui small image" style="margin: 0 auto;">
    					@elseif($con->name == "การดำเนินงานประชุม")
    					<img src="/images/conference2.png" class="ui small image" style="margin: 0 auto;">
    					@elseif($con->name == "การประมวลผลคำขอเงินทุนหรือข้อเสนออื่นๆ")
    					<img src="/images/money.png" class="ui small image" style="margin: 0 auto;">
    					@else
    					<img src="/images/main.png" class="ui small image" style="margin: 0 auto;">
    					@endif
    				</td>
    				<td style="width: 80%;padding-left: 2%">
						<h1>
						Acronym : {{$con->Acronym_N}}
						</h1>
						<div class="ui divider" style="max-width: 95%"></div>
						<p><b>{{$con->Loca}}</b></p>
					</td>
				</tr>
			</table>
		</div>
		<div style="margin-left: 10%;margin-right: 10%">
			<table class="ui selectable celled table,ui definition table">
				<tbody>
				    <tr>
				      <td style="width: 30%">Conference website</td>
				      <td>{{$con->Y_Line}}</td>
				    </tr>
				    <tr>
				      <td style="width: 30%">วันสิ้นสุดรับผลงาน</td>
				      <td>{{$con->D_Line}}</td>
				    </tr>
				    <tr>
				      <td style="width: 30%">วันประกาศผล</td>
				      <td>{{$con->S_Line}}</td>
				    </tr>
				    <tr>
				      <td style="width: 30%">วันนำเสนอ</td>
				      <td>{{$con->R_Line}}</td>
				    </tr>
				    <tr>
				      <td style="width: 30%">Other</td>
				      <td>None</td>
				    </tr>
				</tbody>
			</table>
		</div>
		<div>
			<div style="float:left;margin: 2%;">
				<p><b>Topic : </b></p>
				 <?php
                    $tag1s = explode(",", $con->topic_1);
                    foreach ($tag1s as $tag) { $i=rand(1,100); ?>
                        @if($i<= 20)
                            <a class="ui blue label" style="margin-top: 0.5%">{{$tag}}</a>
                        @elseif($i >= 20 and $i < 40)
                            <a class="ui red label" style="margin-top: 0.5%">{{$tag}}</a>
                        @elseif($i >= 40  and $i < 60)
                            <a class="ui brown label" style="margin-top: 0.5%">{{$tag}}</a>
                        @elseif($i >= 60 and $i < 80)
                            <a class="ui purple label" style="margin-top: 0.5%">{{$tag}}</a>
                        @else
                            <a class="ui green label" style="margin-top: 0.5%">{{$tag}}</a>
                        @endif
                <?php $i++; } ?>
                <?php $j=0; ?>
                <?php
                    $tag2s = explode(",", $con->topic_2);
                    foreach ($tag2s as $tag) {  $j=rand(1,100);?>
                        @if($j<= 20)
                            <a class="ui violet label" style="margin-top: 0.5%">{{$tag}}</a>
                        @elseif($j >= 20 and $j < 40)
                            <a class="ui yellow label" style="margin-top: 0.5%">{{$tag}}</a>
                        @elseif($j >= 40  and $j < 60)
                            <a class="ui teal label" style="margin-top: 0.5%">{{$tag}}</a>
                        @elseif($j >= 60 and $j < 80)
                            <a class="ui grey label" style="margin-top: 0.5%">{{$tag}}</a>
                        @else
                            <a class="ui brown label" style="margin-top: 0.5%">{{$tag}}</a>
                        @endif

                <?php $j++; }?> 
                    
			</div>
		</div>
		<div>
			<div style="clear: both;
			box-shadow: 0px 0px 0px 1px #A3C293 inset, 
			0px 0px 0px 0px rgba(0, 0, 0, 0);
			margin-left: : 2%;margin-right:2%;padding: 2%;
			margin-top: 0">
				
			</div>
			<div style="background-color: #16ab39;
		    text-shadow: none;margin-right: 2%;
		    margin-top: 0;padding: 1.5%">
		    	<h1 style="color: #FFFFFF;">Important Topic</h1>
		    	{{$con->Content}}
		    </div>
		    <div style="clear: both;
			box-shadow: 0px 0px 0px 1px #A3C293 inset, 
			0px 0px 0px 0px rgba(0, 0, 0, 0);
			margin-left: : 2%;margin-right:2%;padding: 2%;
			margin-top: 0">
				<h3><u>Detail:</u></h3>
				<br>
				{{$con->Detail}}
			</div>
		</div>
		<div style="text-align: center">
			<a class="ui primary button" tabindex="0" style="font-size: 170%;margin: 2%" href="{{ url('/paperform/'.$id) }}"

			>
        		Send Paper
      		</a>
		</div>
		
	</div>
</body>
</html>