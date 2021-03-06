<!Doctype html>
<html>
    <head>
        <title>Paper</title>

        @include('adminconference.head')
        <style type="text/css">
         .image:hover {
               transform:scale(2,1.5);
                transition: 1.5s;
                margin-top: 10%;
          }
        </style>
    </head>
<body class="body">

@include('adminconference.headeradmin')
  

    <div class="ui segment" style="margin-top: 0%;margin-left: 4.5%;margin-right: 4.5%">
      <div class="ui blue segment">
      	<div style="display: inline-block;max-width: 49%"><a class="ui huge black label">{{$names->Acronym_N}}</a></div>
        <div style="display: inline-block;margin-left: 60%;max-width: 49%"></div>
      </div>
      <div style="margin-bottom: 1%">
          <!-- <a class="ui google plus button" href="{{ route('adminconference.viewpaper',['id'=>$id ]) }}">All paper</a>
          <a class="ui button twitter" href="{{ route('adminconference.checkreviewer',['id'=>$id ]) }}">ยังไม่เลือก Reviewer</a>
          <a class="ui button green" href="{{ route('adminconference.checkpayment',['id'=>$id ]) }}">ตรวจสอบการชำระเงิน</a>
 -->
      </div>
      <div>
        <table class="ui sortable celled table">
              <thead>
                <tr style="background-color: #99ffce"">
                  <th>รหัสpaper</th>
                  <th>ชื่อPaper</th>
                  <th>Preview Paper</th>
                  <th>StatusPayment</th>
                  <th  style="text-align: center">Topic</th>
                 
                </tr>

              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach ($values as $value) {?>
                  <tr>   
                  <td>{{$i}}</td>
                  <td>{{$value->paper_name}}</td>
                  <td><a target ="_blank" href="{{ route('viewpaper',['name'=>$value->pdf_name]) }}">{{$value->pdf_name}}</a></td>
                   @if($value->status_send==0)
                      <td class="negative"><i class="icon close"></i>ยังไม่ชำระ</td>
                   @elseif($value->status_send==1)
                      @if($value->status_payment == 0)
                          <td class="positive">
                          <button id="btn1" type="button" class="ui small primary test button" onclick="myFunction('{{$value->image_payment}}','{{$value->paper_id}}','{{$value->con_id}}');">รออนุมัติ</button> 
                              </td>
                              
                      @elseif($value->status_payment == 1)
                          <td class="positive"><i class="icon checkmark"></i>ชำระเงินเรียบร้อยแล้ว</td>
                      @else
                          <td class="negative"><i class="icon close"></i>ตรวจสอบผิดพลาด</td>
                      @endif
                  @else
                    <td class="negative"><i class="icon close"></i>ไม่อนุมัติ</td>
                  @endif
                  <td>
                                     
                  <?php
                    $tag1s = explode(",", $value->keyword1);
                    foreach ($tag1s as $tag) { $t1=rand(1,10); ?>
                        @if($t1<= 2)
                            <a class="ui blue label" style="margin-bottom: 0.5%">{{$tag}}</a>
                        @elseif($t1 >= 2 and $t1 < 4)
                            <a class="ui red label" style="margin-bottom: 0.5%">{{$tag}}</a>
                        @elseif($t1 >= 4  and $t1 < 6)
                            <a class="ui brown label" style="margin-bottom: 0.5%">{{$tag}}</a>
                        @elseif($t1 >= 6 and $t1 < 8)
                            <a class="ui purple label" style="margin-bottom: 0.5%">{{$tag}}</a>
                        @else
                            <a class="ui green label" style="margin-bottom: 0.5%">{{$tag}}</a>
                        @endif
                <?php $t1++; } ?>
                 </td>     
                </tr>              




                <?php $i++;} ?>
              </tbody>
            </table>
       </div> 
       <!--Modal Submit -->
<div class="ui tiny modal" id="modal-test" style="margin-top:0%; position: fixed;top:40px;bottom: 40px">
  <i class="close icon"></i>
  <div class="header" style="background-color: #80ffaa">
    <h1>#ยืนยันการชำระเงิน</h1>
    <h2 id="at"></h2>
    
  </div>
  <div class="content" id="img-wrapper">
      <img class="ui fluid image" alt="Trolltunga, Norway" src="" id="pic" width="300" height="200" style="max-width: 500px;max-height: 700px;">
  </div>
  <div class="actions">
    <form id="ap" method="post" action="">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" form="ap" onclick="return checkMe()" class="ui green ok inverted button" style="display: inline-block;float: left;">
      อนุมัติ
    </button>
  </form>
    <form id="np" method="post" action="">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" onclick="return checknotMe()" form="np" class="ui red basic cancel button" style="display: inline-block;">
      ไม่อนุมัติ
    </button>
    </form>
    
  </div>
</div>
<!--end Modal-->

<script>
  var pic = document.getElementById('pic');
  function myFunction(s,id,conid) {
      pic.src = "/file/"+s;
      document.getElementById("ap").action = "/viewpaperpayment/"+id+"/"+conid;
      document.getElementById("np").action = "/resetpayment/"+id+"/"+conid;
  }
  function checkMe() {
    if (confirm("ยืนยันการชำระเงิน")) {
        return true;
    } else {
        
        return false;
    }
}
function checknotMe() {
    if (confirm("ไม่อนุมัติการชำระเงิน")) {
        return true;
    } else {
        
        return false;
    }
}

</script>


</div>                
	
</body>
</html>
