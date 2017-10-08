<!Doctype html>
<html>
	<head>
		<title>{{$Teach->PfName}} {{$Teach->PlName}}</title>
		<meta charset="utf-8">
		<link href="{{asset('semantic/semantic.min.css')}}" rel="stylesheet">
		<script src="{{asset('jquery-3.1.0.min.js')}}"></script>
		<script src="{{asset('semantic/semantic.min.js')}}"></script>
		<script src="{{asset('moment.js')}}"></script>
		<script src="{{asset('script.js')}}"></script>
    
</head>


<body style="background-color:#333333">
  <?php  include_once __DIR__ . '\header.php';?>
  <div class="ui internally grid" style="margin:3%">
      <div class="row">
        <div class="three wide black column" style="margin-left: 1.5%">
              <div class="ui card">
                <div class="image">
                  <img src="{{$Teach->Pimage}}">
                </div>
                <div class="content">
                  <div class="header">
                      <p class="small" align = 'center'>{{$Teach->Pfname}} {{$Teach->Plname}}</p>
                  </div>
                </div>
                <div class="content">
                      <h2 class="small" align = 'left' style="color: black">อนุมัติแล้ว : 2</h2>
                      <h2 class="small" align = 'left' style="color: black">ไม่อนุมัติ : 0</h2>
                      <h2 class="small" align = 'left' style="color: black">ยังไม่อนุมัติ : 0</h2>

                  </div>
              </div>
        </div>
        <div class="twelve wide black column" style="margin-left: 2%">
            <div class="ui four cards">
                <?php $i= 0; ?>
                @foreach($Movies as $Movie)
                      <?php{{ $i=$i+1 }} ?>

                  <div class="ui card" style="margin-left: 3%;">
                    <div class="image">
                      <img src="{{$Movie->MovieImage}}">
                    </div>
                  <div class="content">
                    <a class="header"><p align = 'center'>{{$Movie->MovieName}}</p></a>
                  </div>
                  <div class="black ui button">
                    <a href="#"><font color="white">Status: อนุมัติ</font></a>
                    
                  </div>
                  </div>
                @endforeach
            </div>
        </div>
      </div>
  </div>
  

</body>

</html>
