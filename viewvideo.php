<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	<style>
		body {
			background-image: url("images\\videobg.jpg");
		    display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
			
		}
		video {
			width: 640px;
			height: 360px;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
	</style>
	  <link rel="stylesheet" type="text/css" href="viewvideo.css">
</head>
<body >
	
	<a href="uploadvideo.php">UPLOAD</a>

	<div class="alb">
		<?php 
		 include "videoconn.php";
		 $sql = "SELECT * FROM videos ORDER BY id DESC";
		 $res = mysqli_query($conn, $sql);

		 if (mysqli_num_rows($res) > 0) {
		 	while ($video = mysqli_fetch_assoc($res)) { 
		 ?>		 		
	        <video src="uploads/<?=$video['video_url']?>" 
	        	   controls>
	        	
	        </video>

	    <?php 
	     }
		 }else {
		 	echo "<h1>Empty</h1>";
		 }
		 ?>
	</div>

	

	<div class="navigation">
  
  <a class="button" href="login.php">
	<img src="images\\logout.png">
  
  <div class="logout">LOGOUT</div>

  </a>
  
</div>
<script src=".js"></script>

</body>
</html>