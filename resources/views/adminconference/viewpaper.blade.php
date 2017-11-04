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
      	<div style="display: inline-block;max-width: 49%"><h2>{{$names->Acronym_N}}</h2></div>
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
                  <th>Topic</th>
                 
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
                  @endif
                  <td>{{$value->keyword1}}</td>
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
    <form id="np" method="post" action="">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" form="np" class="ui red basic cancel button" style="display: inline-block;float: left;">
      <i class="remove icon"></i>
      ไม่อนุมัติ
    </button>
    </form>
    <form id="ap" method="post" action="">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" form="ap" class="ui green ok inverted button" style="display: inline-block;">
      <i class="checkmark icon"></i>
      อนุมัติ
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

</script>


</div>                
	
</body>
</html>
