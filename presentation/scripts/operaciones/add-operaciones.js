document.addEventListener('DOMContentLoaded', function () {
    const operacionForm = document.getElementById('operacionForm');
    operacionForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        const numero1 = document.getElementById('numero1').value;
        const numero2 = document.getElementById('numero2').value;
        const operacion = document.getElementById('operacion').value;
        
        await realizarOperacion(numero1, numero2, operacion);
    });

    async function realizarOperacion(numero1, numero2, operacion) {
        const formData = new FormData();
        formData.append('numero1', numero1);
        formData.append('numero2', numero2);
        formData.append('operacion', operacion);

        try {
            const response = await fetch('http://localhost/PRUEBA3/businessLogic/swOperaciones.php', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();
            if (result.success) {
                document.getElementById('resultado').innerText = `Resultado: ${result.resultado}`;
            } else {
                alert('Error al realizar la operación.');
            }
        } catch (error) {
            console.error('Error al realizar la operación:', error);
        }
    }
});
