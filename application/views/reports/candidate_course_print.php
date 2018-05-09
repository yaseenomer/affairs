<?php
$tag = '
 <div>
 <br>
    <table>
      <tr>
      <td> التاريخ : '.date("Y-m-d").'</td>
      <td align="left"> النمرة :  ج س ع ت / أ ش ع / ب ت  / 5</td>
      </tr>
      <tr>
      <br>
      <td><h2>السيد عميد '. $Location->LOC_NAME .'</h2></td>
      </tr>
      <tr>
       <div align="center">السلام عليكم ورحمة الله تعالى وبركاته </div>
      </tr>
      <tr>
      <div align="center"><u><br>الموضوع : الترشيح للدورة التدريبية في '. $Location->PROG_ARAB_NAME.' </u></div>
      </tr>
      <tr>
      <div>
      بالاشارة للموضوع اعلاه يسرنا ترشيح الاساتذة المذكورين ادناه لحضور دورة التدريبية اعلاه .
      </div>
      </tr>
    </table>
   </div>
   <br><br><br><br><br><br><br>
   <div>
    <table border="1">
       <tr>
       <td>#</td>
       <td>الاسم </td>
       <td>الكلية </td>
       <td>رقم الهاتف</td>
       </tr>';
$i=0;
foreach ($generals as $general) {
    $i++;
$tag.='
       <tr>
       <td>'.$i.'</td>
        <td>'. $general->EMP_NAME.'</td>
        <td>'. $general->LOC_NAME.'</td>
        <td>'.$general->REL_PHONE.'</td>
       </tr>';
        }
$tag.='
    </table>
   </div>
';
reports($tag);
?>

