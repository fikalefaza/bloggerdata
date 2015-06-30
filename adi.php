<?php

$a=$_POST['aa'];
$b=$_POST['bb'];
$c=$_POST['cc'];
$d=$_POST['dd'];
$e=md5 ($_POST['ee']);
$f=$_POST['ff'];

if (!$a && !$b && !$c && !$d && !$e && !$f)
{
echo"Data Belum Ditambah";
}
else
{
	echo "testing tambah";
}
//test 3456 cccc ddddddddd
?>