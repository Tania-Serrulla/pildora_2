<!DOCTYPE html>
<html>
<head>
<title>gatooooooooos</title>
<style type="text/css">
html,body{
margin:0px;
padding:0px;
width:100%;
height:100%;
background:url(1.jpg);
font-family: Arial
}
form{
	background-color: #009ddc;
	opacity: 95%;
	text-align: center;
	margin-top: 100px;
	margin-left: 100px;
	margin-right: 100px;
	padding-top: 60px;
	padding-bottom: 40px;
	border-radius: 10rem;
}
input{
	width:50%;
	height:50px;
	margin-bottom: 50px;
}
</style>
</head>
<body>
<?php

header("Content-Type: text/html;charset=utf-8");
if (isset($_POST["nombre"])){
		
$nombre = $_POST["nombre"];
$color = $_POST["color"];

try{
$conexion = new PDO ('mysql:host=127.0.0.1;dbname=base_1','root','');
$caracteres = $conexion->query("SET NAMES 'utf8'");
$insercion = $conexion->query("INSERT INTO tabla_2 (nombre, color) VALUES ('$nombre','$color')");

$insercion = null;
$conexion = null;

}
catch(PDOEXception){
echo "DOLORRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR!!!!!!!!!!!";
die();
}

?>

<form>
<input type="button" value="+ gatosssssss" onClick="location.href='metergatos.php'">
</form>

<?php
}
else{
?>


<form action = "metergatos.php" method = "post" ><input type="text" name="nombre" placeholder="nombre gato"><br>
<select name="color">
<option value="naranja">naranja</option>
<option value="blanco">blanco</option>
<option value="negro">negro</option>
</select><br><br><br><br>
<input type="submit" value="enviar">
</form>
<?php
}
?>

</body>
</html>