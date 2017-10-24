<!Doctype html>
<html>
    <head>
        <title>Paper</title>

        @include('adminconference.head')
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
                      @if($value->status_payment==0)
                      <td class="negative"><i class="icon close"></i>ยังไม่ชำระ</td>
                      @elseif($value->status_payment==1)
                      <td class="positive"><i class="icon checkmark"></i>
                      <a href="">รออนุมัติ</a>
                      </td>
                      @else
                      <td class="positive"><i class="icon checkmark"></i>อนุมัติแล้ว</td>
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
</div>                
	
</body>
</html>
