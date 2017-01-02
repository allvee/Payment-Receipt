<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 12/26/2016
 * Time: 12:19 AM
 */

include_once "config.php";
 $name = $_POST['receiptName'];
 $year = $_POST['receiptYear'];
 $month = $_POST['receiptMonth'];
 $day = $_POST['receiptDay'];
 $amount = $_POST['receiptAmount'];
 $receiptType = $_POST['receiptType'];
 $receiptAction = $_POST['receiptAction'];
 $receiptID = $_POST['receiptID'];
$isError = 0;
    if($receiptType == 1){
        $bank = 'NO';
        $hand = 'YES';
    }else{
        $bank = 'YES';
        $hand = 'NO';
    }

if($receiptAction == 'ADD') {

    $qryList = "INSERT INTO receipt_list ( Receipt_Name, `Status`, ForYear, ForMonth,CreateDate)
	VALUES	('$name', 'Active', '$year', '$month', NOW())";


    try {
        $resList = Sql_exec($con, $qryList);
    } catch (Exception $e) {
        $isError = 1;
    }
    $dateInMonth = $day . '_amount';
    $receiptID = Sql_insert_id($con);
    $qryDetails = "INSERT INTO receipt_details (Receipt_ID, Receipt_Name, Cash_on_bank, Cash_on_hand, ForYear, ForMonth, $dateInMonth, stattus, LastUpdate)
	VALUES ($receiptID, '$name', '$bank', '$hand', '$year', '$month', '$amount', 'Active', NOW())";


    try {
        $resDetails = Sql_exec($con, $qryDetails);
    } catch (Exception $e) {
        $isError = 1;
    }
}elseif($receiptAction == 'UPDATE'){
    $qryList = "UPDATE receipt_list set Receipt_Name = '$name' , ForYear = '$year' , ForMonth = '$month' , LastUpdate = NOW()
	WHERE Receipt_ID = '$receiptID' ;";


    try {
        $resDetails = Sql_exec($con, $qryList);
    } catch (Exception $e) {
        $isError = 1;
    }
    $dateInMonth = $day . '_amount';
    $qryDetails = "UPDATE receipt_details SET  Receipt_Name = '$name' , Cash_on_bank = '$bank' , Cash_on_hand = '$hand' , ForYear = '$year' ,
	ForMonth = '$month' , $dateInMonth = '$amount' ,  LastUpdate = NOW()
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