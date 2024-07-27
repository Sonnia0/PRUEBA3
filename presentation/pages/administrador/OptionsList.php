<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU DE OPERACIONES</title>
    <!-- Incluye Tailwind CSS -->
    <link href="../../styles/tailwind.css" rel="stylesheet">
    <!-- Incluye FontAwesome para los íconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Barra de navegación -->

    <!-- Contenido principal -->
    <div class="container mx-auto max-w-4xl py-8">
        <!-- Grid para cardviews -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Cardview Categorias -->
            <div class="max-w-sm rounded overflow-hidden  bg-white block  text-black p-6  shadow-lg transform hover:scale-105 transition-transform duration-300">
                <div class="px-6 py-4">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-list text-3xl text-blue-500 mr-2"></i>
                        <div class="font-bold text-xl">SUMA</div>
                    </div>
                    <p class="text-gray-700 text-base text-justify">
                        La sección de SUMA te permite calcular tu plataforma.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="../suma/suma.php"
                        class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Ingresar
                    </a>
                </div>
            </div>

            <!-- Cardview Usuarios -->
            <div class="max-w-sm rounded overflow-hidden  bg-white block  text-black p-6 shadow-lg transform hover:scale-105 transition-transform duration-300">
                <div class="px-6 py-4">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-user-circle text-3xl text-blue-500 mr-2"></i>
                        <div class="font-bold text-xl">RESTA</div>
                    </div>
                    <p class="text-gray-700 text-base text-justify">
                    La sección de RESTA te permite calcular tu plataforma.                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="../resta/resta.php"
                        class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Ingresar
                    </a>
                </div>
            </div>
            <div class="max-w-sm  overflow-hidden bg-white block  text-black p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                <div class="px-6 py-4">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-user-circle text-3xl text-blue-500 mr-2"></i>
                        <div class="font-bold text-xl">MULTIPLICACION</div>
                    </div>
                    <p class="text-gray-700 text-base text-justify">
                    La sección de MULTIPLICACION te permite calcular tu plataforma.                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="../multiplicacion/multiplicacion.php"
                        class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Ingresar
                    </a>
                </div>
            </div>
            <div class="max-w-sm  overflow-hidden  bg-white block  text-black p-6 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                <div class="px-6 py-4">
                    <div class="flex items-center mb-4 ">
                        <i class="fas fa-user-circle text-3xl text-blue-500 mr-2"></i>
                        <div class="font-bold text-xl">DIVISION</div>
                    </div>
                    <p class="text-gray-700 text-base text-justify">
                    La sección de DIVISION te permite calcular tu plataforma.                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="../division/division.php"
                        class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Ingresar
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>