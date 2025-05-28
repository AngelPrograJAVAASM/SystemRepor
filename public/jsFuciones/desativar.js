
document.addEventListener("DOMContentLoaded", function () {
    const filas = document.querySelectorAll("#tablap tbody tr");

    filas.forEach(fila => {
        const celdaAtendido = fila.querySelector("td:nth-child(6)");
        if (celdaAtendido && celdaAtendido.textContent.includes("Atendido")) {
            const botonMover = fila.querySelector("button#mover");
            if (botonMover) {
                botonMover.remove();
            }
        }
    });
});
