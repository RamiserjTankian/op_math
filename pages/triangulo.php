<div class="container">
	    <div class="shadow-lg p-3 mb-5 bg-white rounded"><div class="bd-example">
<div style="background:transparent !important" class="jumbotron">

        <div class="container">
       <h1>Calculadora para area y perimetro del Triangulo</h1>
       <br> 
       <h5>Se llama triángulo, en geometría plana, al polígono de tres lados. Los puntos comunes a cada par de lados se denominan vértices del triángulo. Un triángulo tiene tres ángulos interiores, tres pares congruentes de ángulos exteriores, tres lados y tres vértices entre otros elementos.</h5>
       <!-- La tarjeta inicia oculta con display none y se muestra con show en jquery -->
       <br>
       <img class ="imagenf" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Triangle_illustration.svg/450px-Triangle_illustration.svg.png" alt="">
       <div id='triangulo' class="card figura" style="width: 18rem;" >
       <div class="card-header" style="text-align: center;"><i style="color:#ff6f6e;" class="fas fa-calculator fa-6x"></i></div>
         <div class="card-body">
           <h5 class="card-title">  <small> Calcular el area de un Triangulo </small></h5>
       <form action="#" method="post" id="formtriangulo">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="basic-addon1"><i class="fas fa-angle-right"></i></i></span>
       </div>
       <input type="text" class="form-control" placeholder="Base" name="baseTriangulo" id="baseTriangulo">
       </div>
       <div class="input-group mb-3">
       <div class="input-group-prepend">
       <span class="input-group-text" id="basic-addon1"><i class="fas fa-angle-right"></i></i></span>
       </div>
       <input type="text" class="form-control" placeholder="Altura" name="alturaTriangulo" id="alturaTriangulo">
       </div>
       <h5><small>La formula es: Lado * Lado</small> </h5>

       <?php
       $baseTriangulo= $_POST["baseTriangulo"];
       $alturaTriangulo= $_POST["alturaTriangulo"];
       if ( is_numeric($baseTriangulo)&& is_numeric($alturaTriangulo) ) {
         if($baseTriangulo >0 && $alturaTriangulo>0){
           echo '<div class="alert alert-success" role="alert">
             La base de tu triangulo es de '.$baseTriangulo.' y su altura es de : '.$alturaTriangulo.' por lo tanto su area es de: <b>'.AreaTriangulo($baseTriangulo,$alturaTriangulo).'
           </b></div>';}
         }
       
        ?>
       <input id="btntriangulo" type="submit" class="btn btn-primary text-center "></input>
       <br><br/>
       </form>
       </div>
       </div>
</div>
</div>
</div>
</div>
