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

$pcount=count($data);
echo $rcount=count($data1);
$data2=array();
$sumPayment = 0; $sumReceipt = 0; $sumTotal = 0;
if($pcount>$rcount){

    for($i=0; $i<$pcount; $i++){
        $j=0;
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
    $data2[$i][0]='--';
    $data2[$i][0]=$sumPayment;
    $data2[$i][0]='--';
    $data2[$i][0]=$sumReceipt;

    $data2[$i][0]=$sumReceipt-$sumPayment;
    $data2[$i][0]='--';
    $data2[$i][0]='--';
    $data2[$i][0]='--';

}
else{
    for($i=0; $i<$rcount; $i++){
        $j=0;
        if(!isset($data[$i][0])||$data[$i][0]==''){
            $data2[$i][$j++]= '--';
            $data2[$i][$j++]= '--';
        }
        else{
            $data2[$i][$j++]= $data[$i][0];
            $data2[$i][$j++]= $data[$i][1];
            $sumPayment+=$data[$i][1];
        }
        $data2[$i][$j++]= $data1[$i][0];
        $data2[$i][$j++]= $data1[$i][1];
        $sumReceipt+=$data1[$i][1];
    }
    $data2[$i][0]='Balances';
    $data2[$i][1]=$sumPayment;
    $data2[$i][2]='--';
    $data2[$i][3]=$sumReceipt;
    $i++;
    $data2[$i][1]='Closing Balance';
    $data2[$i][0]=$sumReceipt-$sumPayment;
    $data2[$i][2]='--';
    $data2[$i][3]='--';
}
//$totaldata=array("Payment"=>$data,"Receipt"=>$data1);
echo "<pre>";
print_r($data2);
echo json_encode($data2);