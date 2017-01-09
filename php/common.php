<?PHP
// Release note: Wraps up database connections and DB access functions - connect/query/result etc.
// Version: 1.0.1
// Date: August 19, 2011
// Author: al amin

function connectDB()
{

	global $dbtype;
	global $Server;
	global $Database;
	global $UserID;
	global $Password;
	global $SHOWERROR;

	if ($dbtype=="odbc")
	{
		$cn=odbc_connect("Driver={SQL Server};Server=$Server;Database=$Database","$UserID", "$Password");
		if(!$cn)
		{
			if($SHOWERROR)
				die("err+db connection error");
			else
				die("");
		}
		else
			return $cn;

		return $cn;
	}
	else if($dbtype=="mssql")
	{
		$cn=mssql_connect("$Server","$UserID", "$Password");
		$ret=mssql_select_db($Database);

		if(!$cn)
		{
			if($SHOWERROR)
				die("err+db connection error");
			else
				die("");
		}
		else
			return $cn;

		return $cn;
	}
	else if($dbtype=="mysqli")
	{
		$cn = mysqli_connect($Server,$UserID, $Password, $Database);
		if(!$cn)
		{
			if($SHOWERROR)
				die("err+db connection error");
			else
				die("");
		}
		else
			return $cn;

		return $cn;
	}
	else
	{
		$cn=mysql_connect($Server,$UserID,$Password);
		mysql_select_db($Database);

		if(!$cn)
		{
			if($SHOWERROR)
				die("err+db connection error");
			else
				die("");
		}
		else
			return $cn;

		return $cn;
	}
}

/*
 * close database connection
 *  */
function ClosedDBConnection($cn)
{
	global $dbtype;
	if($dbtype == 'odbc')
		odbc_close($cn);
	else if($dbtype == 'mssql')
		mssql_close($cn);
	else if($dbtype == 'mysqli')
		mysqli_close($cn);
	else
		mysql_close($cn);
}

/*
 * execution  query
 *  */
function Sql_exec($cn,$qry)
{
	global $dbtype;
	global $SHOWERROR;

	if($dbtype == 'odbc')
	{
		$rs=odbc_exec($cn,$qry);
		if(!$rs)
		{
			if($SHOWERROR)
				die("err+".$qry);
			else
				die("");
		}
		else
			return $rs;
	}
	else if($dbtype == 'mssql')
	{
		$rs=mssql_query($qry, $cn);

		if(!$rs)
		{
			if($SHOWERROR)
			{
				echo(mssql_get_last_message());
				die("err+".$qry);
			}
			else
				die("");
		}
		else
			return $rs;
	}
	else if($dbtype == 'mysqli')
	{
		$rs=mysqli_query($cn,$qry);
		if(!$rs)
		{
			if($SHOWERROR)
				die("err + $qry:".mysqli_error($cn));
			else
				die("");
		}
		else
			return $rs;
	}
	else
	{
		$rs=mysql_query($qry,$cn);
		if(!$rs)
		{
			if($SHOWERROR)
				die("err+".$qry);
			else
				die("");
		}
		else
			return $rs;
	}
}
/*
 * execution  query continue even after error
 *  */
function Sql_exec_continue($cn, $qry)
{
	global $dbtype;

	if ($dbtype == 'mysqli') {

		$rs = mysqli_query($cn, $qry);
		return $rs;
	} else {
		$rs = mysql_query($qry, $cn);
		return $rs;
	}
}

/*
 * fetch array to extract query result for select
 *   */
function Sql_insert_id($cn)
{
	global $dbtype;
	if ($dbtype == 'odbc') {
	} else if ($dbtype == 'mssql') {
	} else if ($dbtype == 'mysqli') {
		return mysqli_insert_id($cn);
	} else {
		return mysql_insert_id($cn);
	}
}

/*
 * fetch array to extract query result for select
 *   */
function Sql_fetch_array($rs)
{
	global $dbtype;
	if($dbtype == 'odbc')
		return odbc_fetch_array($rs);
	else if($dbtype == 'mssql')
		return mssql_fetch_array($rs);
	else if($dbtype == 'mysqli')
		return mysqli_fetch_array($rs);
	else
		return mysql_fetch_array($rs);
}

