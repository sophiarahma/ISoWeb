<?php

@include 'config2.php';

session_start();

if(isset($_POST['submit'])){

   $request = mysqli_real_escape_string($conn, $_POST['request']);
   
   $select = " SELECT * FROM user WHERE email = '$request' && password = ";


};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>request form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>request konten bisa tulis di sini yaa</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="request" required placeholder="tulis request-anmu di sini">
      <input type="submit" name="submit" value="submit" class="form-btn">
      <p>sudah selesai? <a href="coba.php">balik ke home</a></p>
   </form>

</div>

</body>
</html>