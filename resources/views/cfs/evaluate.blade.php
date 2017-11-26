<!DOCTYPE html>
<html>
<head>
  <title>Reveiwer</title>
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
</style>
</head>
<body class="body">
<div class="ui green  segment" style="margin: 0%;margin-left: 4.5%;margin-right: 4.5%;">

 <form class="ui large form" action="{{url('/list/evaluation/'.$groupid.'/'.$id)}}" method="post" id="formsubmit">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <h2 class="ui icon" style="margin-left: 40% "><i class=" big green user icon" ></i>Reviewer</h2>
 
  
  <div class="ui green segment">
     <h2 class="ui icon" style="margin-left: 0% "><i class=" big green address book icon" ></i>Reviewer Name: &nbsp;{{$R[0]->Name}} {{$R[0]->Lname}}</h2>
      <h2 class="ui icon" style="margin-left: 0% "><i class=" big green address book outline icon" ></i>Reviewer Rank:{{$R[0]->Rank}}</h2>
  </div>
  <div class="ui segment">
    <h2><i class="large green newspaper icon"></i>Paper name :  
      {{$paper[0]->paper_name}}
    </h2>
    <h2><i class="large green bookmark icon"></i>File: <a  target ="_blank"  href="{{ route('reviewerpreview',['name'=>$paper[0]->pdf_name]) }}"><i class="cloud  download icon"></i>
  {{$paper[0]->pdf_name}}
    </a></h2>
    </div>
    
      <h2><i class="large  green write icon"></i>Technical quality</h2>
    <div class="inline fields" style="margin-left: 2.5%">
     <div class="field ">
      <div class="ui radio checkbox" >
        <input type="radio" placeholder="Test Field" name="Technical" id="quality1"  value="-3">
        <label>Strong reject</label>

        </div>
           <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Technical" id="quality2" value="-2">
        <label>Reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Technical" id="quality3" value="-1">
        <label>Weak reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field"  checked="" name="Technical" id="quality4" value="0">
        <label>Boundary</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Technical" id="quality5" value="1">
        <label>Weak accept</label>
        </div>
       
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Technical" id="quality6" value="2">
        <label>Accept</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Technical" id="quality7" value="3">
        <label>Strong accept</label>
        </div>
      </div>
  </div>
  
    <h2><i class="large  green write icon"></i>Relevance to Conference</h2>
    <div class="inline fields" style="margin-left: 2.5%">
     <div class="field ">
      <div class="ui radio checkbox" >
        <input type="radio" placeholder="Test Field" name="Relevance" id="Conference1"  value="-3">
        <label>Strong reject</label>

        </div>
           <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Relevance" id="Conference2" value="-2">
        <label>Reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Relevance" id="Conference3" value="-1">
        <label>Weak reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field"  checked="" name="Relevance" id="Conference4" value="0">
        <label>Boundary</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Relevance" id="Conference5" value="1">
        <label>Weak accept</label>
        </div>
       
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Relevance" id="Conference6" value="2">
        <label>Accept</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Relevance" id="Conference7" value="3">
        <label>Strong accept</label>
        </div>
      </div>
    </div>
     <h2><i class="large  green write icon"></i>Presentation</h2>
    <div class="inline fields" style="margin-left: 2.5%">
      <div class="field ">
      <div class="ui radio checkbox" >
        <input type="radio" placeholder="Test Field" name="Presentation" id="Present1"  value="-3">
        <label>Strong reject</label>

        </div>
           <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Presentation" id="Present2" value="-2">
        <label>Reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Presentation" id="Present3" value="-1">
        <label>Weak reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field"  checked="" name="Presentation" id="Present4" value="0">
        <label>Boundary</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Presentation" id="Present5" value="1">
        <label>Weak accept</label>
        </div>
       
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Presentation" id="Present6" value="2">
        <label>Accept</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Presentation" id="Present7" value="3">
        <label>Strong accept</label>
        </div>
      </div>
    </div>
     <h2><i class="large  green write icon"></i>Overall rating</h2>
    <div class="inline fields" style="margin-left: 2.5%">
    <div class="field ">
      <div class="ui radio checkbox" >
        <input type="radio" placeholder="Test Field" name="Overall" id="rating1"  value="-3">
        <label>Strong reject</label>

        </div>
           <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Overall" id="rating2" value="-2">
        <label>Reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Overall" id="rating3" value="-1">
        <label>Weak reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field"  checked="" name="Overall" id="rating4" value="0">
        <label>Boundary</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Overall" id="rating5" value="1">
        <label>Weak accept</label>
        </div>
       
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Overall" id="rating6" value="2">
        <label>Accept</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="Overall" id="rating7" value="3">
        <label>Strong accept</label>
        </div>
      </div>
    </div>
    <hr>
        <h2><i class="large  green write icon"></i>Evaluation results</h2>
    <div class="inline fields" style="margin-left: 2.5%">
    <div class="field ">
      <div class="ui radio checkbox" >
        <input type="radio" placeholder="Test Field" name="frequency" id="score1"  value="-3">
        <label>Strong reject</label>

        </div>
           <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="frequency" id="score2" value="-2">
        <label>Reject</label>
        </div>
        <div class="ui radio checkbox" >
        <input type="radio" placeholder="Test Field" name="frequency" id="score3" value="-1">
        <label>Weak reject</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" checked="" name="frequency" id="score4" value="0">
        <label>Boundary</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="frequency" id="score5" value="1">
        <label>Weak accept</label>
        </div>
       
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="frequency" id="score6" value="2">
        <label>Accept</label>
        </div>

        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="frequency" id="score7" value="3">
        <label>Strong accept</label>
        </div>
      </div>
    </div>

  
  


  
    

    <h2 style="margin-left: 1.5%"><i class="large  green talk outline icon"></i>Comment</h2>
     <div class="ui Comment" style="margin-left: 1.5%">
      <textarea rows="10" cols="150" name="comment"></textarea>
    </div>
