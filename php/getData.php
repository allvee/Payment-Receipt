<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 12/29/2016
 * Time: 1:16 AM
 */

include_once "config.php";
$isError = 0;
session_start();
$year = $_REQUEST['year'];
$monthlist= $_REQUEST['month'];
if($monthlist[0]==0){
    $month='1,2,3,4,5,6,7,8,9,10,11,12';
}
else
 $month=implode(',',$monthlist);

$type = $_REQUEST['type'];
$usertype=$_SESSION['usertype'];
//$usertype='Admin';
$day31=array("1","3","5","7","8","10","12");
$day30=array("4","6","9","11");
//print_r($month);

if($type=='payment') {
    $qry = "SELECT * FROM payment_details WHERE ForYear = '$year' AND ForMonth in ($month) AND stattus='Active'";
}elseif($type=='receipt'){
    $qry= "SELECT * FROM receipt_details WHERE ForYear = '$year' AND ForMonth in ($month) AND stattus='Active'";
}else{
    $Receipt_qry = "SELECT Receipt_Name, Total_Balance FROM receipt_details WHERE ForYear = '$year' AND ForMonth in ($month) AND stattus='Active'";
    $payment_qry = "SELECT Payment_Name, Total_Balance FROM payment_details WHERE ForYear = '$year' AND ForMonth in ($month) AND stattus='Active'";
}

function leapYear($year)
    {
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }

$currentMonth=0;

if (in_array($month, $day31, TRUE)){
    $currentMonth=31;
}
elseif(in_array($month, $day30, TRUE)){
    $currentMonth=30;
}
else{
    if(leapYear($year))
        $currentMonth=29;
    else
        $currentMonth=28;
}

