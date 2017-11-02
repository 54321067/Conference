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
			<form target ="_blank"  action="{{ url('/Mysubmition/'.$paper->paper_id.'/'.$paper->paper_name.'/invoice.pdf') }}" id="toPayment" method="post">
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
							<?php if($paper->status_reviewer == 0){ ?>
								 	<font color="black">การเลือกกรรมการ : </font><font color="red">ยังไม่เลือก</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;       			
	                  		<?php }elseif($paper->status_reviewer == 1){ ?>
	                  				<font color="black">การเลือกกรรมการ : </font><font color="green">เลือกแล้ว</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;
								 <?php if($paper->status_check < 3){?>
	                      			<font color="black">การตรวจ : </font><font color="red">ยังไม่ตรวจ</font>
	                      			&nbsp;&nbsp;&nbsp;&nbsp;
	                      			<font color="black">การชำระเงิน : </font><font color="red">ไม่ได้ชำระเงิน</font>
	                      		 <?php }elseif($paper->status_check == 3){ ?>
     									<?php if($paper->status_score ==-99){ ?>
				                          <font color="black">การตรวจ : </font><font color="red">ยังไม่ตรวจ</font>
				                          &nbsp;&nbsp;&nbsp;&nbsp;
				                          <font color="black">การชำระเงิน : </font><font color="red">ยังไม่ได้ชำระเงิน</font>
				                        <?php }elseif($paper->status_score==-3){ ?>
				                        	<font color="black">การตรวจ : </font><font color="red">strong reject</font>
				                        <?php }elseif($paper->status_score==-2){ ?>
				                        	<font color="black">การตรวจ : </font><font color="red">reject</font>
				                        <?php }elseif($paper->status_score==-1){ ?>
				                        	<font color="black">การตรวจ : </font><font color="red">weak reject</font>
				                        <?php }elseif($paper->status_score==0){ ?>
				                        	<font color="black">การตรวจ : </font><font color="red">boundary</font>
				                        <?php }elseif($paper->status_score==1){ ?>
				                        	<font color="black">การตรวจ : </font><font color="green">Weak accept</font>
				                        	<?php if($paper->status_payment == 0){ ?>
				                        	&nbsp;&nbsp;&nbsp;&nbsp;
				                        		<?php if($paper->status_send == 0){ ?>
	                  							<font color="black">การชำระเงิน : </font><font color="red">ยังไม่ชำระเงิน</font>
	                  							<?php }else{ ?>
	                  								<font color="black">การชำระเงิน : </font><font color="blue">รออนุมัติ</font>

	                  							<?php } ?>
	                  						<?php }elseif($paper->status_payment == 1){ ?>
	                  						&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<font color="black">การชำระเงิน : </font><font color="green">อนุมัติแล้ว</font>
	                  						<?php }else{ ?>
	                  						&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<font color="black">การชำระเงิน : </font><font color="red">เกิดข้อผิดพลาด</font>
	                  						<?php } ?>
				                        <?php }elseif($paper->status_score==2){ ?>
				                        	<font color="black">การตรวจ : </font><font color="green">Accept</font>
				                        	<?php if($paper->status_payment == 0){ ?>
				                        	&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<?php if($paper->status_send == 0){ ?>
	                  							<font color="black">การชำระเงิน : </font><font color="red">ยังไม่ชำระเงิน</font>
	                  							<?php }else{ ?>
	                  								<font color="black">การชำระเงิน : </font><font color="blue">รออนุมัติ</font>

	                  							<?php } ?>
	                  						<?php }elseif($paper->status_payment == 1){ ?>
	                  						&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<font color="black">การชำระเงิน : </font><font color="green">อนุมัติแล้ว</font>
	                  						<?php }else{ ?>
	                  						&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<font color="black">การชำระเงิน : </font><font color="red">เกิดข้อผิดพลาด</font>
	                  						<?php } ?>
				                        <?php }elseif($paper->status_score==3){ ?>
					                        <font color="black">การตรวจ : </font><font color="green">strong accept</font>
					                        <?php if($paper->status_payment == 0){ ?>
					                        &nbsp;&nbsp;&nbsp;&nbsp;
	                  							<?php if($paper->status_send == 0){ ?>
	                  							<font color="black">การชำระเงิน : </font><font color="red">ยังไม่ชำระเงิน</font>
	                  							<?php }else{ ?>
	                  								<font color="black">การชำระเงิน : </font><font color="blue">รออนุมัติ</font>

	                  							<?php } ?>
	                  						<?php }elseif($paper->status_payment == 1){ ?>
	                  						&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<font color="black">การชำระเงิน : </font><font color="green">อนุมัติแล้ว</font>
	                  						<?php }else{ ?>
	                  						&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<font color="black">การชำระเงิน : </font><font color="red">เกิดข้อผิดพลาด</font>
	                  						<?php } ?>
					                    <?php }else{ ?>
					                    	<font color="black">การตรวจ : </font><font color="red">ติดต่อเจ้าหน้าที่</font>
					                    	<?php if($paper->status_payment == 0){ ?>
					                    	&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<?php if($paper->status_send == 0){ ?>
	                  							<font color="black">การชำระเงิน : </font><font color="red">ยังไม่ชำระเงิน</font>
	                  							<?php }else{ ?>
	                  								<font color="black">การชำระเงิน : </font><font color="blue">รออนุมัติ</font>

	                  							<?php } ?>
	                  						<?php }elseif($paper->status_payment == 1){ ?>
	                  						&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<font color="black">การชำระเงิน : </font><font color="green">อนุมัติแล้ว</font>
	                  						<?php }else{ ?>
	                  						&nbsp;&nbsp;&nbsp;&nbsp;
	                  							<font color="black">การชำระเงิน : </font><font color="red">เกิดข้อผิดพลาด</font>
	                  						<?php }?>
				                        <?php } ?>	

	                  			 <?php }
	                  			 } ?>
	                  		
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
								เนื้อหาของเอกสารเรื่อง : 
								<a id="detailFilePaper"  target ="_blank"  href="{{ route('viewpaper',['name'=>$paper->pdf_name]) }}">{{ $paper->pdf_name }}</a>
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

					
					<div class="ui sixteen wide column form" style="background-color:#fbfffe;">
						<div style="margin-left:10%;margin-right:10%;" align="center">
							<?php if($paper->status_score >= 1 and $paper->status_payment == 0 and $paper->status_check==3){?>
                  			 		<button id="btnGotoPaymentSubmit" form="toPayment" align="center" class="large ui green button" type="submit"  onclick="">ไปยังหน้าชำระค่าบริการ</button>
                  			 		</form>
                  			 		@if($paper->status_send==0  )
                  			 		<button  type="button" class="ui primary test button"><h4>อัพโหลดหลักหฐานการจ่ายเงิน
                  			 		</h4></button>
                  			 		@endif
                  			<?php }?>
                  			

                  			<div class="ui tiny modal" id="modal-test" style="margin-top:0%; position: fixed;top:40px;bottom: 40px">
						  <i class="close icon"></i>
							<div class="header" style="background-color: #80ffaa">
							    <h1>อัพโหลดหลักฐานการจ่ายเงิน</h1>
							    <h2 id="at"></h2>
							</div>
						<div class="content">
							<form action="{{ URL::to('/upload/'.$paper->paper_id) }}" method="post" enctype="multipart/form-data">
                  						<label  style="margin-top: 1%">
									    <input type="file" name="file" id="file"  style="margin-top: 3%;margin-left: 1%">
									    
										<input type="hidden" value="{{ csrf_token() }}" name="_token" >
										</label>
										<div>
											<button type="submit" value="Upload" name="submit"  class="ui green button" style="margin-top: 3%;margin-left: 1%">
									    	Upload
									    </button>
										</div>
										
									</form>
						</div>
					</div>
                  			
                  					


							

						</div>
						<br>
					</div>
				</div>
			</div>
			
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
