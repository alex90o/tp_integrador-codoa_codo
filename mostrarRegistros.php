<?php
$conexion = mysqli_connect("localhost", "root", "", "integrador_codo_a_codo");


$consultas = mysqli_query($conexion, "SELECT * FROM registro");


//$listado = mysqli_fetch_assoc($consultas);
/*
echo "<pre>";
var_dump($listado);

echo "</pre>";


while($listado = mysqli_fetch_array($consultas)){
  echo $listado['nombre'] ."<br>";
  echo $listado['apellido'] ."<br>";
  echo $listado['correo'] ."<br>";
}
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

  <style>
    th {
      text-align: center;
    }

    /* agregue */
    table th {
      background-color: #337ab7 !important;
      color: white;
    }
  </style>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">


  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css" />

  <!-- para acomodar lo de los botones de paginación -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" />
  <title>Listado de Registros</title>
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
              <a class="nav-link active" aria-current="page" href="index.html#texto-en-carousel">La conferencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#tituloOradores">Los oradores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#lugar">El lugar y la fecha</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#contenido-form">Conviértete en orador</a>
            </li>
            <li class="nav-item">
              <a class="nav-link colorVerde" href="comprarTickets.html">Comprar tickets</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle colorCoral" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Acciones
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="registarse.php">Registarse</a></li>
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li><a class="dropdown-item" href="mostrarRegistros.php">Lista de Regsitros</a></li>
                 
                 
                </ul>
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
    <div class="container">
      <h1>mostrar datos</h1>
      <div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row justify-content-center col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row d-flex justify-content-center">
              <div class="col">

              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between ">
                    <h2 class="card-title">Registros</h2>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="listaregistros" class="table" style="width:100%">
                        <thead class="text-darken text-center">


                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">Correo</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                          <!-- <th scope="col" class="not-export-col">acciones</th> -->
                        </thead>
                        <tbody>

                          <?php

                          $consultas = mysqli_query($conexion, "SELECT*FROM registro");
                          while ($lista = mysqli_fetch_array($consultas)) {
                            $id = $lista['id'];
                          ?>

                            <tr>
                            
                              <td><?php echo $lista['nombre'] ?></td>
                              <td><?php echo $lista['apellido'] ?></td>
                              <td><?php echo $lista['correo'] ?></td>
                              <td class="center d-flex justify-content-between">
                              <div class="col-sm">
                                <form action="borrar.php" method="POST">
                                
                                  <input name="txtregistro" type="hidden" value="<?php echo $lista['id'] ?>">
                                  <button type="submit" class="btn btn-danger">eliminar</button>
                                </form>
                              </div>
                              </td>
                              <td>
                              <div class="col-sm">
                                <form action="editar.php" method="post">

                                  <input name="registro" type="hidden" value="<?php echo $lista['id'] ?>">
                                  <button type="submit" class="btn btn-warning">editar</button>
                                </form>
                              </div>

                              </td>



                            </tr>
                            <?php
                          }
                      ?>
                      
                      
                            <!-- <td class="center d-flex justify-content-between">
                              <div class="col-sm">
                                <form action="">
                                  <input name="txtregistro" type="hidden" value="">
                                  <button type="submit" class="btn btn-danger">eliminar</button>
                                </form>
                              </div>
                              <div class="col-sm">
                                <form action="" method="post">

                                  <input name="registro" type="hidden" value="">
                                  <button type="submit" class="btn btn-warning">editar</button>
                                </form>
                              </div>

                            </td>
                            </tr>
                            <?php
                         // }
                      ?> -->
                        </tbody>
                     
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
  <!--fin form-->
  
 
  </div>
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
              <div class="col">
                <p>Preguntas Frecuentes</p>
              </div>
              <div class="col">
                <p>Contáctanos</p>
              </div>
              <div class="col">
                <p>Prensa</p>
              </div>
              <div class="col">
                <p>Conferencias</p>
              </div>
              <div class="col">
                <p>Términos y condiciones</p>
              </div>
              <div class="col">
                <p>Privacidad</p>
              </div>
              <div class="col">
                <p>Estudiantes</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-1">

        </div>
      </div>
    </div>
  </footer>
  </div>
  <!--fin de todo-->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>


  <!-- para acomodar lo de los botones de paginación -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

  <!-- DataTable -->
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/22785ecb5f.js" crossorigin="anonymous"></script>

  <script>
    jQuery(document).ready(function($) {
      $('#listaregistros').DataTable({
        //$(document).ready(function() {
        //    $('#quiztable').DataTable({
        dom: "Blfrtip",
        responsive: true,
        autoWidtch: false,
        pagingType: 'full_numbers',
        "language": {
          "lengthMenu": "Mostrar" +
            `
                                            <select class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value='10'>10</option>
                                                <option value='25'>25</option>
                                                <option value='50'>50</option>
                                                <option value='100'>100</option>
                                                <option value='-1'>Todos</option>
                                            </select>
                                            ` +
            "registros por pagina",
          "zeroRecords": "Sin datos coincidentes - Vuelva a intentarlo",
          "info": "Mostrando la pagina _PAGE_ de _PAGES_",
          "infoEmpty": "No records available",
          "infoFiltered": "(Filtrado de _MAX_ registros)",
          "search": "Buscar:",
          "paginate": {
            "next": "Siguiente",
            "previous": "Anterior",
            "first": "Primero",
            "last": "Ultimo"
          }
        },
        buttons: [{
            text: '<i class="fa-solid fa-file-csv"></i>',
            extend: 'csvHtml5',
            titleAttr: 'Exportar a CSV',
            className: 'btn btn-warning',
            exportOptions: {
              columns: ':visible:not(.not-export-col)'
            }
          },
          {
            extend: 'excelHtml5',
            text: '<i class="fas fa-file-excel"></i>',
            titleAttr: 'Exportar a Excel',
            className: 'btn btn-success',
            exportOptions: {
              columns: ':visible:not(.not-export-col)'
            }
          },
          {
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr: 'Exportar a PDF',
            className: 'btn btn-danger',
            exportOptions: {
              columns: ':visible:not(.not-export-col)'
            }
          },
          {
            extend: 'print',
            text: '<i class="fas fa-print"></i>',
            titleAttr: 'Imprimir',
            className: 'btn btn-light',
            exportOptions: {
              columns: ':visible:not(.not-export-col)'
            }
          },
        ],
        columnDefs: [{
          orderable: false,
          targets: -1,
        }],
        "drawCallback": function(settings) {
          $('ul.pagination').addClass("pagination-sm");
        },
      });
    });
  </script>
</body>

</html>