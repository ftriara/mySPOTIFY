<?php
	include 'koneksi.php';

	$Kolom = 'GENRE';
	$query = "SELECT * FROM $Kolom;";
	$sql = sqlsrv_query($conn, $query);
	if( $sql === false ) {
		die( print_r( sqlsrv_errors(), true));
   }
?>

<!DOCTYPE html>
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
	</style>
</head>

<body style="background-color: black;">
	<nav class="navbar bg-dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" style="color: green;">
			<img src="assets/logo_spotify.png" style="width: 7%; height: 7%;">
			mySPOTIFY DATABASE
	    </a>
	  </div>
	</nav>

	<!-- Judul  -->
	<div class="container-fluid">
		<figure>
		  <figcaption class="blockquote-footer">
		    LIST GENRE
		  </figcaption>
		</figure>
		<a href="index.php" type="button" class="btn btn-success mb-3">
			<i class="fa fa-arrow-left"></i>
			Kembali
		</a>
		<a href="kelola_3.php" type="button" class="btn btn-primary mb-3">
		    <i class="fa fa-plus"></i> Tambah
		</a>
		<form method="POST" action="kelola.php"> 
	  	  <input type="hidden" value="<?php echo $Kolom; ?>" name="Kolom">
	  	</form>
		<div class="table-responsive">
		  <table class="table align-middle table-bordered table-hover">
		    <thead>
		      <tr>
		        <th>Genre ID</th>
		        <th>Name</th>
		        <th>Aksi</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
		    	while($result = sqlsrv_fetch_array($sql)){
		    ?>
		      <tr>
		        <td>
		        	<?php echo $result['ID'];?>
		        </td>
				<td>
		        	<?php echo $result['Name'];?>
		        </td>
		        <td>
		        	<a href="kelola_3.php?ubah=<?php echo $result['ID'];?>" type="button" class="btn btn-success btn-sm">
		        		<i class="fa fa-pencil"></i>
		        	</a>
		        	<a href="proses_3.php?hapus=<?php echo $result['ID'];?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure to delete this genre?')"> 
		        		<i class="fa fa-trash"> </i>
		        	</a>
		        </td>
		      </tr>
		      <?php
		  		}
		      ?>
		    </tbody>
		  </table>
		</div>
	</div>
</body>
</html>