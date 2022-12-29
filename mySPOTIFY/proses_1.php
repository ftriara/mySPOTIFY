<?php 
	include 'koneksi.php';

	if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "add"){

			$ID = $_POST['ID'];
			$ArtistID = $_POST['ArtistID'];
			$Name = $_POST['Name'];
			$ReleaseYear = $_POST['ReleaseYear'];

			$query = "INSERT INTO ALBUM Values('$ID', '$ArtistID', '$Name', '$ReleaseYear')";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 1_ALBUM.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		} else if($_POST['aksi'] == "edit"){

			$ID = $_POST['ID'];
			$ArtistID = $_POST['ArtistID'];
			$Name = $_POST['Name'];
			$ReleaseYear = $_POST['ReleaseYear'];

			$query = "UPDATE ALBUM SET ArtistID='$ArtistID', Name='$Name', ReleaseYear='$ReleaseYear' WHERE ID='$ID';";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 1_ALBUM.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		}
	}

	if(isset($_GET['hapus'])){
		$ID = $_GET['hapus'];
		$query = "DELETE FROM ALBUM WHERE ID = '$ID';";
		$sql = sqlsrv_query($conn, $query);

		if($sql){
				header("location: 1_ALBUM.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
	}
?>