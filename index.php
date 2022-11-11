<?php
  function recomendacion(){
    $clima = array("Bogota"=>"frio", "Monteria"=>"calido","Medellin"=>"templado");
    $ubicacion = array("Guajira"=>"norte","Leticia"=>"sur","Santander"=>"este","Antioquia"=>"oeste");
    $turismo = array("Santa Marta"=>"mar","Villavicencio"=>"llanos","Riohacha"=>"desierto","Quindio"=>"valle");

    switch("ubicacion"){
      case "clima":
        echo array_search("frio",$clima);
      break;
      case "ubicacion":
        echo array_search("norte",$ubicacion);
      break;
    }
  }

  recomendacion()
?>