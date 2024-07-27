<?php

include_once('../dataAccess/dataAccessLogic/Operaciones.php');

header('Content-Type: application/json');

$operaciones = new Operaciones(new ConexionDB());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero1 = $_POST['numero1'] ?? null;
    $numero2 = $_POST['numero2'] ?? null;
    $operacion = $_POST['operacion'] ?? null;

    if ($numero1 !== null && $numero2 !== null && $operacion !== null) {
        $resultado = $operaciones->realizarOperacion((float)$numero1, (float)$numero2, $operacion);
        echo json_encode(['success' => true, 'resultado' => $resultado]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Datos insuficientes']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $historial = $operaciones->listarOperaciones();
    echo json_encode($historial);
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $operaciones->eliminarOperaciones();
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Método no permitido']);
}
?>
