<!DOCTYPE html>
<html>
<head>
@include('adminconference.head')

</head>
<body class="body">
@include('cfs.userheader')

<div class="ui segments">
    <h2><i class="large green bookmark icon"></i>Preview: <a class="ui label" style="display: inline;: ">
  <i class="cloud  download icon"></i>
  Paper.pdf
    </a></h2>
    
  </div>
  <div class="ui segments">
    <div class="ui form">
  
    <h2><i class="large  green write icon"></i>Evaluation</h2>
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
</div>
<div class="ui secondary segment">
    <h2 style="margin-left: 1.5%"><i class="large  green talk outline icon"></i>Comment</h2>
     <div class="ui Comment" style="margin-left: 1.5%">
      <textarea rows="20" cols="150" ></textarea>
    </div>
  </div>
<button class="ui green labeled submit icon button " id="test" type="button" onclick="myFunction()" style="margin-left: 2.5%;margin-bottom: 1%"><i class="icon edit" ></i>OK</button>
<button class=" ui  red button" type="close" style="display: inline;">Cancel</button>
  </div>
  
  
   

<script type="text/javascript">
function myFunction() {

  var locate = document.getElementById("i9");
    document.getElementById("c1").innerHTML = locate.value;
  var locate1 = document.getElementById("iii");
    document.getElementById("c2").innerHTML = locate1.value;
 var rates = document.getElementsByName('frequency');
var rate_value;
for(var i = 0; i < rates.length; i++){
    if(rates[i].checked){
        rate_value = rates[i].value;
        break;
    }
}
$('.statistic #r1').text(rates[i].value);

}
  
</script>

</div>
</div>

    <div class="ui modal test" style="width: 30%">
  <i class="close icon"></i>
  <div class="header" style="color: green">
    Profile Paper
  </div>
  <div class="image content" style="background-color: #99ff99">
   

    <div class="description"  style="margin-left: 2.5%">
      
      <div class="description" ><h4 id="s1"></h4></div>
      <div class="ui relaxed divided list">
  <div class="ui statistics" >
  <div class="statistic">
    <div class="value">
     <h1 class="value" id="c1"></h1> 
    </div>
    <div class="label">
      Name
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <h1 class="value" id="r1"></h1> 
    </div>
    <div class="label">
      Score
    </div>
  </div>
  <div class="statistic">
    <div class="value">
      <h1 class="value" id="c2"></h1>
    </div>
    <div class="label">
      Id
    </div>
  </div>
</div>
</div>
    </div>
  </div>
  
  <div class="actions " >
    <div class="ui black deny button">
      close
    </div>
    <button class="ui positive right  icon submit button" id="confirm" type="submit"> 
      Confirm
      <i class="checkmark icon"></i>
    </button> 
  </div>


</form>
<script type="text/javascript">
  $(function(){
  $("#test").click(function(){
    $(".test").modal('show');
  });
  $(".test").modal({
    closable: true
  });
});
</script>
</body>
</html>
