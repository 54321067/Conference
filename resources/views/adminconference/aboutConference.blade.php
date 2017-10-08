<!Doctype html>
<html>
    <head>
        <title>Conferrencs</title>

        @include('adminconference.head')
    </head>

<body class="body">
@include('adminconference.headeradmin')

 <div class="ui segment" style="margin-top: 0%;margin-left: 4.5%;margin-right:4.5%;">
      <div class="ui blue segment">
        <h2>ชื่อย่อการประชุม{{$con->conid}}</h2>
        <a class="ui twitter button" href="{{ route('adminconference.viewpaper',['id'=>$con->conid ]) }}" style="display: inline-block;">
        View paper
        </a>
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
								
							</div>
							<div class="ui attached segment" style="margin-right: 4%">
							  	<p>สถานที่Loja, Ecuador, November 29-December 2, 2017</p>
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
						<td>September 29, 2017</td>
					</tr>
					<tr>
						<td>วันประกาศผลบทความ</td>
						<td>December 29, 2017</td>
					</tr>
					<tr>
						<td>วันนำเสนอบทความ</td>
						<td>January 15, 2018</td>
					</tr>
				</table>
				<div class="topics">หัวข้อ: 
					<a href="">
					<span class="tag fg_black bg_seagreenlight">technology</span></a> 
					<a href="">
					<span class="tag fg_black bg_gray1">science</span></a> 
					<a href="">
					<span class="tag fg_black bg_fuchsia">tourist</span></a> 
					<a href="">
					<span class="tag fg_darkred bg_green">gastronomy</span></a>
				</div>
					<h2><a name="CFP:1">รายละเอียดการประชุม</a></h2>
					<hr>
				<div class="ui ignored message">
					<p style="text-align:justify">La Universidad Técnica Particular de Loja, el área Administrativa a través del Departamento de Ciencias Empresariales, la Sección de Hotelería y Turismo, convocan a la comunidad académica, emprendimientos y empresarial al I Congreso sobre Turismo, Gastronomía y Nuevas Tecnologías - Turgatec 2017, que tendrá lugar el 29, 30 de noviembre y 1 de diciembre de 2017 en Loja, Ecuador. El Turgatec es un evento científico-técnico-empresarial, destinado a la presentación y discusión de conocimientos, experiencias e innovación en las áreas de Turismo, Patrimonio y Cultura Turística, Industria Creativa, Gastronomía, Emprendimientos y Nuevas Tecnologías.</p>
				</div>
				
    		</div>
    	</div>
    	<br>
    	<a style="display: inline-block;">
        <form method="POST" action="/list/{{$con->conid}}">
      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      		<input type="hidden" name="_method" value="DELETE">
      		<button type="submit" class="ui google plus button">D E L E T E</button>
		</form>
		</a>
    </div>
</body>
</html>
