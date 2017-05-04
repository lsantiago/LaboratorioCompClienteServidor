<html>
<body>
<?php
require_once 'conf/StartConexion.php';

// valida que el id este definido y no sea null
if(isset($_GET['id']))
{
	$id=$_GET['id'];

	$sql = "delete from proyectos where id='$id'";

	$query1 = $mysqli->query($sql);
	
	// si no hay errores vuelve a listar
	if($query1)
	{
		header('location:listar.php');
	}
}
?>
</body>
</html>