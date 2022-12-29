<?php 
	include 'koneksi.php';

	if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "add"){

			$ID = $_POST['ID'];
			$AlbumID = $_POST['AlbumID'];
			$Title = $_POST['Title'];
			$Duration = $_POST['Duration'];
			$Duration_Hours = $_POST['Duration_Hours'];
			$Duration_Minutes = $_POST['Duration_Minutes'];
			$Duration_Seconds = $_POST['Duration_Seconds'];

			$query = "INSERT INTO SONG Values('$ID', '$AlbumID', '$Title', '$Duration', '$Duration_Hours', '$Duration_Minutes', '$Duration_Seconds')";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 4_SONG.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		} else if($_POST['aksi'] == "edit"){

			$ID = $_POST['ID'];
			$AlbumID = $_POST['AlbumID'];
			$Title = $_POST['Title'];
			$Duration = $_POST['Duration'];
			$Duration_Hours = $_POST['Duration_Hours'];
			$Duration_Minutes = $_POST['Duration_Minutes'];
			$Duration_Seconds = $_POST['Duration_Seconds'];

			$query = "UPDATE SONG SET AlbumID='$AlbumID', Title='$Title', Duration='$Duration' WHERE ID='$ID';";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 4_SONG.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		}
	}

	if(isset($_GET['hapus'])){
		$ID = $_GET['hapus'];
		$query = "DELETE FROM SONG WHERE ID = '$ID';";
		$sql = sqlsrv_query($conn, $query);

		if($sql){
				header("location: 4_SONG.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
	}
?>