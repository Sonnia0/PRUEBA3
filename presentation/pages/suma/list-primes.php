<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Resultados</title>
    <link href="../../styles/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-2">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-3xl font-bold text-gray-800">SUMAS</h1>
            <a href="add-prime.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Agregar Número Primo</a>
        </div>

        <div class="bg-white shadow-md rounded my-6 mx-auto" style="max-width: 90%;">
            <table class="min-w-full bg-white" id="table-primes">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-2 px-6 text-left">HISTORIAL</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                </tbody>
            </table>
        </div>
    </div>

    <script src="../../scripts/primes/main-prime.js"></script>
</body>
</html>
