<?php

    class Area {
    	private $are_codigo;
    	private $are_sucursal;
        private $are_nombre;
        private $are_ubucacion;
        private $are_estado;
    	

    	function __construct($are_codigo,$are_sucursal,$are_nombre,$are_ubicacion,$are_estado) {
			
            $this->are_codigo=$are_codigo;
            $this->are_sucursal=$are_sucursal;
            $this->are_nombre=$are_nombre;
            $this->are_ubicacion=$are_ubicacion;
            $this->are_estado=$are_estado;
        
    	}    	

		public function obtenerAreaCodigo(){
    		return $this->are_codigo;
		}
		
    	public function obtenerAreaSucursal(){
    		return $this->are_sucursal;
    	}

    	public function obtenerAreaNombre(){
    		return $this->are_nombre;
    	}

    	public function obtenerAreaUbicacion(){
    		return $this->are_ubicacion;
    	}

    	public function obtenerAreaEstado(){
    		return $this->are_estado;
        }        
    }
?>