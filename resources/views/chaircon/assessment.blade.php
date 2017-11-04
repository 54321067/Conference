<!DOCTYPE html>
<html>
<head>
  <title>Chair</title>
  <meta charset="utf-8">
  @include('cfs.header')
<style type="text/css">
  .body { 
    -webkit-filter: grayscale(50%);
-moz-filter: grayscale(50%);
-ms-filter: grayscale(50%);
-o-filter: grayscale(50%);
filter: gray;
filter: grayscale(50%);
overflow:scroll;
background-image: -o-linear-gradient(top, #FFFFFF, #abdb92);
 background: -moz-linear-gradient(top, #FFFFFF, #abdb92);
 background-image: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#abdb92));
 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFF', endColorstr='#abdb92');
 background: -ms-linear-gradient(top, #FFFFFF, #abdb92);*/
 
 background: red; /* For browsers that do not support gradients */
  /* For Safari 5.1 to 6.0 */
  background: -webkit-linear-gradient(top,#FFFFFF,#abdb92,#FFFFFF);
  /* For Opera 11.1 to 12.0 */
  background: -o-linear-gradient(top,#FFFFFF,#abdb92,#FFFFFF);
  /* For Fx 3.6 to 15 */
  background: -moz-linear-gradient(top,#FFFFFF,#abdb92,#FFFFFF);
  /* Standard syntax */
  background: linear-gradient(to bottom, #FFFFFF,#abdb92,#FFFFFF); 
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;

}

/****************************************************** Table *******************/


table {
    border-collapse: collapse;
    width: 100%;
    
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #E6E6FA}

</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="body">
<div class="ui green  segment" style="margin: 0%;margin-left: 4.5%;margin-right: 4.5%;">

 <form class="ui  form" action="{{url('/getscore/'.$paper[0]->paper_id)}}" method="post" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

  <h2 class="ui icon" style="margin-left: 40% "><i class=" big green user icon" ></i>Chair<label></h2>
  
   <div class="ui segment">
    <h2 "><i class="large green address book outline icon"></i>Paper ID :  
        &nbsp;{{$paper[0]->paper_id}}
    </h2>
    <h2 "><i class="large green users icon"></i>File paper :  
       &nbsp;<a target="_blank" href="{{ url('/chair/preview/'.$paper[0]->pdf_name) }}">{{$paper[0]->pdf_name}}</a>
    </h2>
    <h2><i class="large green newspaper icon"></i>Paper name :  
      {{$paper[0]->paper_name}}
    </h2>
  <div class="ui green segment">
<table>
  <tr>
    <th style="width: 400px"></th>
    <th ><label class="ui header" style="color: green; ">{{$reviewer1[0]->Name}}</label></th>
    <th ><label class="ui header" style="color: green; ">{{$reviewer2[0]->Name}}</label></th>
    <th  ><label class="ui header" style="color: green; ">{{$reviewer3[0]->Name}}</label></th>
  </tr>
  <tr>
    <td ><b><label  class="ui header">Technical quality</label></td>
    @if($group[0]->Technical_1 != -99)
    <td>{{$group[0]->Technical_1}}</td>
    @else
    <td>-</td>
    @endif
    @if($group[0]->Technical_2 != -99)
    <td>{{$group[0]->Technical_2}}</td>
    @else
    <td>-</td>
    @endif
    @if($group[0]->Technical_3 != -99)
    <td>{{$group[0]->Technical_3}}</td>
    @else
    <td>-</td>
    @endif
  </tr>
  <tr>
    <td ><label class="ui header" style="color: green; "><b>Relevance to Conference</label></td>
    @if($group[0]->Relevance_1 != -99) 
    <td>{{$group[0]->Relevance_1}}</td>
    @else
    <td>-</td>
     @endif
    @if($group[0]->Relevance_2 != -99)
    <td>{{$group[0]->Relevance_2}}</td>
    @else
    <td>-</td>
     @endif
      @if($group[0]->Relevance_3 != -99)
    <td>{{$group[0]->Relevance_3}}</td>
    @else
    <td>-</td>
     @endif
  </tr>
  <tr>
    <td ><label class="ui header"  "><b>Presentation</label></td>
    @if($group[0]->Presentation_1 != -99)
    <td>{{$group[0]->Presentation_1}}</td>
    @else
    <td>-</td>
     @endif
     @if($group[0]->Presentation_2 != -99)
    <td>{{$group[0]->Presentation_2}}</td>
    @else
    <td>-</td>
     @endif
     @if($group[0]->Presentation_3 != -99)
    <td>{{$group[0]->Presentation_3}}</td>
    @else
    <td>-</td>
     @endif
  </tr>
  <tr>
    <td ><label class="ui header" style="color: green; "><b>Overall rating</label></td>
    @if($group[0]->rating_1 != -99)
    <td>{{$group[0]->rating_1}}</td>
    @else
    <td>-</td>
     @endif
      @if($group[0]->rating_2 != -99)
    <td>{{$group[0]->rating_2}}</td>
    @else
    <td>-</td>
     @endif
      @if($group[0]->rating_3 != -99)
    <td>{{$group[0]->rating_3}}</td>
    @else
    <td>-</td>
     @endif
  </tr>
   <tr>
    <td ><label class="ui header"  "><b>Evaluation results</label></td>
    @if($group[0]->score_1 != -99)
    <td>{{$group[0]->score_1}}</td>
    @else
    <td>-</td>
     @endif
      @if($group[0]->score_2 != -99)
    <td>{{$group[0]->score_2}}</td>
    @else
    <td>-</td>
     @endif
      @if($group[0]->score_3 != -99)
    <td>{{$group[0]->score_3}}</td>
    @else
    <td>-</td>
     @endif
  </tr>
</table>
  </div>
  <div class="ui green segment">
  
  <div class="grouped fields">
     <h2 class="ui icon"  "><i class=" big green write square icon" ></i>assessment<label></h2>
    
    <div class="field required">
      <div class="ui radio checkbox">
        <input type="radio" name="throughput" value="-3" required>
        <label>strong reject</label>
      </div>
    </div>
    <div class="field required">
      <div class="ui radio checkbox">
        <input type="radio" name="throughput" value="-2" required>
        <label>reject</label>
      </div>
    </div>
    <div class="field required">
      <div class="ui radio checkbox checked">
        <input type="radio" name="throughput" value="-1" required>
        <label>weak reject</label>
      </div>
    </div>
      <div class="field required">
      <div class="ui radio checkbox checked">
        <input type="radio" name="throughput" value="0" required>
        <label>boundary</label>
      </div>
    </div>
      <div class="field required">
      <div class="ui radio checkbox checked">
        <input type="radio" name="throughput" value="1" required>
        <label>Weak accept</label>
      </div>
    </div>
      <div class="field required">
      <div class="ui radio checkbox checked">
        <input type="radio" name="throughput" value="2" required>
        <label>Accept</label>
      </div>
    </div>
    <div class="field required">
      <div class="ui radio checkbox">
        <input type="radio" name="throughput"  value="3" required>
        <label>Strong accept</label>
      </div>
    </div>
  </div>

  </div>
  <div align="center">
  <button class="positive ui button" id="alert" >อนุมัติ</button>
   <script type="text/javascript">
     $("#alert").click(function() {
        swal({
       
       text: "Thank you :)",
       
        });
        });

     </script>

  </form>
  </div>
  </div>
  

  </form>

   
   



</body>
</html>