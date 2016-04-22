<?php
$link=mysqli_connect("excellencetechnologies.co.in","etech","rETF4uVv6yNK","etech_dvr");
//$link=mysqli_connect("localhost","root","123","dvr");
$sel  = mysqli_query($link,"select * from details");
$num = mysqli_num_rows($sel)/5;
echo ceil($num);
?>