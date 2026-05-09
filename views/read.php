<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos/styles.css">
    <title>Lista de Pacientes</title>
</head>
<body class="bg-light">


<div class="container-fluid px-4 my-5">
    
    <!-- Encabezado y botón  -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary mb-0" style="color: #0a2e5c !important;">Lista de Pacientes</h2>
        <a href="index.php?action=create" class="btn btn-primary rounded-pill px-4 shadow-sm">
            + Agregar Paciente
        </a>
    </div>

    <!-- Contenido de la tabla -->
    <div class="card shadow border-0 rounded-4">
        <div class="card-body p-0">
            
            <!-- CONTENEDOR RESPONSIVO  -->
            <div class="table-responsive">
                
              >
                <table class="table table-hover table-striped align-middle mb-0 text-nowrap">
                    
                    <!-- Encabezado -->
                    <thead class="table-dark">
                        <tr>
                            <th class="py-3 px-3">ID</th>
                            <th class="py-3">Documento</th>
                            <th class="py-3">Nombre Paciente</th>
                            <th class="py-3">Tipo Doc.</th>
                            <th class="py-3">Dirección</th>
                            <th class="py-3">Teléfono</th>
                            <th class="py-3">Celular</th>
                            <th class="py-3">F. Registro</th>
                            <th class="py-3">Edad</th>
                            <th class="py-3">EPS</th>
                            <th class="py-3">Contacto Adicional</th>
                            <th class="py-3">Parentesco</th>
                            <th class="py-3">Examen</th>
                            <th class="py-3">Empresa</th>
                            <th class="py-3">F. Examen</th>
                            <th class="py-3 px-3 text-center">Acciones</th>
                        </tr>
                    </thead>
                    
                    <!-- Cuerpo de la tabla -->
                    <tbody>
                        <?php foreach ($paciente as $pacient): ?>
                            <tr>
                                <td class="px-3 fw-bold text-secondary"><?= $pacient['id'] ?></td>
                                <td><?= $pacient['documento'] ?></td>
                                <td class="fw-medium"><?= $pacient['nombre paciente'] ?></td>
                                <td><span class="badge bg-secondary"><?= $pacient['tipo de documento'] ?></span></td>
                                <td><?= $pacient['direccion'] ?></td>
                                <td><?= $pacient['telefono'] ?></td>
                                <td><?= $pacient['celular'] ?></td>
                                <td><?= $pacient['fecha registro'] ?></td>
                                <td><?= $pacient['edad'] ?></td>
                                <td><?= $pacient['eps'] ?></td>
                                <td><?= $pacient['nombre contacto adicional'] ?></td>
                                <td><?= $pacient['parentesco'] ?></td>
                                <td><?= $pacient['examen a realizar'] ?></td>
                                <td><?= $pacient['empresa'] ?></td>
                                <td><?= $pacient['fecha de examen'] ?></td>
                                
                                <!-- Botones de acción -->
                                <td class="px-3">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="index.php?action=update&id=<?= $pacient['id'] ?>" class="btn btn-warning btn-sm fw-medium shadow-sm">Editar</a>
                                        <a href="index.php?action=delete&id=<?= $pacient['id'] ?>" class="btn btn-danger btn-sm fw-medium shadow-sm">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
            </div> <!-- Fin del contenedor responsivo -->
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


