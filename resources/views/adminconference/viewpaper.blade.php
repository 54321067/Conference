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
      	<div style="display: inline-block;max-width: 49%"><h2>{{$id}}_{{$names->Acronym_N}}</h2></div>
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
                  <th>Reviewer</th>
                  <th>StatusPaper</th>
                  <th>StatusPayment</th>
                  <th>Topic</th>
                 
                </tr>

              </thead>
              <tbody>

                <?php foreach ($values as $value) {?>
                  <tr>   
                  <td><a>{{$value->paper_id}}</a></td>
                  <td>{{$value->paper_name}}</td>
                  <td><a href="{{ route('viewpaper',['name'=>$value->pdf_name]) }}">{{$value->pdf_name}}</a></td>
                  @if($value->status_reviewer == 0)
                      <td class="negative"><i class="icon close"></i>ยังไม่เลือก</td>
                  @else

                      <td class="positive"><i class="icon checkmark"></i>เลือกแล้ว</td>
                  @endif
                  @if($value->status_check == 0)
                      <td class="negative"><i class="icon close"></i>ยังไม่ตรวจ</td>
                      <td class="negative"><i class="icon close"></i>ยังไม่ชำระ</td>
                  @elseif($value->status_check >= 1)
                      <td class="positive"><i class="icon checkmark"></i>ผ่านแล้ว</td>
                      @if($value->status_send==0)
                      <td class="negative"><i class="icon close"></i>ยังไม่ชำระ</td>
                      @elseif($value->status_send==1)
                          @if($value->status_payment == 0)
                              <td class="positive">
                              <form id="ap" method="post" action="{{ url('/viewpaperpayment/'.$value->paper_id.'/'.$value->con_id) }}">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              </form>
                              <button id="btn1" class="ui small primary test button" onclick="myFunction('{{$value->image_payment}}');">รออนุมัติ</button> 
                              </td>
                          @elseif($value->status_payment == 1)
                              <td class="positive"><i class="icon checkmark"></i>อนุมัติแล้ว</td>
                          @endif
                      @endif
                  @else
                      <td class="negative"><i class="icon close"></i>ไม่ผ่าน</td>
                      <td class="negative" style="text-align: center;">-</td>
                  @endif
                  
                  <td>{{$value->keyword1}}</td>
                </tr>              




                <?php } ?>
              </tbody>
            </table>
       </div> 
       <!--Modal Submit -->
<div class="ui tiny modal" id="modal-test" style="margin-top:0%; position: fixed;top:40px;bottom: 40px">
  <i class="close icon"></i>
  <div class="header" style="background-color: #80ffaa">
    <h1>#ยืนยันการชำระเงิน{{$value->paper_id}}</h1>
    
  </div>
  <div class="content" id="img-wrapper">
      <img class="ui fluid image" alt="Trolltunga, Norway" src="/images/a.png" id="pic" width="300" height="200" style="max-width: 500px;max-height: 700px;">
  </div>
  <div class="actions">
    <div class="ui red basic cancel button">
      <i class="remove icon"></i>
      ไม่อนุมัติ
    </div>
    <div onclick="document.forms[0].submit();" form="ap" class="ui green ok inverted button" style="display: inline-block;">
      <i class="checkmark icon"></i>
      อนุมัติ
    </div>
    
    
  </div>
</div>
<!--end Modal-->

<script>
  var pic = document.getElementById('pic');
  function myFunction(s) {
      pic.src = s;

  }

</script>


</div>                
	
</body>
</html>