/*
 * fetch associative array to extract query result for select
 *   */
function Sql_fetch_assoc($rs)
{
	global $dbtype;
	if ($dbtype == 'mysql')
		return mysql_fetch_assoc($rs);

}

/*
 * fetch object to extract query result for select
 *   */
function Sql_fetch_object($rs)
{
    global $dbtype;
	if ($dbtype == 'mysql')
		return mysql_fetch_object($rs);
}


/*
 * return data of a index. input result and column name and return data of this index
 *  */
function Sql_Result($rs, $ColumnName)
{
	global $dbtype;
	return $rs[$ColumnName];
}

/*
 *return number of rows
 *  */
function Sql_Num_Rows($result_count)
{
	global $dbtype;
	if ($dbtype == 'odbc')
		return odbc_num_rows($result_count);
	else if ($dbtype == 'mssql')
		return mssql_num_rows($result_count);
	else if ($dbtype == 'mysqli')
		return mysqli_num_rows($result_count);
	else
		return mysql_num_rows($result_count);

}


function Sql_GetField($rs, $ColumnName)
{
	global $dbtype;

	if ($dbtype == 'odbc')
		return odbc_result($rs, $ColumnName);
	else if ($dbtype == 'mssql')
		return mssql_result($rs, 0, $ColumnName);
	else if ($dbtype == 'mysqli') {
		$row = mysqli_fetch_assoc($rs);
		return $row[$ColumnName];
	} else
		return mysql_result($rs, 0, $ColumnName);
}

function Sql_Free_Result($rs)
{
	global $dbtype;

	if ($dbtype == 'odbc')
		return odbc_free_result($rs);
	else if ($dbtype == 'mssql')
		return mssql_free_result($rs);
	else if ($dbtype == 'mysqli')
		return mysqli_free_result($rs);
	else
		return mysql_free_result($rs);
}


function Sql_real_escape($cn, $val)
{
	global $dbtype;
	if ($dbtype == 'odbc') {
	} else if ($dbtype == 'mssql') {
	} else if ($dbtype == 'mysqli') {
		return mysqli_real_escape_string($cn, $val);
	} else {
		return mysql_real_escape_string($val, $cn);
	}
}

function remote_connectDB($pname, $pname_field = 'pname', $table_name = 'tbl_process_db_access')
{
	$cn = connectDB();
	$remoteCnQry = "select * from $table_name where $pname_field='$pname'";
	$res = Sql_exec($cn, $remoteCnQry);
	$dt = Sql_fetch_array($res);

	global $dbtype;
	global $UserID;
	global $Password;
	global $Server;
	global $Database;

	global $temp_dbtype;
	global $temp_UserID;
	global $temp_Password;
	global $temp_Server;
	global $temp_Database;

	$temp_dbtype = $dbtype;
	$temp_UserID = $UserID;
	$temp_Password = $Password;
	$temp_Server = $Server;
	$temp_Database = $Database;

	$dbtype = $dt['db_type'];
	$Server = $dt['db_server'];
	$UserID = $dt['db_uid'];
	$Password = $dt['db_password'];
	$Database = $dt['db_name'];

	ClosedDBConnection($cn);
	$cn = connectDB();
	return $cn;
}
function remote_connect( $dbtype,$Server,$UserID,$Password,$Database ){

	if ($dbtype == "odbc") {
		$cn = odbc_connect("Driver={SQL Server};Server=$Server;Database=$Database", "$UserID", "$Password");
		if (!$cn)
			die("err+db connection error");
		else
			return $cn;

		return $cn;
	} else if ($dbtype == "mssql") {
		$cn = mssql_connect("$Server", "$UserID", "$Password");
		$ret = mssql_select_db($Database);

		if (!$cn)
			die("err+db connection error");
		else
			return $cn;

		return $cn;
	} else if ($dbtype == "mysqli") {
		$cn = mysqli_connect($Server, $UserID, $Password, $Database);
		if (!$cn) {
			die("err+db connection error: " . mysqli_connect_error());
		} else
			return $cn;

		return $cn;
	} else {
		$cn = mysql_connect($Server, $UserID, $Password,true);
		mysql_select_db($Database);

		if (!$cn)
			die("err+db connection error");
		else
			return $cn;

		return $cn;
	}

}

