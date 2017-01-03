<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 1/2/2017
 * Time: 12:02 AM
 */

include_once "config.php";
$isError = 0;
$year = $_REQUEST['year'];
$month = $_REQUEST['month'];

$qry = "SELECT Receipt_ID,Receipt_Name FROM receipt_list WHERE ForYear = '$year' AND ForMonth = '$month' AND `status`='Active'";

try{
    $res = Sql_exec($con,$qry);
}catch (Exception $e){
    $isError =1;
}
$i=0;
$data = [];
while($dt = Sql_fetch_assoc($res)){
    $data[$i++] = '<option value="'.$dt['Receipt_ID'].'">'.$dt['Receipt_Name'].'</option>';
}
echo json_encode($data);