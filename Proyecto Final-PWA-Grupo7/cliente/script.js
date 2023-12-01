document.addEventListener('DOMContentLoaded', function() {
    const addButtons = document.querySelectorAll('.add');
    const carritoLista = document.querySelector('.carrito-lista');

    addButtons.forEach(function(addButton) {
        addButton.addEventListener('click', function() {
            const platoId = parseInt(this.getAttribute('data-id'));
            const plato = platos.find(function(plato) {
                return plato.id === platoId;
            });

            if (plato) {
                const listItem = document.createElement('li');
                listItem.textContent = `Plato: ${plato.nombre}, Precio: $${plato.precio}`;
                carritoLista.appendChild(listItem);
            }
        });
    });
});