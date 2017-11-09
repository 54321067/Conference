<!Doctype html>
<html>
    <head>
        <title>AdminConferrencs</title>
        @include('adminconference.head')
    </head>
<body>
<div class="body">
@include('adminconference.headeradmin')

<div class="ui menu" style="margin-left: 4.5%;margin-right: 4.5%;background-color: #99ffce">
    <h1 style="margin-left:1%;margin-bottom: 1%;margin-top: 1%">Conferrences</h1>
</div>
<div class="ui accordion">
<div class="ui title teal inverted segment" style="margin-right: 15%;margin-left: 15%">
    <h3><i class="dropdown icon"></i>Available Conferences</h3>
</div>
<div class="content">
<div  class="transition hidden" style="margin-left: 4.5%;margin-right: 4.5%;margin-bottom: 5%">
                        <table class="ui green selectable sortable celled table">
                                    <thead>
                                     <tr style="background-color: #99ffce">
                                      <th><div style="padding-bottom:10pt">ชื่อย่อ</div></th>
                                        <!--<th>test</th>-->
                                        <th>ชื่อการประชุม</th>
                                        <th>สถานที่ตั้ง</th>
                                        <th>วันที่สิ้นสุดการรับบทความ</th>
                                        <th>วันประกาศผลบทความ</th>
                                        <th>วันนำเสนอบทความ</th>
                                        <th style="text-align: center">หัวข้อ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=0;
                                    date_default_timezone_set("Asia/Bangkok");
                                   foreach ($conferences as $value)
                                        {
                                        $a=strtotime($value->R_Line);
                                        if(date("Y-m-d h:i:sa", $a) >= date("Y-m-d h:i:sa")) {
                                    
                                    ?>

                                    <tr>
                                    <td>
                                    <u><a href="{{ route('adminconference.aboutConference',['id'=>$value->conid ]) }}">
                                            {{$value->Acronym_L}}
                                       </a></u>
                                     </td>
                                     <!--<td>{{date("Y-m-d h:i:sa", $a)}} < {{date("Y-m-d h:i:sa")}}</td> -->
                                     <td>{{$value->Acronym_N}}</td>
                                     <td>{{$value->Loca}}</td>
                                     <td>{{$value->D_Line}}</td>  
                                     <td>{{$value->S_Line}}</td>
                                     <td>{{$value->R_Line}} </td>
                                     <td>
                                     <?php
                                            $tag1s = explode(",", $value->topic_1);
                                            foreach ($tag1s as $tag) { $i=rand(1,100); ?>
                                                @if($i<= 20)
                                                    <a class="ui blue label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($i >= 20 and $i < 40)
                                                    <a class="ui red label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($i >= 40  and $i < 60)
                                                    <a class="ui brown label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($i >= 60 and $i < 80)
                                                    <a class="ui purple label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @else
                                                    <a class="ui green label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @endif
                                        <?php $i++; } ?>
                                        <?php $j=0; ?>
                                        <?php
                                            $tag2s = explode(",", $value->topic_2);
                                            foreach ($tag2s as $tag) {  $j=rand(1,100);?>
                                                @if($j<= 20)
                                                    <a class="ui violet label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($j >= 20 and $j < 40)
                                                    <a class="ui yellow label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($j >= 40  and $j < 60)
                                                    <a class="ui teal label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($j >= 60 and $j < 80)
                                                    <a class="ui grey label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @else
                                                    <a class="ui brown label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @endif

                                        <?php $j++; }?> 
                                        </td>     
                                     </tr>
                                     <?php

                                        }
                                        }
                                     ?>
                                    </tbody>
                                </table>
                                
                            
</div>
</div>
</div>
<!-- end availiable conference -->
<br>
<hr>
<br>
<!-- start ended up conference -->
<div class="ui accordion">
<div class="ui title grey inverted segment" style="margin-right: 15%;margin-left: 15%">
    <h3><i class="dropdown icon"></i>Ended up Conferences</h3>
</div>
<div class="content">
<div  class="transition hidden" style="margin-left: 4.5%;margin-right: 4.5%;margin-bottom: 5%">
                        <table class="ui green selectable sortable celled table">
                                    <thead>
                                     <tr style="background-color: #99ffce">
                                      <th><div style="padding-bottom:10pt">ชื่อย่อ</div></th>
                                        <th>ชื่อการประชุม</th>
                                        <th>สถานที่ตั้ง</th>
                                        <th>วันที่สิ้นสุดการรับบทความ</th>
                                        <th>วันประกาศผลบทความ</th>
                                        <th>วันนำเสนอบทความ</th>
                                        <th style="text-align: center">หัวข้อ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=0;
                                    date_default_timezone_set("Asia/Bangkok");
                                   foreach ($conferences as $value)
                                        {
                                            $a=strtotime($value->R_Line);
                                        if(date("Y-m-d h:i:sa", $a) < date("Y-m-d h:i:sa")) {
                                        ?>
                                    <tr>
                                    <td>
                                    <u><a href="{{ route('adminconference.aboutConference',['id'=>$value->conid ]) }}">
                                            {{$value->Acronym_L}}
                                       </a></u>
                                     </td>
                                     <td>{{$value->Acronym_N}}</td>
                                     <td>{{$value->Loca}}</td>
                                     <td>{{$value->D_Line}}</td>  
                                     <td>{{$value->S_Line}}</td>
                                     <td>{{$value->R_Line}} </td>
                                     <td>
                                     <?php
                                            $tag1s = explode(",", $value->topic_1);
                                            foreach ($tag1s as $tag) { $i=rand(1,100); ?>
                                                @if($i<= 20)
                                                    <a class="ui blue label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($i >= 20 and $i < 40)
                                                    <a class="ui red label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($i >= 40  and $i < 60)
                                                    <a class="ui brown label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($i >= 60 and $i < 80)
                                                    <a class="ui purple label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @else
                                                    <a class="ui green label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @endif
                                        <?php $i++; } ?>
                                        <?php $j=0; ?>
                                        <?php
                                            $tag2s = explode(",", $value->topic_2);
                                            foreach ($tag2s as $tag) {  $j=rand(1,100);?>
                                                @if($j<= 20)
                                                    <a class="ui violet label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($j >= 20 and $j < 40)
                                                    <a class="ui yellow label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($j >= 40  and $j < 60)
                                                    <a class="ui teal label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @elseif($j >= 60 and $j < 80)
                                                    <a class="ui grey label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @else
                                                    <a class="ui brown label" style="margin-bottom: 0.5%">{{$tag}}</a>
                                                @endif

                                        <?php $j++; }?> 
                                        </td>     
                                     </tr>
                                     <?php

                                        }
                                        }
                                     ?>
                                    </tbody>
                                </table>
                                
                            
</div>
</div>
</div>


</div>
</body>
</html>