function close_remote_connection($dbtype,$con){

	if ($dbtype == 'odbc')
		odbc_close($con);
	else if ($dbtype == 'mssql')
		mssql_close($con);
	else if ($dbtype == 'mysqli')
		mysqli_close($con);
	else
		mysql_close($con);

}


/*
 * execution  query
 *  */
function remote_Sql_exec($dbtype,$cn, $qry)
{


	if ($dbtype == 'odbc') {
		$rs = odbc_exec($cn, $qry);
		if (!$rs)
			die("err+" . $qry);
		else
			return $rs;
	} else if ($dbtype == 'mssql') {
		$rs = mssql_query($qry, $cn);

		if (!$rs) {
			echo(mssql_get_last_message());
			die("err+" . $qry);
		} else
			return $rs;
	} else if ($dbtype == 'mysqli') {
		$rs = mysqli_query($cn, $qry);
		if (!$rs)
			die("err + $qry:" . mysqli_error($cn));
		else
			return $rs;
	} else {
		$rs = mysql_query($qry, $cn);
		if (!$rs)
			die("err + $qry:" . mysql_error($cn));
		else
			return $rs;
	}
}


function remote_Sql_fetch_array($dbtype,$rs,$type=MYSQL_BOTH)
{

	if ($dbtype == 'odbc')
		return odbc_fetch_array($rs,$type);
	else if ($dbtype == 'mssql')
		return mssql_fetch_array($rs,$type);
	else if ($dbtype == 'mysqli')
		return mysqli_fetch_array($rs,$type);
	else
		return mysql_fetch_array($rs,$type);
}

function remote_Sql_fetch_assoc($dbtype, $rs, $type=MYSQL_BOTH)
{
	if ($dbtype == 'mysql')
		return mysql_fetch_assoc($rs);

}

function remote_Sql_Num_Rows($dbtype, $result_count)
{
	global $dbtype;
	if($dbtype == 'odbc')
		return odbc_num_rows($result_count);
	else if($dbtype == 'mssql')
		return mssql_num_rows($result_count);
	else if($dbtype == 'mysqli')
		return mysqli_num_rows($result_count);
	else
		return mysql_num_rows($result_count);

}

function formatJSON($result)
{
	$str="[";
	$numRows=0;
	while($row = mysql_fetch_array($result))
	{

		if($numRows>0)
			$str=$str.", ";
		$numRows++;
		$userType=$row["usertype"];
		$username=$row['username'];
		$_SESSION['usertype'] = $userType;
		$_SESSION['username'] =$username;
		$n=mysql_num_fields($result);

		for($i=0; $i<$n; $i++)
		{
			$fld=mysql_field_name($result, $i);
			$val=addslashes($row[$fld]);

			$val=str_replace("\t", "", $val);
			$val=str_replace("'", "\'", $val);
			$val=str_replace("\r\n", "", $val);


			if($i==0)
				$str=$str."{\"$fld\":\"$val\"";
			else
				$str=$str.", \"$fld\":\"$val\"";
		}
		$str=$str."}\r\n";
	}

	$str=$str."]";
	return $str;
}

//json to add query @mahfooz
function jsonDataToQueryString($data){

	$field_string = "" ;
	$value_string = "";
	foreach($data as $key=>$val){

		$field_string .= $key.',';
		$value_string .= "'".mysql_real_escape_string($val)."',";
	}

	return array('fields' => substr($field_string,0,-1), 'values'=>substr($value_string,0,-1));
}

//json to edit query @mahfooz

function jsonEditQuery($data){
	$string = "";
	foreach($data as $key => $val){
		$string .= "{$key} = '".mysql_real_escape_string($val)."',";
	}
	return substr($string,0,-1);
}


//post data to somewhere using post method
function postData($url,$data=array()){
	//build query
	$postdata = http_build_query($data);

	//process data
	$opts = array('http' =>
		array(
			'method'  => 'POST',
			'header'  => 'Content-type: application/x-www-form-urlencoded',
			'content' => $postdata
		)
	);

	//create streap
	$context  = stream_context_create($opts);
	//post data and get return
	$result = file_get_contents($url,false,$context);

	return $result;
}

?>