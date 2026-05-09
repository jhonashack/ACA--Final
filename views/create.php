<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos/styles.css">
    <title>Registro de Pacientes</title>
</head>
<body class="bg-light">

<div class="container my-5">
    <!-- Contenido principal -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <!-- Formulario de registro -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 p-md-5">
                    
                    <h1 class="text-center fw-bold mb-4" style="color: #0a2e5c;">
                        Registro de Pacientes
                    </h1>
                    <p class="text-center text-muted mb-5">Por favor, complete todos los campos requeridos para registrar un nuevo paciente.</p>

                    <form method="post">
                        
                        <!-- SECCIÓN 1: Información Personal -->
                        <h5 class="text-primary mb-3 border-bottom pb-2">Información Personal</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Nombre del Paciente <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nombre_paciente" placeholder="Ej. Juan Perez" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-medium">Tipo Doc. <span class="text-danger">*</span></label>
                                <select class="form-select" name="tipo_de_documento" required>
                                    <option value="" disabled selected>Seleccione...</option>
                                    <option value="CC">Cédula (CC)</option>
                                    <option value="TI">Tarjeta de Identidad (TI)</option>
                                    <option value="CE">Cédula de Extranjería (CE)</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-medium">Documento <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="documento" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Edad <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="edad" min="0" required>
                            </div>
                        </div>

                        <!-- SECCIÓN 2: Información de Contacto -->
                        <h5 class="text-primary mb-3 border-bottom pb-2">Información de Contacto</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Dirección <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="direccion" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-medium">Teléfono Fijo <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="telefono" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-medium">Celular <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="celular" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Contacto Adicional (Emergencia) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nombre_contacto_adicional" placeholder="Nombre completo" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Parentesco <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="parentesco" placeholder="Ej. Madre, Esposo..." required>
                            </div>
                        </div>

                        <!-- SECCIÓN 3: Información Médica y Exámenes -->
                        <h5 class="text-primary mb-3 border-bottom pb-2">Datos del Examen</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label class="form-label fw-medium">EPS <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="eps" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Empresa <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="empresa" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Examen a Realizar <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="examen_a_realizar" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Fecha de Registro <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="fecha_registro" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Fecha de Examen <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="fecha_de_examen" required>
                            </div>
                        </div>

                        <!-- Botón de Envío -->
                        <div class="text-center mt-5">
                            <button class="btn btn-primary btn-lg rounded-pill px-5 shadow-sm" type="submit">
                                Guardar Paciente
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
