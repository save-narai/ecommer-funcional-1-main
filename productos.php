<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kintsugi-Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
   
   <link href="assets/css/styles.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/style.css">

   <link href="assets/css/estilos.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />


    


    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header 






    <header class="header-container">
        <div class="logo"><img src="img/logo.png" alt="Logo"></div>
        <ul class="menu-area">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="productos.php">productos</a></li>
            <li><a href="Nosotros.php">Nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        <div class="menu-icons">
                    <a href="#"><img src="image/buscar.png" alt="Buscar"></a>
                    <a href="#"><img src="image/corazon.png" alt="Favoritos"></a>
                </div>
            </div>
        </nav>
    </div>
</header>

<a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>


<section class="py-2"  style=" margin-top: 100px ; ">
        <div class="container px-6 px-lg-7">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos text-white" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100 text-white">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.6rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4 text-white">
                                    <div class="text-center text-white">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder text-white"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2 text-white">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through text-white"><?php echo $data['precio_normal'] ?></span>
                                        <?php echo $data['precio_rebajado'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>


<!-- Tu contenido principal aquí -->
<footer class="footer">
    <div class="container-footer">
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>Dirección: 71 Pennington Lane Vernon Rockville, CT 06066</li>
                    <li>Teléfono: 123-456-7890</li>
                    <li>Fax: 55555300</li>
                    <li>Email: Kintsugi-Store@gmail.com</li>
                </ul>
                <div class="social-icons">
                    <a href="#" class="facebook">
                        <img src="img/facebook.png" alt="Facebook">
                    </a>
                    <a href="#" class="twitter">
                        <img src="img/x.png" alt="Twitter">
                    </a>
                    <a href="#" class="youtube">
                        <img src="img/youtube.png" alt="YouTube">
                    </a>
                    <a href="#" class="pinterest">
                        <img src="img/pinterest.png" alt="Pinterest">
                    </a>
                    <a href="#" class="instagram">
                        <img src="img/instagram.png" alt="Instagram">
                    </a>
                </div>
            </div>

            <div class="information">
                <p class="title-footer">Información</p>
                <ul>
                    <li><a href="#">Acerca de Nosotros</a></li>
                    <li><a href="#">Información Delivery</a></li>
                    <li><a href="#">Políticas de Privacidad</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Contáctanos</a></li>
                </ul>
            </div>

            <div class="my-account">
                <p class="title-footer">Mi cuenta</p>
                <ul>
                    <li><a href="#">Mi cuenta</a></li>
                    <li><a href="#">Historial de órdenes</a></li>
                    <li><a href="#">Lista de deseos</a></li>
                    <li><a href="#">Boletín</a></li>
                    <li><a href="#">Reembolsos</a></li>
                </ul>
            </div>

            <div class="newsletter">
                <p class="title-footer">Boletín Informativo</p>
                <div class="content">
                    <p>Suscríbete a nuestros boletines ahora y mantente al día con nuevas colecciones y ofertas exclusivas.</p>
                    <input type="email" placeholder="Ingresa tu correo aquí...">
                    <button>Suscríbete</button>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>Desarrollado por Programación para el mundo &copy; 2024</p>
        </div>
    </div>
</footer>







<!-- Core theme JS-->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
