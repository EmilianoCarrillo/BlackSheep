<?php
	include('conexion.php');
	$lies=$_POST['mentiras'];
	$r_1=$_POST['R1'];
	$r_2=$_POST['R2'];
	$r_3=$_POST['R3'];
	$r_4="";
	if($lies==3)
		$r_4=$_POST['R4'];
	$sql="";
	if($lies==3)
		$sql="INSERT INTO blacktable(Mentiras,R1,R2,R3,R4) VALUES(".$lies.",'".$r_1."','".$r_2."','".$r_3."','".$r_4."')";
	else
		$sql="INSERT INTO blacktable(Mentiras,R1,R2,R3) VALUES(".$lies.",'".$r_1."','".$r_2."','".$r_3."')";
	
	if(mysqli_query($connect,$sql)){
	$hash="A";
	for($i=0;$i<4;$i++){
		$caracter=rand(0,9);
		$hash.=$caracter;
	}
	$sql="SELECT * from blacktable";
	$resultado=mysqli_query($connect,$sql);
	$maxi=-1;
	while($fila=mysqli_fetch_assoc($resultado)){
		if($fila["Id"]>$maxi)
			$maxi=$fila["Id"];
	}
	$hash.=$maxi;
	header("Location:linkshower.php?h=".$hash);
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
?>