<?php

@include 'config2.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:kritik_saran.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page 2</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css"href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="kritik_saran.php" class="btn">kritik dan saran</a>
      <a href="request_form.php" class="btn">request konten</a>
   </div>

</div>

</body>
</html>