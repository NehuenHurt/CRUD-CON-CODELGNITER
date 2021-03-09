<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
   
    <div class="container">
    <h1>CRUD CODIGNITER</h1>
    <div class="row">
    <div class="col-sm-12">
<form method="post" action="<?php echo base_url().'/crear'?>">
<label for="nombre">nombre</label>
<input type="text" name=" nombre" id="nombre" class="form-control">
<label for="paterno">apellido paterno</label>
<input type="text" name=" paterno" id="paterno" class="form-control">
<label for="materno">apellido materno</label>
<input type="text" name=" materno" id="materno" class="form-control">
<br>
<button class="btn btn-primary"> guardar</button>
</form>
    </div>
    </div>
    <hr>
    <h2>
    listado de personas</h2>
    
    <div class="row">
    <div class="col-sm-12">
    <div class="table table-responsive">
    <table class="table table-hover table-bordered">
    <tr>
    <th>nombre</th>
    <th>apellido paterno</th>
    <th>apellido materno</th>
    <th>editar</th>
    <th>eliminar</th>
    </tr>
    <?php  foreach($datos as $key):?>
    <tr>
    <td>
    <?php echo $key->nombre ?>

    </td>
    <td><?php echo $key->materno ?></td>
    <td><?php echo $key->paterno ?></td>
    <td><a href="<?php echo base_url().'/obtenernombre/'.$key->id_nombre?>" class="btn btn-warning btn-sm"></a>editar</td>
    <td><a href="<?php echo base_url().'/eliminar/'.$key->id_nombre?>" class="btn btn-danger btn-sm"></a>eliminar</td>
    </tr>

    <?php endforeach ;?>
    </table>
    </div>
    </div>
    </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>


</html>