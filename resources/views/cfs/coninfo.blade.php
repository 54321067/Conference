<!DOCTYPE html>
<html>
<head>
	<title>Conferences information</title>
    @include('cfs.header')
    <style>
		.body { 
			-webkit-filter: grayscale(50%);
			-moz-filter: grayscale(50%);
			-ms-filter: grayscale(50%);
			-o-filter: grayscale(50%);
			filter: gray;
			filter: grayscale(50%);
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
	<div class="ui segment" style="padding: 3%;margin: 4.5%;">
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
    					<img src="" class="ui small image" style="margin: 0 auto;">
    				</td>
    				<td style="width: 80%;padding-left: 2%">
						<h1>
						Acronym : Conference name
						</h1>
						<div class="ui divider" style="max-width: 95%"></div>
						<p>Organizer</p>
						<p><b>Location , Date</b></p>
					</td>
				</tr>
			</table>
		</div>
		<div style="margin-left: 10%;margin-right: 10%">
			<table class="ui selectable celled table,ui definition table">
				<tbody>
				    <tr>
				      <td style="width: 30%">Conference website</td>
				      <td>None</td>
				    </tr>
				    <tr>
				      <td style="width: 30%">Submission deadline</td>
				      <td>None</td>
				    </tr>
				    <tr>
				      <td style="width: 30%">Other</td>
				      <td>None</td>
				    </tr>
				</tbody>
			</table>
		</div>
		<div>
			<div style="float:right;margin: 2%;">
				<p><b>Topic : </b></p>
			</div>
		</div>
		<div>
			<div style="clear: both;
			box-shadow: 0px 0px 0px 1px #A3C293 inset, 
			0px 0px 0px 0px rgba(0, 0, 0, 0);
			margin-left: : 2%;margin-right:2%;padding: 2%;
			margin-bottom: 0">
				<p>Detail</p>
			</div>
			<div style="background-color: #16ab39;
		    text-shadow: none;margin-right: 2%;
		    margin-top: 0;padding: 1.5%">
		    	<h1 style="color: #FFFFFF;">Important Topic</h1>
		    </div>
		    <div style="clear: both;
			box-shadow: 0px 0px 0px 1px #A3C293 inset, 
			0px 0px 0px 0px rgba(0, 0, 0, 0);
			margin-left: : 2%;margin-right:2%;padding: 2%;
			margin-bottom: 0">
				<p>Detail</p>
			</div>
		</div>
		<div style="text-align: center">
			<a class="ui primary button" tabindex="0" style="font-size: 170%;margin: 2%" href="/paperform">
        		Send Paper
      		</a>
		</div>
		
	</div>
</body>
</html>