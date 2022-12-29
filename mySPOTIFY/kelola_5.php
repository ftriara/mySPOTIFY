<!DOCTYPE html>

<?php
	include 'koneksi.php';

	$SongID = '';
	$GenreID = '';

	if(isset($_GET['ubah'])){
		$SongID = $_GET['ubah'];
		$GenreID = $_GET['ubah'];

		$query = "SELECT * FROM SONG_GENRE WHERE SongID = '$SongID' AND GenreID = '$GenreID';";
		$sql = sqlsrv_query($conn, $query);

		$result = sqlsrv_fetch_array($sql);
		$SongID = $result['SongID'];
		$GenreID = $result['GenreID'];
	}
?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<script src="js/bootstrap.bundle.min.js" ></script>
	<title>mySPOTIFY</title>
	<!-- Fontawesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

	<style>
		body 	{background-color: black;}
		thead   {color: white;}
		tbody   {color: white;}
		label   {color: white;}
	</style>
</head>

<body>
	<nav class="navbar bg-dark">
	  <div class="container-fluid">
	  </div>
	</nav>
	<div class="container">
	  <form method="POST" action="proses_5.php"> 

	  	  <div class="mb-3 row">
		    <label for="SongID" class="col-sm-1 col-form-label">
		    	Song ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="SongID" class="form-control" id="SongID" placeholder="Ex: 0C905870-2DD1-4881-A2FF-28DECB31598D" value="<?php echo $SongID ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="GenreID" class="col-sm-1 col-form-label">
		    	Genre ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="GenreID" class="form-control" id="GenreID" placeholder="Ex: 0C905870-2DD1-4881-A2FF-28DECB31598D" value="<?php echo $GenreID ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		  	<div class="col">
		  		<?php
		  			if(isset($_GET['ubah'])){
		  		?>
			  		<button type="submit" name="aksi" value="edit" class="btn btn-success">
			  			<i class="fa fa-floppy-o" aria-hidden="true"></i>
				  		Simpan Perubahan
				  	</button>
			  	<?php
			  		} else {
			  	?>
				  	<button type="submit" name="aksi" value="add" class="btn btn-success">
			  			<i class="fa fa-floppy-o" aria-hidden="true"></i>
				  		Tambahkan
				  	</button>
			  	<?php
			  		}
			  	?>
			  	<a href="5_SONG_GENRE.php" type="button" class="btn btn-danger">
			  		<i class="fa fa-arrow-left" aria-hidden="true"></i>
			  		Batal
			  	</a>
		  	</div>
		  </div>
	  </form>
	</div>
</body>
</html>