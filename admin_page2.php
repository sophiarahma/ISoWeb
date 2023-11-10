<?php

@include 'config2.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:kritik_saran.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="kritik_sarann.php" class="btn">login</a>
      <a href="request.php" class="btn">register</a>
	  <a href="ISo Website.php" class="btn">Home</a>
   </div>

</div>

</body>
</html>