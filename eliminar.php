<html>
<body>
<?php
include('conf/configuracionDB.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$sql = "delete from proyectos where id='$id'";

	$query1 = $mysqli->query($sql);
	if($query1)
	{
		header('location:listar.php');
	}
}
?>
</body>
</html>