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
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width:20%;
            text-align: center;
        }
        table, td, th {
            border: 1px solid black;
        }

    </style>
  </head>
  <body>
      <div>
        <div class="row"> -->
          <div class="ui two wide column">
            <img src="{{ public_path('images/ku.jpg') }}" height="70" width="70"/>
            <br>
          </div>
        </div>
        <div class="row" id="table1">
          <br>
          <table>
            <thead>
              <tr>
                <th>Paper ID</th>
                <th>Paper Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach($paper as $p)
              <tr>
                <td>
                  {{$p->paper_id}}
                </td>
                <td>
                  {{$p->paper_name}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <br>
        </div>
      </div>
  </body>
</html>

<!-- ไม่ต้องใส่ หัวเรื่องทุกอย่าง เพราะมันจะทับแบบฟอร์มของ PDF -->

<!-- cmd -->
<!-- composer require barryvdh/laravel-dompdf
 -->


<!-- controller -->
<!-- use PDF; -->
<!-- public function viewPaymentPDF($id,$pname){
    $paper = DB::table("paper")->where('paper.paper_id','=',$id)->get();
    $pdf = PDF::loadView('conferencePaper.paperPaymentPDF', compact('paper'));
    return $pdf->stream('invoice.pdf');
} -->


<!-- route -->
<!-- Route::get('/Mysubmition/{id}/{pname}/invoice.pdf',['as'=>'conferencePaper.paperPayment','uses'=>'MovieController@viewPaymentPDF']); -->


<!-- config/app.php 'providers' => [ -->
<!-- Barryvdh\DomPDF\ServiceProvider::class, -->

<!-- config/app.php 'aliases' => [ -->
<!-- 'PDF' => Barryvdh\DomPDF\Facade::class, -->
