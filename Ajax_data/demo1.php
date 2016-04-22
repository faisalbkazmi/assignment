<?php
$link=mysqli_connect("excellencetechnologies.co.in","etech","rETF4uVv6yNK","etech_dvr");
//$link=mysqli_connect("localhost","root","123","dvr");
$name=$_POST['name'];
$email=$_POST['email'];
$dat=$_POST['dat'];
$message=$_POST['message'];

if(!empty($name) && !empty($email))
{

if(mysqli_query($link,"INSERT INTO details VALUES('','$name','$email','$dat','$message')"))

       echo " successfully inserted";
}
        else
        echo " insertion failed";
?>
