<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <!-- Tarjeta del formulario -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 p-md-5">
                    
                    <h1 class="text-center fw-bold mb-4" style="color: #0a2e5c;">
                        Actualizar Datos del Paciente
                    </h1>
                    <p class="text-center text-muted mb-5">Modifique los campos necesarios y guarde los cambios.</p>

                    <!-- Formulario de Actualización -->
                    <form method="post">
                        
                        <!-- SECCIÓN 1: Información Personal -->
                        <h5 class="text-primary mb-3 border-bottom pb-2">Información Personal</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Nombre del Paciente</label>
                                <input type="text" class="form-control" name="nombre_paciente" value="<?= $pacient['nombre paciente'] ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-medium">Tipo Doc.</label>
                               
                                <select class="form-select" name="tipo_de_documento" required>
                                    <option value="CC" <?= ($pacient['tipo de documento'] == 'CC') ? 'selected' : '' ?>>Cédula (CC)</option>
                                    <option value="TI" <?= ($pacient['tipo de documento'] == 'TI') ? 'selected' : '' ?>>Tarjeta de Identidad (TI)</option>
                                    <option value="CE" <?= ($pacient['tipo de documento'] == 'CE') ? 'selected' : '' ?>>Cédula de Extranjería (CE)</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-medium">Documento</label>
                                <input type="text" class="form-control" name="documento" value="<?= $pacient['documento'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Edad</label>
                                <input type="number" class="form-control" name="edad" value="<?= $pacient['edad'] ?>" required>
                            </div>
                        </div>

                        <!-- SECCIÓN 2: Información de Contacto -->
                        <h5 class="text-primary mb-3 border-bottom pb-2">Información de Contacto</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Dirección</label>
                                <input type="text" class="form-control" name="direccion" value="<?= $pacient['direccion'] ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-medium">Teléfono Fijo</label>
                                <input type="tel" class="form-control" name="telefono" value="<?= $pacient['telefono'] ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-medium">Celular</label>
                                <input type="tel" class="form-control" name="celular" value="<?= $pacient['celular'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Contacto Adicional</label>
                                <input type="text" class="form-control" name="nombre_contacto_adicional" value="<?= $pacient['nombre contacto adicional'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Parentesco</label>
                                <input type="text" class="form-control" name="parentesco" value="<?= $pacient['parentesco'] ?>" required>
                            </div>
                        </div>

                        <!-- SECCIÓN 3: Información Médica y Exámenes -->
                        <h5 class="text-primary mb-3 border-bottom pb-2">Datos del Examen</h5>
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label class="form-label fw-medium">EPS</label>
                                <input type="text" class="form-control" name="eps" value="<?= $pacient['eps'] ?>" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Empresa</label>
                                <input type="text" class="form-control" name="empresa" value="<?= $pacient['empresa'] ?>" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-medium">Examen a Realizar</label>
                                <input type="text" class="form-control" name="examen_a_realizar" value="<?= $pacient['examen a realizar'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Fecha de Registro</label>
                                <input type="date" class="form-control" name="fecha_registro" value="<?= $pacient['fecha registro'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Fecha de Examen</label>
                                <input type="date" class="form-control" name="fecha_de_examen" value="<?= $pacient['fecha de examen'] ?>" required>
                            </div>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="text-center mt-5 d-flex justify-content-center gap-3">
                            <!-- Botón opcional para cancelar/volver -->
                            <a href="index.php" class="btn btn-outline-secondary btn-lg rounded-pill px-4">Cancelar</a>
                            
                            <!-- Botón principal de actualizar -->
                            <button class="btn btn-primary btn-lg rounded-pill px-5 shadow-sm" type="submit">
                                Actualizar Paciente
                            </button>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
