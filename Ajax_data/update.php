<?php
//$link=mysqli_connect("excellencetechnologies.co.in","etech","rETF4uVv6yNK","etech_dvr");
$link=mysqli_connect("localhost","root","123","dvr");
$id=$_GET['id'];
$data=$_GET['data'];
$field=$_GET['field'];

if(mysqli_query($link,"UPDATE details SET $field = '$data' WHERE id = $id")){
	echo "Data Updated";	
} else{
	echo "Some problem occured";	
}

?>