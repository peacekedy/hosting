<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>hosting form</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<?php include"admin_header.php"?>
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
		
<?php include"admin_menu.php"?>
          <?php
		  include"connection.php";
		 $a=$_POST['host_id'];
		 $b=$_POST['price'];
		 $c=$_POST['disk_space'];
		 $d=$_POST['band_width'];
		 $e=$_POST['email'];
		 $f=$_POST['mysql_database'];
		 $g=$_POST['sub_domain'];
	$query="insert into hosting set host_id='$a' , price='$b' , disk_space='$c' , band_width='$d' , 
	email='$e' , mysql_database='$f' , sub_domain='$g' ";	 
		 if($query){
			 $res=mysqli_query($con,$query);
			 print"data inserted";
			 		 
		 }
		 else 
		 {
			 print"your data not inserted";
			 
		 }
		 
		  ?>
        </div>
      </div>
    </div>

  </div>
  <?php include"footer.php"?>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
