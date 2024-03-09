<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Inventario de Computadoras
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
<!-- Contenido principal -->
<div class="container mt-4">
  <div class="jumbotron">
    <h1 class="display-4" style="font-size: 700%;">¡Bienvenido a tu inventario!</h1>
    <h1 class="lead" style="font-size: 250%;">Aquí encontrarás los enlaces para la gestion sobre las computadoras de cada zona.</h1>
    
    <h3 class="btn btn-danger" style="color:cornsilk; font-size: 400%"><?= $this->Html->link('Crud de Oficina', ['controller' => 'Oficina', 'action' => 'index']) ?></h3>
    <h3 class="btn btn-warning" style="color:cornsilk; font-size: 400%"><?= $this->Html->link('Crud de Producción', ['controller' => 'produccion', 'action' => 'index']) ?></h3>
    <h3 class="btn btn-dark" style="color:cornsilk; font-size: 400%"><?= $this->Html->link('Crud de Bodega', ['controller' => 'bodega', 'action' => 'index']) ?></h3>

  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <img src="https://www.configuroweb.com/wp-content/uploads/2022/11/CRUD-PHP-en-MySQL.jpg" class="img-fluid" alt="Imagen de Computadora">
    </div>
  </div>
</div>

<!-- Enlaces a los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>
