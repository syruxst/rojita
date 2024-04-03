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
            let cargo = this.getAttribute('title');
            let codigo =  this.getAttribute('id');
            let nombre = this.getAttribute('alt');
            let descripcion = this.getAttribute('data-description');
            let ruta = this.getAttribute('src');

            console.log(codigo);
            console.log(nombre);
            console.log(cargo);
            console.log(descripcion);
            console.log(ruta);

            const imagenAqui = document.getElementById('imagen-aqui');
            imagenAqui.src = ruta;

            const nombreTecnico = document.getElementById('nombre-tecnico');
            nombreTecnico.textContent = nombre; 
            
            const cargos = document.getElementById('cargos');
            cargos.textContent = cargo;

            const parrafo = document.getElementById('parrafo');
            parrafo.textContent = descripcion;

            const divNegro = document.getElementById('negro');
            divNegro.style.display = 'block';
        });
    });

    document.getElementById('negro').addEventListener('click', function(event){
        if (event.target.id === 'negro') {
            document.getElementById('negro').style.display = 'none';
        }
    });

    document.querySelector('.descriptions').addEventListener('click', function(event){
        event.stopPropagation();
    });

    // Alternar la visibilidad de los logos
    // let logos = document.querySelectorAll('.logo, .logoDos');
    // let index = 0;

    // setInterval(() => {
    //     logos[index].classList.remove('show');
    //     index = (index + 1) % logos.length;
    //     logos[index].classList.add('show');
    // }, 5000); 

    let logos = document.querySelectorAll('.logo, .logoDos');
    let index = 0;

    // Mostrar el primer logo inicialmente
    logos[index].classList.add('show');

    setInterval(() => {
        // Ocultar el logo actual
        logos[index].classList.remove('show');
        
        // Avanzar al siguiente logo
        index = (index + 1) % logos.length;
        
        // Mostrar el siguiente logo
        logos[index].classList.add('show');
    }, 5000);


});
