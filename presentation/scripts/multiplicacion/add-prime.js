document.addEventListener('DOMContentLoaded', function () {
    const primeForm = document.getElementById('primeForm');
    primeForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        const numero = document.getElementById('numero').value;
        
        if (esPrimo(numero)) {
            await agregarNumeroPrimo(numero);
        } else {
            alert('El número no es primo');
        }
    });

    function esPrimo(numero) {
        
        numero = parseInt(numero, 10);
        if (numero <= 1) return false;
        if (numero == 2) return true;
        if (numero % 2 == 0) return false;
        for (let i = 3; i <= Math.sqrt(numero); i += 2) {
            if (numero % i == 0) return false;
        }
        return true;
    }

    async function agregarNumeroPrimo(numero) {
        const formData = new FormData();
        formData.append('numero', numero);

        try {
            const response = await fetch('http://localhost/PRUEBA3/businessLogic/swPrimo.php', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();
            if (result.success) {
                alert('Número primo agregado exitosamente.');
                document.getElementById('primeForm').reset();
                listarNumerosPrimos(); // Actualizar la lista de números primos
            } else {
                alert('Error al agregar número primo.');
            }
        } catch (error) {
            console.error('Error al registrar número primo:', error);
        }
    }
});
