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
                  <th>StatusReviewer</th>
                  <th>StatusPaper</th>
                  <th>Topic</th>
                </tr>
                 
              </thead>
              <tbody>
                <?php $i=0;$g=$i;?>
                <?php foreach ($infos as $info){?>
                  <tr>   
                  <td>{{$g+1}}</td>
                  <td>{{$items[$i]}}</td>
                  <td><a target="_blank" href="{{ url('/chair/preview/'.$items[$i+1]) }}">{{$items[$i+1]}}</a></td>
                  @if($paper[$g] == 0)
                      <td class="negative" ><a href="{{url('/chair/choose/paper/'.json_encode($info['paper_id']).'/'.$id)}}">กดเพื่อเลือกผู้ประเมิน</a></td>
                      <td class="negative" title="Not Choosed(3)"><i class="icon close"></i>ยังไม่ได้เลือกผู้ประเมิน</td>
                      <td class="negative"><a style="color: darkred">ยังไม่ได้ประเมิน</a></td> 
                  @else
                      <td class="positive"><i class="icon checkmark"></i>เลือกผู้ประเมินเสร็จสมบูรณ์</td>
                      <?php $check1=1;$check2=1;$check3=1; ?> 
                      @if(json_encode($info['s1']) == "-99")
                          <?php $check1 = 0 ; ?>
                      @endif

                      @if(json_encode($info['s2']) == "-99")
                          <?php $check2 = 0; ?>
                      @endif

                      @if(json_encode($info['s3']) == "-99")
                          <?php $check3 = 0; ?>
                      @endif
                     

                      @if($check1==1 and $check2 ==0 and $check3==0)
                        <td class="positive" title="Choosed(1)&#013;1.{{json_encode($info['rank1'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n1']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n1']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;Not Choosed(2)&#013;1.{{json_encode($info['rank2'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n2']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n2']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;2.{{json_encode($info['rank3'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n3']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n3']->Lname, JSON_UNESCAPED_UNICODE)}}"><i class="icon checkmark"></i>ประเมินเเล้ว(1)</td>
                      @elseif($check1==0 and $check2 ==1 and $check3==0)
                        <td class="positive" title="Choosed(1)&#013;1.{{json_encode($info['rank2'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n2']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n2']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;Not Choosed(2)&#013;1.{{json_encode($info['rank1'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n1']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n1']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;2.{{json_encode($info['rank3'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n3']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n3']->Lname, JSON_UNESCAPED_UNICODE)}}"><i class="icon checkmark"></i>ประเมินเเล้ว(1)</td>
                      @elseif($check1==0 and $check2 ==0 and $check3==1)
                        <td class="positive" title="Choosed(1)&#013;1.{{json_encode($info['rank3'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n3']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n3']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;Not Choosed(2)&#013;1.{{json_encode($info['rank1'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n1']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n1']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;2.{{json_encode($info['rank2'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n2']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n2']->Lname, JSON_UNESCAPED_UNICODE)}}"><i class="icon checkmark"></i>ประเมินเเล้ว(1)</td>
                      @elseif($check1==1 and $check2 ==1 and $check3==0)
                        <td class="positive" title="Choosed(2)&#013;1.{{json_encode($info['rank1'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n1']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n1']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;2.{{json_encode($info['rank2'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n2']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n2']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;Not Choosed(1)&#013;1.{{json_encode($info['rank3'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n3']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n3']->Lname, JSON_UNESCAPED_UNICODE)}}"><i class="icon checkmark"></i>ประเมินเเล้ว(2)</td>
                      @elseif($check1==1 and $check2 ==0 and $check3==1)
                        <td class="positive" title="Choosed(2)&#013;1.{{json_encode($info['rank1'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n1']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n1']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;2.{{json_encode($info['rank3'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n3']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n3']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;Not Choosed(1)&#013;1.{{json_encode($info['rank2'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n2']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n2']->Lname, JSON_UNESCAPED_UNICODE)}}"><i class="icon checkmark"></i>ประเมินเเล้ว(2)</td>
                      @elseif($check1==0 and $check2 == 1 and $check3 == 1)
                        <td class="positive" title="Choosed(2)&#013;1.{{json_encode($info['rank2'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n2']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n2']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;2.{{json_encode($info['rank3'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n3']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n3']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;Not Choosed(1)&#013;1.{{json_encode($info['rank1'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n1']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n1']->Lname, JSON_UNESCAPED_UNICODE)}}"><i class="icon checkmark"></i>ประเมินเเล้ว(2)</td>
                      @elseif($check1==1 and $check2 == 1 and $check3 == 1)
                        <td class="positive" title="Choosed finish(3)&#013;1.{{json_encode($info['rank1'], JSON_UNESCAPED_UNICODE )}} {{json_encode($info['n1']->Name, JSON_UNESCAPED_UNICODE )}}{{json_encode($info['n1']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;2.{{json_encode($info['rank2'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n2']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n2']->Lname, JSON_UNESCAPED_UNICODE)}}&#013;3.{{json_encode($info['rank3'], JSON_UNESCAPED_UNICODE)}} {{json_encode($info['n3']->Name, JSON_UNESCAPED_UNICODE)}}{{json_encode($info['n3']->Lname, JSON_UNESCAPED_UNICODE)}}"><i class="icon checkmark"></i>ประเมินครบเรียบร้อยแล้ว</td>

                      @else
                        @if(json_encode($info['status_rv']) == 0)
                        <td class="negative" title="Not Choosed(3)"><i class="icon close"></i>ยังไม่ได้เลือกผู้ประเมิน</td>
                        @else
                        <td class="negative" title="Not Choosed(3)"><i class="icon close"></i>ยังไม่ได้รับการประเมิน</td>
                        @endif
                      @endif

                      @if(json_encode($info['check']) < 3)
                          <td><a a href="#">กำลังรอการประเมิน</a></td>

                      @else
                      @if(json_encode($info['score'])==-99)
                         <td><a href="{{url('/assessment/'.json_encode($info['paper_id']))}}">กดเพื่อประเมินผลและตรวจ</a></td> 
                        @elseif(json_encode($info['score']) == -3)
                          <td class="negative"><i class="icon close"></i>strong reject</td>
                        @elseif(json_encode($info['score'])==-2)
                          <td class="negative"><i class="icon close"></i>reject</td>
                        @elseif(json_encode($info['score'])==-1)
                          <td class="negative"><i class="icon close"></i>weak reject</td>
                        @elseif(json_encode($info['score'])==0)
                          <td class="negative"><i class="icon close"></i>boundary</td>
                        @elseif(json_encode($info['score'])==1)
                          <td class="positive"><i class="icon checkmark"></i>Weak accept</td>
                        @elseif(json_encode($info['score'])==2)
                          <td class="positive"><i class="icon checkmark"></i>Accept</td>
                        @elseif(json_encode($info['score'])==3)
                          <td class="positive"><i class="icon checkmark"></i>strong accept</td>
                        @endif
                      @endif

                  @endif
                  
                  <td>{{json_encode($info['topic'])}}</td>
                  </tr>              



                <?php  $i+=2;$g++;} ?>
              </tbody>
            </table>
       </div>
</div>                
	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>
