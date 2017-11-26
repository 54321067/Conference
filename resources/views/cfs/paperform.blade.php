<!DOCTYPE html>
<html>
<head>
	<title>Install Paper</title>
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
		.bot-left {
			position: relative;
			margin: 2%;
		}
		.bot-left:before, .bot-left:after {
			content: "";
			position: absolute;
			bottom: -10px;
			left: -3px;
		}
		.bot-left:after {
			right: -3px;
			height: 5px;
			background-image: -webkit-gradient(linear, 0 0, 100% 0, from(#358C3E), to(transparent));
			background-image: -webkit-linear-gradient(left, #358C3E, transparent);
			background-image: -moz-linear-gradient(left, #358C3E, transparent);
			background-image: -o-linear-gradient(left, #358C3E, transparent);
		}
		
		td, th {
		    padding: 1%;
		}
	</style>
</head>
<body class="body">
	@include('cfs.userheader')
	<div class="ui segment" style="padding: 3%;margin: 4.5%;margin-top: 1%">
		<div class="ui tertiary segment"
			style="margin: 2%;
			border-bottom: thick solid #358C3E;
    		border-top: thick solid #358C3E;
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
    					<img src="/images/special_journal.png" class="ui small image" style="margin: 0 auto;">
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
							{{$con->Acronym_L}} : {{$con->Acronym_N}}
						</h1>
						<div class="ui divider" style="max-width: 95%"></div>
						<p><b>{{ $con->Loca }} , {{ $con->R_Line }}</b></p>
					</td>
				</tr>
			</table>
		</div>

		<form class="ui form segment" action="{{ url('/paperform/'.$con->conid ) }}" method="post" name="form" id="form" enctype = "multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="bot-left">
				<h1 class="ui header">Submit Paper</h1>
			</div>

			<div style="padding: 2%">
				<div class="two fields">
					<div class="field">
						<label>Paper name</label>
						<input placeholder="Paper name" name="paper-name" id="paper1" type="text">
					</div>
					<div class="field">
						<label>Writer name</label>
						<input placeholder="Writer name" name="writer-name" id="paper2" type="text">
					</div>
				</div>
    			<div class="field">
    				<label>Choose keyword</label>
    				<div class="ui fluid multiple search selection dropdown" id="keyword">
				        <input name="tags" type="hidden" value="" id="paper3">
				        <i class="dropdown icon"></i>
				        <input class="search" autocomplete="off" tabindex="0" readonly><span class="sizer"></span>
				        <div class="default text">Choose keyword</div>
				        <div class="menu transition hidden" tabindex="-1">
					        @if(!empty($con->topic_1) > 0)
					        	@php
									$datas = explode(",", $con->topic_1)
								@endphp
					        	@foreach($datas as $data)
						        	<div class="item" data-value="{{ $data }}">{{ $data }}</div>
								@endforeach
							@endif
							@if(!empty($con->topic_2) > 0)
					        	@php
									$datas2 = explode(",", $con->topic_2)
								@endphp
					        	@foreach($datas2 as $data2)
						        	<div class="item" data-value="{{ $data2 }}">{{ $data2 }}</div>
								@endforeach
							@endif
						</div>
					</div>
    			</div>
	    		<div class="field" style="text-align: center">
	    			<label> or add keyword</label>
	    		</div>
	  			<div class="ui grid">
	  				<div class="three column row">
	  					<div class="column">
			  				<div class="field">
			  					<label>Keyword 1</label>
			  					<input  id="paper4" type="text" name="add-keyword1" placeholder="Add keyword 1">
			  				</div>
			  			</div>
			  			<div class="column">
			  				<div class="field">
			  					<label>Keyword 2</label>
			  					<input  id="paper5" type="text" name="add-keyword2" placeholder="Add keyword 2">
			  				</div>
			  			</div>
			  			<div class="column">
			    			<div class="field">
			  					<label>Keyword 3</label>
			  					<input  id="paper6" type="text" name="add-keyword3" placeholder="Add keyword 3">
			  				</div>
			  			</div>
		  			</div>
		  			<div class="one column row">
		  				<div class="column" style="padding-left: 30%;padding-right: 30%">
			  				<div class="field">
			  					<label>PDF file</label>
			  					<div class="ui action input">
							        <input type="text" id="_attachmentName" name="PDF" readonly>
							        <label for="attachmentName" class="ui icon button btn-file">
							             <i class="upload icon"></i>
							             <input type="file" id="attachmentName" name="attachmentName" style="display: none">
							             
							        </label>
							    </div>
			  				</div>
			  			</div>
			  		</div>
	  			</div>
	  			<div style="text-align: center">
					<button type="button" onclick="pdfEmpty()" class="ui primary new button" tabindex="0" style="font-size: 170%;margin: 2%">
					    Send Paper
					</button>
				</div>
	  			<div class="ui error message"></div>
	  		</div>
		</form>
	</div>
<!--Modal Submit -->
	<div class="ui long modal" id="modal-test">
	  <i class="close icon"></i>
	  <div class="header" style="background-color: #80ffaa">
	    <h1>Confirm Paper</h1>
	  </div>
	  <div class="scrolling content">
	  	<table class="ui definition table">
		    <tr>
		    	<td style="width: 30%">
		    		<h2 style="color: black;">Paper name</h2>
		    	</td>
		    	<td>
		    		<h3 id="c1" style="color: black;"></h3>
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<h2 style="color: black;">Writer name</h2>
		    	</td>
		    	<td>
		    		<h3 id="c2" style="color: black;"></h3>
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<h2 style="color: black;">Keyword</h2>
		    	</td>
		    	<td>
		    		<h3 id="c3" style="color: black;"></h3>

		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<h2 style="color: black;">Add keyword</h2>
		    	</td>
		    	<td>
		    		<h3 id="c4"></h3>
		    		<h3 id="c5"></h3>
		    		<h3 id="c6"></h3>
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<h2 style="color: black;">PDF</h2>
		    	</td>
		    	<td>
		    		<h3 id="c7" style="color: black;"></h3>
		    	</td>
		    </tr>
		</table>
	  </div>
	  <div class="actions">
	  		<div style="text-align: center" >
			  	<button type="submit" form="form" value="Submit" class="ui positive button" name="btn-upload">
						ยืนยัน
				</button>
			    <div class="ui black deny button">
			    	ยกเลิก
			    </div>
		  	</div>
	  </div>
	</div>

<!--end Modal-->
<script type="text/javascript">
	$('#form').form({
	    fields: {
	    	paper1: {
	        identifier: 'paper-name',
	        rules: [
	          {
	            type   : 'empty',
	            prompt : 'Please enter your paper name.'
	          }
	        ]
	     },

	     paper3: {
	        identifier: 'tags',
	        rules: [
	          {
	            type   : 'empty',
	            prompt : 'Please enter your main content.'
	          }
	        ]
	     }

	     ,
	     	paper2: {
	        identifier: 'writer-name',
	        rules: [
	          {
	            type   : 'empty',
	            prompt : 'Please enter your writer name.'
	          }
	        ]
	     },
	     	_attachmentName: {
	        identifier: 'PDF',
	        rules: [
	          {
	            type   : 'empty',
	            prompt : 'Please upload your pdf file.'
	          }
	        ]
	     }


	    } 
  	});
	function pdfEmpty(){
		if( $('#form').form('is valid') )
		{

		 	var paper1 = document.getElementById("paper1");
		    document.getElementById("c1").innerHTML = paper1.value;
		    var paper2 = document.getElementById("paper2");
		    document.getElementById("c2").innerHTML = paper2.value;
		    var paper3 = document.getElementById("paper3");
		    document.getElementById("c3").innerHTML = paper3.value;
		    var paper4 = document.getElementById("paper4");
		    document.getElementById("c4").innerHTML = paper4.value;
		    var paper5 = document.getElementById("paper5");
		    document.getElementById("c5").innerHTML = paper5.value;
		    var paper6 = document.getElementById("paper6");
		    document.getElementById("c6").innerHTML = paper6.value;
		    var _attachmentName = document.getElementById("_attachmentName");
		    document.getElementById("c7").innerHTML = _attachmentName.value;
			$('#modal-test').modal('show');
		}
		else
		{
      		$('#form').form('validate form');
    	}
    }
	var fileExtentionRange = '.pdf';
	var MAX_SIZE = 30; // MB
	
	$(document).on('change', '.btn-file :file', function() {
	    var input = $(this);

	    if (navigator.appVersion.indexOf("MSIE") != -1) { // IE
	        var label = input.val();

	        input.trigger('fileselect', [ 1, label, 0 ]);
	    } else {
	        var label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	        var numFiles = input.get(0).files ? input.get(0).files.length : 1;
	        var size = input.get(0).files[0].size;

	        input.trigger('fileselect', [ numFiles, label, size ]);
	    }
	});
    
	$('.btn-file :file').on('fileselect', function(event, numFiles, label, size) {
	    $('#attachmentName').attr('name', 'attachmentName'); // allow upload.

	    var postfix = label.substr(label.lastIndexOf('.'));
	    if (fileExtentionRange.indexOf(postfix.toLowerCase()) > -1) {
	        if (size > 1024 * 1024 * MAX_SIZE ) {
	            alert('max size ： ' + MAX_SIZE + ' MB.');

	            $('#attachmentName').removeAttr('name'); // cancel upload file.
	        } else {
	            $('#_attachmentName').val(label);
	        }
	    } else {
	        alert('file type ： ' + fileExtentionRange);

	        $('#attachmentName').removeAttr('name'); // cancel upload file.
	    }
	});
	
	
</script>
</body>
</html>