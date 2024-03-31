document.addEventListener('DOMContentLoaded', function () {
    const menuIcon = document.getElementById('menu-icon');
    const menu = document.querySelector('.contenedor-menu-móvil');

    menuIcon.addEventListener('click', function () {
        menu.classList.toggle('menu-visible');
    });

    // Obtener todas las imágenes
    var imagenes = document.querySelectorAll('.items img');

    // Agregar un controlador de eventos de clic a cada imagen
    imagenes.forEach(function(imagen) {
        imagen.addEventListener('click', function() {
            // Obtener el título de la imagen
            var titulo = this.getAttribute('title');
            // alert(titulo);
            
            const divNegro = document.getElementById('negro');
            divNegro.style.display = 'block';
        });
    });
});
