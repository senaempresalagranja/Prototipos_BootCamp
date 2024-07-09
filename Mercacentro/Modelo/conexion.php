<?php
class Conexion{

	private static $host = "localhost";
	private static $user = "root";
	private static $password = "";

	protected $name = "mercacentro";
	private $conexion;
	public $resultado;
	public $filas;
	public $Id;

	private function abrir_conexion(){
	$this->conexion = new PDO ("mysql:host=".self::$host.";dbname=".$this->name."",self::$user,self::$password);
	}
	
	private function cerrar_conexion(){
		$this->conexion= null;
	}

	public function ejecutar_query($sql){
		$this->abrir_conexion();
		$this->resultado = $this->conexion->exec($sql);
		print_r($this->conexion->errorInfo());
		$this->Id=$this->conexion->lastInsertId();
		$this->cerrar_conexion();		
	}
	
	public function buscar_query($sql){
		$this->abrir_conexion();
		$this->resultado=$this->conexion->query($sql);
		$this->filas=$this->resultado->rowCount();
		$this->cerrar_conexion();
	}

	public function obtenerResult(){
		return $this->resultado;
	}

	public function ObtenerFilasAfectadas(){
		return $this->filas;
	}

	public function obtenerId(){
		return $this->Id;
	}
}
?>