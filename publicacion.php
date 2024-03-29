
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="publicacion/publicacion.css">

  </head>
  <body>

<div class="container-fluid text-center">
  <div class="row py-4 bg-dark text-light">
    <div class="col">
      <a class="bran" style="text-decoration:none;" href="index.php"><h4>BRAND BLOG<h4></a>
    </div>
    <div class="col">
      <form class="busqueda w-70 text-center" action="busqueda" method="post">
        <input type="text" name="buscar" placeholder="Buscar">

      </form>
    </div>
    <div class="col">
      <a href="publicacion.php" class="btn btn-outline-primary" role="button">Nuevo Post</a>
    </div>
  </div>
</div>


<div class="container-fluid">
  <h3 class="container py-5">Agregar Nueva Publicación</h3>
</div>
<div class="container d-block w-50">
  <div>
    <form action="procesar_publicacion.php" method="post">
      <input class="rounded p-2 w-100 my-3" type="text" name="titulo" placeholder="Insertar Título">
      <textarea style="height:300px;"class="areatexto rounded p-3 w-100" name="contenidopost" placeholder="Contenido del Artículo"></textarea>

      <?php
        if (isset($_GET['error']) && $_GET['error']==1) {
          // code...
          echo "Rellene los Campos.";
        }
        ?>
        <?php
        if (isset($_GET['success']) && $_GET['success']==1) {
          // code...
          echo "Guardado";
        }
      ?>

      <input class="btn btn-secondary d-block" type="submit"></button>


    </form>

  </div>

</div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>
