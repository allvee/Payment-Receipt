<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 1/1/2017
 * Time: 2:56 PM
 */


include_once "config.php";
$isError = 0;
$type = $_REQUEST['type'];
$col = $_REQUEST['col'].'_amount';
$id = $_REQUEST['id'];
    if($type==1){
        $table = 'payment_details';
    }elseif($type==2){
        $table = 'receipt_details';
    }else{

    }

    if($type==1) {
        $qry = "SELECT 	 Payment_Name, Cash_on_bank, Cash_on_hand, ForYear, ForMonth, `$col` FROM payment_details WHERE Payment_ID = $id AND stattus='Active'";
    }elseif($type==2){
        $qry = "SELECT 	 Receipt_Name, Cash_on_bank, Cash_on_hand, ForYear, ForMonth, `$col` FROM receipt_details WHERE Receipt_ID = $id AND stattus='Active'";
    }else{

    }

    try{
        $res = Sql_exec($con,$qry);
    }catch (Exception $e){
        $isError = 1;
    }

$data = array(); $i=0;
 while($dt = Sql_fetch_assoc($res)){
    $j = 0;

     if($_REQUEST['type']==1){
         $data[$i][$j++] = $dt['Payment_Name'];
     }elseif($_REQUEST['type']==2){
         $data[$i][$j++] = $dt['Receipt_Name'];
     }else{

     }

     $data[$i][$j++] = $dt['Cash_on_bank'];
     $data[$i][$j++] = $dt['Cash_on_hand'];
     $data[$i][$j++] = $dt['ForYear'];
     $data[$i][$j++] = $dt['ForMonth'];
     $data[$i][$j++] =  $_REQUEST['col'];;
     $data[$i][$j++] = $dt["$col"];

$i=0;
 }

echo json_encode($data);