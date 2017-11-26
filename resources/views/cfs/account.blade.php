<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Account</title>
	@include('cfs.header')
	<script>
	function getEdit() {
        $("#txtNameSurname").prop('disabled', false);
        $("#txtPhone").prop('disabled', false);
        $("#txtOrganization").prop('disabled', false);    
        $("#txtAddress").prop('disabled', false);
        $("#txtNationid").prop('disabled', false);
        $("#txtEmail").prop('disabled', false);
        txtNameSurname.style.backgroundColor='#fff';
        txtPhone.style.backgroundColor='#fff';
        txtOrganization.style.backgroundColor='#fff';
        txtAddress.style.backgroundColor='#fff';
        txtNationid.style.backgroundColor='#fff';
        txtEmail.style.backgroundColor='#fff';
        $('#btnSaveEdit').show();
		$('#btnCancelEdit').show();
		$('#btnEdit').hide();
    }
   
    function getSaveEdit() {
    	
        $("#txtNameSurname").prop('disabled', true);
        $("#txtPhone").prop('disabled', true);
        $("#txtOrganization").prop('disabled', true);
        $("#txtAddress").prop('disabled', true);
        $("#txtNationid").prop('disabled', true);
        $("#txtEmail").prop('disabled', true);
        txtNameSurname.style.backgroundColor='#fcf4f4';
        txtPhone.style.backgroundColor='#fcf4f4';
        txtOrganization.style.backgroundColor='#fcf4f4';
        txtAddress.style.backgroundColor='#fcf4f4';
        txtNationid.style.backgroundColor='#fcf4f4';
        txtEmail.style.backgroundColor='#fcf4f4';

        $('#btnSaveEdit').hide();
		$('#btnCancelEdit').hide();
		$('#btnEdit').show();
    }

    function getCancelEdit() {
        $("#txtNameSurname").prop('disabled', true);
        $("#txtPhone").prop('disabled', true);
        $("#txtOrganization").prop('disabled', true);
        $("#txtAddress").prop('disabled', true);
        $("#txtNationid").prop('disabled', true);
        $("#txtEmail").prop('disabled', true);
        txtNameSurname.style.backgroundColor='#fcf4f4';
        txtPhone.style.backgroundColor='#fcf4f4';
        txtOrganization.style.backgroundColor='#fcf4f4';
        txtAddress.style.backgroundColor='#fcf4f4';
        txtNationid.style.backgroundColor='#fcf4f4';
        txtEmail.style.backgroundColor='#fcf4f4';

        $('#btnSaveEdit').hide();
		$('#btnCancelEdit').hide();
		$('#btnEdit').show();
    }
	</script>
	<style>.body { 
				overflow:scroll;
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
				    /*overflow: hidden;*/
				    position: fixed;
			}
	</style>
