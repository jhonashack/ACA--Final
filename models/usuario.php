<?php
    require_once 'config/db.php';

    class pacient{
        private $pdo;

        public function __construct()
        {
            $this->pdo = $GLOBALS['pdo'];
        }

        //funciones de sintaxis SQL

  public function crear($documento, $nombre_paciente, $tipo_de_documento, $direccion, $telefono, $celular,
    $fecha_registro, $edad, $eps, $nombre_contacto_adicional, $parentesco,
    $examen_a_realizar, $empresa, $fecha_de_examen){
    $sql = "INSERT INTO paciente (
                documento,
                `nombre paciente`,
                `tipo de documento`,
                direccion,
                telefono,
                celular,
                `fecha registro`,
                edad,
                eps,
                `nombre contacto adicional`,
                parentesco,
                `examen a realizar`,
                empresa,
                `fecha de examen`
            ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $this->pdo->prepare($sql);

    return $stmt->execute([
        $documento,
        $nombre_paciente,
        $tipo_de_documento,
        $direccion,
        $telefono,
        $celular,
        $fecha_registro,
        $edad,
        $eps,
        $nombre_contacto_adicional,
        $parentesco,
        $examen_a_realizar,
        $empresa,
        $fecha_de_examen
    ]);
}


        public function leer(){
            $stmt = $this->pdo->query("SELECT * FROM paciente");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function eliminar($id){
            $stmt = $this->pdo->prepare("DELETE FROM paciente WHERE id = ?");
            return $stmt->execute([$id]);
        }

        public function encontrar($id){
            $stmt = $this->pdo->prepare("SELECT * FROM paciente WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        }

        
public function actualizar($id,$documento,$nombre_paciente,$tipo_de_documento,$direccion,$telefono,$celular, $fecha_registro,$edad,$eps,
    $nombre_contacto_adicional,$parentesco,$examen_a_realizar,$empresa,$fecha_de_examen){
    $sql = "UPDATE paciente SET
                documento = ?,
                `nombre paciente` = ?,
                `tipo de documento` = ?,
                direccion = ?,
                telefono = ?,
                celular = ?,
                `fecha registro` = ?,
                edad = ?,
                eps = ?,
                `nombre contacto adicional` = ?,
                parentesco = ?,
                `examen a realizar` = ?,
                empresa = ?,
                `fecha de examen` = ?
            WHERE id = ?";

    $stmt = $this->pdo->prepare($sql);

    return $stmt->execute([
        $documento,
        $nombre_paciente,
        $tipo_de_documento,
        $direccion,
        $telefono,
        $celular,
        $fecha_registro,
        $edad,
        $eps,
        $nombre_contacto_adicional,
        $parentesco,
        $examen_a_realizar,
        $empresa,
        $fecha_de_examen,
        $id
    ]);
}


    }
?>