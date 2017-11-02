<!DOCTYPE html>
<html>
  <head>
    <title>ใบแจ้งการชำระเงิน</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }
 
        body {
            font-family: "THSarabunNew";
        }
        table, td, th {
            border: 1px solid black;
        }
    </style>
  </head>
  <body>
      <?php foreach ($paper as $papers) {
        ?>
      <div id="paymentPDF">
         <div class="row" id="branch&date" style="margin-top: 0%;margin-bottom: 3%">
            <p style="text-align: right;line-height: 80%">สาขาผู้รับฝาก.....................................................................วันที่.....................................</p>
         </div>
         <div class="row" id="detail&logo">
           <div class="col" style="width: 420px;display: inline-block">
             <br> 
             <p style="line-height: 60%"> 
               <img src="{{ public_path('images/ku.jpg') }}" height="60" width="60"/ align="left"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;คณะวิศวกรรมศาสตร์ศรีราชา มหาวิทยาลัยเกษตรศาสตร์<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;โทรศัพท์ 0-3835-4581
             </p>
             <p style=";line-height: 80%"> 
               <img src="{{ public_path('images/tmb.png') }}" height="31" width="68"/ align="left"><br>
                &nbsp;&nbsp;ธนาคารทหารไทย จำกัด (มหาชน) Comp. Code : 2087<br>
             </p>
             <br> 
           </div>
           <div class="col" style="width: 270px;display: inline-block">
             <table style="width: 300px;border:1;" >
              <thead style="background-color: #bfbfbf">
                <tr>
                  <th style="text-align: center;">โปรดระบุรายละเอียด<a style="color: red">ผู้สมัคร</a></th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td>&nbsp;&nbsp;ชื่อ-นามสกุล (Name)<a style="width:190px;border-bottom: 1px dotted black;display: inline-block;text-align: center">
                  {{$paper[0]->name}}</a><br>
                  &nbsp;&nbsp;เลขที่บัตรประชาชน (Ref.1)<a style="width:166px;border-bottom: 1px dotted black;display: inline-block;text-align: center">{{$paper[0]->nation_id}}</a><br>
                  &nbsp;&nbsp;Paper ID (Ref.2)<a style="width:210px;border-bottom: 1px dotted black;display: inline-block;text-align: center">{{$paper[0]->paper_id}}</a><br>
                  &nbsp;&nbsp;เบอร์โทรศัพท์มือถือ (Ref.3)<a style="width:166px;border-bottom: 1px dotted black;display: inline-block;text-align: center">{{$paper[0]->phone}}</a><br>
                  </td>
                </tr>
              </tbody>
             </table> 
           </div>
          </div> 
          <div class="row" id="amount">
             <table width="100%" style="border-collapse: collapse;text-align: left;width: 725px">
              <tbody>
                <tr>
                  <td colspan=12 style="text-align: center;width: 500px;">โปรดชำระเงินผ่านเคาน์เตอร์ธนาคารทหารไทยทุกสาขาทั่วประเทศ</td>
                  <td colspan=8 style="text-align: center;width: 215px;">จำนวนเงิน (บาท) / Amount (Baht)</td>           
                </tr>
                <tr>
                  <td rowspan=2 colspan=3 style="text-align: center;line-height: 60%">
                      <div id="ticOval">
                        <img src="{{ public_path('images/Oval.jpg') }}" height="40" width="60"/ align="left"><br>
                          เงินสด<br><br>
                          Cash<br><br>   
                      </div>   
                  </td>
                  <td colspan=9 style="text-align: center;"><br></td> 
                  <td colspan=6 rowspan=2 style="text-align: center"></td>
                  <td colspan=2 rowspan=2 style="text-align: center;"></td>                  
                </tr>
                <tr>
                  <td colspan=9 style="text-align: center;;border-top:dotted">โปรดเขียนจำนวนเงินเป็นตัวหนังสือ / Please write amount in words</td> 
                </tr>
              </tbody>
             </table>
             หมายเหตุ – ค่าธรรมเนียม 10 บาททั่วประเทศ (เรียกเก็บค่าธรรมเนียมกับผู้ชำระเงิน)
          </div>
          <div class="row" id="gap&collector" style="margin: 0%">
            <div id="gapCollector" style="width: 512px;display: inline-block;" >
              <br><br><br>(สำหรับผู้ส่งบทความ)
            </div>
             <div id="gapCollector" style="display: inline-block;">
              <table style="border-collapse: collapse;border:1px solid;width: 207px">
                <tbody>
                  <tr>
                    <td style="text-align: center"><br><br></td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">ผู้รับเงิน / Collector</td>
                  </tr>
                </tbody>
               </table> 
             </div>
              <a style=";width: 715px" style=""> 
              ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<img src="{{ public_path('images/cuthere.jpg') }}" width="20" style="float: right;">
            </a>
            
          </div>
      </div>
      <div id="paymentPDF" style="margin: 0%">
         <div class="row" id="branch&date" style="margin-top: 0%;margin-bottom: 6%">
            <p style="text-align: right;line-height: 80%">สาขาผู้รับฝาก.....................................................................วันที่.....................................</p>
         </div>
         <div class="row" id="detail&logo">
           <div class="col" style="width: 420px;display: inline-block;">
             <br> 
             <p style="line-height: 60%"> 
               <img src="{{ public_path('images/ku.jpg') }}" height="60" width="60"/ align="left"><br>
                &nbsp;&nbsp;&nbsp;&nbsp;คณะวิศวกรรมศาสตร์ศรีราชา มหาวิทยาลัยเกษตรศาสตร์<br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;โทรศัพท์ 0-3835-4581
             </p>
             <p style=";line-height: 80%"> 
               <img src="{{ public_path('images/tmb.png') }}" height="31" width="68"/ align="left"><br>
                &nbsp;&nbsp;ธนาคารทหารไทย จำกัด (มหาชน) Comp. Code : 2087<br>
             </p>
             <br> 
           </div>
           <div class="col" style="width: 270px;display: inline-block">
             <table style="width: 300px;border:1;" >
              <thead style="background-color: #bfbfbf">
                <tr>
                  <th style="text-align: center;">โปรดระบุรายละเอียด<a style="color: red">ผู้สมัคร</a></th>
                </tr>
              </thead>
              <tbody> 
                <tr>
                  <td>&nbsp;&nbsp;ชื่อ-นามสกุล (Name)<a style="width:190px;border-bottom: 1px dotted black;display: inline-block;text-align: center">{{$paper[0]->name}}</a><br>
                  &nbsp;&nbsp;เลขที่บัตรประชาชน (Ref.1)<a style="width:166px;border-bottom: 1px dotted black;display: inline-block;text-align: center">{{$paper[0]->nation_id}}</a><br>
                  &nbsp;&nbsp;Paper ID (Ref.2)<a style="width:210px;border-bottom: 1px dotted black;display: inline-block;text-align: center">{{$paper[0]->paper_id}}</a><br>
                  &nbsp;&nbsp;เบอร์โทรศัพท์มือถือ (Ref.3)<a style="width:166px;border-bottom: 1px dotted black;display: inline-block;text-align: center">{{$paper[0]->phone}}</a><br>
                  </td>
                </tr>
              </tbody>
             </table> 
           </div>
          </div> 
          <div class="row" id="amount">
             <table width="100%" style="border-collapse: collapse;text-align: left;width: 725px">
              <tbody>
                <tr>
                  <td colspan=12 style="text-align: center;width: 500px;">โปรดชำระเงินผ่านเคาน์เตอร์ธนาคารทหารไทยทุกสาขาทั่วประเทศ</td>
                  <td colspan=8 style="text-align: center;width: 215px;">จำนวนเงิน (บาท) / Amount (Baht)</td>           
                </tr>
                <tr>
                  <td rowspan=2 colspan=3 style="text-align: center;line-height: 60%">
                      <div id="ticOval">
                        <img src="{{ public_path('images/Oval.jpg') }}" height="40" width="60"/ align="left"><br>
                          เงินสด<br><br>
                          Cash<br><br>   
                      </div>   
                  </td>
                  <td colspan=9 style="text-align: center;"><br></td> 
                  <td colspan=6 rowspan=2 style="text-align: center"></td>
                  <td colspan=2 rowspan=2 style="text-align: center;"></td>                  
                </tr>
                <tr>
                  <td colspan=9 style="text-align: center;;border-top:dotted">โปรดเขียนจำนวนเงินเป็นตัวหนังสือ / Please write amount in words</td> 
                </tr>
              </tbody>
             </table>
             หมายเหตุ – ค่าธรรมเนียม 10 บาททั่วประเทศ (เรียกเก็บค่าธรรมเนียมกับผู้ชำระเงิน)
          </div>
          <div class="row" id="gap&collector" style="margin: 0%">
            <div id="gapCollector" style="width: 512px;display: inline-block;" >
              <br><br><br>(สำหรับเจ้าหน้าที่ธนาคาร)
            </div>
             <div id="gapCollector" style="display: inline-block;">
              <table style="border-collapse: collapse;border:1px solid;width: 207px">
                <tbody>
                  <tr>
                    <td style="text-align: center"><br><br></td>
                  </tr>
                  <tr>
                    <td style="text-align: center;">ผู้รับเงิน / Collector</td>
                  </tr>
                </tbody>
               </table> 
             </div>
              
            
          </div>
      </div>
      <?php }?>
  </body>
</html>