<button type="button" class="ui primary test button" onclick="myFunction()" style="margin-left: 2.5%;margin-bottom: 1%;margin-top: 2%"><i class="icon edit" ></i>OK</button>
</form>
 </div>
   

<script type="text/javascript">
function myFunction() {

 var rates = document.getElementsByName('frequency');
 var rates1 = document.getElementsByName('Overall');
 var rates2 = document.getElementsByName('Presentation');
 var rates3 = document.getElementsByName('Relevance');
 var rates4 = document.getElementsByName('Technical');
var rate_value;
var rate_value1;
var rate_value2;
var rate_value3;
var rate_value4;

for(var i = 0; i < rates.length; i++){
    if(rates[i].checked){
        if(i == 0){
          $('.item #r1').text("Strong reject");
        }
        else if(i == 1){
          $('.item #r1').text("Reject");
        }
        else if(i == 2){
          $('.item #r1').text("Weak reject");
        }
        else if(i == 3){
          $('.item #r1').text("Boundary");
        }
        else if(i == 4){
          $('.item #r1').text("Weak accept");
        }
        else if(i == 5){
          $('.item #r1').text("Accept");
        }
        else if(i == 6){
          $('.item #r1').text("Strong accept");
        }

        break;
    }
    
}

//$('.item #r1').text("bank");
//document.getElementById(".item #r1").innerHTML = id2.value;

for(var k = 0; k < rates1.length; k++){
    if(rates1[k].checked){
        if(k == 0){
          $('.item #r2').text("Strong reject");
        }
        else if(k == 1){
          $('.item #r2').text("Reject");
        }
        else if(k == 2){
          $('.item #r2').text("Weak reject");
        }
        else if(k == 3){
          $('.item #r2').text("Boundary");
        }
        else if(k == 4){
          $('.item #r2').text("Weak accept");
        }
        else if(k == 5){
          $('.item #r2').text("Accept");
        }
        else if(k == 6){
          $('.item #r2').text("Strong accept");
        }
        break;
    }
    
}

//$('.item #r2').text(rates1[k].value);

for(var t = 0; t < rates2.length; t++){
    if(rates2[t].checked){
        if(t == 0){
          $('.item #r3').text("Strong reject");
        }
        else if(t == 1){
          $('.item #r3').text("Reject");
        }
        else if(t == 2){
          $('.item #r3').text("Weak reject");
        }
        else if(t == 3){
          $('.item #r3').text("Boundary");
        }
        else if(t == 4){
          $('.item #r3').text("Weak accept");
        }
        else if(t == 5){
          $('.item #r3').text("Accept");
        }
        else if(t == 6){
          $('.item #r3').text("Strong accept");
        }
        break;
    }
    
}

//$('.item #r3').text(rates2[t].value);

for(var a = 0; a < rates3.length; a++){
    if(rates3[a].checked){
        if(a == 0){
          $('.item #r4').text("Strong reject");
        }
        else if(a == 1){
          $('.item #r4').text("Reject");
        }
        else if(a == 2){
          $('.item #r4').text("Weak reject");
        }
        else if(a == 3){
          $('.item #r4').text("Boundary");
        }
        else if(a == 4){
          $('.item #r4').text("Weak accept");
        }
        else if(a == 5){
          $('.item #r4').text("Accept");
        }
        else if(a == 6){
          $('.item #r4').text("Strong accept");
        }
        break;
    }
    
}

//$('.item #r4').text(rates3[a].value);

for(var c = 0; c < rates4.length; c++){
    if(rates4[c].checked){
        if(c == 0){
          $('.item #r5').text("Strong reject");
        }
        else if(c == 1){
          $('.item #r5').text("Reject");
        }
        else if(c == 2){
          $('.item #r5').text("Weak reject");
        }
        else if(c == 3){
          $('.item #r5').text("Boundary");
        }
        else if(c == 4){
          $('.item #r5').text("Weak accept");
        }
        else if(c == 5){
          $('.item #r5').text("Accept");
        }
        else if(c == 6){
          $('.item #r5').text("Strong accept");
        }
        break;
    }
    
}

//$('.item #r5').text(rates4[c].value);






}
</script>



