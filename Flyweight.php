<?php
    /*
      Clase que tiene los datos en comun que pueden tener los estudiantes
    */ 
     interface Flyweight {

        function __construct($tipoDocumento, $pregrado, $beca, $tieneSostenimiento);
     }
?>