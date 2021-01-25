<?php
include('../conexion.php');
$response=new stdClass();

//$datos=array();
$datos=[];
$i=0;
$text=$_POST['text'];
$sql="select * from producto where estado='A' and nompro LIKE '%$text%'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	$obj=new stdClass();
	$obj->idproducto=$row['codpro'];
	$obj->idmarca=$row['marpro'];
	$obj->nombreP=$row['nompro'];
	$obj->descripción=$row['despro'];
	$obj->precio=$row['prepro'];
	$datos[$i]=$obj;
	$i++;
}
$response->datos=$datos;

mysqli_close($conn);
header('Content-Type: application/json');
echo json_encode($response);
