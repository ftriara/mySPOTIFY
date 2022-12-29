<?php 
	include 'koneksi.php';

	if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "add"){

			$SongID = $_POST['SongID'];
			$GenreID = $_POST['GenreID'];

			$query = "INSERT INTO SONG_GENRE Values('$SongID', '$GenreID')";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 5_SONG_GENRE.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		} else if($_POST['aksi'] == "edit"){

			$SongID = $_POST['SongID'];
			$GenreID = $_POST['GenreID'];

			$query = "UPDATE SONG_GENRE SET SongID='$SongID', GenreID='$GenreID' WHERE SongID='$SongID' AND GenreID='$GenreID';";
			$sql = sqlsrv_query($conn, $query);

			if($sql){
				header("location: 5_SONG_GENRE.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
		}
	}

	if(isset($_GET['hapus'])){
		$SongID = $_GET['hapus'];
		$GenreID = $_GET['hapus'];

		$query = "DELETE FROM SONG_GENRE WHERE SongID='$SongID' AND GenreID='$GenreID';";
		$sql = sqlsrv_query($conn, $query);

		if($sql){
				header("location: 5_SONG_GENRE.php");
			} else{
				die( print_r( sqlsrv_errors(), true));
			}
	}
?>