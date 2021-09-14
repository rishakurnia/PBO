<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h2>Menentukan bilangan Ganjil Genap di PHP</h2>

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	  Bilangan: <input type="text" name="bil">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<br>
	<?php
	$tampil = "";

		if (isset($_POST["submit"])) {
			$bil = $_POST["bil"];
              
            if($bil > 0){
                echo $bil. "Merupakan Bilangan positif";
            }
            else ($bil < 0) ;
            {
                echo $bil. "Merupakan Bilangan negatif";
            }
        }

		{
            if ($bil % 2 == 0){ //Kondisi
			    echo $bil. "Merupakan Bilangan Genap"; //Kondisi true
		}else {
			    echo $bil. "Merupakan Bilangan Ganjil"; //Kondisi false
        }
	}
?>
</body>
</html>