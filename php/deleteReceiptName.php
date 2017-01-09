<?php
/**
 * Created by PhpStorm.
 * User: Al Amin
 * Date: 1/7/2017
 * Time: 9:24 PM
 */

include_once "config.php";

$receiptID=$_POST['id'];
$year = $_POST['year'];
$month = $_POST['month'];
$isError = 0;

$qryList = "UPDATE receipt_list SET `Status`='InActive', LastUpdate = NOW() WHERE ForYear='$year' AND ForMonth='$month' AND Receipt_ID = '$receiptID'";


try {
    $resDetails = Sql_exec($con, $qryList);
} catch (Exception $e) {
    $isError = 1;
}

$qryDetails = "UPDATE  receipt_details SET `stattus`='InActive', LastUpdate=NOW() WHERE ForYear='$year' AND ForMonth='$month' AND Receipt_ID = '$receiptID'";

try {
    $resDetails = Sql_exec($con, $qryDetails);
} catch (Exception $e) {
    $isError = 1;
}

echo $isError;