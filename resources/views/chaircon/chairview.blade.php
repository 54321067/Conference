<!Doctype html>
<html>
    <head>
        <title>Paper</title>

        @include('chaircon.head')
    </head>
<body class="body">

@include('chaircon.headerchair')
  

    <div class="ui segment" style="margin-top: 0%;margin-left: 4.5%;margin-right: 4.5%">
      <div class="ui blue segment">
      	<div style="display: inline-block;max-width: 49%"><h2>{{$id}}_{{$names->Acronym_N}}</h2></div>
        <div style="display: inline-block;margin-left: 60%;max-width: 49%"></div>
      </div>
      <div style="margin-bottom: 1%">
         
      </div>
      <div>
        <table class="ui sortable celled table">
              <thead>
                <tr style="background-color: #99ffce"">
                  <th>รหัสpaper</th>
                  <th>ชื่อPaper</th>
                  <th>Preview Paper</th>
                  <th>ChooseReviewer</th>
                  <th>StatusPaper</th>
                  <th>StatusAssessment</th>
                  <th>Topic</th>
                 
                 
              </thead>
              <tbody>
              
                <?php foreach ($values as $value) {?>
                  <tr>   
                  <td><a>{{$value->paper_id}}</a></td>
                  <td>{{$value->paper_name}}</td>
                  <td><a href="{{ route('chair.chairview',['name'=>$value->pdf_name]) }}">{{$value->pdf_name}}</a></td>
                  @if($value->status_reviewer == 0)
                      <td class="negative" ><i class="icon close" ></i><a href="{{url('/chair/choose/paper/'.$value->paper_id.'/'.$id)}}" style="color: darkred">   ยังไม่เลือก    </a></td>
                      <td class="negative"><i class="icon close"></i>ยังไม่ตรวจ</td>
                      <td class="negative"></i><a style="color: darkred">ยังไม่ได้ประเมิน</a></td> 
                  @else
                      <td class="positive"><i class="icon checkmark"></i>เลือกแล้ว</td>

                      @if($value->status_check == 3)
                        <td class="positive"><i class="icon checkmark"></i>ตรวจเเล้ว</td>
                        @if($value->status_score==-99)
                          <td ><a  href="{{url('/assessment/'.$value->paper_id)}}">ยังไม่ได้ประเมิน</a></td>
                        @elseif($value->status_score==-3)
                        <td class="negative"><i class="icon close"></i>strong reject</a></td>
                         @elseif($value->status_score==-2)
                        <td class="negative"><i class="icon close"></i> reject</a></td>
                         @elseif($value->status_score==-1)
                        <td class="negative"><i class="icon close"></i>weak reject</a></td>
                         @elseif($value->status_score==0)
                        <td class="negative"><i class="icon close"></i>boundary</a></td>
                         @elseif($value->status_score==1)
                        <td class="positive"><i class="icon checkmark"></i>Weak accept</a></td>
                         @elseif($value->status_score==2)
                        <td class="positive"><i class="icon checkmark"></i>Accept</a></td>
                         @elseif($value->status_score==3)
                        <td class="positive"><i class="icon checkmark"></i>strong accept</a></td>
                         
                        @endif
                      @else
                        <td class="negative"><i class="icon close"></i>ยังไม่ตรวจ</td>
                        <td class="negative"></i><a style="color: darkred">ยังไม่ได้ประเมิน</a></td>
                      @endif

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
