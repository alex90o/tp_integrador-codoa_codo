<?php
//echo "hola soy el regsitro";
//nombre de BD: integrador_codo_a_codo

//metodos de conexion con la mylsql -- PDO

/*
1-"localHost" ip(192.168.1.1)

*/

$conexion = mysqli_connect("localhost","root", "", "integrador_codo_a_codo");
$estado="";

if(mysqli_connect_errno()){

    $estado="Error no se conecto a la base de datos";
}else{
    $estado="Registro Guarado Correctamente";
}


/*$consultas = mysqli_query($conexion,"SELECT * FROM registro");

echo "<pre>";
var_dump($consultas);

echo "</pre>";

$listado = mysqli_fetch_assoc($consultas);

echo "<pre>";
var_dump($listado);

echo "</pre>";
*/
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="estiloboots.css">
    <title>Trabajo Práctico Integrador</title>
  </head>
  
  <body>
    <div class="conteiner col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <a class="navbar-brand" href="index.html"><img class="img-fluid" src="img/codoacodo.png" alt="codoacodo.png"></a>
          </div>
          <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1" id="titulo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <a class="navbar-brand" href="index.html">Conf Bs As</a>
          
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#texto-en-carousel">La conferencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tituloOradores">Los oradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lugar">El lugar y la fecha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contenido-form">Conviértete en orador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link colorVerde" href="comprarTickets.html">Comprar tickets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link colorCoral" href="registarse.php">Registarse</a>
              </li>
              

              
           
            </ul>
         
          </div>
        </div>
        
      </nav>
         
          </div>
        </div>
        
      </nav>
      <!--fin nav-->

    </div>
         
      <div class="container-fluid">
  
    
          <!--Inici form-->
          <div class="container" id="contenido-form-ticket">
          <!-- <div class="row"> -->
          <div class="row align-items-center justify-content-center gap-5">  
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="tituloticket">
        <?php
        echo "<h3>";
        echo $estado;
        echo "</h3>";
        ?>

          </div>
          <div class="col-3">
                <?php
                if($estado=="Registro Guarado Correctamente"){
                    echo'<img class="img-fluid" src="img/guardado_correcto.png" alt="guardado_correcto">';
                }
                
                else 
                echo'<img class="img-fluid" src="img/guardado_incorectocorrecto.png" alt="guardado_correcto">';
                ?>
				
			</div>

            

       </div>
                <br><br>
       <div class="col-12">
       <a href="mostrarRegistros.php">
							<button id="verregsitros" type="submit" class="btn btn-success w-100 colorBtnEnviar">Ver Registros</button>
        </a>				
                        </div>
			</div>
      </div>
         <!--fin form-->
         
        </div>
      
      <br>
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-1">
              
            </div>
            <div class="col-10">
              <div class="container">
                <div class="row">
                  <div class="col"><p>Preguntas Frecuentes</p></div>
                  <div class="col"><p>Contáctanos</p></div>
                  <div class="col"><p>Prensa</p></div>
                  <div class="col"><p>Conferencias</p></div>
                  <div class="col"><p>Términos y condiciones</p></div>
                  <div class="col"><p>Privacidad</p></div>
                  <div class="col"><p>Estudiantes</p></div>
                </div>
                
              </div>
            </div>
            <div class="col-1">
              
            </div>
          </div>
        </div>
      </footer>
    </div>  <!--fin de todo-->
   
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="script.js"></script>
  </body>
</html>

