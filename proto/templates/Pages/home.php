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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Mi Página</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
<!-- Contenido principal -->
<div class="container mt-4">
  <div class="jumbotron">
    <h1 class="display-4">¡Bienvenido a Mi Página!</h1>
    <p class="lead">Aquí encontrarás información interesante sobre computadoras.</p>
    
    <?= $this->Html->link('Crud de Producción', ['controller' => 'Produccion', 'action' => 'index']) ?><br>
    <?= $this->Html->link('Crud de Bodega', ['controller' => 'Bodega', 'action' => 'index']) ?><br>
    <?= $this->Html->link('Crud de Oficina', ['controller' => 'Oficina', 'action' => 'index']) ?>
    <h3 class="btn btn-danger"><?= $this->Html->link('Crud de Oficina', ['controller' => 'Oficina', 'action' => 'index']) ?></h3>

  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <img src="ruta/a/imagen/computadora.jpg" class="img-fluid" alt="Imagen de Computadora">
    </div>
  </div>
</div>

<!-- Enlaces a los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>
