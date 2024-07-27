<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Operaciones</title>
    <link href="../../styles/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
 

    <div class="container mx-auto max-w-4xl py-8">
        <div class="bg-white shadow-md rounded px-16 pt-6 pb-8 mb-4">
            <h1 class="text-3xl font-bold text-gray-800">Historial de Operaciones</h1>
            <button id="borrarHistorial"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-4">Borrar Historial</button>
            <div id="historial" class="overflow-x-auto"></div>
        </div>
    </div>
    <script src="../../scripts/operaciones/historial-operaciones.js"></script>
</body>
</html>
