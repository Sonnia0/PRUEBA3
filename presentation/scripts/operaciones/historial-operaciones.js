document.addEventListener('DOMContentLoaded', function () {
    const historialDiv = document.getElementById('historial');
    const borrarHistorialBtn = document.getElementById('borrarHistorial');

    async function cargarHistorial() {
        try {
            const response = await fetch('http://localhost/PRUEBA3/businessLogic/swOperaciones.php');
            const historial = await response.json();
            mostrarHistorial(historial);
        } catch (error) {
            console.error('Error al cargar el historial:', error);
        }
    }

    function mostrarHistorial(historial) {
        if (historial.length > 0) {
            const table = document.createElement('table');
            table.classList.add('min-w-full', 'bg-white');
            const thead = document.createElement('thead');
            thead.innerHTML = `
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200">ID</th>
                    <th class="py-2 px-4 border-b border-gray-200">Número 1</th>
                    <th class="py-2 px-4 border-b border-gray-200">Número 2</th>
                    <th class="py-2 px-4 border-b border-gray-200">Operación</th>
                    <th class="py-2 px-4 border-b border-gray-200">Resultado</th>
                    <th class="py-2 px-4 border-b border-gray-200">Fecha</th>
                </tr>
            `;
            table.appendChild(thead);
            const tbody = document.createElement('tbody');
            historial.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td class="py-2 px-4 border-b border-gray-200">${item.id}</td>
                    <td class="py-2 px-4 border-b border-gray-200">${item.numero1}</td>
                    <td class="py-2 px-4 border-b border-gray-200">${item.numero2}</td>
                    <td class="py-2 px-4 border-b border-gray-200">${item.operacion}</td>
                    <td class="py-2 px-4 border-b border-gray-200">${item.resultado}</td>
                    <td class="py-2 px-4 border-b border-gray-200">${item.fecha}</td>
                `;
                tbody.appendChild(row);
            });
            table.appendChild(tbody);
            historialDiv.innerHTML = '';
            historialDiv.appendChild(table);
        } else {
            historialDiv.innerHTML = '<p class="text-center text-gray-700">No hay operaciones registradas.</p>';
        }
    }

    borrarHistorialBtn.addEventListener('click', async () => {
        if (confirm('¿Estás seguro de que quieres borrar el historial?')) {
            try {
                const response = await fetch('http://localhost/PRUEBA3/businessLogic/swOperaciones.php', {
                    method: 'DELETE'
                });
                const result = await response.json();
                if (result.success) {
                    alert('Historial borrado exitosamente.');
                    cargarHistorial();
                } else {
                    alert('Error al borrar el historial.');
                }
            } catch (error) {
                console.error('Error al borrar el historial:', error);
            }
        }
    });

    cargarHistorial();
});
