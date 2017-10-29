<!Doctype html>
<html>
	<head>
		<title>ระบบผู้ดูแลConference</title>

		 @include('chaircon.head')
		
	</head>
<body>
<div class="body">


@include('chaircon.headerchair');
<br>

@if(Auth()->check())

<div class="ui  four statistics">
  <div class="statistic">
    <div class="value">
    <i class="red bookmark icon"></i>
      {{$cons}}
    </div>
    <div class="label">
      Conferences
    </div>
  </div>
  <div class="statistic">
    <div class="value">
    <i class="yellow file text outline icon"></i>
      {{$papers}}
    </div>
    <div class="label">
      Papers
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <i class="green add user icon"></i> {{$unreviews }}
    </div>
    <div class="label">
      ยังไม่ได้เลือกreviewer
    </div>
  </div>
  <div class="statistic">
    <div class="value">
       <i class="blue payment icon"></i>
      {{$unpays}}
    </div>
    <div class="label">
      ยังไม่ได้ตรวจสอบการชำระเงิน
    </div>
  </div>
</div>
 <br>
  <hr>
@endif

</div>
</body>
</html>