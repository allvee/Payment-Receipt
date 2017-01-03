<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 12/26/2016
 * Time: 12:19 AM
 */

include_once "config.php";

$paymentAction = $_POST['paymentAction'];
$paymentID = $_POST['paymentID'];
$isError = 0;
if($paymentAction == 'ADD') {
    $name = $_POST['paymentName'];
    $year = $_POST['paymentYear'];
    $month = $_POST['paymentMonth'];

    $qryList = "INSERT INTO payment_list ( Payment_Name, `Status`, ForYear, ForMonth,CreateDate)
	VALUES	('$name', 'Active', '$year', '$month', NOW())";


    try {
        $resList = Sql_exec($con, $qryList);
    } catch (Exception $e) {
        $isError = 1;
    }

    $paymentID = Sql_insert_id($con);
    $qryDetails = "INSERT INTO payment_details (Payment_ID, Payment_Name,ForYear, ForMonth, stattus, LastUpdate)
	VALUES ($paymentID, '$name', '$year', '$month', 'Active', NOW())";


    try {
        $resDetails = Sql_exec($con, $qryDetails);
    } catch (Exception $e) {
        $isError = 1;
    }
}elseif($paymentAction == 'UPDATE'){

    $day = $_POST['paymentDay'];
    $amount = $_POST['paymentAmount'];
    $paymentType = $_POST['paymentType'];


    if($paymentType == 1){
        $bank = 'NO';
        $hand = 'YES';
    }else{
        $bank = 'YES';
        $hand = 'NO';
    }

    $dateInMonth = $day . '_amount';
    $qryList = "UPDATE payment_list SET LastUpdate = NOW()
	WHERE Payment_ID = '$paymentID' ;";

    try {
        $resDetails = Sql_exec($con, $qryList);
    } catch (Exception $e) {
        $isError = 1;
    }
    $qryDetails = "UPDATE payment_details SET Cash_on_bank = '$bank' , Cash_on_hand = '$hand' , $dateInMonth = '$amount' , LastUpdate = NOW()
	WHERE Payment_ID = '$paymentID';";

    try {
        $resDetails = Sql_exec($con, $qryDetails);
    } catch (Exception $e) {
        $isError = 1;
    }

}else{

$qryList = "DELETE FROM payment_list WHERE Payment_ID = '$paymentID' ";
    try {
        $resDetails = Sql_exec($con, $qryDetails);
    } catch (Exception $e) {
        $isError = 1;
    }

$qryDetails = "DELETE FROM payment_details WHERE Payment_ID = '$paymentID' ;";
    try {
        $resDetails = Sql_exec($con, $qryDetails);
    } catch (Exception $e) {
        $isError = 1;
    }


}
    if(!$isError){
        echo "+OK";
    }else{
        echo "+Failed";
    }