</head>
<body>
	<div class="body" id="body">
		@include('cfs.userheader')
		<div class="ui grid" style="margin-left:4.5%;margin-bottom:3%;margin-right:4.5%;">
			<div class="row">	
		  		<form method="post" action="{{route('cfs.updateaccount')}}" class="ui segment twelve wide column" style="background-color:#ebfcf2">
		  			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		  			<div class="ui center aligned segment" style="background-color:#99ffce">
					  	<label>
							<h3 color="#006600" align="center">ข้อมูลส่วนตัว</h3>
					  	</label>	
			  		</div>	
				  	<br>
			  		<div class="row" >
					    <div class="ui two grid form">
					    	<div class="three wide column">	
					    		<label>
									<h4 align="center">
										<font color="#006600">ชื่อ-สกุล</font>
									</h4>
								</label>
					    	</div>
					    	<div class="six wide column" align="center">			    			
					  			<input id="txtNameSurname" name="names" value="{{ $user[0]->name }}" type="text" placeholder="ชือ-นามสกุล" style="background-color:#fcf4f4">
					  			<script>$("#txtNameSurname").prop('disabled', true);</script>
				  			</div>
				  			<div class="two wide column">	
					    		<label>
									<h4 align="center">
										<font color="#006600">เบอร์โทรศัพท์</font>
									</h4>
								</label>
					    	</div>
					    	<div class="four wide column" align="left">			    			
					  			<input id="txtPhone" name="phone" value="{{ $user[0]->phone }}" type="text" placeholder="เบอร์โทรศัทพ์" style="background-color:#fcf4f4">	    			
			    				<script>$("#txtPhone").prop('disabled', true);</script>
				  			</div>
				  			<div class="one wide column">	
				  			</div>	
				  		</div>
					</div>
			    	<br>
			    	<div class="row">
			    		<div class="ui two column grid form">
			    			<div class="three wide column">	
					    		<label>
									<h4 align="center">
										<font color="#006600">องค์กรที่สังกัด</font>
									</h4>
								</label>
					    	</div>
					    	<div class="twelve wide column">			    			
					  			<textarea rows="1" name="department" id="txtOrganization" type="text" placeholder="องค์กรที่สังกัด" style="background-color:#fcf4f4;height:3em;min-height: 3em;max-height: 6em;">{{ $user[0]->department }}</textarea>
			    				<script>$("#txtOrganization").prop('disabled', true);</script>
				  			</div>
				  		</div>
			    	</div>
			    	<div class="row">
			    		<div class="ui two column grid form">
			    			<div class="three wide column">	
			    				<br>
					    		<label>
									<h4 align="center">
										<font color="#006600">ที่อยู่ปัจจุบัน</font>
									</h4>
								</label>
					    	</div>
					    	<div class="twelve wide column">			    			
					  			<textarea name="address" rows="2" id="txtAddress" type="text" placeholder="ที่อยู่" style="background-color:#fcf4f4;height:4em;min-height: 4em;max-height: 8em;">{{ $user[0]->address }}</textarea>
			    				<script>$("#txtAddress").prop('disabled', true);</script>
				  			</div>
				  		</div>
			    	</div>
			    	<br>
			    	<div class="row">
			    		<div class="ui two column grid form">
			    			<div class="three wide column">	
					    		<label>
									<h4 align="center">
										<font color="#006600">เลขบัตรประชาชน</font>
									</h4>
								</label>
					    	</div>
					    	<div class="four wide column" align="center">			    			
					  			<input name="nation" id="txtNationid" value="{{ $user[0]->nation_id }}" type="text" placeholder="เลขบัตรประชาชน" style="background-color:#fcf4f4">
			    				<script>$("#txtNationid").prop('disabled', true);</script>
				  			</div>
				  			<div class="two wide column">	
					    		<label>
									<h4 align="center">
										<font color="#006600">อีเมลล์</font>
									</h4>
								</label>
					    	</div>
					    	<div class="six wide column" align="center">			    			
					  			<input name="email" id="txtEmail" value="{{ $user[0]->email }}" type="text" placeholder="อีเมลล์" style="background-color:#fcf4f4">
			    				<script>$("#txtEmail").prop('disabled', true);</script>
				  			</div>
				  			<div class="one wide column">	
				  			</div>
				  		</div>
			    	</div>
			    	<br>
			    	<br>
			    	<div class="row">
			    		<div class="ui ten column grid form">
			    			<div class="sixteen wide column" align="center">	    			    	
					  			<button id="btnEdit" class="ui animated green button" type="button" onclick="getEdit()" style="color:#ebfcf2">
						  			<span class="visible content">แก้ไข</span>
						  			<span class="hidden content"><i class="large edit icon"></i></span>
					  			</button>
					  			<button id="btnSaveEdit" class="ui animated green button" type="submit" >
							  		<span class="visible content">บันทึก</span>
							  		<span class="hidden content"><i class="large checkmark icon"></i></span>
							  	</button>
							  	<script>$('#btnSaveEdit').hide();</script>
							  	<button id="btnCancelEdit" class="ui animated green button" type="button" onclick="getCancelEdit();">
							  		<span class="visible content">ยกเลิก</span>
							  		<span class="hidden content"><i class="large remove icon"></i></span>
							  	</button>
							  	<script>$('#btnCancelEdit').hide();</script>	
							</div>	  	
				  		</div>
				  	</div>
			    	<br>	
				</form>
				
			</div>
	  	</div>
	  	
	</div>
</body>
</html>
<!-- controller -->
 	<!-- public function gotomyaccount()
    {  
        return view('conferencePaper.myAccount');
    } -->
<!-- route -->
<!-- Route::get('/myaccount',['as'=>'conferencePaper.myaccount','uses'=>'MovieController@gotomyaccount']); -->