<?php 
	// Clase general para conexiones
	abstract class Conexion{
		// Atributos para conexiones
		var $usuario;
		var $contrasenia;
		var $nombreServidor;
		var $nombreBD; // nombre de base de datos

		// Constructor
		public function __construct($usuario, $contrasenia, $nombreServidor, $nombreBD){
			$this->usuario = $usuario;
			$this->contrasenia = $contrasenia;
			$this->nombreServidor = $nombreServidor;
			$this->nombreBD = $nombreBD;
		}

		// Función para realizar conexiones
		abstract public function conectar();

	}

	// Clase para conexiones a base de datos Maria
	class ConexionMariaDB extends Conexion{
		
		public function __construct($usuario, $contrasenia, $nombreServidor, $nombreBD){
			parent::__construct($usuario, $contrasenia, $nombreServidor, $nombreBD);
		}

		public function conectar(){
			$mysqli = new mysqli($this->nombreServidor, $this->usuario, $this->contrasenia, $this->nombreBD);
			return $mysqli;
		}
	}

	// Clase para conexiones a base de datos Oracle
	class ConexionOracle extends Conexion{
		public function __construct($usuario, $contrasenia, $nombreServidor, $nombreBD){
			parent::__construct($usuario, $contrasenia, $nombreServidor, $nombreBD);
		}

		public function conectar(){
			$conn = oci_pconnect($this->$usuario, $this->$contrasenia, $this->$nombreServidor);
			return $conn;
		}		
	}

 ?>