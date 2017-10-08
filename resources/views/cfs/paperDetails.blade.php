<!Doctype html>
<html>
	<head>
		<title>{{$namepaper}}</title>
		 @include('cfs.header')
  		<style>.body { 
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
				    overflow: hidden;
				    position: fixed;
			}
		</style>
	</head>
	<body>
		<div class="body">
			@include('cfs.userheader')
			<?php
			 $id = 1;
			 foreach ($papers as $paper) 
			 {?>
			<div class="ui grid" style="margin-left:4.5%;margin-top:3%;margin-bottom:3%;margin-right:4.5%;">
				<div class="row">
			    	<div class="ui inverted segment sixteen wide column" style="background-color:#99ffce">
						<label>
							<h1 align="center">
								<font color="#000">ร า ย ล ะ เ อี ย ด ข อ ง เ อ ก ส า ร</font>
							</h1>
						</label>
					</div>
					<div class="ui eight wide column" style="background-color:#ebfcf2">
						<br>
						<label>
							<h3 align="left" style="margin-left:10%;">
								<font color="black">เอกสารลำดับที่ : </font><font color="red" style="font-size:90%">{{ $paper->paperid }}</font>
							</h3>
						</label>
						<br>
					</div>
					<div class="ui eight wide column" style="background-color:#ebfcf2">
						<br>
						<label>
							<h3 align="right" style="margin-right: 10%">
							 @if($paper->status_reviewer == 0 and $paper->status_payment == 0)
                      			<font color="black">การเลือกกรรมการ : </font><font color="red">ยังไม่เลือก</font>
                      			&nbsp;&nbsp;&nbsp;&nbsp;
                      			<font color="black">การชำระเงิน : </font><font color="red">ไม่ได้ชำระเงิน</font>
                      		 @elseif($paper->status_reviewer == 0 and $paper->status_payment == 1)
                  			 	<font color="black">การเลือกกรรมการ : </font><font color="red">ยังไม่เลือก</font>
                  			 	&nbsp;&nbsp;&nbsp;&nbsp;
                  			 	<font color="black">การชำระเงิน : </font><font color="green">ชำระเงินแล้ว</font>
                  			 @elseif($paper->status_reviewer == 1 and $paper->status_payment == 0)
                  			 	<font color="black">การเลือกกรรมการ : </font><font color="green">เลือกแล้ว</font>
                  			 	&nbsp;&nbsp;&nbsp;&nbsp;
                  			 	<font color="black">การชำระเงิน : </font><font color="red">ไม่ได้ชำระเงิน</font>
                  			 @elseif($paper->status_reviewer == 1 and $paper->status_payment == 1)
                  			 	<font color="black">การเลือกกรรมการ : </font><font color="green">เลือกแล้ว</font>
                  			 	&nbsp;&nbsp;&nbsp;&nbsp;
                  			 	<font color="black">การชำระเงิน : </font><font color="green">ชำระเงินแล้ว</font>
                  			 @endif
							</h3>
						</label>	
					</div>
					<div class="ui sixteen wide column" style="background-color:#fbfffe">
						<br>
						<label>
							<h3 align="center">
								<font color="black">เนื้อหาย่อของเอกสารเรื่อง : </font><font color="#12aa1f">{{ $paper->name }}</font>
							</h3>
						<label>	
					</div>
					<div class="ui sixteen wide column form" style="background-color:#ffffff">
						<div style="margin-left:10%;margin-right:10%;">	
							<textarea type="text" id="txtIntroductionReport" style="font-size:120%;resize:both;overflow:auto;" disabled="true">          {{ $paper->topic}}</textarea>
						</div>				
					</div>
					<div class="ui sixteen wide column form" style="background-color:#fbfffe">
						<br>
						<!-- <label>
							<h3 align="center" style="margin-left:10%;margin-right:10%;">
								<font color="black">แสดงความคิดเห็นของท่านที่มีต่อเอกสารชิ้นนี้</font>
							</h3>
						</label>
						<br>	
						<div style="margin-left:10%;margin-right:10%;">	
							<textarea type="text" id="txtCommentAboutReport" rows="4" style="font-size:120%;resize:both" placeholder="แสดงความคิดเห็นได้ที่นี่"></textarea>
						</div> -->
						<br>				
					</div>
					<div class="ui sixteen wide column form" style="background-color:#fbfffe">
						<div style="margin-left:10%;margin-right:10%;" align="center">
							@if($paper->status_reviewer == 1 and $paper->status_payment == 0)
								<!-- <form action="{{ url('/Mysubmition/{id}/{pname}/payment') }}" id="toPayment" method="get"> -->
                  			 		<button id="btnGotoPaymentSubmit" form="toPayment" align="center" class="large ui green button" type="submit" onclick="">ไปยังหน้าชำระค่าบริการ</button>
                  			 	<!-- </form> -->
                  			@endif	
						</div>
						<br>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</body>
<html>
<!-- //route
Route::get('/Mysubmition',['as'=>'conferencePaper.Mysubmition','uses'=>'MovieController@gotosubmition']);
Route::get('/Mysubmition/{id}/{pname}',['as'=>'conferencePaper.paperDetails','uses'=>'MovieController@gotopaperdetail']);
//
 -->
<!--//controller
	 public function gotosubmition()
    {  
        return view('conferencePaper.mySubmition');
    }
    public function gotopaperdetail($id,$pname)
    {   
        return view('conferencePaper.paperDetails')->with('idpaper',$id)->with('namepaper',$pname);
    }
 -->