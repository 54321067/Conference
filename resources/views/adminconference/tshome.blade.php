<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{asset('semantic/semantic.min.css')}}" rel="stylesheet">

<link href="{{asset('semantic/semantic.css')}}" rel="stylesheet">
    <link href="{{asset('style4.css')}}" rel="stylesheet">
    <script src="{{asset('jquery-3.1.0.min.js')}}"></script>
    <script src="{{asset('semantic/semantic.min.js')}}"></script>
    <script src="{{asset('moment.js')}}"></script>
    <script src="{{asset('script.js')}}"></script>
    
    <style>
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
    position: fixed;
}
</style>
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
 .h2 h2  {
color: #999999;
font-family: arial, sans-serif;
font-size: 16px;
font-weight: bold;
margin-top: 0px;
margin-bottom: 1px;
}
.overlay{color:#FFFFFF; background-color:inherit;}
.overlay::after{color:inherit; background-color:rgba(0,0,0,.55);}
.heading{font-size:1.2rem;}
.pagination a, .pagination strong{border-color:#D7D7D7;}
.pagination .current *{color:#FFFFFF; background-color:#59A209;}

#footer{padding:80px 0;}

#footer .heading{margin-bottom:50px; font-size:1.2rem;}

#footer .linklist li{display:block; margin-bottom:15px; padding:0 0 15px 0; border-bottom:1px solid;}
#footer .linklist li:last-child{margin:0; padding:0; border:none;}
#footer .linklist li::before, #footer .linklist li::after{display:table; content:"";}
#footer .linklist li, #footer .linklist li::after{clear:both;}

#footer .contact{}
#footer .contact.linklist li, #footer .contact.linklist li:last-child{position:relative; padding-left:40px;}
#footer .contact li *{margin:0; padding:0; line-height:1.6;}
#footer .contact li i{display:block; position:absolute; top:0; left:0; width:30px; font-size:16px; text-align:center;}

#footer input, #footer button{border:1px solid;}
#footer input{display:block; width:100%; padding:8px;}
#footer button{padding:8px 18px 10px; text-transform:uppercase; font-weight:700; cursor:pointer;}
.btn, .btn.inverse:hover{color:#FFFFFF; background-color:#00BCDF; border-color:#00BCDF;}
.btn:hover, .btn.inverse{color:inherit; background-color:transparent; border-color:inherit;}
.nav nav{ display: inline;
          background-color: #00FF7F}

< nav ul, nav ol{margin:0; padding:0; list-style:none;}

#mainav, #breadcrumb, .sidebar nav{line-height:normal;}
#mainav .drop::after, #mainav li li .drop::after, #breadcrumb li a::after, .sidebar nav a::after{position:absolute; font-family:"FontAwesome"; font-size:10px; line-height:10px;}

/* Rows
--------------------------------------------------------------------------------------------------------------- */
.row1, .row1 a{}
.row2, .row2 a{}
.row3, .row3 a{}
.row4, .row4 a{}
.row5, .row5 a{}


/* Header
--------------------------------------------------------------------------------------------------------------- */

#header{}

#header #logo{margin:10px 0 0 0;}
#herder .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

#herder .button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

#herder .button1:hover {
    background-color: #4CAF50;
    color: white;
}

#herder .button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

#herder .button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

#herder .button3:hover {
    background-color: #f44336;
    color: white;
}

#herder .button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

#herder .button4:hover {background-color: #e7e7e7;}

#herder .button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

#herder .button5:hover {
    background-color: #555555;
    color: white;
}

#header div{display: inline;}
#header #logo h1{margin-left: 5px;margin:0; padding:0; line-height:1; font-size:22px;}
#header footer{margin-left: 85%}
#header img {
  margin-right: 10px: 
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 100px;
    height: 100px
}

/*Div
-----------------------------------------------------------------------------------------------------------------*/

/* Page Intro
--------------------------------------------------------------------------------------------------------------- */
#pageintro{padding:150px 0;}

#pageintro article{display:block; max-width:60%;}
#pageintro article *{margin:0; line-height:normal;}
#pageintro article .heading{margin-bottom:50px; font-size:4rem;}
#pageintro article p{font-size:1.4rem;}
#pageintro article footer{margin-top:100px;}


/* Content Area
--------------------------------------------------------------------------------------------------------------- */
.container{padding:80px 0;}

/* Content */
.container .content{}

.sectiontitle{margin-bottom:80px; text-align:center;}
.sectiontitle *{margin:0;}

.services > li:nth-child(-n+3){margin-bottom:50px;}/* Adds bottom margin to the first three elements only */
.services > li:last-child{margin-bottom:0;}/* Used when elements stack in small viewports */
.services article{display:block; padding:30px;}
.services article i{margin-right:10px; font-size:32px;}

.elements li:nth-child(-n+2){margin-bottom:50px;}/* Adds bottom margin to the first two elements only */
.elements > li:last-child{margin-bottom:0;}/* Used when elements stack in small viewports */
.elements article{display:block; position:relative; min-height:80px; padding:0 0 0 70px;}
.elements article::before, .elements article::after{display:table; content:"";}
.elements article::after{clear:both;}
.elements article *{margin:0 0 15px 0;}
.elements article > :last-child{margin-bottom:0;}
.elements article i{display:block; position:absolute; top:0; left:0; width:50px; height:50px; line-height:48px; margin:0; border:1px solid; text-align:center; font-size:20px;}
.elements article .heading{font-size:1.2rem;}

.latest article{display:block; max-width:320px;}
.latest article .txtwrap{padding:20px 15px;}
.latest article .txtwrap *{margin:0 0 15px 0; line-height:1;}
.latest article .txtwrap .heading{margin-bottom:5px; font-size:1.2rem;}
.latest article .txtwrap em{display:block; font-size:.8rem; font-style:normal;}
.latest article .txtwrap em br{margin:0;}
.latest article .txtwrap p{line-height:1.4;}
.latest article .txtwrap footer, .latest article .txtwrap .btn{margin:0;}

/* Comments */
#comments ul{margin:0 0 40px 0; padding:0; list-style:none;}
#comments li{margin:0 0 10px 0; padding:15px;}
#comments .avatar{float:right; margin:0 0 10px 10px; padding:3px; border:1px solid;}
#comments address{font-weight:bold;}
#comments time{font-size:smaller;}
#comments .comcont{display:block; margin:0; padding:0;}
#comments .comcont p{margin:10px 5px 10px 0; padding:0;}

#comments form{display:block; width:100%;}
#comments input, #comments textarea{width:100%; padding:10px; border:1px solid;}
#comments textarea{overflow:auto;}
#comments div{margin-bottom:15px;}
#comments input[type="submit"], #comments input[type="reset"]{display:inline-block; width:auto; min-width:150px; margin:0; padding:8px 5px; cursor:pointer;}

/* Sidebar */
.container .sidebar{}

.sidebar .sdb_holder{margin-bottom:50px;}
.sidebar .sdb_holder:last-child{margin-bottom:0;}


/* Split Box
--------------------------------------------------------------------------------------------------------------- */
.split{}

.split section{display:block; position:relative; float:right; width:50%; padding:100px 0 100px 50px; text-align:center;}
.split section::after{display:block; position:absolute; top:0; right:-1000%; bottom:0; left:100%; content:"";}


/* Footer
--------------------------------------------------------------------------------------------------------------- */
#footer{padding:80px 0;}

#footer .heading{margin-bottom:50px; font-size:1.2rem;}

#footer .linklist li{display:block; margin-bottom:15px; padding:0 0 15px 0; border-bottom:1px solid;}
#footer .linklist li:last-child{margin:0; padding:0; border:none;}
#footer .linklist li::before, #footer .linklist li::after{display:table; content:"";}
#footer .linklist li, #footer .linklist li::after{clear:both;}

#footer .contact{}
#footer .contact.linklist li, #footer .contact.linklist li:last-child{position:relative; padding-left:40px;}
#footer .contact li *{margin:0; padding:0; line-height:1.6;}
#footer .contact li i{display:block; position:absolute; top:0; left:0; width:30px; font-size:16px; text-align:center;}

#footer input, #footer button{border:1px solid;}
#footer input{display:block; width:100%; padding:8px;}
#footer button{padding:8px 18px 10px; text-transform:uppercase; font-weight:700; cursor:pointer;}


/* Copyright
--------------------------------------------------------------------------------------------------------------- */
#copyright{padding:20px 0;}
#copyright *{margin:0; padding:0;}


/* Transition Fade
This gives a smooth transition to "ALL" elements used in the layout - other than the navigation form used in mobile devices
If you don't want it to fade all elements, you have to list the ones you want to be faded individually
Delete it completely to stop fading
--------------------------------------------------------------------------------------------------------------- */
*, *::before, *::after{transition:all .3s ease-in-out;}
#mainav form *{transition:none !important;}


/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Navigation
--------------------------------------------------------------------------------------------------------------- */
nav ul, nav ol{margin:0; padding:0; list-style:none;}

#mainav, #breadcrumb, .sidebar nav{line-height:normal;}
#mainav .drop::after, #mainav li li .drop::after, #breadcrumb li a::after, .sidebar nav a::after{position:absolute; font-family:"FontAwesome"; font-size:10px; line-height:10px;}

/* Top Navigation */
#mainav{}
#mainav ul.clear{}
#mainav ul{text-transform:uppercase;}
#mainav ul ul{z-index:9999; position:absolute; width:180px; text-transform:none;}
#mainav ul ul ul{left:180px; top:0;}
#mainav li{display:inline-block; position:relative; margin:0 15px 0 0; padding:0;}
#mainav li:last-child{margin-right:0;}
#mainav li li{width:100%; margin:0;}
#mainav li a{display:block; padding:30px 0;}
#mainav li li a{border:solid; border-width:0 0 1px 0;}
#mainav .drop{padding-left:15px;}
#mainav li li a, #mainav li li .drop{display:block; margin:0; padding:10px 15px;}
#mainav .drop::after, #mainav li li .drop::after{content:"\f0d7";}
#mainav .drop::after{top:35px; left:5px;}
#mainav li li .drop::after{top:15px; left:5px;}
#mainav ul ul{visibility:hidden; opacity:0;}
#mainav ul li:hover > ul{visibility:visible; opacity:1;}

#mainav form{display:none; margin:0; padding:0;}
#mainav form select, #mainav form select option{display:block; cursor:pointer; outline:none;}
#mainav form select{width:100%; padding:5px; border:1px solid;}
#mainav form select option{margin:5px; padding:0; border:none;}

/* Breadcrumb */
#breadcrumb{padding:15px 0;}
#breadcrumb ul{margin:0; padding:0; list-style:none; text-transform:uppercase;}
#breadcrumb li{display:inline-block; margin:0 6px 0 0; padding:0;}
#breadcrumb li a{display:block; position:relative; margin:0; padding:0 12px 0 0; font-size:12px;}
#breadcrumb li a::after{top:3px; right:0; content:"\f101";}
#breadcrumb li:last-child a{margin:0; padding:0;}
#breadcrumb li:last-child a::after{display:none;}

/* Sidebar Navigation */
.sidebar nav{display:block; width:100%;}
.sidebar nav li{margin:0 0 3px 0; padding:0;}
.sidebar nav a{display:block; position:relative; margin:0; padding:5px 10px 5px 15px; text-decoration:none; border:solid; border-width:0 0 1px 0;}
.sidebar nav a::after{top:9px; left:5px; content:"\f101";}
.sidebar nav ul ul a{padding-left:35px;}
.sidebar nav ul ul a::after{left:25px;}
.sidebar nav ul ul ul a{padding-left:55px;}
.sidebar nav ul ul ul a::after{left:45px;}

/* Pagination */
.pagination{display:block; width:100%; text-align:center; clear:both;}
.pagination li{display:inline-block; margin:0 2px 0 0;}
.pagination li:last-child{margin-right:0;}
.pagination a, .pagination strong{display:block; padding:8px 11px; border:1px solid; background-clip:padding-box; font-weight:normal;}

/* Back to Top */
#backtotop{z-index:999; display:inline-block; position:fixed; visibility:hidden; bottom:20px; right:20px; width:36px; height:36px; line-height:36px; font-size:16px; text-align:center; opacity:.2;}
#backtotop i{display:block; width:100%; height:100%; line-height:inherit;}
#backtotop.visible{visibility:visible; opacity:.5;}
#backtotop:hover{opacity:1;}


/* Tables
--------------------------------------------------------------------------------------------------------------- */
table, th, td{border:1px solid; border-collapse:collapse; vertical-align:top;}
table, th{table-layout:auto;}
table{width:100%; margin-bottom:15px;}
th, td{padding:5px 8px;}
td{border-width:0 1px;}


/* Gallery
--------------------------------------------------------------------------------------------------------------- */
#gallery{display:block; width:100%; margin-bottom:50px;}
#gallery figure figcaption{display:block; width:100%; clear:both;}
#gallery li{margin-bottom:30px;}


/* Font Awesome Social Icons
--------------------------------------------------------------------------------------------------------------- */
.faico{margin:0; padding:0; list-style:none;}
.faico li{display:inline-block; margin:8px 5px 0 0; padding:0; line-height:normal;}
.faico li:last-child{margin-right:0;}
.faico a{display:inline-block; width:36px; height:36px; line-height:36px; font-size:18px; text-align:center;}

.faico a{color:#FFFFFF; background-color:#59A209;}
.faico a:hover{}

.faicon-dribble:hover{background-color:#EA4C89;}
.faicon-facebook:hover{background-color:#3B5998;}
.faicon-google-plus:hover{background-color:#DB4A39;}
.faicon-linkedin:hover{background-color:#0E76A8;}
.faicon-twitter:hover{background-color:#00ACEE;}
.faicon-vk:hover{background-color:#4E658E;}


/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Colours
--------------------------------------------------------------------------------------------------------------- */
.coler body{color:#FFFFFF; background-color:#214B4A;}
a{color:#59A209;}
a:active, a:focus{background:transparent;}/* IE10 + 11 Bugfix - prevents grey background */
hr, .borderedbox{border-color:#D7D7D7;}
label span{color:#FF0000; background-color:inherit;}
input:focus, textarea:focus, *:required:focus{border-color:#59A209;}
.overlay{color:#FFFFFF; background-color:inherit;}
.overlay::after{color:inherit; background-color:rgba(0,0,0,.55);}

.btn, .btn.inverse:hover{color:inherit; background-color:transparent; border-color:inherit;}
.btn:hover, .btn.inverse{
                         color:#FFFFFF; background-color:green; border-color:#59A209;}


/* Rows */
.row1, .row1 a{}
.row2{color:#474747; background-color:#EAEAEA;}
.row3{color:#474747; background-color:#FFFFFF;}
.row4{color:#FFFFFF; background-color:#142E2D;}
.row5, .row5 a{color:inherit;}


/* Header */
#header #logo a{color:inherit;}


/* Content Area */
.services article{color:inherit; background-color:#FFFFFF;}
.services article:hover{color:#FFFFFF; background-color:#142E2D;}

.elements article i{border-color:#D7D7D7;}
.elements article:hover i{color:#FFFFFF; background-color:#142E2D; border-color:#142E2D;}

.latest article .txtwrap{color:#474747; background-color:#FFFFFF;}


/* Split Box */
.split section, .split section::after{color:#474747; background-color:#FFFFFF;}
.split section .fa-ul .fa-li{color:#59A209;}


/* Footer */
#footer .heading{color:#FFFFFF;}
#footer hr, #footer .borderedbox, #footer .linklist li{border-color:rgba(255,255,255,.1);}

#footer input, #footer button{border-color:transparent;}
#footer input{color:#FFFFFF; background-color:#214B4A;}
#footer input:focus{border-color:#59A209;}
#footer button{color:#FFFFFF; background-color:#59A209;}


/* Navigation */
#mainav li a{color:inherit;}
#mainav .active a, #mainav a:hover, #mainav li:hover > a{color:#59A209; background-color:inherit;}
#mainav li li a, #mainav .active li a{color:inherit; background-color:rgba(33,75,74,.65); border-color:rgba(33,75,74,.65);}
#mainav li li:hover > a, #mainav .active .active > a{color:#FFFFFF; background-color:#59A209;}
#mainav form select{color:#FFFFFF; background-color:#142E2D; border-color:rgba(0,0,0,.5);}

#breadcrumb a{color:inherit; background-color:inherit;}
#breadcrumb li:last-child a{color:#59A209;}

.container .sidebar nav a{color:inherit; border-color:#D7D7D7;}
.container .sidebar nav a:hover{color:#59A209;}

.pagination a, .pagination strong{border-color:#D7D7D7;}
.pagination .current *{color:#FFFFFF; background-color:#59A209;}

#backtotop{color:#FFFFFF; background-color:#59A209;}


/* Tables + Comments */
table, th, td, #comments .avatar, #comments input, #comments textarea{border-color:#D7D7D7;}
#comments input:focus, #comments textarea:focus, #comments *:required:focus{border-color:#59A209;}
th{color:#FFFFFF; background-color:#373737;}
tr, #comments li, #comments input[type="submit"], #comments input[type="reset"]{color:inherit; background-color:#FBFBFB;}
tr:nth-child(even), #comments li:nth-child(even){color:inherit; background-color:#F7F7F7;}
table a, #comments a{background-color:inherit;}



/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------------------------------------------ */


/* Media Queries
--------------------------------------------------------------------------------------------------------------- */
@-ms-viewport{width:device-width;}


/* Max Wrapper Width - Laptop, Desktop etc.
--------------------------------------------------------------------------------------------------------------- */
@media screen and (min-width:978px){
  .hoc{max-width:978px;}
}


/* Mobile Devices
--------------------------------------------------------------------------------------------------------------- */
@media screen and (max-width:900px){
  .hoc{max-width:90%;}

  #header{padding:30px 0 15px;}
  #header #logo{margin:0;}

  #mainav{}
  #mainav ul{display:none;}
  #mainav form{display:block;}

  #breadcrumb{}

  .container{}
  #comments input[type="reset"]{margin-top:10px;}
  .pagination li{display:inline-block; margin:0 5px 5px 0;}

  #footer{}

  #copyright{}
  #copyright p:first-of-type{margin-bottom:10px;}
}


@media screen and (max-width:750px){
  .imgl, .imgr{display:inline-block; float:none; margin:0 0 10px 0;}
  .fl_left, .fl_right{display:block; float:none;}
  .group .group > *:last-child, .clear .clear > *:last-child, .clear .group > *:last-child, .group .clear > *:last-child{margin-bottom:0;}/* Experimental - Needs more testing in different situations, stops double margin when stacking */
  .one_half, .one_third, .two_third, .one_quarter, .two_quarter, .three_quarter{display:block; float:none; width:auto; margin:0 0 50px 0; padding:0;}

  #header{text-align:center;}
  #header #logo{margin-bottom:15px;}

  #pageintro article{max-width:none;}
  #pageintro article .heading{margin-bottom:30px; font-size:2rem;}
  #pageintro article p{font-size:1rem;}

  .sectiontitle{text-align:left;}

  #footer{padding-bottom:30px;}/* Not needed, just looks a little better - compensates for the grid elements bottom margin */
}


/* Other
--------------------------------------------------------------------------------------------------------------- */
@media screen and (max-width:650px){
  .scrollable{display:block; width:100%; margin:0 0 30px 0; padding:0 0 15px 0; overflow:auto; overflow-x:scroll;}
  .scrollable table{margin:0; padding:0; white-space:nowrap;}

  .inline li{display:block; margin-bottom:10px;}
  .pushright li{margin-right:0;}

  .font-x2{font-size:1.4rem;}
  .font-x3{font-size:1.6rem;}

  .hoc.split{max-width:none; width:100%;}
  .split section{float:none; width:100%; padding:10% 5%; text-align:left;}
}

</style>



</head>
<body class="body"  ">
<div >
  <header class="header">
   <div style="width: 250px;height:100px;margin-bottom: 2.5% " >
        <img align="left" src="welcome/images/eeee.png" style="width: 100px;height:100px">
      </div>
    <div   class="header" style="margin-top: 2.5%;margin-right: :2.5%: " class="fl_left">
          <h1>มหาวิทยาลัยเกษตรศาสตร์</h1><sup>(Kasetsart University Sriracha Campus)</sup>
        </div>
      
  </header>
 

</div>
  <div class="nav" style="widows: 100%;margin-top:2.5%">
    
    <div class="ui tiny menu" style="background-color: #D3D3D3;margin-top: 3.5%">
  <a class="active item" href="#">
    Home
  </a>
  
  <div class="right menu">
    
    <div class="item">
       <button class="ui inverted green basic button">Login</button>
    </div>
    <div class="item">
       <button class="ui inverted green basic button">Register</button>
    </div>
  </div>
</div>
  
    
  </div>
 <div   class="nav" style="width: 100%;height: 100%;" >
  <div class="wrapper bgded" style="background-image:url('/pleenes/images/5556.jpg');width: 100%;height: 100%">
  <div id="pageintro" class="hoc clear" style="margin-left: 2.5%;margin-bottom: 5%"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="overlay inspace-30 btmspace-30" style="margin-left: 2.5%;margin-bottom: 2.5%">
        <h2 class="heading" style="color:red;margin-bottom: 5%  "><b><I>Research Management System</I></b></h2>
       
      </div>
     
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
</div>
<div>
  <footer class=""></footer>
</div> 
</body>
</html>
