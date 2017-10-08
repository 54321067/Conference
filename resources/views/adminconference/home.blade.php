<!DOCTYPE html>
<html lang="en">
<head>
@include('adminconference.head')
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>

<style type="text/css">
.header  div{display: inline;}
</style>
<style type="text/css">
 h3{
color: #999999;
font-family: arial, sans-serif;
font-size: 16px;
font-weight: bold;
margin-top: 0px;
margin-bottom: 1px;
}
</style>



</head>
<body class="body" >
@include('cfs.userheader')
@include('cfs.modal-login')


<div class="container" style="width: 90%">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" align="center" style="height: 100%;margin-top: 1.5%">

      <div class="item active">
        <img src="/images/bghome.jpg" alt="Los Angeles" style="width:60%;height: 100%">
        <div class="carousel-caption">
          <h3>Research</h3>
          <p>ระบบการประชุม</p>
        </div>
      </div>

      <div class="item">
        <img src="/images/b1.jpg" alt="Chicago" style="width:60%;height: 100%">
        <div class="carousel-caption">
          <h3>Management</h3>
          <p>สนับสนุน</p>
        </div>
      </div>
    
      <div class="item">
        <img src="/images/b2.jpg" alt="New York" style="width:60%;height: 100%">
        <div class="carousel-caption">
          <h3>System</h3>
          <p>งานวิจัย</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
