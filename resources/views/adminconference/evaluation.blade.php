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
  <h2 class="ui icon" style="margin-left: 40% "><i class=" big green user icon" ></i>Reviewer[<label>{{$groupid}}</label>:<label> {{$id}}</label>]</h2>
  
  <hr>
    <h2><i class="large green newspaper icon"></i>Paper name :  
      {{$paper[0]->paper_name}}
    </h2>
    <h2 style="display: inline;"><i class="large green address book outline icon"></i>Paper ID :  
       _ {{$paper[0]->paper_id}} _
    </h2>

    <h2><i class="large green bookmark icon"></i>Preview: <a class="ui label" style="display:inline;: "><i class="cloud  download icon"></i>
  Paper.pdf
    </a></h2>
    
 


  
    <h2><i class="large  green write icon"></i><u>Evaluation</u></h2>
    <div class="inline fields" style="margin-left: 2.5%">
    <div class="field ">
      <div class="ui radio checkbox" >
        <input type="radio" placeholder="Test Field" name="frequency" id="score1"  value="1">
        <label><i class="thumbs down icon"></i>Badly</label>
        </div>
      <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="frequency" id="score2" value="2">
        <label><i class="thumbs outline down icon" ></i>Pretty</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="frequency" id="score3" value="3">
        <label><i class="thumbs outline up icon"></i>Posh</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="frequency" id="score4" value="4">
        <label><i class="smile icon"></i>Accept</label>
        </div>
        <div class="ui radio checkbox">
        <input type="radio" placeholder="Test Field" name="frequency" id="score5" value="5">
        <label><i class="heart icon"></i>Strong</label>
      </div>
    </div>
</div>

    <h2 style="margin-left: 1.5%"><i class="large  green talk outline icon"></i>Comment</h2>
     <div class="ui Comment" style="margin-left: 1.5%">
      <textarea rows="10" cols="150" ></textarea>
    </div>
<button type="button" class="ui primary test button" onclick="myFunction()" style="margin-left: 2.5%;margin-bottom: 1%;margin-top: 2%"><i class="icon edit" ></i>OK</button>
</form>
 </div>
   

<script type="text/javascript">
function myFunction() {

 var rates = document.getElementsByName('frequency');
var rate_value;
for(var i = 0; i < rates.length; i++){
    if(rates[i].checked){
        rate_value = rates[i].value;
        break;
    }
}
if (rates[i].value == 0) {
  rates[i].value = 1;
}
$('.statistic #r1').text(rates[i].value);

}
  
</script>



<div class="ui tiny modal test" style="height: 45%;width: 30%" >
    
  <i class="close icon"></i>

  
  <div class="header " style="color: green">
    <div class="ui compact menu" ">

  <a class="item">
    <i class=" icon users"></i>
     
     Id-group : {{$groupid}}
  </a>
  <a class="item">
    <i class="user icon "></i> 
    Id : {{$id}}
    
  </a>
  <a class="item">
    <i class="user icon "></i> 
    Writer : {{$paper[0]->paper_name}}
    
  </a>

</div>
  </div>
  <div class="image content" style="background-color: #99ff99">
   

    <div class="description"  style="margin-top: 10%">
      
      <div class="description" ><h4 id="s1"></h4></div>
      <div class="ui relaxed divided list">
  <div class="ui statistics" style="margin-left: 25%">
  <div class="statistic">
    <div class="value">
      <h1 class="value" id="r1">1</h1> 
    </div>
    <div class="label" n>
      Score
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <h1>{{$paper[0]->paper_id}}</h1>
    </div>
    <div class="label" name=>
      Id
    </div>
  </div>
</div>
</div>
    </div>
  </div>
    <button type="submit" form="formsubmit" class="ui positive button" style="margin-top: 5%;margin-right: 3%;float: right;" >
      <a><font color="white">Confirm</font></a>
    </button> 
</div>
<script type="text/javascript">
  $(function(){
  $("#test").click(function(){
    $(".test").modal('show');
  });
  $(".test").modal({
    closable: true;
  });
 

});
</script>

</body>
</html>
