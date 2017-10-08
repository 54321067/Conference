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
    <h3 style="margin-left:1%;margin-bottom: 1%;margin-top: 1%" >Conferrences</h3>
</div>
<div style="margin-left: 4.5%;margin-right: 4.5%;margin-bottom: 5%">
                            
                                <table class="ui sortable celled table">
                                    <thead>
                                        
                                        <tr style="background-color: #99ffce">
                                            <th>
                                                <div style="padding-bottom:10pt">Acronym</div>
                                            </th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th >
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
                                    <?php
                                    $i=0;
                                    

                                    foreach ($conferences as $value)
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
                                     
                                        
 
                                    
                                           
                                     </td>     
                                     </tr>
                                     <?php
                                        }
                                     ?>
                                      

                                    </tbody>

                                </table>
                                
                            
</div>







</div>
</body>
</html>
