<?php
$link=mysqli_connect("excellencetechnologies.co.in","etech","rETF4uVv6yNK","etech_dvr");

//$link=mysqli_connect("localhost","root","123","dvr");
$sid=$_GET['id'];
$sdt=$_GET['dt'];
$page=$_GET['page'];
$limit = ($page-1)*5;
if($sid!=0){
if(($sid%2)!=0)
{
$sel  = mysqli_query($link,"select id,name,email,dat,msg from details ORDER BY id ASC LIMIT $limit, 5");
}
else{
$sel  = mysqli_query($link,"select id,name,email,dat,msg from details ORDER BY id DESC LIMIT $limit, 5");
}
}
else if($sdt!=0){
if(($sdt%2)!=0)
{
$sel  = mysqli_query($link,"select id,name,email,dat,msg from details ORDER BY dat ASC LIMIT $limit, 5");
}
else{
$sel  = mysqli_query($link,"select id,name,email,dat,msg from details ORDER BY dat DESC LIMIT $limit, 5");
}
}
else{
	$sel  = mysqli_query($link,"select id,name,email,dat,msg from details ORDER BY id DESC LIMIT $limit, 5");
}



//$sel= mysqli_query($link,"select * from details");	

		$fRows = array();
	while($arr=mysqli_fetch_array($sel))
	{
		$fRows[]=$arr;

    }
	echo json_encode($fRows);
?>
