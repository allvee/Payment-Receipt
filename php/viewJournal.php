<?php
/**
 * Created by PhpStorm.
 * User: Al Amin
 * Date: 1/2/2017
 * Time: 10:28 PM
 */

include_once "config.php";
$isError = 0;

$year = $_REQUEST['year'];
$month = $_REQUEST['month'];

$Receipt_qry = "SELECT Receipt_Name, Total_Balance FROM receipt_details WHERE ForYear = '$year' AND ForMonth = '$month'";

$payment_qry = "SELECT Payment_Name, Total_Balance FROM payment_details WHERE ForYear = '$year' AND ForMonth = '$month'";

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
    $res = Sql_exec($con,$Receipt_qry);
}catch (Exception $e){
    $isError = 1;
}

$data1 = array(); $i=0;
while($dt = Sql_fetch_assoc($res)) {
    $j = 0;
    $data1[$i][$j++] = $dt['Receipt_Name'];
    $data1[$i][$j++] = $dt['Total_Balance'];
    $i++;
}

 $totaldata=array("Payment"=>$data,"Receipt"=>$data1);
echo "<pre>";
print_r($totaldata);
echo json_encode($totaldata);