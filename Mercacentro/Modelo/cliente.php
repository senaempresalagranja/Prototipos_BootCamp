<?php
    class Cliente {
    	private $cli_identificacion;
        private $cli_nombre;
        private $cli_apellido;
        private $cli_correo;
        private $cli_celular;
        private $cli_telefono;
        private $cli_estado;
    	

    	function __construct($cli_identificacion,$cli_nombre,$cli_apellido,$cli_correo,$cli_celular,$cli_telefono,$cli_estado) {
			
        $this->cli_identificacion=$cli_identificacion;
        $this->cli_nombre=$cli_nombre;
        $this->cli_apellido=$cli_apellido;
        $this->cli_correo=$cli_correo;
        $this->cli_celular=$cli_celular;
        $this->cli_telefono=$cli_telefono;
        $this->cli_estado=$cli_estado;
    	}    	

		public function obtenerClienteIdentificacion(){
    		return $this->cli_identificacion;
		}
		

    	public function obtenerClienteNombre(){
    		return $this->cli_nombre;
    	}

    	public function obtenerClienteApellido(){
    		return $this->cli_apellido;
        }
        
        public function obtenerClienteCorreo(){
            return $this->cli_correo;
        }

        public function obtenerClienteCelular(){
            return $this->cli_celular;
        }

         public function obtenerClienteTelefono(){
            return $this->cli_telefono;
        }

        public function obtenerClienteEstado(){
            return $this->cli_estado;
        }
    }
?>