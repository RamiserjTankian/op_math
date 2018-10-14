<div class="container">
	    <div class="shadow-lg p-3 mb-5 bg-white rounded"><div class="bd-example">
<div style="background:transparent !important" class="jumbotron">

        <div class="container">
       <h1>Calculadora para area y perimetro del Rectángulo</h1>
       <br> 
       <h5>Un rectángulo es una figura geométrica que posee cuatro ángulos interiores de 90º. Es un paralelogramo, es decir, todos sus lados son paralelos dos a dos.</h5>
       <!-- La tarjeta inicia oculta con display none y se muestra con show en jquery -->
       <br>
       <img class ="imagenf" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/IconoRect%C3%A1ngulo.svg/115px-IconoRect%C3%A1ngulo.svg.png" alt="">
         <div class="card figura" style="width: 18rem;">
         <div class="card-header" style="text-align: center;"><i style="color:#ff6f6e;" class="fas fa-calculator fa-6x"></i></div>
           <div class="card-body">
             <h5 class="card-title">  <small> Calcular el area de un Cuadrado </small></h5>
         <form id='formcuadrado' action="#" method="post">
         <div class="input-group mb-3">
         <div class="input-group-prepend">
         <span class="input-group-text" id="basic-addon1"><i class="fas fa-angle-right"></i></i></span>
         </div>
         <input type="text" class="form-control" placeholder="Lado" name="ladoCuadrado" id="ladoCuadrado">
         </div>
         <h5><small>La formula es: Lado * Lado</small> </h5>
         <?php $ladoCuadrado= $_POST["ladoCuadrado"];
       if ($ladoCuadrado>0) {
           if(is_numeric($ladoCuadrado)){
             echo '<div class="alert alert-success" role="alert">
               El lado de tu cuadrado es de '.$ladoCuadrado.' y su area es de : '.AreaCuadrado($ladoCuadrado).'
             </div>';
           }
          }
          ?>
          <button class="btn btn-primary text-center" type="sumbit" id="cuadradobtns">Calcular</button>
       </form>
       </div>
       </div>
       </div>
      </div>
      </div>
      </div>