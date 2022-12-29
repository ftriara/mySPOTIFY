<!DOCTYPE html>

<?php
	include 'koneksi.php';
	date_default_timezone_set("Asia/Jakarta");

	$ID = '';
	$UserID = '';
	$SongID = '';
	$StartedAt = date("Y/m/d H:i:s");
	$FinishedAt = date("Y/m/d H:i:s");
	$Duration = 0;

	if(isset($_GET['ubah'])){
		$ID = $_GET['ubah'];

		$query = "SELECT * FROM STREAM WHERE ID = '$ID';";
		$sql = sqlsrv_query($conn, $query);

		$result = sqlsrv_fetch_array($sql);
		$UserID = $result['UserID'];
		$SongID = $result['SongID'];
		$StartedAt = date_format($result['StartedAt'], 'Y-m-d H:i:s');
		$FinishedAt = date_format($result['FinishedAt'], 'Y-m-d H:i:s');
		$Duration = $result['Duration'];
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
	  <form method="POST" action="proses_6.php"> 

	  	  <div class="mb-3 row">
		    <label for="ID" class="col-sm-1 col-form-label">
		    	ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="ID" class="form-control" id="ID" placeholder="Ex: C3B051D8-531F-4D52-90F2-0708404FD056" value="<?php echo $ID ?>">
		    </div>
		  </div>
	  	  
		  <div class="mb-3 row">
		    <label for="UserID" class="col-sm-1 col-form-label">
		    	User ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="UserID" class="form-control" id="UserID" placeholder="Ex: 7D0E90D5-CFE4-4640-AFBD-DE9ECC4B4F16" value="<?php echo $UserID ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="SongID" class="col-sm-1 col-form-label">
		    	Song ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="SongID" class="form-control" id="SongID" placeholder="Ex: 7D0E90D5-CFE4-4640-AFBD-DE9ECC4B4F16" value="<?php echo $SongID ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="StartedAt" class="col-sm-1 col-form-label">
		    	Started At
			</label>
		    <div class="col-sm-10">	
		      <input required type="datetime" name="StartedAt" class="form-control" id="StartedAt" placeholder="Ex: 2015-05-12 20:52:26.000" value="<?php echo $StartedAt ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="FinishedAt" class="col-sm-1 col-form-label">
		    	Finished At
			</label>
		    <div class="col-sm-10">	
		      <input required type="datetime" name="FinishedAt" class="form-control" id="FinishedAt" placeholder="Ex: 2015-05-12 20:52:26.000" value="<?php echo $FinishedAt ?>">
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
			  	<a href="6_STREAM.php" type="button" class="btn btn-danger">
			  		<i class="fa fa-arrow-left" aria-hidden="true"></i>
			  		Batal
			  	</a>
		  	</div>
		  </div>
	  </form>
	</div>
</body>
</html>