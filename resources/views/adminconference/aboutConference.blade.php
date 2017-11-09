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
				@if(Auth::user()->status == 'superadmin')
				<div class="ui brown tag label" style="margin-bottom: 1%;float: right;">ผู้สร้างการประชุม_{{$admin[0]->name}}_
				</div>
				@endif
				<table>
					<tr>
						<td style="width: 842.55px">
							<div class="ui attached segment">
								<h>
								  ชื่อการประชุม
								</h>
								<p>{{$con->name}} {{$con->Acronym_N}}</p>
								
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
							<a target="_blank" href="{{$con->Y_Line}}">{{$con->Y_Line}}</a>
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
					<?php
                        $tag1s = explode(",", $con->topic_1);
                        foreach ($tag1s as $tag) { $i=rand(1,10); ?>
                            @if($i<= 2)
                                <a class="ui blue label" style="margin-top: 0.5%">{{$tag}}</a>
                            @elseif($i >= 2 and $i < 4)
                                <a class="ui red label" style="margin-top: 0.5%">{{$tag}}</a>
                            @elseif($i >= 4  and $i < 6)
                                <a class="ui brown label" style="margin-top: 0.5%">{{$tag}}</a>
                            @elseif($i >= 6 and $i < 8)
                                <a class="ui purple label" style="margin-top: 0.5%">{{$tag}}</a>
                            @else
                                <a class="ui green label" style="margin-top: 0.5%">{{$tag}}</a>
                            @endif
                    <?php $i++; } ?>
                    <?php $j=0; ?>
                    <?php
                        $tag2s = explode(",", $con->topic_2);
                        foreach ($tag2s as $tag) {  $j=rand(1,10);?>
                            @if($j<= 2)
                                <a class="ui violet label" style="margin-top: 0.5%">{{$tag}}</a>
                            @elseif($j >= 2 and $j < 4)
                                <a class="ui yellow label" style="margin-top: 0.5%">{{$tag}}</a>
                            @elseif($j >= 4  and $j < 6)
                                <a class="ui teal label" style="margin-top: 0.5%">{{$tag}}</a>
                            @elseif($j >= 6 and $j < 8)
                                <a class="ui grey label" style="margin-top: 0.5%">{{$tag}}</a>
                            @else
                                <a class="ui brown label" style="margin-top: 0.5%">{{$tag}}</a>
                            @endif

                    <?php $j++; }?> 
                        
                                    
                                           
				</div>
					<h2><a >รายละเอียดการประชุม</a></h2>
					<hr>
				<div class="ui ignored message">
					<p style="text-align:justify">{{$con->Detail}}</p>
				</div>
				
    		</div>
    	</div>
    	<br>
    	<a style="display: inline-block;">
        <form method="POST" id="close" action="/list/{{$con->conid}}">
      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      		<input type="hidden" name="_method" value="DELETE">
      		<button type="button" class="ui google plus test button">C l o s e</button>
		</form>
		</a>
<div class="ui tiny modal" id="modal-test">
  <i class="close icon"></i>
  <div class="header" style="background-color: #80ffaa">
    <h1>#ยืนยันการปิดการประชุม</h1>
  </div>
  <div class="actions">
      <button type="submit" style="float: left" form="close"  class="ui positive button">
      <a><font color="black">ยืนยัน</font></a>
    </button>
    <div class="ui black deny button">
        ยกเลิก
      </div>
    </div>
</div>

    </div>
</body>
</html>
