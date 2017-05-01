<html>
<body>
<?php
include('conf/configuracionDB.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query1=mysql_query("delete from proyectos where id='$id'");
	if($query1)
	{
		header('location:listar.php');
	}
}
?>
</body>
</html>