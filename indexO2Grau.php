<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php			
 						
		
			$a=$_GET["A"];
 			$b=$_GET["B"];
			$c=$_GET["C"];
			$neg = -1;
		
			$menosb = $b * $neg;
			$oper1 = pow($b, 2);
			$oper2 = 4 * $a * $c;
			$resta = $oper1 - $oper2;
			$raiz =  sqrt ( $resta);
			$dos_a = 2 * $a;

			$resultado1 = ($menosb + $raiz) / $dos_a;
			$resultado2 = ($menosb - $raiz) / $dos_a;
			
			if($resultado2==NAN||$resultado1==NAN){
				echo "la operacio no es pot resoldre";
			}
			elseif($resultado1>0){
				echo "el valor de x es: ".$resultado1." <br />";				
			}
			else{
				echo "el valor de x es: ".$resultado2." <br />";
			}
		
						
	?>
</head>
<body>

	<form method="GET">
		<label>A</label><input type="text" name="A">
		<br>
		<label>B</label><input type="text" name="B">
		<br>
		<label>C</label><input type="text" name="C">
		<br>
		<input type="submit" value="Calculate">
	</form>





</body>
</html>



