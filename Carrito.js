const carrito = document.querySelector('#carrito');
const listaProductos = document.querySelector('.product-grid');
const contenedorCarrito = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.querySelector('#vaciar-carrito');
let articulosCarrito = [];

cargarEventListeners();

function cargarEventListeners() {
    listaProductos.addEventListener('click', agregarProducto);
    carrito.addEventListener('click', eliminarProducto);
    vaciarCarritoBtn.addEventListener('click', () => {
        articulosCarrito = [];
        carritoHTML();
        localStorage.removeItem('carrito');
    });
    if (localStorage.getItem('carrito')) {
        articulosCarrito = JSON.parse(localStorage.getItem('carrito'));
        carritoHTML();
    }
}

function agregarProducto(e) {
    if (e.target.classList.contains('add-btn')) {
        leerDatosProducto(e.target);
    }
}

function leerDatosProducto(btn) {
    const infoProducto = {
        imagen: btn.getAttribute('data-imagen'),
        nombre: btn.getAttribute('data-nombre'),
        precio: "S/ " + parseFloat(btn.getAttribute('data-precio')).toFixed(2),
        id: btn.getAttribute('data-id'),
        cantidad: 1
    };

    const existe = articulosCarrito.some(prod => prod.id === infoProducto.id);
    if (existe) {
        articulosCarrito = articulosCarrito.map(prod => {
            if (prod.id === infoProducto.id) {
                prod.cantidad++;
            }
            return prod;
        });
    } else {
        articulosCarrito.push(infoProducto);
    }

    carritoHTML();
}

function eliminarProducto(e) {
    if (e.target.classList.contains('borrar-producto')) {
        const id = e.target.getAttribute('data-id');
        articulosCarrito = articulosCarrito.filter(prod => prod.id !== id);
        carritoHTML();
    }
}

function carritoHTML() {
    limpiarCarritoHTML();
    articulosCarrito.forEach(producto => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${producto.imagen}" width="50"></td>
            <td>${producto.nombre}</td>
            <td>${producto.precio}</td>
            <td>${producto.cantidad}</td>
            <td><a href="#" class="borrar-producto" data-id="${producto.id}">X</a></td>
        `;
        contenedorCarrito.appendChild(row);
    });
    localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
}

function limpiarCarritoHTML() {
    while (contenedorCarrito.firstChild) {
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}



