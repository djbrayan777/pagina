<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>

    <header class="header">

        <div class="menu container">
            <a href="#"><img src="images/Logo.png"></a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">productos</a></li>
                    <li><a href="">Categoria de productos</a></li>
                    <li><a href="http://127.0.0.1:8000/login">Iniciar sesion</a></li>
                    <li><a href="http://127.0.0.1:8000/register">Registro</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="head-text">
                <h1>Sales and Products Online</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, 
                    animi iure debitis at sapiente, aliquam recusandae voluptatem quod aspernatur assumenda 
                    est totam rem ratione? Qui laudantium minus facere omnis ipsum!
                </p>
                <a href="#" class="btn-1">informacion</a>
            </div>
            <div class="head-img">
                <img src="images/ecommerce.webp" alt="">
            </div>
        </div>
    </header>

    <section class="about container">
        
        <div class="about-img">
            <img src="images/nosotros.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. At perferendis repellat 
                eius quod! Sapiente quasi nesciunt dolore
                 beatae consectetur excepturi non quam 
                magnam, ut, veniam velit, assumenda 
                dignissimos soluta amet!
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur
                 adipisicing elit. At perferendis repellat 
                eius quod! Sapiente quasi nesciunt
                 dolore beatae consectetur excepturi non quam 
                magnam, ut, veniam velit, assumenda dignissimos soluta amet!
            </p>
        </div>
    </section>

    <header>
        <h1>Productos</h1>
    </header>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Consola Xbox Series X XBOX RRT00004</span>
                <img src="img/Xbox seris x png.jpg" alt="" class="img-item">
                <span class="precio-item">$3.017.011</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Consola Xbox Serie S 512 GB Blanca</span>
                <img src="img/Xbox series s.webp" alt="" class="img-item">
                <span class="precio-item">$1.696.413</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Silla Escritorio Azul</span>
                <img src="img/Silla.webp" alt="" class="img-item">
                <span class="precio-item">$75.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Silla Gamer Haunter Ergonómica Giratoria Reclinable Negra</span>
                <img src="img/silla3.png" alt="" class="img-item">
                <span class="precio-item">$609.900</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Portatil ACER Aspire 5 Intel Core i5 12450H RAM 8 GB 512 GB SSD A5155755HE</span>
                <img src="img/portatil.png" alt="" class="img-item">
                <span class="precio-item">$1.983.360</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Consola Ps5 Slim Digital 1 Tb Blanca</span>
                <img src="img/Play 5.webp" alt="" class="img-item">
                <span class="precio-item">$1.999.881</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Portatil ASUS Vivobook 15 Intel Core i5 1235U RAM 16 GB 1 TB SSD X1504ZANJ1264W</span>
                <img src="img/Asus.webp" alt="" class="img-item">
                <span class="precio-item">$2.199.956</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Marcadores Dobles Set De 80 Colores Base De Alcohol</span>
                <img src="img/marcadores.webp" alt="" class="img-item">
                <span class="precio-item">$34.956</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Colores Prismacolor Unipunta X48 unds PRISMACOLOR</span>
                <img src="img/COLORES.webp" alt="" class="img-item">
                <span class="precio-item">$83.990</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>

    <header>
        <h1>Categoria de productos</h1>
    </header>
    <section class="Categoria de productos">

        <div class="container">
            <div class="card">
                <figure>
                    <img src="img1/tecnologia.png" alt="">
                </figure>
                <div class="contenido">
                    <h3>Tecnologia</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus 
                        alias iusto odit ut nam nemo atque ab quibusdam adipisci iste. Molestiae 
                        consequuntur et doloribus porro numquam sequi in enim exercitationem?</p>
                        <a href="#">Seleccionar</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="img1/electrodomesticos.png" alt="">
                </figure>
                <div class="contenido">
                    <h3>Electrodomesticos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus 
                        alias iusto odit ut nam nemo atque ab quibusdam adipisci iste. Molestiae 
                        consequuntur et doloribus porro numquam sequi in enim exercitationem?</p>
                        <a href="#">Seleccionar</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="img1/maleta.png" alt="">
                </figure>
                <div class="contenido">
                    <h3>Maletas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus 
                        alias iusto odit ut nam nemo atque ab quibusdam adipisci iste. Molestiae 
                        consequuntur et doloribus porro numquam sequi in enim exercitationem?</p>
                        <a href="#">Seleccionar</a>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="img1/utiles.jpg" alt="">
                </figure>
                <div class="contenido">
                    <h3>Utiles escolares</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus 
                        alias iusto odit ut nam nemo atque ab quibusdam adipisci iste. Molestiae 
                        </p>
                        <a href="#">Seleccionar</a>
                </div>
            </div>
        </div>
    </section>
    
    </section>

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <a href="#"><img src="images/Logo.png" alt=""></a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Categoria de productos</a></li>
                    <li><a href="#">Iniciar sesion</a></li>
                    <li><a href="#">Registro</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php
         include("send.php");
    ?>

    <script>
        function myFuntion(){
            window.location.href="http:localhost/pagina"
        }
    </script>

<script src="js/app.js"></script>
</body>
</html>