<div class="ui small modal test"> 
  <i class="close icon"></i> 
<div class="header " style="color: green">
    <div class="ui compact menu" ">
    <a class="item">
      <i class=" icon users"></i>
     #ตรวจสอบการประเมิน
    </a>
    </div>
</div>
<div class="ui  relaxed divided list" style="background-color: #99ff99">
    <div class="item">
      <div class="content">
        <div class="ui large header" >Evaluation results</div>
        <label id="r1" >-</label>
      </div>
    </div>
    <div class="item">
      <div class="content">
        <div class="ui large header" >Overall rating</div>
        <label id="r2">-</label>
      </div>
    </div>
    <div class="item">
      <div class="content">
        <div class="ui large header">Presentation</div>
         <label id="r3">-</label>
      </div>
    </div>
     <div class="item">
      <div class="content">
        <div class="ui large header">Relevance to Conference</div>
        <label id="r4">-</label>
      </div>
    </div>
     <div class="item">
      <div class="content">
        <div class="ui large header">Technical quality</div>
        <label id="r5">-</label>
      </div>
    </div>
</div>
<button type="submit" form="formsubmit" class="ui positive button" style="margin-bottom: 1.5%;float: right;" onclick="return checkMe()" >
      <a><font color="white">Confirm</font></a>
</button> 
<script type="text/javascript">
       function checkMe() {
    if (confirm("Are you sure")) {
        return true;
    } else {
        
        return false;
    }
}
     </script>

</div>
<script type="text/javascript">

  $("#test").click(function(){
    $(".test").modal('show');
  });
  $(".test").modal({
    closable: true;
  });
 


</script>

</body>
</html>