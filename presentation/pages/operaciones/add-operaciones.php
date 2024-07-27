<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matemáticas</title>
    <link href="../../styles/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto max-w-2xl py-8">
        <div class="bg-white shadow-md rounded px-16 pt-6 pb-8 mb-4">
            <h1 class="text-3xl font-bold text-gray-800">Realizar Operación Matemática</h1>
            <form id="operacionForm">
                <div class="mb-4">
                    <label for="numero1" class="block text-gray-700 text-sm font-bold mb-2">Número 1:</label>
                    <input type="text" id="numero1" name="numero1" placeholder="Ingrese el primer número"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="numero2" class="block text-gray-700 text-sm font-bold mb-2">Número 2:</label>
                    <input type="text" id="numero2" name="numero2" placeholder="Ingrese el segundo número"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="operacion" class="block text-gray-700 text-sm font-bold mb-2">Operación:</label>
                    <select id="operacion" name="operacion"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multiplicacion">Multiplicación</option>
                        <option value="division">División</option>
                    </select>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Calcular</button>
                </div>
            </form>
            <div id="resultado" class="text-lg font-bold text-gray-800"></div>
        </div>
    </div>
    <script src="../../scripts/operaciones/add-operaciones.js"></script>
</body>
</html>
