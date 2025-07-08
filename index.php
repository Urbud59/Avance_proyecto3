<?php
session_start();
?>
<!DOCTYPE html>
    <head>
        <title> Bienvenidos a Hogar 360 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <link rel="icon" type="image/png" href="Hogar.png">
        <link href="Index.css" rel="stylesheet" type="text/css"/>  
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_forward" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    </head> 
        <body>
        <header>
        <div class="top-nav">
            <nav>
                <ul>
                    <li><a href="Nosotros.html">Nosotros</a></li>
                    <li><a href="Categorias.html">Categorias</a></li>
                    <?php if (isset($_SESSION['usuario'])): ?>
                    <li class="usuario-menu">
                        <a href="#">👤 <?php echo htmlspecialchars($_SESSION['usuario']); ?></a>
                        <ul class="dropdown">
                            <li><a href="logout.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="Inicio_de_sesion.php">Iniciar sesión</a></li>
                <?php endif; ?>
                    <li><a href="Consultas.html">Consultas</a></li>
                    <li class="submenu">
                            <img src="cart.png" id="img-carrito">
                            <div id="carrito">    
                                    <table id="lista-carrito" class="u-full-width">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                    <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
            <h1>Hogar 360</h1>
        </header><br>
        <section class="Electrodomestic swiper">
        <div class="Card-wrapper">
            <ul class="card-list swiper-wrapper">
                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="Electrodomesticos.jpg" alt="Electrodomésticos" class="card-image">
                        <p class="badge Electrodomesticos">Electrodomésticos</p>
                        <h3 class="card-title">Miles de electrodomésticos a precios bajos</h3>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="Productos de limpieza.jpg" alt="Productos de limpieza" class="card-image">
                        <p class="badge Productos de limpieza">Productos de limpieza</p>
                        <h3 class="card-title">Productos de limpieza para el hogar en toda la tienda</h3>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="Muebles.jpg" alt="Muebles" class="card-image">
                        <p class="badge Muebles">Muebles</p>
                        <h3 class="card-title">Muebles de todo tipo para arreglar tu casa</h3>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="Decoración.jpg" alt="Decoración" class="card-image">
                        <p class="badge Muebles">Decoración</p>
                        <h3 class="card-title">Decoración de todo tipo para arreglar tu casa</h3>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                <li class="card-item swiper-slide">
                    <a href="#" class="card-link">
                        <img src="Iluminación.jpg" alt="Iluminación" class="card-image">
                        <p class="badge Muebles">Iluminación</p>
                        <h3 class="card-title">Iluminación de todo tipo para arreglar tu casa</h3>
                        <button class="card-button material-symbols-rounded">arrow_forward</button>
                    </a>
                </li>
                
            </ul>
            
            <div class="swiper-pagination"></div>
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script src="ProductosDisponibles.js" type="text/javascript"></script>
            
        </section><br><hr>
        
        <div>DecoHogar con Hogar360</div><br>
                   
        <video width="900" height="315" controls>
            <source src="Video Promocional para Decoración de Hogar_EJVRDC.mp4" type="video/mp4">
            Your browser does not support the <code>video</code> tag.
        </video>     

    <section class="nosotros">
        <h2>En Hogar 360 encuentras</h2>
        <div class="features">
            <div class="feature">
                <img src="images.png" alt="Mejores precios" class="feature-img">
                <p><strong>Mejores precios</strong></p>     
            </div>
            
            <div class="feature">
                <img src="Calidad.jpg" alt="Calidad" class="feature-img">
                <p><strong>Calidad</strong></p>
                
            </div>
            <div class="feature">
                <img src="Garantia.jpg" alt="Garantia" class="feature-img">
                <p><strong>Garantía</strong></p>
                
            </div>
        </div>
    </section>

    <section class="productos">
        <h2>Nuestros productos</h2>
        <div class="product-types">
            <div class="producto">
                <img src="Electrodomesticos.jpg" alt="Electrodomesticos" class="producto-img">
                <p><strong>Electrodomesticos</strong><br>Dispositivos electronicos para facilitar las tareas del hogar</p>
            </div>
            <div class="producto">
                <img src="Productos de limpieza.jpg" alt="Productos de limpieza" class="producto-img">
                <p><strong>Productos de limpieza</strong><br>Para tener tu casa limpia entonces necesitas estos productos </p>
            </div>
            <div class="producto">
                <img src="Muebles.jpg" alt="Muebles" class="producto-img">
                <p><strong>Muebles</strong><br>Tus muebles estan viejos compra unos muebles más nuevos aqui</p>
            </div>
        </div>       
    </section><hr>

     <section class="ofertas">
      <h3>Ofertas Destacadas</h3>
      <article id="promo"></article>
    </section>

    <footer>
        <div class="">
            <h4>Contacto</h4>
            <p>+51 3256987</p>
        </div>
        <div class="footer-section">
            <h4><a href="#">Libro de reclamaciones</a></h4>
        </div>
    </footer>
    <button id="scrollTopBtn" onclick="scrollToTop()">↑ Subir</button>
    
     <script>
    window.onscroll = function() {
      const btn = document.getElementById("scrollTopBtn");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        btn.style.display = "block";
      } else {
        btn.style.display = "none";
      }
    };

    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    const promoData = [
      {
        producto: "Electrodomésticos",
        descuento: "50%",
        condiciones: "Compras mayores a S/500",
        detalle: "Premiamos tu compra con un 50% de descuento en hornos."
      },
      {
        producto: "Productos de limpieza",
        descuento: "70%",
        condiciones: "Supera S/100 en productos de limpieza",
        detalle: "Mantén tu hogar limpio y ahorra más."
      },
      {
        producto: "Muebles",
        descuento: "40%",
        condiciones: "Compra mayor a S/700",
        detalle: "Organiza con estilo y funcionalidad."
      }
    ];
    const promoDiv = document.getElementById("promo");
    promoData.forEach(p => {
      promoDiv.innerHTML += `
        <p><strong>${p.producto}</strong>: ${p.descuento} de descuento<br>
        <em>${p.condiciones}</em> - ${p.detalle}</p>
      `;
    });
      </script>
    <script src="Carrito.js" type="text/javascript"></script>
</body>
</html>
