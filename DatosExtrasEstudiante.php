<?php
    /*
      Clase que tiene los datos en comun que pueden tener los estudiantes.
      contiene referencias a los flyweights. Calcula o almacena los estados no compartidos de los flyweights.
    */ 
    require_once('Flyweight.php');

     class DatosExtrasEstudiante implements Flyweight {
        public $tipoDocumento;
        public $pregrado;
        public $beca;
        public $tieneSostenimiento;

        function __construct($tipoDocumento, $pregrado, $beca, $tieneSostenimiento){
            $this->tieneSostenimiento = $tieneSostenimiento;
            $this->pregrado = $pregrado;
            $this->beca = $beca;
            $this->tieneSostenimiento = $tieneSostenimiento;
        }
     }
?>