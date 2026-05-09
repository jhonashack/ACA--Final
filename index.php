<!DOCTYPE html>
<html lang="en" class="bg-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/styles.css">
    <title>IPS</title>
</head>
<header>
 
<nav class="navbar navbar-expand-lg bg-dark shadow-sm sticky-top" data-bs-theme="dark">
  <div class="container"> 
    
    <!-- Logo / Marca -->
    <a class="navbar-brand fw-bold text-white letter-spacing" href="#">
      <span class="text-primary">SAN</span>AS
    </a>
    
    <!-- Botón  -->
    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Enlaces y Botones -->
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <!-- -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2 fw-medium">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Informacion</a>
        </li>
      </ul>
      
      <!-- Botón  -->
      <div class="d-flex ms-lg-4 mt-3 mt-lg-0">
        <a href="#" class="btn btn-outline-light me-2 rounded-pill px-4">Entrar</a>
        <a href="#" class="btn btn-primary rounded-pill px-4">Registrarse</a>
      </div>

    </div>
  </div>
</nav>




</header>

<body class="bg-light">
<h1 class="text-center fw-bold my-5" style="color: #0a2e5c;">
  Sistema de Información de Pacientes
</h1>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

<?php
require 'controllers/UsuarioController.php';

$controller = new pacientController();

$action = $_GET['action'] ?? 'read';
$id = $_GET['id'] ?? null;

switch ($action){
    case 'create' :
        $controller->crear();
        break;
    case 'read' :
        $controller->leer();
        break;
    case 'update' :
        $controller->actualizar($id);
        break;
    case 'delete' :
        $controller->eliminar($id);
        break;
    default:
        $controller->leer();
        break;
}
?>

