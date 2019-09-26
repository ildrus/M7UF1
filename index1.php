<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php		
	$name=$_GET["name"];
 	$surname=$_GET["surname"];
	$email=$_GET["email"];
	$result="";
	$filename="dades.txt";
	$ok;			
	$result=$name."\t".$surname."\t".$email;
	$ok=file_put_contents($filename, $result, FILE_APPEND | LOCK_EX) ;	
	?>
</head>
<body>

	<form method="GET">
		<label>Name: </label><input type="text" name="name" placeholder="NAME">
		<br>
		<label>Surname: </label><input type="text" name="surname" placeholder="SURNAME">
		<br>
		<label>Email: </label><input type="text" name="email" placeholder="EMAIL">
		<br>
		<input type="submit" value="SUBMIT">
	</form>





</body>
</html>



