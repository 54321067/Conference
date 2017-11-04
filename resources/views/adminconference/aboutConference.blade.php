<!Doctype html>
<html>
    <head>
        <title>Conferrencs</title>

        @include('adminconference.head')
    </head>

<body class="body">
@include('adminconference.headeradmin')

 <div class="ui segment" style="margin-top: 0%;margin: 4.5%">
      <div class="ui blue segment">
        <h2>Conference : _ {{$con->Acronym_L}} _
        		<a style="float: right;" class="ui twitter button" href="{{ route('adminconference.viewpaper',['id'=>$con->conid]) }}" style="display: inline-block;">
        View paper
        </a>

        </h2>
      </div>
      <div class="subcontent">
			<div style="clear:right" id="cfp">
				<div class="ui segment">
					<span>&bull;</span>
					<a>รายละเอียด</a>
					<span>&bull;</span>
					<a>หัวข้อ</a>
					@if(Auth::user()->status == 'superadmin')
						<span>&bull;</span>
						<a style="float: right;">ผู้สร้างการประชุม_{{$admin[0]->name}}_</a>
					@endif
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
    	<a style="display: inline-block;">
        <form method="POST" action="/list/{{$con->conid}}">
      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      		<input type="hidden" name="_method" value="DELETE">
      		<button type="submit" class="ui google plus button">C l o s e</button>
		</form>
		</a>
    </div>
</body>
</html>
