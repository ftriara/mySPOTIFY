<!DOCTYPE html>

<?php
	include 'koneksi.php';

	$ID = '';
	$AlbumID = '';
	$Title = '';
	$Duration = 0;
	$Duration_Hours = 0;
	$Duration_Minutes = 0;
	$Duration_Seconds = 0;

	if(isset($_GET['ubah'])){
		$ID = $_GET['ubah'];

		$query = "SELECT * FROM SONG WHERE ID = '$ID';";
		$sql = sqlsrv_query($conn, $query);

		$result = sqlsrv_fetch_array($sql);

		$AlbumID = $result['AlbumID'];
		$Title = $result['Title'];
		$Duration = $result['Duration'];
		$Duration_Hours = $result['Duration_Hours'];
		$Duration_Minutes = $result['Duration_Minutes'];
		$Duration_Seconds = $result['Duration_Seconds'];
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
	  <form method="POST" action="proses_4.php"> 

	  	  <div class="mb-3 row">
		    <label for="ID" class="col-sm-1 col-form-label">
		    	ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="ID" class="form-control" id="ID" placeholder="Ex: C3B051D8-531F-4D52-90F2-0708404FD056" value="<?php echo $ID ?>">
		    </div>
		  </div>
	  	  
		  <div class="mb-3 row">
		    <label for="AlbumID" class="col-sm-1 col-form-label">
		    	Album ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="AlbumID" class="form-control" id="AlbumID" placeholder="Ex: 7D0E90D5-CFE4-4640-AFBD-DE9ECC4B4F16" value="<?php echo $AlbumID ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="Title" class="col-sm-1 col-form-label">
		    	Title
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="Title" class="form-control" id="Title" placeholder="Ex: Fly me to the moon" value="<?php echo $Title ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="Duration" class="col-sm-1 col-form-label">
		    	Duration
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="Duration" class="form-control" id="Duration" placeholder="Ex: 247" value="<?php echo $Duration ?>">
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
			  	<a href="4_SONG.php" type="button" class="btn btn-danger">
			  		<i class="fa fa-arrow-left" aria-hidden="true"></i>
			  		Batal
			  	</a>
		  	</div>
		  </div>
	  </form>
	</div>
</body>
</html>