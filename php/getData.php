<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 12/29/2016
 * Time: 1:16 AM
 */

include_once "config.php";
$isError = 0;

$year = $_REQUEST['year'];
$month = $_REQUEST['month'];
$type = $_REQUEST['type'];
if($type=='payment') {
    $qry = "SELECT * FROM payment_details WHERE ForYear = '$year' AND ForMonth = '$month' AND stattus='Active'";
}elseif($type=='receipt'){
    $qry= "SELECT * FROM receipt_details WHERE ForYear = '$year' AND ForMonth = '$month' AND stattus='Active'";
}else{
    $Receipt_qry = "SELECT Receipt_Name, Total_Balance FROM receipt_details WHERE ForYear = '$year' AND ForMonth = '$month' AND stattus='Active'";
    $payment_qry = "SELECT Payment_Name, Total_Balance FROM payment_details WHERE ForYear = '$year' AND ForMonth = '$month' AND stattus='Active'";
}
if($type!=='all'){

try{
  $res = Sql_exec($con,$qry);
 }catch (Exception $e){
     $isError = 1;
 }

$data = array(); $i=0;

while($dt = Sql_fetch_assoc($res)){
    $j=0;$sum=0;

    if($type=='payment'){
        $data[$i][$j++] = $dt['Payment_Name'];
        $id = $dt['Payment_ID'];$typeNo = 1;
    }else{
        $data[$i][$j++] = $dt['Receipt_Name'];
        $id = $dt['Receipt_ID'];$typeNo = 2;
    }

    if($dt['1_amount'] != 0){
        $data[$i][$j++] = $dt['1_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',1);">EDIT</a>';
        $sum = $sum+$dt['1_amount'];
    }else{

        $data[$i][$j++] ='';
        $sum = $sum+$dt['1_amount'];
    }
   if($dt['2_amount'] != 0){
       $data[$i][$j++] = $dt['2_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',2);">EDIT</a>';;
       $sum = $sum+$dt['2_amount'];
    }else{
       $data[$i][$j++] ='';
       $sum = $sum+$dt['2_amount'];

   }
    if($dt['3_amount'] != 0){
        $data[$i][$j++] = $dt['3_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',3);">EDIT</a>';;
        $sum = $sum+$dt['3_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['3_amount'];

    }
   if($dt['4_amount'] != 0){
       $data[$i][$j++] = $dt['4_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',4);">EDIT</a>';;
       $sum = $sum+$dt['4_amount'];
    }else{
       $data[$i][$j++] ='';
       $sum = $sum+$dt['4_amount'];

   }
  if($dt['5_amount'] != 0){
      $data[$i][$j++] = $dt['5_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',5);">EDIT</a>';;
      $sum = $sum+$dt['5_amount'];
    }else{
      $data[$i][$j++] ='';
      $sum = $sum+$dt['5_amount'];

  }
    if($dt['6_amount'] != 0){
        $data[$i][$j++] = $dt['6_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',6);">EDIT</a>';;
        $sum = $sum+$dt['6_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['6_amount'];

    }
    if($dt['7_amount'] != 0){
        $data[$i][$j++] = $dt['7_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',7);">EDIT</a>';;
        $sum = $sum+$dt['7_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['7_amount'];

    }
   if($dt['8_amount'] != 0){
       $data[$i][$j++] = $dt['8_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',8);">EDIT</a>';;
       $sum = $sum+$dt['8_amount'];
    }else{
       $data[$i][$j++] ='';
       $sum = $sum+$dt['8_amount'];

   }
   if($dt['9_amount'] != 0){
       $data[$i][$j++] = $dt['9_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',9);">EDIT</a>';;
       $sum = $sum+$dt['9_amount'];
    }else{
       $data[$i][$j++] ='';
       $sum = $sum+$dt['9_amount'];

   }
    if($dt['10_amount'] != 0){
        $data[$i][$j++] = $dt['10_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',10);">EDIT</a>';;
        $sum = $sum+$dt['10_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['10_amount'];

    }
   if($dt['11_amount'] != 0){
       $data[$i][$j++] = $dt['11_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',11);">EDIT</a>';;
       $sum = $sum+$dt['11_amount'];
    }else{
       $data[$i][$j++] ='';
       $sum = $sum+$dt['11_amount'];

   }
    if($dt['12_amount'] != 0){
        $data[$i][$j++] = $dt['12_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',12);">EDIT</a>';;
        $sum = $sum+$dt['12_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['12_amount'];

    }
   if($dt['13_amount'] != 0){
       $data[$i][$j++] = $dt['13_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',13);">EDIT</a>';;
       $sum = $sum+$dt['13_amount'];
    }else{
       $data[$i][$j++] ='';
       $sum = $sum+$dt['13_amount'];

   }
    if($dt['14_amount'] != 0){
        $data[$i][$j++] = $dt['14_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',14);">EDIT</a>';;
        $sum = $sum+$dt['14_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['14_amount'];

    }
   if($dt['15_amount'] != 0){
       $data[$i][$j++] = $dt['15_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',15);">EDIT</a>';;
       $sum = $sum+$dt['15_amount'];
    }else{
       $data[$i][$j++] ='';
       $sum = $sum+$dt['15_amount'];

   }
  if($dt['16_amount'] != 0){
      $data[$i][$j++] = $dt['16_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',16);">EDIT</a>';;
      $sum = $sum+$dt['16_amount'];
    }else{
      $data[$i][$j++] ='';
      $sum = $sum+$dt['16_amount'];

  }
    if($dt['17_amount'] != 0){
        $data[$i][$j++] = $dt['17_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',17);">EDIT</a>';;
        $sum = $sum+$dt['17_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['17_amount'];

    }
   if($dt['18_amount'] != 0){
       $data[$i][$j++] = $dt['18_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',18);">EDIT</a>';;
       $sum = $sum+$dt['18_amount'];
    }else{
       $data[$i][$j++] ='';
       $sum = $sum+$dt['18_amount'];

   }
     if($dt['19_amount'] != 0){
         $data[$i][$j++] = $dt['19_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',19);">EDIT</a>';;
         $sum = $sum+$dt['19_amount'];
    }else{
         $data[$i][$j++] ='';
         $sum = $sum+$dt['19_amount'];

     }
    if($dt['20_amount'] != 0){
        $data[$i][$j++] = $dt['20_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',20);">EDIT</a>';;
        $sum = $sum+$dt['20_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['20_amount'];

    }
    if($dt['21_amount'] != 0){
        $data[$i][$j++] = $dt['21_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',21);">EDIT</a>';;
        $sum = $sum+$dt['21_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['21_amount'];

    }
     if($dt['22_amount'] != 0){
         $data[$i][$j++] = $dt['22_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',22);">EDIT</a>';;
         $sum = $sum+$dt['22_amount'];
    }else{
         $data[$i][$j++] ='';
         $sum = $sum+$dt['22_amount'];

     }
    if($dt['23_amount'] != 0){
        $data[$i][$j++] = $dt['23_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',23);">EDIT</a>';;
        $sum = $sum+$dt['23_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['23_amount'];

    }
    if($dt['24_amount'] != 0){
        $data[$i][$j++] = $dt['24_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',24);">EDIT</a>';;
        $sum = $sum+$dt['24_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['24_amount'];

    }
    if($dt['25_amount'] != 0){
        $data[$i][$j++] = $dt['25_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',25);">EDIT</a>';;
        $sum = $sum+$dt['25_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['25_amount'];

    }
    if($dt['26_amount'] != 0){
        $data[$i][$j++] = $dt['26_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',26);">EDIT</a>';;
        $sum = $sum+$dt['26_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['26_amount'];

    }
    if($dt['27_amount'] != 0){
        $data[$i][$j++] = $dt['27_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',27);">EDIT</a>';;
        $sum = $sum+$dt['27_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['27_amount'];

    }
    if($dt['28_amount'] != 0){
        $data[$i][$j++] = $dt['28_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',28);">EDIT</a>';;
        $sum = $sum+$dt['28_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['28_amount'];

    }
    if($dt['29_amount'] != 0){
        $data[$i][$j++] = $dt['29_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',29);">EDIT</a>';;
        $sum = $sum+$dt['29_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['29_amount'];

    }
     if($dt['30_amount'] != 0){
         $data[$i][$j++] = $dt['30_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',30);">EDIT</a>';;
         $sum = $sum+$dt['30_amount'];
    }else{
         $data[$i][$j++] ='';
         $sum = $sum+$dt['30_amount'];

     }

    if($dt['31_amount'] != 0){
        $data[$i][$j++] = $dt['31_amount'].'<a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',31);">EDIT</a>';;
        $sum = $sum+$dt['31_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['31_amount'];
    }
    $data[$i][$j++] = $sum;
$i++;

}
    echo json_encode(array("data" => $data));
}
else{
    try{
        $res = Sql_exec($con,$payment_qry);
    }catch (Exception $e){
        $isError = 1;
    }

    $data = array(); $i=0;
    while($dt = Sql_fetch_assoc($res)) {
        $j = 0;
        $data[$i][$j++] = $dt['Payment_Name'];
        $data[$i][$j++] = $dt['Total_Balance'];
        $i++;
    }

    try{
        $res1 = Sql_exec($con,$Receipt_qry);
    }catch (Exception $e){
        $isError = 1;
    }

    $data1 = array(); $i=0;
    while($dt1 = Sql_fetch_assoc($res1)) {
        $j = 0;
        $data1[$i][$j++] = $dt1['Receipt_Name'];
        $data1[$i][$j++] = $dt1['Total_Balance'];
        $i++;
    }
//print_r($data);
//print_r($data1);

    $pcount=count($data);
    $rcount=count($data1);
    $data2=array();
    $sumPayment = 0; $sumReceipt = 0; $sumTotal = 0;
    if($pcount>$rcount){

        for($i=0,$k=1; $i<$pcount; $i++,$k++){
            $j=0;
            $data2[$i][$j++]= $k;

            $data2[$i][$j++]= $data[$i][0];
            $data2[$i][$j++]= $data[$i][1];
            $sumPayment+=$data[$i][1];

            if(!isset($data1[$i][0])||$data1[$i][0]==''){
                $data2[$i][$j++]='--';
                $data2[$i][$j++]='--';
            }
            else{
                $data2[$i][$j++]= $data1[$i][0];
                $data2[$i][$j++]= $data1[$i][1];
                $sumReceipt+=$data1[$i][1];
            }
        }
        $data2[$i][0]= $k;

        $data2[$i][1]='Receipt during this month';
        $data2[$i][2]=$sumReceipt;
        $data2[$i][3]='Balances';
        $data2[$i][4]= $sumPayment;
        $i++;$k++;
        $data2[$i][0]= $k;
        $data2[$i][1]='Closing Balance';
        $data2[$i][2]=$sumReceipt-$sumPayment;
        $data2[$i][3]='--';
        $data2[$i][4]='--';

    }
    else{

        for($i=0,$k=1; $i<$rcount; $i++, $k++){
            $j=0;
            $data2[$i][$j++]= $k;

            $data2[$i][$j++]= $data1[$i][0];
            $data2[$i][$j++]= $data1[$i][1];
            $sumReceipt+=$data1[$i][1];

            if(!isset($data[$i][0])||$data[$i][0]==''){
                $data2[$i][$j++]= '--';
                $data2[$i][$j++]= '--';
            }
            else{
                $data2[$i][$j++]= $data[$i][0];
                $data2[$i][$j++]= $data[$i][1];
                $sumPayment+=$data[$i][1];
            }
        }
        $data2[$i][0]= $k;
        $data2[$i][1]='Receipt during this month';
        $data2[$i][2]=$sumReceipt;
        $data2[$i][3]='Balances';
        $data2[$i][4]= $sumPayment;
        $i++;$k++;
        $data2[$i][0]= $k;
        $data2[$i][1]='Closing Balance';
        $data2[$i][2]=$sumReceipt-$sumPayment;
        $data2[$i][3]='--';
        $data2[$i][4]='--';
    }
    echo json_encode(array("data" => $data2));
}
