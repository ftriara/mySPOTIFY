<?php 
	include 'koneksi.php';

	if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "add"){

			$ID = $_POST['ID'];
			$Name = $_POST['Name'];

			$query = "INSERT INTO GENRE Values('$ID', '$Name')";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 3_GENRE.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		} else if($_POST['aksi'] == "edit"){

			$ID = $_POST['ID'];
			$Name = $_POST['Name'];

			$query = "UPDATE GENRE SET Name='$Name' WHERE ID='$ID';";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 3_GENRE.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		}
	}

	if(isset($_GET['hapus'])){
		$ID = $_GET['hapus'];
		$query = "DELETE FROM GENRE WHERE ID = '$ID';";
		$sql = sqlsrv_query($conn, $query);

		if($sql){
				header("location: 3_GENRE.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
	}
?>