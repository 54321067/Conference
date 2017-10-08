<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
    <link href="/Semantic-UI-master/dist/semantic.css" rel="stylesheet">
  
    <link href="/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" />
    <script src="/jquery-3.1.0.min.js"></script>
    <script src="/Semantic-UI-master/dist/semantic.js"></script>
    <script src="/moment.js"></script>
    <script src="/script.js"></script>
      
 <script type="text/javascript">
    $('.ui.radio.checkbox')
      .checkbox().radio()
    ;
  </script>
 
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
<h1 class="ui menu" style="margin: 0%;margin-left: 4.5%;margin-right: 4.5%">
    <img src="">
</h1>
<section id ="mainbox" style="margin-top: 0%;margin-left: 4.5%;margin-right: 4.5%">
<div class="ui menu" style="background-color: #4dffa6">
    <a href="/home" class="item">
      Home
    </a>
    <div>
        <a class="ui dropdown item">
          Factualy
          <i class="dropdown icon"></i>
          <div class="menu">
            <div class="item">
              <i class="dropdown icon"></i>
              <div class="text">Engineering</div>
            </div>
            <div class="item">Economic</div>
          </div>
        </a>
    </div>
    <a target ="_blank" href="https://www.facebook.com/CPEatSiRacha/" class="item">
      Conferences
    </a>

    <a class="item" href ="/list/archive">
        <i class="icon file text outline"></i>Archive
    </a>
    <a class="item" href ="/list/table">
        <i class="icon table"></i>News
    </a>
    @if(Auth::check())
        <a class="ui dropdown item">
      เก้าอี้นวม
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item">บัญชีของฉัน</div>
         <div class="item">การประชุมของฉัน</div>
        <div class="item">สร้างการประชุมใหม่</div>
        <div class="item">เงื่อนไขการให้บริการ</div>     
      </div>
    </a>
    <a class="item">Wellcome : {{ Auth::user()->name }}</a>
    @else
        <a class ="ui btn-modal item" href="#">
            <i class="icon rocket">Login</i>
        </a>
    @endif
  </div>
   
    
</section>
<div style="margin: 0%;margin-left: 4.5%;margin-right: 4.5%;">
<div class="ui one column grid">
<div class="column">
 <div class="ui raised segment">
      <a class="ui red ribbon label"><h4>Paper name</h4></a>
      <span><h2 id="namepaper">Research</h2></span>
      <a class="ui blue ribbon label"><h4>Detail</h4></a><a href=""></a> 
      <h4>IPSJ Transactions on System LSI Design Methodology (T-SLDM) is an open-access online journal which has been launched in 2008. The purpose of T-SLDM is to publicize research results in the field of system LSI design methodology. All articles in T-SLDM are written in English.</h4>
      <a class="ui green ribbon label" ><h4>Preview</h4></a><br><br><a href=""><h4>Parper 1.pdf</h4></a> 
      <p></p><br>
      <a class="ui yellow ribbon label" ><h4>Evaluation</h4></a><a href=""></a> 
      <p>
<form id="radioscore">
    <div class="form-group" id="radioscore">
    <div class="radio" >
      <label><input type="radio" name="score" value="5">5</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="score" value="4">4</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="score" value="3">3</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="score" value="2">2</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="score" value="1">1</label>
    </div>
    </div>
  </form>
  
  
   


<!--end form-->
<a class="ui black ribbon label" ><h4>Comment</h4></a><a href=""></a> 
      <p><form class="ui reply form">
    <div class="field">
      <textarea></textarea>
    </div>
   
    <button class="ui blue labeled submit icon button" type="button" data-toggle="modal" data-target="#myModal"onclick="modalShow()"><i class="icon edit" ></i>Send</button>
    <script type="text/javascript">
      function modalShow(){
        var papername=$('#namepaper').text();
        //var radioground=$('#radioscore').text();
        var radioground = document.getElementsByName('score') ; 
        
        for(var i=0, length = radioground.length; i < length;i++)
        {
          if(radioground[i].checked==true)
          {
            //alert(radioground[i].value);
            break;
          }
        }
              
        $('.modal-content #modalname').text(papername);
        $('.modal-content #radioShow').text(radioground[i].value);
        
      }
    </script>

    
  <!-- Modal -->
  
  <div class="ui small modal" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-right: 10%;margin-left: 10%;height: 300px;">

        <div class="ui one cards">

  <div class="card" style="height: 300px;">

    <div class="content">
      <img class="right floated mini ui image" src="/pleenes/images/demo/avatar.png">
      <br><br><br>
      <a class="ui orange right ribbon label">#id user</a>
      <hr>
      
      <div class="ui blue ribbon label">
       Paper name
      </div>
      <br><br>
        <p id="modalname"></p>
      <br><br>
      <div class="ui red ribbon label">
        assessment
      </div>
      <br><br>
        <p id="radioShow"></p>
    
     
      
     
    </div>
    <div class="extra content">
        <buttom class="ui inverted green button" >Confirm</buttom>
        <buttom class="ui inverted red button"  >Cancel</buttom>
    </div>
  </div>
  </div>
      </div>
      
    </div>
  </div>
  
     <button class="negative ui button" type="Reset">Reset</button>
  </form></p>
    </div>
  </div>
  
</div></p>
 
     
    

</div>
</body>
</html>
