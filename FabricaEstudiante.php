<?php 
    /*
      crea y gestiona los objetos flyweight. Garantiza que los objetos flyweight se comparten de forma apropiada. 
      Cuando un cliente solicita un flyweight, el objeto de la clase FlyweightFactory proporciona una instancia existente, o crea una.
    */
    require_once('DatosExtrasEstudiante.php');

    class FabricaEstudiante {

        private static $arregloDatos = array();

       public static function obtenertDatos($tipoDocumento, $pregrado, $beca, $tieneSostenimiento) {
          $datosExtras = null;
          $datos = $tipoDocumento.$pregrado.$beca.$tieneSostenimiento;
          if(in_array($datos,$arregloDatos)) {
            $datosExtras = arregloDatos[$datos];
          }
          else {
            $datosExtras = new DatosExtrasEstudiante($tipoDocumento, $pregrado, $beca, $tieneSostenimiento);
              $arregloDatos[$datos] =  $datosExtras; 
          }
          return $datosExtras;
       }
    }
 ?>