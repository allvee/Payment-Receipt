<?php
/**
 * Created by PhpStorm.
 * User: Al Amin
 * Date: 1/7/2017
 * Time: 8:37 PM
 */

include_once "config.php";


$paymentID = $_POST['id'];
$year = $_POST['year'];
$month = $_POST['month'];
$isError = 0;
$day = $_POST['col'];

$dateInMonth = $day . '_amount';
$qryList = "UPDATE payment_list SET LastUpdate = NOW() WHERE Payment_ID = '$paymentID' ;";

try {
    $resDetails = Sql_exec($con, $qryList);
} catch (Exception $e) {
    $isError = 1;
}

$qryDetails = "UPDATE payment_details SET Cash_on_bank = 'NO' , Cash_on_hand = 'NO' , $dateInMonth = '0.00' , LastUpdate = NOW()
	WHERE Payment_ID = '$paymentID';";

try {
    $resDetails = Sql_exec($con, $qryDetails);
} catch (Exception $e) {
    $isError = 1;
}

echo $isError;