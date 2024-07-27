document.addEventListener('DOMContentLoaded', async () => {
    await getPrimes();
});

async function getPrimes() {
    try {
        const response = await fetch('http://localhost/PRUEBA3/swPrimo.php');
        const data = await response.json();
        const tableBody = document.querySelector('#table-primes tbody');
        tableBody.innerHTML = '';

        data.forEach((primo) => {
            const row = document.createElement('tr');
            const numeroCell = document.createElement('td');
            numeroCell.classList.add('py-3', 'px-6', 'text-left', 'whitespace-nowrap');
            numeroCell.textContent = primo.numero;
            row.appendChild(numeroCell);
            tableBody.appendChild(row);
        });
    } catch (error) {
        console.error('Error al obtener números primos:', error);
    }
}
