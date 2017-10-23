<!Doctype html>
<html>
	<head>
		<title>{{$namepaper}}</title>
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
			<form action="{{ url('/Mysubmition/'.$paper->paper_id.'/'.$paper->paper_name.'/invoice.pdf') }}" id="toPayment" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="ui grid" style="margin-left:4.5%;margin-top:3%;margin-bottom:3%;margin-right:4.5%;margin-top: 1%">
				<div class="row">
			    	<div class="ui inverted segment sixteen wide column" style="background-color:#99ffce">
						<label>
							<h1 align="center">
								<font color="#000">ร า ย ล ะ เ อี ย ด ข อ ง เ อ ก ส า ร</font>
							</h1>
						</label>
					</div>
										<div class="ui six wide column" style="background-color:#ebfcf2">
						<br>
						<label>
							<h3 align="left" style="margin-left:10%;">
								<font color="black">เอกสารลำดับที่ : </font><font color="red" style="font-size:90%">{{ $idpaper }}</font>
							</h3>
						</label>
						<br>
					</div>
					<div class="ui ten wide column" style="background-color:#ebfcf2">
						<br>
						<label>
							<h3 align="right" style="margin-right: 10%">
							@if($paper->status_reviewer == 0)
								 	<font color="black">การเลือกกรรมการ : </font><font color="red">ยังไม่เลือก</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;       			
	                  		@elseif($paper->status_reviewer == 1)
								 @if($paper->status_check == 0 and $paper->status_payment == 0)
								 	<font color="black">การเลือกกรรมการ : </font><font color="green">เลือกแล้ว</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;
	                      			<font color="black">การตรวจ : </font><font color="red">ยังไม่ตรวจ</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;
	                      			<font color="black">การชำระเงิน : </font><font color="red">ไม่ได้ชำระเงิน</font>
	                      		 @elseif($paper->status_check == 0 and $paper->status_payment == 1)
	                      		 	<font color="black">การเลือกกรรมการ : </font><font color="green">เลือกแล้ว</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;
	                  			 	<font color="black">การตรวจ : </font><font color="red">ยังไม่ตรวจ</font>
	                  			 	&nbsp;&nbsp;&nbsp;&nbsp;
	                  			 	<font color="black">การชำระเงิน : </font><font color="green">ชำระเงินแล้ว</font>
	                  			 @elseif($paper->status_check == 1 and $paper->status_payment == 0)
	                  			 	<font color="black">การเลือกกรรมการ : </font><font color="green">เลือกแล้ว</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;
	                  			 	<font color="black">การตรวจ : </font><font color="green">ผ่านแล้ว</font>
	                  			 	&nbsp;&nbsp;&nbsp;&nbsp;
	                  			 	<font color="black">การชำระเงิน : </font><font color="red">ไม่ได้ชำระเงิน</font>
	                  			 @elseif($paper->status_check == 1 and $paper->status_payment == 1)
	                  			 	<font color="black">การเลือกกรรมการ : </font><font color="green">เลือกแล้ว</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;
	                  			 	<font color="black">การตรวจ : </font><font color="green">ผ่านแล้ว</font>
	                  			 	&nbsp;&nbsp;&nbsp;&nbsp;
	                  			 	<font color="black">การชำระเงิน : </font><font color="green">ชำระเงินแล้ว</font>
	                  			 @endif
	                  		@endif
							</h3>
						</label>	
					</div>
					
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">ชื่อเต็มของหัวข้อการประชุม</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $vb[0]->Acronym_N }}</font>
							</h3>
						<label>
					</div>

					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">ชื่อย่อของหัวข้อการประชุม</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $vb[0]->Acronym_L }}</font>
							</h3>
						<label>
					</div>

					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">ชื่อหัวการประชุมหลัก</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $vb[0]->topic_1 }}</font>
							</h3>
						<label>
					</div>

					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">ชื่อหัวการประชุมย่อย</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $vb[0]->topic_2 }}</font>
							</h3>
						<label>
					</div>

					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">ชื่อเอกสารเรื่อง</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $paper->paper_name }}</font>
							</h3>
						<label>
					</div>

					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">ชื่อ-สกุลผู้เขียนเอกสาร</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $paper->writer_name }}</font>
							</h3>
						<label>
					</div>

					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">สิ่งที่เกี่ยวข้อง</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $paper->keyword1 }}</font>
							</h3>
						<label>
					</div>

					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">สิ่งที่เกี่ยวข้องเพิ่มเติม</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $paper->add_keyword1 }}  {{ $paper->add_keyword2 }}  {{ $paper->add_keyword3}}</font>
							</h3>
						<label>
					</div>

					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">รายละเอียดไฟล์ของเอกสาร</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<a id="detailFilePaper" href="">เนื้อหาของเอกสารเรื่อง : {{ $paper->paper_name }}</a>
							</h3>
						<label>
					</div>


					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>

						<label>
					</div>
					<div class="ui three wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">วันที่ส่งเอกสารฉบับนี้</font>
							</h3>
						<label>
					</div>
					<div class="ui one wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="black">:</font>
							</h3>
						<label>
					</div>
					<div class="ui eleven wide column" style="background-color:#fbfffe">
						<br>
						<br>
						<label>
							<h3 align="left">
								<font color="#12aa1f">{{ $paper->created_at }}</font>
							</h3>
						<label>
					</div>
					
					<div class="ui sixteen wide column form" style="background-color:#fbfffe">
						<div style="margin-left:10%;margin-right:10%;" align="center">
							@if($paper->status_reviewer == 1 and $paper->status_payment == 0)
                  			 		<button id="btnGotoPaymentSubmit" form="toPayment" align="center" class="large ui green button" type="submit" onclick="">ไปยังหน้าชำระค่าบริการ</button>
                  			@endif
						</div>
						<br>
					</div>
				</div>
			</div>
			</form>
		</div>
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