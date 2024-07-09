<?php 

	class TipoUsuario{

		private $tusu_codigo;
		private $tusu_nombre;
		private $tusu_estado;

		public function __construct($tusu_codigo,$tusu_nombre,$tusu_estado){
			$this->tusu_codigo=$tusu_codigo;
			$this->tusu_nombre=$tusu_nombre;
			$this->tusu_estado=$tusu_estado;
		}

		public function obtenertusu_codigo(){
			return $this->tusu_codigo;
		}
		public function obtenertusu_nombre(){
			return $this->tusu_nombre;
		}
		public function obtenertusu_estado(){
			return $this->tusu_estado;
		}

	}

?>