<?php
    class Sucursal {
    	private $suc_codigo;
    	private $suc_nombre;
    	private $suc_direccion;
    	private $suc_telefono;
    	private $suc_celular;
    	private $suc_estado;
    	

    	function __construct($suc_codigo=null,$suc_nombre,$suc_direccion,$suc_telefono,$suc_celular,$suc_estado) {
			
			$this->suc_nombre=$suc_codigo;
    		$this->suc_nombre=$suc_nombre;
    		$this->suc_direccion=$suc_direccion;
    		$this->suc_telefono=$suc_telefono;
    		$this->suc_celular=$suc_celular;            
    		$this->suc_estado=$suc_estado;
    	}    	

		public function obtenerSucursalcodigo(){
    		return $this->suc_codigo;
		}
		
    	public function obtenerSucursalNombre(){
    		return $this->suc_nombre;
    	}

    	public function obtenerSucursalDireccion(){
    		return $this->suc_direccion;
    	}

    	public function obtenerSucursalTelefono(){
    		return $this->suc_telefono;
    	}

    	public function obtenerSucursalCelular(){
    		return $this->suc_celular;
        }
        
        public function obtenerSucursalEstado(){
            return $this->suc_estado;
        }
    }
?>