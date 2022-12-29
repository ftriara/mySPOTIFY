<!DOCTYPE html>

<?php
	include 'koneksi.php';

	$ID = '';
	$ArtistID = '';
	$Name = '';
	$ReleaseYear = 0;

	if(isset($_GET['ubah'])){
		$ID = $_GET['ubah'];

		$query = "SELECT * FROM ALBUM WHERE ID = '$ID';";
		$sql = sqlsrv_query($conn, $query);

		$result = sqlsrv_fetch_array($sql);
		$ArtistID = $result['ArtistID'];
		$Name = $result['Name'];
		$ReleaseYear = $result['ReleaseYear'];
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
	  <form method="POST" action="proses_1.php"> 

	  	  <div class="mb-3 row">
		    <label for="ID" class="col-sm-1 col-form-label">
		    	ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="ID" class="form-control" id="ID" placeholder="Ex: C3B051D8-531F-4D52-90F2-0708404FD056" value="<?php echo $ID ?>">
		    </div>
		  </div>
	  	  
		  <div class="mb-3 row">
		    <label for="ArtistID" class="col-sm-1 col-form-label">
		    	Artist ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="ArtistID" class="form-control" id="ArtistID" placeholder="Ex: 7D0E90D5-CFE4-4640-AFBD-DE9ECC4B4F16" value="<?php echo $ArtistID ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="Name" class="col-sm-1 col-form-label">
		    	Album Name
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="Name" class="form-control" id="Name" placeholder="Ex: Free chair early." value="<?php echo $Name ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="ReleaseYear" class="col-sm-1 col-form-label">
		    	Release Year
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="ReleaseYear" class="form-control" id="ReleaseYear" placeholder="Ex: 2020" value="<?php echo $ReleaseYear ?>">
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
			  	<a href="1_ALBUM.php" type="button" class="btn btn-danger">
			  		<i class="fa fa-arrow-left" aria-hidden="true"></i>
			  		Batal
			  	</a>
		  	</div>
		  </div>
	  </form>
	</div>
</body>
</html>