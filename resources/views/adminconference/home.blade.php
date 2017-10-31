<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
@include('adminconference.head')
<link rel="stylesheet" type="text/css" href="/layout.css">
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
/*****************************modal********************************/



</style>
</head>
<body id="top" class="" >

 

  <div id="pageintro" class="body"> 
  

   
    <article  >
    <div>
      
       
      <h2 class="heading" style="margin-left: 20%">Conference</h2>

      
     
      <p style="margin-left: 20%">Conference are a form of research meeting where the researcher is anyone, regardless of whether your research is still unacceptable.</p>
  
     
  
       
      <div>
      <footer>
        <ul class="nospace inline pushright" style="margin-left: 20%">
          
          <button class="huge ui animated
          green basic button " id="test">
          <span class="visible content">Login</span>
          <span class="hidden content">Enter</span></button>

          <div class="huge ui vertical animated green button" tabindex="0">
              <div onclick="location.href='/register'" class="hidden content">Sign Up</div>
              <div class="visible content">
               Register
              </div>

          </div>
     </div>
<div class="ui tiny modal test" >
  <i class="close icon"></i>
  <h2 class="ui icon" align="center"><i class=" big green users icon" ></i>Login System
  </h2>
    <form action="{{ route('users.setLogin') }}" method="post" class="ui form">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="ui stacked segment" style="background-color: #99ff99">
        <div class="field" >
          <div class="ui left icon input" >
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address or user id">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <button type="submit" class="ui button google plus">Login</button>
      </div>

      <div class="ui error message"></div>
      
    </form>
   

    <div class="ui message">
      New to us? <a href="{{ route('users.getRegister') }}" style="color: green">Sign Up</a>
    </div>
  

</div>

  <script type="text/javascript">

  $('#test').click(function(){
    $('.test').modal('show');    
  });

  
</script>
         

       
        
        </ul>
       
      </footer>
      </div>
      
    </article>

  
  </div>
  </div>


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