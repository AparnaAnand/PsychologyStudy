<?php
session_start();
$x = rand(0, 1);
if($x==0)
{
	$_SESSION['timelimit']= 180;
}
else
{
	$_SESSION['timelimit']= 0;
	echo 'No Limit';
}
header('location:intro.php/?time='.$_SESSION['timelimit']);