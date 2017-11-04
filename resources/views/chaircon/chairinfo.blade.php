<!Doctype html>
<html>
    <head>
        <title>Conferrencs</title>

        @include('chaircon.head')
    </head>

<body class="body">
@include('chaircon.headerchair')

 <div class="ui segment" style="margin-top: 0%;margin: 4.5%">
      <div class="ui blue segment">
        <h2>Conference : _ {{$con->Acronym_L}} _
        		<a style="float: right;" class="ui twitter button" href="{{url('/chair/viewpaper/'.$con->conid)}}" 
        		style="display: inline-block;">
        View paper
        </a>
        </h2>
      </div>
      <div class="subcontent">
			<div style="clear:right" id="cfp">
				<div class="ui segment">
					<span>&bull;</span>
					<a href="#CFP:1">รายละเอียด</a>
					<span>&bull;</span>
					<a href="#CFP:2">หัวข้อ</a>
					
				</div>
				<table>
					<tr>
						<td style="width: 842.55px">
							<div class="ui attached segment">
								<h>
								  ชื่อการประชุม
								</h>
								<p>	{{$con->Acronym_N}}</p>
								
							</div>
							<div class="ui attached segment" style="margin-right: 4%">
								<h>สถานที่</h>

							  	<p>{{$con->Loca}}</p>
							</div>
						</td>
					</tr>
				</table>
				<table class="ui selectable celled table,ui striped table">
					<tr>
						<td>Conference website</td>
						<td>
							<a target="_blank" href="">url</a>
						</td>
					</tr>
					<tr>
						<td>วันที่สิ้นสุดการรับบทความ</td>
						<td>{{$con->D_Line}}</td>
					</tr>
					<tr>
						<td>วันประกาศผลบทความ</td>
						<td>{{$con->S_Line}}</td>
					</tr>
					<tr>
						<td>วันนำเสนอบทความ</td>
						<td>{{$con->R_Line}}</td>
					</tr>
				</table>
				<div class="topics">หัวข้อ: 
					<a href="">technology</a>
					,
					<a href="">{{$con->topic_1}}</a>
					,
					<a href="">{{$con->topic_2}}</a>
				</div>
					<h2><a name="CFP:1">รายละเอียดการประชุม</a></h2>
					<hr>
				<div class="ui ignored message">
					<p style="text-align:justify">{{$con->Detail}}</p>
				</div>
				
    		</div>
    	</div>
    	<br>
		
    </div>
</body>
</html>
