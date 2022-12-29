<!DOCTYPE html>

<?php
	include 'koneksi.php';

	$ID = '';
	$Name = '';

	if(isset($_GET['ubah'])){
		$ID = $_GET['ubah'];

		$query = "SELECT * FROM [USER] WHERE ID = '$ID';";
		$sql = sqlsrv_query($conn, $query);

		$result = sqlsrv_fetch_array($sql);
		$Name = $result['Name'];
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
	  <form method="POST" action="proses_7.php"> 

	  	  <div class="mb-3 row">
		    <label for="ID" class="col-sm-1 col-form-label">
		    	ID
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="ID" class="form-control" id="ID" placeholder="Ex: 19D8A41B-AB11-48C4-8458-F81F043A1757" value="<?php echo $ID ?>">
		    </div>
		  </div>

		  <div class="mb-3 row">
		    <label for="Name" class="col-sm-1 col-form-label">
		    	User Name
			</label>
		    <div class="col-sm-10">	
		      <input required type="text" name="Name" class="form-control" id="Name" placeholder="Ex: Billy" value="<?php echo $Name ?>">
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
			  	<a href="7_USER.php" type="button" class="btn btn-danger">
			  		<i class="fa fa-arrow-left" aria-hidden="true"></i>
			  		Batal
			  	</a>
		  	</div>
		  </div>
	  </form>
	</div>
</body>
</html>