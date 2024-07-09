<?php
    class Usuario {
    	private $usu_identificacion;
    	private $usu_tipo;
        private $usu_area;
        private $usu_nombre;
        private $usu_apellido;
        private $usu_correo;
        private $usu_celular;
        private $usu_telefono;
        private $usu_clave;
        private $usu_estado;
    	

    	function __construct($usu_identificacion,$usu_tipo,$usu_area,$usu_nombre,$usu_apellido,$usu_correo,$usu_celular,$usu_telefono,$usu_clave,$usu_estado) {
			
        $this->usu_identificacion=$usu_identificacion;
        $this->usu_tipo=$usu_tipo;
        $this->usu_area=$usu_area;
        $this->usu_nombre=$usu_nombre;
        $this->usu_apellido=$usu_apellido;
        $this->usu_correo=$usu_correo;
        $this->usu_celular=$usu_celular;
        $this->usu_telefono=$usu_telefono;
        $this->usu_clave=$usu_clave;
        $this->usu_estado=$usu_estado;
    	}    	

		public function obtenerUsuarioIdentificacion(){
    		return $this->usu_identificacion;
		}
		
    	public function obtenerUsuarioTipo(){
    		return $this->usu_tipo;
    	}

    	public function obtenerUsuarioArea(){
    		return $this->usu_area;
    	}

    	public function obtenerUsuarioNombre(){
    		return $this->usu_nombre;
    	}

    	public function obtenerUsuarioApellido(){
    		return $this->usu_apellido;
        }
        
        public function obtenerUsuarioCorreo(){
            return $this->usu_correo;
        }

        public function obtenerUsuarioCelular(){
            return $this->usu_celular;
        }

         public function obtenerUsuarioTelefono(){
            return $this->usu_telefono;
        }

        public function obtenerUsuarioClave(){
            return $this->usu_clave;
        }

        public function obtenerUsuarioEstado(){
            return $this->usu_estado;
        }
    }
?>