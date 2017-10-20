<!Doctype html>
<html>
    <head>
        <title>Conferrencs</title>

        @include('adminconference.head')
    </head>

<body class="body">
@include('cfs.userheader')
<section id ="mainbox" style="margin-top: 0%;margin-left: 4.5%;margin-right: 4.5%">

   
    
</section>
<div class="ui menu" style="margin-left: 4.5%;margin-right: 4.5%">
    <h3 style="margin-left:1%;margin-bottom: 1%;margin-top: 1%" >Conferrences</h3>
</div>
<div style="margin-left: 4.5%;margin-right: 4.5%;margin-bottom: 5%">
                            
                                <table class="ui sortable celled table" >
                                    <thead>
                                        <tr> 
                                        <tr>
                                            <th>
                                                <div style="padding-bottom:10pt">Acronym</div>
                                            </th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>
                                                <div style="padding-bottom:10pt">
                                                    Submission<br/>deadline
                                                </div>
                                            </th>
                                            <th>
                                                <div style="padding-bottom:10pt">Start date</div>
                                            </th>
                                            <th>Topics</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                    <?php
                                    $i=0;
                                    $values = DB::table('conferall')->get();

                                    foreach ($values as $value)
                                        {

                                    ?>

                                    <tr>
                                    <td>
                                    <a href="{{ route('adminconference.aboutConference',['id'=>$value->conid ]) }}">
                                    <?php
                                       
                                        
                                            echo($value->name);
                                       ?> 
                                       </a>
                                     </td>
                                     <td>
 
                                    <?php
                                       
                                        
                                            echo($value->Acronym_N);


                                        
                                       ?> 
                                           
                                     </td>
                                     <td>
 
                                    <?php
                                       
                                        
                                            echo($value->Loca);


                                        
                                       ?> 
                                           
                                     </td>
                                     <td>
 
                                    <?php
                                       
                                        
                                            echo($value->D_Line);


                                        
                                       ?> 
                                           
                                     </td>  
                                     <td>
 
                                    <?php
                                       
                                        
                                            echo($value->S_Line);


                                        
                                       ?> 
                                           
                                     </td>
                                     <td>
                                     <span  class="tag fg_carmin bg_blud">
                                       <a href="{{$value->Acronym_L}}">{{$value->topic_1}}</a>
                                        </span>
                                        <span class="tag fg_carmin bg_green" >
                                        
                                       <a href="{{$value->Acronym_L}}">{{$value->topic_2}}</a>
                                        </span> 
                                        
 
                                    
                                           
                                     </td>     
                                     </tr>
                                     <?php
                                        }
                                     ?>
                                     </tr> 

                                    </tbody>

                                </table>
                                
                            
</div>



<!-- Modal Form Login -->
<div class="ui modal" id="modal-login" style="border-left: 5%; width:480px;height: 300px">
  <div class="header">
    <h1 class="ui header">
      Login
      <div class="sub header">
        เข้าสู่ระบบ
      </div>
    </h1>
  </div>
  <div class="ui grid" style="width:1000px;height: 1000px;margin-top: 2px;">
            <div class="eight wide column">
            @if(Auth::check())
                <a href="{{ route('users.logout') }}" class="ui button">Logout</a>
            @else
            <div class="ui segment" style="margin-top: 5%;margin-left: 1% ">
                <form action="{{ route('users.setLogin') }}" method="post" class="ui form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="two fields">
                        <div class="field">
                            <label>Username</label>
                            <input type="text" name="email" placeholder="Username" required>
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="field">
                        <button type="submit" class="ui button google plus">Login</button>
                        <a href="{{ route('users.getRegister') }}" class="ui button">Register</a>
                        <a style="margin-left: 30%" href="/" class="ui button">Cancel</a>
                    </div>
             </form>
            </div>
            @endif
                @yield('content')
            </div>
            <div class="four wide column" style="margin-left: 10%; margin-bottom: 25%"><img src="GOW.png"></div>
      </div>
</div>
      <!--end module-->
</body>
</html>
