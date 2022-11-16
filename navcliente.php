
<nav class="navbar navbar-expand-lg  sticky-top nav_inicio">


<div class="burbujas">
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
    </div>


    <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="productos/LogoP.png" alt="logo belleza" style="width: 30%; height: 30%;">

            <strong> SOBE</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cliente.php"><h3><strong>Inicio</strong></h3></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catalogo.php"><h3><strong>Catálogo</strong></h3></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="historia_venta.php"><h3><strong>Historial Compras</strong></h3></a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link" href="perfil.php"><h3><strong>Perfil</strong></h3></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrito.php"><h3><strong>Carrito &nbsp; <strong><?php echo $cantidadcarrito; ?></strong></h3></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="salir.php" class="logout"><h3><strong>Salir</strong></h3></a>
                </li>
            </ul>
        </div>
    </div>
</nav>