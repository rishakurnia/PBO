<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h2>MENENTUKAN DERET BILANGAN ARITMATIKA</h2>

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	  <input type="text" name="awal" placeholder="Masukkan nilai awal">
	  <br><br>
      <input type="text" name="beda" placeholder="Masukkan nilai beda">
	  <br><br>
      <input type="text" name="suku" placeholder="Masukkan nilai suku">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<br>
    <?php
      if ($_SERVER["REQUEST_METHOD"]== "POST") {
          $awal = $_POST['awal'];
          $beda = $_POST['beda'];
          $suku = $_POST['suku'];

          for ($i=0; $i<$suku; $i++){
              $awal = $awal + $beda;
              echo $awal.'   ';
          }
      }
   ?>
</body>
</html>