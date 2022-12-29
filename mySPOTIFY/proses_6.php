<?php 
	include 'koneksi.php';

	if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "add"){

			$ID = $_POST['ID'];
			$UserID = $_POST['UserID'];
			$SongID = $_POST['SongID'];
			$StartedAt = $_POST['StartedAt'];
			$FinishedAt = $_POST['FinishedAt'];
			$Duration = $_POST['Duration'];

			$query = "INSERT INTO STREAM Values('$ID', '$UserID', '$SongID', '$StartedAt', '$FinishedAt', '$Duration')";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 6_STREAM.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		} else if($_POST['aksi'] == "edit"){

			$ID = $_POST['ID'];
			$UserID = $_POST['UserID'];
			$SongID = $_POST['SongID'];
			$StartedAt = $_POST['StartedAt'];
			$FinishedAt = $_POST['FinishedAt'];
			$Duration = $_POST['Duration'];

			$query = "UPDATE STREAM SET UserID='$UserID', SongID='$SongID', StartedAt='$StartedAt', FinishedAt='$FinishedAt' WHERE ID='$ID';";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 6_STREAM.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		}
	}

	if(isset($_GET['hapus'])){
		$ID = $_GET['hapus'];
		$query = "DELETE FROM STREAM WHERE ID = '$ID';";
		$sql = sqlsrv_query($conn, $query);

		if($sql){
				header("location: 6_STREAM.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
	}
?>