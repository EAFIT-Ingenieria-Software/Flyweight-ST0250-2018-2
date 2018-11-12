<?php 
    /*
      Clase Principal Estudiante. contiene referencias a los flyweights. 
      Calcula o almacena los estados no compartidos de los flyweights.
    */
    require_once('FabricaEstudiante.php');
    require_once('DatosExtrasEstudiante.php');

    class Estudiante {

        private $datosExtra;
        public $codigo;
        public $numeroDocumento;
        public $nombre;
        public $fechaNacimiento;
        public $email;
        public $tipoDocumento;
        public $pregrado;
        public $beca;
        public $tieneSostenimiento;

       function __construct($codigo, $numeroDocumento, $nombre, $fechaNacimiento, $emai, $tipoDocumento, $pregrado, $beca, $tieneSostenimiento) {
           $this->codigo = $codigo;
           $this->numeroDocumento = $numeroDocumento;
           $this->nombre = $nombre;
           $this->fechaNacimiento = $fechaNacimiento;
           $this->email = $emai;
           $this->datosExtra = FabricaEstudiante.obtenerDatos();
        }
    }
 ?>