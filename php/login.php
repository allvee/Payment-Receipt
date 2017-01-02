<?php
/**
 * Created by PhpStorm.
 * User: Anik-pc
 * Date: 12/25/2016
 * Time: 4:03 AM
 */


	include_once "config.php";

	$query = "SELECT * FROM users
           WHERE username='".$_REQUEST['username']."'AND PASSWORD = MD5('".$_REQUEST['password']."') AND LOWER(STATUS)='active'";

    $result = Sql_exec($con,$query);
	$login = formatJSON($result);

	if ($login == '[]'){
        echo false;
    }else{
        echo $login;
    }
	die();
?>