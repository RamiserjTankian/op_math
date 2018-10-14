<?php

?>
<!-- CALCULO DE FIGURAS GEOMETRICAS -->
<div class="container">
	    <div class="shadow-lg p-3 mb-5 bg-white rounded"><div class="bd-example">
<div style="background:transparent !important" class="jumbotron">
        <div class="container">
       <h1>Calculadora para area de figuras geometricas</h1>
       <br> 
       <h5>En esta seccion se encuentra la calculadora para figuras geometricas, gradualmente se actualizara el sitio para añadir mas figuras y mas tipos de calculos.</h5>
       <!-- La tarjeta inicia oculta con display none y se muestra con show en jquery -->
       <br>
       <table class="table table-hover tabla-figuras">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Informacion</th>
      <th scope="col">Formula de la Area</th>
      <th scope="col">Formula del Perimetro</th>
      <th scope="col">Calculadora</th>
    </tr>
    </thead>
    <tbody>
       <?php
      $tabla= $conexion->prepare("SELECT * FROM figuras");
      $tabla->execute();
      $tabla= $tabla->fetchAll();
       foreach ($tabla as $key => $value) {
         echo'
        <tr>
        <th scope="row">'.$key.'</th>
        <td>'.$value["nombre"].'</td>
        <td>'.$value["informacion"].'</td>
        <td>'.$value["formula_area"].'</td>
        <td>'.$value["formula_perimetro"].'</td>
        <td><button type="button" class="btn btn-primary btncalcular" figura="'.$value["nombre"].'">Ir a calculadora</button></td>
      </tr>';
   }
?>
  </tbody>
</table>      
</div>
</div>
</div>
</div>
