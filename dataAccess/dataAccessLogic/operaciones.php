<?php

include ('../dataAccess/conexion/Conexion.php');

class Operaciones
{
    private $connectionDB;

    public function __construct(ConexionDB $connectionDB) {
        $this->connectionDB = $connectionDB->connect();
    }

    public function realizarOperacion(float $numero1, float $numero2, string $operacion) {
        $resultado = $this->calcularResultado($numero1, $numero2, $operacion);
        if ($resultado !== 'Error: División por cero' && $resultado !== 'Operación no válida') {
            $this->guardarOperacion($numero1, $numero2, $operacion, $resultado);
        }
        return $resultado;
    }

    private function calcularResultado(float $numero1, float $numero2, string $operacion) {
        switch ($operacion) {
            case 'suma':
                return $numero1 + $numero2;
            case 'resta':
                return $numero1 - $numero2;
            case 'multiplicacion':
                return $numero1 * $numero2;
            case 'division':
                return $numero2 != 0 ? $numero1 / $numero2 : 'Error: División por cero';
            default:
                return 'Operación no válida';
        }
    }

    private function guardarOperacion(float $numero1, float $numero2, string $operacion, float $resultado) {
        try {
            $sql = "INSERT INTO operaciones (numero1, numero2, operacion, resultado) VALUES (?, ?, ?, ?)";
            $stmt = $this->connectionDB->prepare($sql);
            $stmt->execute([$numero1, $numero2, $operacion, $resultado]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function listarOperaciones() {
        try {
            $sql = "SELECT * FROM operaciones";
            $stmt = $this->connectionDB->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function eliminarOperaciones() {
        try {
            $sql = "DELETE FROM operaciones";
            $stmt = $this->connectionDB->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
