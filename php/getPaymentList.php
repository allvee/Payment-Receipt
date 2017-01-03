<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 1/2/2017
 * Time: 12:01 AM
 */


include_once "config.php";
$isError = 0;
$year = $_REQUEST['year'];
$month = $_REQUEST['month'];
$qry = "SELECT Payment_ID,Payment_Name FROM payment_list WHERE ForYear = '$year' AND ForMonth = '$month' AND `status`='Active'";

try{
    $res = Sql_exec($con,$qry);
}catch (Exception $e){
    $isError =1;
}
$i=0;
$data = [];
while($dt = Sql_fetch_assoc($res)){
    $data[$i++] = '<option value="'.$dt['Payment_ID'].'">'.$dt['Payment_Name'].'</option>';
}
echo json_encode($data);