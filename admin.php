<?php
	require_once 'config/connect.php';

	if (isset($_SESSION['logged_user'])) {
		echo '<script> console.log("login succ, ltc code: 512"); </script>';
	} else {
        header("location: login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Admin Panel </title>
	<link rel="stylesheet" href="css/admin.css">
	 <link rel="icon" type="image/x-icon" href="img/dashbord-icon.ico">
</head>
<body>

	<?php
		// if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
		// {
		//     $name = $_FILES["filename"]["name"];
		//     move_uploaded_file($_FILES["filename"]["tmp_name"], "files/".$name);
		//     echo "<script>alert('file uploaded');</script>";
		// } else {
		// 	echo "<script>alert('unkown upload error');</script>";
		// }
	?>

	
	<center>
		<p class="upload-files_labe"> Upload files to server </p>
	</center>
	
	<div class="upload-files">
		<div>
			<form method="post" enctype="multipart/form-data" class="upload-wrapper">
				<div>
					<label class="filelabel" style="margin-right: 20px;">
						<input type="file" name="filename" class="fileinput" size="10"/>
						<div><p class="upload-text">chose file</p></div>
					</label>
				</div>
				<div class="ulpoad-submitt" style="margin-left: 20px;">
					<input type="submit" value="upload" class="upload-btn" />
				</div>
			</form>	
		</div>
	</div>

	<div class="chosefile_section-wrapp">
		<div class="chosefile_section">
			<div class="top">
				<div class="active_file">
					<?php 
            		   $filename = mysqli_query($connection, "SELECT * FROM `filename` WHERE `id` = 1");
            		   $filename = mysqli_fetch_all($filename);
            		   $filename = $filename[0][1];
        			?>
					<p>active file: <?php echo "<span class='activefile'>$filename</span>"; ?></p>
				</div>
				<hr>
			</div>
			<div class="under">
				<p>Available files:</p>
				<?php
					$dir_path = "files/";

					if(is_dir($dir_path))
					{
					    $files = opendir($dir_path);
					    {
					        if($files)
					        {
					          while(($file_name = readdir($files)) !== FALSE)
					          {
					              if($file_name != '.' && $file_name != '..')
					              {
					               // select option with files names					               
					               // display the file names
					               echo $file_name."<br>";
					              }
					          }
					        }
						}	
					}
				?>
			</div>
		</div>
	</div>
	<div class="edit_section_wrapp">
		<div class="edit_section">
			<div class="edit_file">
				<form action="" method="post">
					<center>
						<input type="submit" name="btnDelete" class="deletebtn" value="Cleane">
					</center>
				</form>
			</div>
		</div>
	</div>

	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {		
		  if (isset($_POST['btnDelete'])) {
		  	$files = glob('files/*'); 
			foreach($files as $file){ 
			  if(is_file($file)) {
			    unlink($file);
			  }
			}
		  }
		}
	?>

	<div class="changefilesection_wrapper">
		<div class="changefile-section">
			<form name="form" action="vendor/update.php" method="post">
  				<input type="text" name="filename" id="filename" placeholder="type the file name">
  				<input type="submit" name="changefile_form_submit_button" value="Set the file" id="changefile"/>
			</form>
		</div>
	</div>

	<center>
		<p class="changedate_helper">Input date in format: "Dec 22 2023 00:00:00"</p>
	</center>

	<div class="changefilesection_wrapper">
		<div class="changefile-section">
			<form name="form" action="vendor/countdown-update.php" method="post">
  				<input type="text" name="date" id="filename" placeholder="type the date">
  				<input type="submit" name="changefile_form_submit_button" value="Set the date" id="changefile"/>
			</form>
		</div>
	</div>

	
	<div class="linkswrapper">
		<a href="logout.php">Logout</a>
		<a href="index.php">Main page</a>
	</div>

</body>
</html>
