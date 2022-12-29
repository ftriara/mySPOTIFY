<?php
	include 'koneksi.php';
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
	    <a class="navbar-brand" href="#" style="color: green; font-weight:bolder;">
			<img src="assets/logo_spotify.png" style="width: 10%; height: 10%;">
	      	mySPOTIFY
	    </a>
	  </div>
	</nav>

	<!-- Judul  -->
	<div class="container-fluid">
		  <figcaption class="blockquote-footer">
		    LIST DATA
		  </figcaption>
		<div class="table-responsive">
		  <table class="table align-middle table-bordered table-hover">
		    <thead>
		      <tr>
		      	<th>No.</th>
		        <th>Tabel</th>
		        <th>Aksi</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<tr>
		      	<td>
		      		1
		      	</td>
		        <td>
		        	ALBUM
		        </td>
		        <td>
		        	<a href="1_ALBUM.php" type="button" class="btn btn-primary btn-sm">
		        		<i class="fa fa-eye"></i> Lihat
		        	</a>
		        </td>
		      </tr>
		      <tr>
		      	<td>
		      		2
		      	</td>
		        <td>
		        	ARTIST
		        </td>
		        <td>
		        	<a href="2_ARTIST.php" type="button" class="btn btn-primary btn-sm">
		        		<i class="fa fa-eye"></i> Lihat
		        	</a>
		        </td>
		      </tr>
		      
		      <tr>
		      	<td>
		      		3
		      	</td>
		        <td>
		        	GENRE
		        </td>
		        <td>
		        	<a href="3_GENRE.php" type="button" class="btn btn-primary btn-sm">
		        		<i class="fa fa-eye"></i> Lihat
		        	</a>
		        </td>
		      </tr>
		      <tr>
		      	<td>
		      		4
		      	</td>
		        <td>
		        	SONG
		        </td>
		        <td>
		        	<a href="4_SONG.php" type="button" class="btn btn-primary btn-sm">
		        		<i class="fa fa-eye"></i> Lihat
		        	</a>
		        </td>
		      </tr>
		      <tr>
		      	<td>
		      		5
		      	</td>
		        <td>
		        	SONG GENRE
		        </td>
		        <td>
		        	<a href="5_SONG_GENRE.php" type="button" class="btn btn-primary btn-sm">
		        		<i class="fa fa-eye"></i> Lihat
		        	</a>
		        </td>
		      </tr>
		      <tr>
		      	<td>
		      		6
		      	</td>
		        <td>
		        	STREAM
		        </td>
		        <td>
		        	<a href="6_STREAM.php" type="button" class="btn btn-primary btn-sm">
		        		<i class="fa fa-eye"></i> Lihat
		        	</a>
		        </td>
		      </tr>
		      <tr>
		      	<td>
		      		7
		      	</td>
		        <td>
		        	USER
		        </td>
		        <td>
		        	<a href="7_USER.php" type="button" class="btn btn-primary btn-sm">
		        		<i class="fa fa-eye"></i> Lihat
		        	</a>
		        </td>
		      </tr>
		    </tbody>
		  </table>
		</div>
	</div>
</body>
</html>