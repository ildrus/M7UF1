<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php	
		if(isset($_GET["skinfile"])){
			$cssFile= $_GET["skinfile"].".css";
			echo "<link rel='stylesheet' type='text/css' href='css/".$cssFile."'>";
		}
		$dir = opendir("css");
		$array=[];
		$array[]=$arxiu = readdir($dir);
		while($arxiu!=false){
			$arxiu = readdir($dir);
			if($arxiu!="."&&$arxiu!=".."&&$arxiu!=""){
				$array[]=$arxiu;
			}
		}
		$count=count($array);
		closedir($dir);
	?>	
</head>
<body>
	<FORM>
	<SELECT name="skinfile">
		<?php
			for($i=0;$i<$count;$i++){
				echo "<option>".substr($array[$i],0,-4)."</option>";
			}	
		?>
	</SELECT>
 	<BR/>
	<INPUT type="submit"/>
</FORM>
</body>
</html>