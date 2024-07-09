<?php

    class Pqrs {

    	private $tipo_pqrs;
		private $id_cliente;
		private $sucursal_cod;
    	private $texto;
    	private $pqrs_evidencia;


    	public function __construct($tipo_pqrs,$id_cliente,$sucursal_cod,$texto,$pqrs_evidencia) {

			$this->tipo_pqrs=$tipo_pqrs;
			$this->id_cliente=$id_cliente;
    		$this->sucursal_cod=$sucursal_cod;
    		$this->texto=$texto;
    		$this->pqrs_evidencia=$pqrs_evidencia;

    	}

		public function obtenerTipopqrs(){
    		return $this->tipo_pqrs;
		}

		public function obtenerCliente(){
    		return $this->id_cliente;
        }

    	public function obtenerSucursal(){
    		return $this->sucursal_cod;
    	}

    	public function obtenerTexto(){
    		return $this->texto;
    	}

    	public function obtenerevidencia(){
    		return $this->pqrs_evidencia;
    	}
    }
?>