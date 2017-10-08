<!Doctype html>
<html>
  <head>
    <title>ระบบสนับสนุนงานวิจัย</title>
    @include('adminconference.head')
</head>
<body style="overflow-y: hidden;">
<!--  test start 1  -->
@include('adminconference.headeradmin')
<!--  end   -->
<div class="body">
@if(Auth::check())
<div class="ui four cards" style="margin-left: 4%;margin-bottom: 5%">
        <!--   start 2  -->
          @foreach($Teachs as $Teach)

            <div class="ui card" style="width: 300px;height: 408px;margin-left: 2%;margin-right: 2%;">
              <div class="image" style="height: 300px">
                <img src="{{$Teach->image}}">
              </div>
            <div class="content" style="max-height: 70px">
              <a class="header" align = 'center'>{{$Teach->name}}</a>
            </div>
            <div class="black ui button">
              <i class="icon search"></i>
              <a href="/list"><font color="white">view</font></a>
              
            </div>
            </div>
          @endforeach
      <!--  end   -->

</div>
@else

@endif

</div>

      



    <!--footer-->
    
    <!--end footer-->
</body>

</html>