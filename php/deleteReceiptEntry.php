<?php
/**
 * Created by PhpStorm.
 * User: Al Amin
 * Date: 1/7/2017
 * Time: 9:00 PM
 */

include_once "config.php";

$receiptID=$_POST['id'];
$year = $_POST['year'];
$month = $_POST['month'];
$isError = 0;
$day = $_POST['col'];
$dateInMonth = $day . '_amount';

$qryList = "UPDATE receipt_list set  LastUpdate = NOW() WHERE Receipt_ID = '$receiptID' ;";


try {
    $resDetails = Sql_exec($con, $qryList);
} catch (Exception $e) {
    $isError = 1;
}
$dateInMonth = $day . '_amount';
$qryDetails = "UPDATE receipt_details SET Cash_on_bank = 'NO' , Cash_on_hand = 'NO' , $dateInMonth = '0.00' ,  LastUpdate = NOW() WHERE Receipt_ID = '$receiptID' ;";

try {
    $resDetails = Sql_exec($con, $qryDetails);
} catch (Exception $e) {
    $isError = 1;
}

echo $isError;