<?php

include_once 'common.php';
$configStr = 'localhost,root,nopass,ts_payment_receipt';
$value = explode(',', $configStr);

$dbtype = "mysql";
$Server = $value[0];
$UserID = $value[1];
$Password = $value[2];
$Database = $value[3];
$SHOWERROR = true;
$con = connectDB();
?>