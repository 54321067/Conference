<!Doctype html>
<html>
    <head>
        <title>AllConferrencs</title>
        @include('cfs.header')
    </head>
<body>
<div class="body">
@include('cfs.userheader')

<div class="ui menu" style="margin-left: 4.5%;margin-right: 4.5%;background-color: #99ffce">
    <h3 style="margin-left:1%;margin-bottom: 1%;margin-top: 1%" >Conferrences</h3>
</div>
<div class="ui segment" style="margin-left: 4.5%;margin-right: 4.5%;margin-bottom: 5%">
                            
                                <table class="ui sortable celled table">
                                    <thead>
                                        
                                        <tr style="background-color: #99ffce">
                                            <th>
                                                <div style="padding-bottom:10pt">ชื่อย่อ</div>
                                            </th>
                                            <th>ชื่อการประชุม</th>
                                            <th>สถานที่ตั้ง</th>
                                            <th>สิ้นสุดการรับบทความ</th>
                                            <th>นำเสนอบทความ</th>
                                            <th>หัวข้อ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;

                                    foreach ($values as $value)
                                        {

                                    ?>

                                    <tr>
                                    <td>
                                    <a href="{{ route('cfs.coninfo',['id'=>$value->conid ]) }}">
                                    <?php
                                       
                                        
                                            echo($value->Acronym_L);
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
                                       
                                        
                                            echo($value->R_Line);


                                        
                                       ?> 
                                           
                                     </td>
                                     <td>
                                     
                                        <?php
                                       
                                        
                                            echo($value->topic_1);
                                            echo($value->topic_2);

                                        
                                       ?> 
 
                                    
                                           
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