if($type!=='all'){

try{
  $res = Sql_exec($con,$qry);
 }catch (Exception $e){
     $isError = 1;
 }

$data = array(); $i=0; $totalsum=0;
while($dt = Sql_fetch_assoc($res)){
    $j=0;$sum=0;

if($usertype=='Admin'){
    if($type=='payment'){
        $id = $dt['Payment_ID'];$typeNo = 1;
        $data[$i][$j++] = $dt['Payment_Name'].'<a class="btn-xs button-Primary" onclick="deleteNames('.$typeNo.','.$id.','.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a>';

    }else{
        $id = $dt['Receipt_ID'];$typeNo = 2;
        $data[$i][$j++] = $dt['Receipt_Name'].'<a class="btn-xs button-Primary" onclick="deleteNames('.$typeNo.','.$id.','.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a>';

    }

    if($dt['1_amount'] != 0){
        $data[$i][$j++] = $dt['1_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',1);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp <span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',1,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['1_amount'];
    }else{

        $data[$i][$j++] ='';
        $sum = $sum+$dt['1_amount'];
    }
    if($dt['2_amount'] != 0){
        $data[$i][$j++] = $dt['2_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',2);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',2,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['2_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['2_amount'];

    }
    if($dt['3_amount'] != 0){
        $data[$i][$j++] = $dt['3_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',3);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',3,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['3_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['3_amount'];

    }
    if($dt['4_amount'] != 0){
        $data[$i][$j++] = $dt['4_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',4);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',4,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['4_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['4_amount'];

    }
    if($dt['5_amount'] != 0){
        $data[$i][$j++] = $dt['5_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',5);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',5,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['5_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['5_amount'];

    }
    if($dt['6_amount'] != 0){
        $data[$i][$j++] = $dt['6_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',6);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',6,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['6_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['6_amount'];

    }
    if($dt['7_amount'] != 0){
        $data[$i][$j++] = $dt['7_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',7);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',7,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['7_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['7_amount'];

    }
    if($dt['8_amount'] != 0){
        $data[$i][$j++] = $dt['8_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',8);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',8,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['8_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['8_amount'];

    }
    if($dt['9_amount'] != 0){
        $data[$i][$j++] = $dt['9_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',9);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',9,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['9_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['9_amount'];

    }
    if($dt['10_amount'] != 0){
        $data[$i][$j++] = $dt['10_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',10);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',10,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['10_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['10_amount'];

    }
    if($dt['11_amount'] != 0){
        $data[$i][$j++] = $dt['11_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',11);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',11,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['11_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['11_amount'];

    }
    if($dt['12_amount'] != 0){
        $data[$i][$j++] = $dt['12_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',12);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',12,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['12_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['12_amount'];

    }
    if($dt['13_amount'] != 0){
        $data[$i][$j++] = $dt['13_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',13);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',13,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['13_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['13_amount'];

    }
    if($dt['14_amount'] != 0){
        $data[$i][$j++] = $dt['14_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',14);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',14,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['14_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['14_amount'];

    }
    if($dt['15_amount'] != 0){
        $data[$i][$j++] = $dt['15_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',15);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',15,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['15_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['15_amount'];

    }
    if($dt['16_amount'] != 0){
        $data[$i][$j++] = $dt['16_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',16);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',16,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['16_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['16_amount'];

    }
    if($dt['17_amount'] != 0){
        $data[$i][$j++] = $dt['17_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',17);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',17,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['17_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['17_amount'];

    }
    if($dt['18_amount'] != 0){
        $data[$i][$j++] = $dt['18_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',18);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',18,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['18_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['18_amount'];

    }
    if($dt['19_amount'] != 0){
        $data[$i][$j++] = $dt['19_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',19);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',19,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['19_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['19_amount'];

    }
    if($dt['20_amount'] != 0){
        $data[$i][$j++] = $dt['20_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',20);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',20,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['20_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['20_amount'];

    }
    if($dt['21_amount'] != 0){
        $data[$i][$j++] = $dt['21_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',21);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',21,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['21_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['21_amount'];

    }
    if($dt['22_amount'] != 0){
        $data[$i][$j++] = $dt['22_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',22);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',22,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['22_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['22_amount'];

    }
    if($dt['23_amount'] != 0){
        $data[$i][$j++] = $dt['23_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',23);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',23,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['23_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['23_amount'];

    }
    if($dt['24_amount'] != 0){
        $data[$i][$j++] = $dt['24_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',24);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',24,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['24_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['24_amount'];

    }
    if($dt['25_amount'] != 0){
        $data[$i][$j++] = $dt['25_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',25);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',25,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['25_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['25_amount'];

    }
    if($dt['26_amount'] != 0){
        $data[$i][$j++] = $dt['26_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',26);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',26,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['26_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['26_amount'];

    }
    if($dt['27_amount'] != 0){
        $data[$i][$j++] = $dt['27_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',27);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',27,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['27_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['27_amount'];

    }
    if($dt['28_amount'] != 0){
        $data[$i][$j++] = $dt['28_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',28);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',28,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['28_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['28_amount'];

    }
    if($dt['29_amount'] != 0){
        $data[$i][$j++] = $dt['29_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',29);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',29,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['29_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['29_amount'];

    }
    if($dt['30_amount'] != 0){
        $data[$i][$j++] = $dt['30_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',30);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',30,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['30_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['30_amount'];

    }

    if($dt['31_amount'] != 0){
        $data[$i][$j++] = $dt['31_amount'].'<span> <a class="btn-xs button-Primary" onclick="changeEntry('.$typeNo.','.$id.',31);"><img src="images/pen.png" alt="Edit"></a> </span>
         &nbsp&nbsp<span>  <a class="btn-xs button-Primary" onclick="deleteEntry('.$typeNo.','.$id.',31,'.$year.','.$month.');"><img src="images/cancel.png" alt="Delete"></a> </span>';
        $sum = $sum+$dt['31_amount'];
    }else{
        $data[$i][$j++] ='';
        $sum = $sum+$dt['31_amount'];
    }
    // $data[$i][$j++] = $sum;
    if($dt['Total_Balance'] != 0) {
        $data[$i][$j++] = $dt['Total_Balance'];
        $totalsum=$totalsum+(int)$dt['Total_Balance'];
    }
    else
        $data[$i][$j++] = '0';

    $i++;
}
    else{ // general user

        if($type=='payment'){
            $id = $dt['Payment_ID'];$typeNo = 1;
            $data[$i][$j++] = $dt['Payment_Name'];

        }else{
            $id = $dt['Receipt_ID'];$typeNo = 2;
            $data[$i][$j++] = $dt['Receipt_Name'];

        }

        if($dt['1_amount'] != 0){
            $data[$i][$j++] = $dt['1_amount'];
            $sum = $sum+$dt['1_amount'];
        }else{

            $data[$i][$j++] ='';
            $sum = $sum+$dt['1_amount'];
        }
        if($dt['2_amount'] != 0){
            $data[$i][$j++] = $dt['2_amount'];
            $sum = $sum+$dt['2_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['2_amount'];

        }
        if($dt['3_amount'] != 0){
            $data[$i][$j++] = $dt['3_amount'];
            $sum = $sum+$dt['3_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['3_amount'];

        }
        if($dt['4_amount'] != 0){
            $data[$i][$j++] = $dt['4_amount'];
            $sum = $sum+$dt['4_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['4_amount'];

        }
        if($dt['5_amount'] != 0){
            $data[$i][$j++] = $dt['5_amount'];
            $sum = $sum+$dt['5_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['5_amount'];

        }
        if($dt['6_amount'] != 0){
            $data[$i][$j++] = $dt['6_amount'];
            $sum = $sum+$dt['6_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['6_amount'];

        }
        if($dt['7_amount'] != 0){
            $data[$i][$j++] = $dt['7_amount'];
            $sum = $sum+$dt['7_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['7_amount'];

        }
        if($dt['8_amount'] != 0){
            $data[$i][$j++] = $dt['8_amount'];
            $sum = $sum+$dt['8_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['8_amount'];

        }
        if($dt['9_amount'] != 0){
            $data[$i][$j++] = $dt['9_amount'];
            $sum = $sum+$dt['9_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['9_amount'];

        }
        if($dt['10_amount'] != 0){
            $data[$i][$j++] = $dt['10_amount'];
            $sum = $sum+$dt['10_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['10_amount'];

        }
        if($dt['11_amount'] != 0){
            $data[$i][$j++] = $dt['11_amount'];
            $sum = $sum+$dt['11_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['11_amount'];

        }
        if($dt['12_amount'] != 0){
            $data[$i][$j++] = $dt['12_amount'];
            $sum = $sum+$dt['12_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['12_amount'];

        }
        if($dt['13_amount'] != 0){
            $data[$i][$j++] = $dt['13_amount'];
            $sum = $sum+$dt['13_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['13_amount'];

        }
        if($dt['14_amount'] != 0){
            $data[$i][$j++] = $dt['14_amount'];
            $sum = $sum+$dt['14_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['14_amount'];

        }
        if($dt['15_amount'] != 0){
            $data[$i][$j++] = $dt['15_amount'];
            $sum = $sum+$dt['15_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['15_amount'];

        }
        if($dt['16_amount'] != 0){
            $data[$i][$j++] = $dt['16_amount'];
            $sum = $sum+$dt['16_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['16_amount'];

        }
        if($dt['17_amount'] != 0){
            $data[$i][$j++] = $dt['17_amount'];
            $sum = $sum+$dt['17_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['17_amount'];

        }
        if($dt['18_amount'] != 0){
            $data[$i][$j++] = $dt['18_amount'];
            $sum = $sum+$dt['18_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['18_amount'];

        }
        if($dt['19_amount'] != 0){
            $data[$i][$j++] = $dt['19_amount'];
            $sum = $sum+$dt['19_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['19_amount'];

        }
        if($dt['20_amount'] != 0){
            $data[$i][$j++] = $dt['20_amount'];
            $sum = $sum+$dt['20_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['20_amount'];

        }
        if($dt['21_amount'] != 0){
            $data[$i][$j++] = $dt['21_amount'];
            $sum = $sum+$dt['21_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['21_amount'];

        }
        if($dt['22_amount'] != 0){
            $data[$i][$j++] = $dt['22_amount'];
            $sum = $sum+$dt['22_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['22_amount'];

        }
        if($dt['23_amount'] != 0){
            $data[$i][$j++] = $dt['23_amount'];
            $sum = $sum+$dt['23_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['23_amount'];

        }
        if($dt['24_amount'] != 0){
            $data[$i][$j++] = $dt['24_amount'];
            $sum = $sum+$dt['24_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['24_amount'];

        }
        if($dt['25_amount'] != 0){
            $data[$i][$j++] = $dt['25_amount'];
            $sum = $sum+$dt['25_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['25_amount'];

        }
        if($dt['26_amount'] != 0){
            $data[$i][$j++] = $dt['26_amount'];
            $sum = $sum+$dt['26_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['26_amount'];

        }
        if($dt['27_amount'] != 0){
            $data[$i][$j++] = $dt['27_amount'];
            $sum = $sum+$dt['27_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['27_amount'];

        }
        if($dt['28_amount'] != 0){
            $data[$i][$j++] = $dt['28_amount'];
            $sum = $sum+$dt['28_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['28_amount'];

        }
        if($dt['29_amount'] != 0){
            $data[$i][$j++] = $dt['29_amount'];
            $sum = $sum+$dt['29_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['29_amount'];

        }
        if($dt['30_amount'] != 0){
            $data[$i][$j++] = $dt['30_amount'];
            $sum = $sum+$dt['30_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['30_amount'];

        }

        if($dt['31_amount'] != 0){
            $data[$i][$j++] = $dt['31_amount'];
            $sum = $sum+$dt['31_amount'];
        }else{
            $data[$i][$j++] ='';
            $sum = $sum+$dt['31_amount'];
        }
        // $data[$i][$j++] = $sum;
        if($dt['Total_Balance'] != 0) {
            $data[$i][$j++] = $dt['Total_Balance'];
            $totalsum=$totalsum+(int)$dt['Total_Balance'];
        }
        else
            $data[$i][$j++] = '0';

        $i++;
    }

}
    if($type=='payment'){
        $data[$i][0] = '<b>Total Balances:(Payment)</b>';
    }
    else if($type=='receipt'){
        $data[$i][0] = '<b>Total Balances:(Receipt)</b>';
    }

   for($l=1;$l<($currentMonth+1);$l++){
        $data[$i][$l] = '--';
    }
    $data[$i][$l++] = '<b>'.$totalsum.'</b>';
    //echo $currentMonth;
    //print_r($data);
   // print_r($_SESSION);
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

        $data2[$i][1]='<b>Receipt during this month</b>';
        $data2[$i][2]='<b>'.$sumReceipt.'</b>';
        $data2[$i][3]='<b>Balances</b>';
        $data2[$i][4]= '<b>'.$sumPayment.'</b>';
        $i++;$k++;
        $data2[$i][0]= $k;
        $data2[$i][1]='<b>Closing Balance</b>';
        $data2[$i][2]='<b>'.($sumReceipt-$sumPayment).'</b>';
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
        $data2[$i][1]='<b>Receipt during this month</b>';
        $data2[$i][2]='<b>'.$sumReceipt.'</b>';
        $data2[$i][3]='<b>Balances</b>';
        $data2[$i][4]= '<b>'.$sumPayment.'</b>';
        $i++;$k++;
        $data2[$i][0]= $k;
        $data2[$i][1]='<b>Closing Balance</b>';
        $data2[$i][2]='<b>'.($sumReceipt-$sumPayment).'</b>';
        $data2[$i][3]='--';
        $data2[$i][4]='--';
    }
    echo json_encode(array("data" => $data2));
}
