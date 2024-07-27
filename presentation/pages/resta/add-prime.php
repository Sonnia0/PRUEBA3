<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Número Primo</title>
    <link href="../../styles/tailwind.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php include('../../components/navigation.php'); ?>

    <div class="container mx-auto max-w-2xl py-8">
        <div class="bg-white shadow-md rounded px-16 pt-6 pb-8 mb-4">
            <h1 class="text-3xl font-bold text-gray-800">Agregar Número Primo</h1>
            <form id="primeForm">
                <div class="mb-4 zoomable">
                    <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Número:</label>
                    <input type="text" id="numero" name="numero" placeholder="Ingrese el número primo"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Agregar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../../scripts/primes/add-prime.js"></script>
</body>
</html>
