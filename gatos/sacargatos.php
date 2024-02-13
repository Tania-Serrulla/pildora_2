<!doctype html>
<html>
<head>
<title>me turboflipa</title>
<style type="text/css">
html,body{
margin:0px;
padding:0px;
width:100%;
height:100%;
background:url(1.jpg);
font-family: Arial
}
table, td, th{border: 1px solid border:#009ddc}
table{
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}
th, td{padding: 10px 20px;}
td{background: #e5e5e5;}
th{background: #009ddc;color: #fff;}
img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
div{
  padding:20px;
  background: #009ddc;
}
</style>
</head>
<body>

<audio id="sonido">
<source src="1.mp3" type="audio/mpeg">
</audio>
<script>
var sonido = document.getElementById("sonido");
function funsion_M(){sonido.play();}
</script>

<div>
<table>
<tr>
<th>nombre gato</th>
<th>color gato</th>
</tr>

<?php
$conecsion = mysqli_connect('127.0.0.1', 'root', '', 'base_1');

$tabla ="SELECT * from tabla_2";
$resultao= mysqli_query($conecsion,$tabla);
while($datos=mysqli_fetch_array($resultao)){
?>
<tr>
<td><?php echo $datos['nombre'] ?></td>
<td><img src='<?php echo $datos['color'] ?>.jpg'></td>
</tr>
<tr>
<th></th>
<th></th>
</tr>
<?php
}
?>
<tr>
<th onclick="funsion_M();">Pulsa este boton si eres cool</th>
<th>TANIA <3 <3 <3</th>
</tr>
</table>
</div>
</body>
</html>