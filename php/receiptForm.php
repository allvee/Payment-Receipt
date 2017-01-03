<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 12/26/2016
 * Time: 12:19 AM
 */

include_once "config.php";


 $receiptAction = $_POST['receiptAction'];
 $receiptID = $_POST['receiptID'];
$isError = 0;


if($receiptAction == 'ADD') {
    $name = $_POST['receiptName'];
    $year = $_POST['receiptYear'];
    $month = $_POST['receiptMonth'];

    $qryList = "INSERT INTO receipt_list ( Receipt_Name, `Status`, ForYear, ForMonth, CreateDate)
	VALUES	('$name', 'Active', '$year', '$month', NOW())";


    try {
        $resList = Sql_exec($con, $qryList);
    } catch (Exception $e) {
        $isError = 1;
    }

    $receiptID = Sql_insert_id($con);
    $qryDetails = "INSERT INTO receipt_details (Receipt_ID, Receipt_Name, ForYear, ForMonth, stattus, LastUpdate)
	VALUES ('$receiptID', '$name','$year', '$month', 'Active', NOW())";


    try {
        $resDetails = Sql_exec($con, $qryDetails);
    } catch (Exception $e) {
        $isError = 1;
    }
}elseif($receiptAction == 'UPDATE'){
    $day = $_POST['receiptDay'];
    $amount = $_POST['receiptAmount'];
    $receiptType = $_POST['receiptType'];
    $dateInMonth = $day . '_amount';

    if($receiptType == 1){
        $bank = 'NO';
        $hand = 'YES';
    }else{
        $bank = 'YES';
        $hand = 'NO';
    }

   $qryList = "UPDATE receipt_list set  LastUpdate = NOW()
	WHERE Receipt_ID = '$receiptID' ;";


    try {
        $resDetails = Sql_exec($con, $qryList);
    } catch (Exception $e) {
        $isError = 1;
    }
    $dateInMonth = $day . '_amount';
    $qryDetails = "UPDATE receipt_details SET Cash_on_bank = '$bank' , Cash_on_hand = '$hand' ,
	 $dateInMonth = '$amount' ,  LastUpdate = NOW()
	WHERE Receipt_ID = '$receiptID' ;";

    try {
        $resDetails = Sql_exec($con, $qryDetails);
    } catch (Exception $e) {
        $isError = 1;
    }

}else{
    $qryList = "DELETE FROM receipt_list WHERE Payment_ID = '$paymentID' ";
    try {
        $resDetails = Sql_exec($con, $qryDetails);
    } catch (Exception $e) {
        $isError = 1;
    }

    $qryDetails = "DELETE FROM receipt_details WHERE Receipt_ID = '$paymentID' ;";
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