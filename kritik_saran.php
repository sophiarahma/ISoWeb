<?php

@include 'config2.php';

session_start();

if(isset($_POST['submit'])){

   $kritik = mysqli_real_escape_string($conn, $_POST['kritik']);
   
   $select = " SELECT * FROM user WHERE email = '$kritik' && password = ";


};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>kritik dan saran</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css"href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>kritik atau saran bisa tulis di sini yaa</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="kritik" name="kritik" required placeholder="tulis kritik dan saranmu">
      <input type="submit" name="submit" value="submit" class="form-btn">
      <p>punya request konten? <a href="request.php">tulis di sini!!</a></p>
	  <p>sudah selesai? <a href="coba.php">balik ke home</a></p>
   </form>

</div>

</body>
</html>