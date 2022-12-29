<?php
	$serverName = "LAPTOP-PVS783F6\SQLEXPRESS";
	$connectionInfo = array("Database" => "SPOTIFY");
	
	$conn = sqlsrv_connect ($serverName, $connectionInfo);
	if($conn){
		echo "";
	} else{
		die (print_r(sqlsrv_errors(), true));
	}
?>