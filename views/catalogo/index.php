<?php
// Asegurar que $productos llega desde el controlador
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Colección Monarch</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #0e0e0e;
            color: #ffffff;
        }

        .navbar {
            background: #1a1a1a !important;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #b37df0 !important;
        }

        .nav-link {
            color: #e0e0e0 !important;
        }

        .nav-link:hover {
            color: #b37df0 !important;
        }

        .catalog-title {
            text-align: center;
            font-size: 2.4rem;
            font-weight: bold;
            margin: 40px 0 30px;
            color: #b77fff;
            text-shadow: 0 0 10px #7e31cf;
            letter-spacing: 2px;
        }

        .product-card {
            background: #1b1b1b;
            border: 1px solid #2d2d2d;
            border-radius: 15px;
            padding: 18px;
            transition: .2s;
            height: 520px;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: scale(1.03);
            border-color: #b77fff;
        }

        .product-img {
            width: 100%;
            height: 230px;
            background: #2a2a2a;
            border-radius: 10px;
            object-fit: cover;
        }

        /* Descripción clara */
        .product-desc {
            color: #e8e8e8;
            font-size: 0.92rem;
            margin-top: 8px;
            margin-bottom: 12px;
            line-height: 1.3rem;
        }

        .product-title {
            margin-top: 12px;
            font-size: 1.1rem;
        }

        .product-price {
            margin-top: 12px;
            color: #cfa8ff;
            font-size: 1rem;
        }

        /* Tags estilo y espaciado */
        .prod-tags {
            margin-top: 8px;
            margin-bottom: 12px;
            display:flex;
            flex-wrap:wrap;
            gap:8px 8px;
        }
        .prod-tags .badge {
            font-size: 0.75rem;
            padding: 6px 10px;
            border-radius: 50px;
            display:inline-flex;
            align-items:center;
            gap:8px;
        }

        /* Botón agregar */
        .btn-add {
            background: #7d3bd4;
            border: none;
            color: white;
        }
        .btn-add:hover {
            background: #6930b1;
        }

        .footer {
            background: #1a1a1a;
            padding: 40px 0;
            margin-top: 40px;
            border-top: 2px solid #2e2e2e;
        }

        .footer h5 {
            color: #b77fff;
        }

        .footer a {
            color: #dcdcdc;
            text-decoration: none;
        }

        .footer a:hover {
            color: #b77fff;
        }

        /* Buscador */
        .search-input {
            max-width: 480px;
            width:100%;
        }

        /* pequeño badge del carrito */
        #cartCount {
            background:#cfa8ff;
            color:#0e0e0e;
            font-weight:700;
            padding:2px 7px;
            border-radius:999px;
            font-size:0.85rem;
            margin-left:6px;
        }
    </style>
</head>
<body>

<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-dark px-4">
    <a class="navbar-brand" href="index.php">Monarch</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto align-items-center">

            <!-- Buscador (cliente) -->
            <li class="nav-item me-3">
                <div class="input-group search-input">
                    <span class="input-group-text bg-dark border-0" id="basic-addon1">
                        <i class="fa-solid fa-magnifying-glass" style="color:#dcdcdc"></i>
                    </span>
                    <input id="searchInput" type="text" class="form-control bg-dark text-white border-0"
                           placeholder="Buscar producto, descripción o tipo..." aria-label="Buscar">
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> Mi cuenta</a>
            </li>

            <li class="nav-item d-flex align-items-center">
                <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i> Carrito
                    <span id="cartCount">0</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-danger fw-bold" href="index.php">
                    <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
                </a>
            </li>

        </ul>
    </div>
</nav>


<!-- TÍTULO -->
<h2 class="catalog-title">Colección Monarch</h2>


<!-- PRODUCTOS -->
<div class="container">
    <div class="row g-4">

        <?php foreach ($productos as $p): 
            // normalizar variables por si no existen
            $imagen = !empty($p['imagen']) ? $p['imagen'] : 'https://via.placeholder.com/300x220?text=Sin+Imagen';
            $nombre = $p['nombre'] ?? '';
            $descripcion = $p['descripcion'] ?? '';
            $tipo = $p['tipo_nombre'] ?? '';
            $color = $p['color'] ?? '';
            $talla = $p['talla'] ?? '';
            $estilo = $p['estilo'] ?? '';
            $genero = $p['genero'] ?? '';
            $precio = $p['precio'] ?? 0;
            // campo para busqueda: concatenar values
            $dataSearch = strtolower($nombre . ' ' . $descripcion . ' ' . $tipo . ' ' . $color . ' ' . $talla . ' ' . $estilo . ' ' . $genero);
        ?>
        <div class="col-md-3">
            <div class="product-card"
                 data-search="<?= htmlspecialchars($dataSearch, ENT_QUOTES) ?>"
                 data-name="<?= htmlspecialchars($nombre, ENT_QUOTES) ?>"
                 data-desc="<?= htmlspecialchars($descripcion, ENT_QUOTES) ?>"
                 data-tipo="<?= htmlspecialchars($tipo, ENT_QUOTES) ?>"
                 data-color="<?= htmlspecialchars($color, ENT_QUOTES) ?>"
                 data-talla="<?= htmlspecialchars($talla, ENT_QUOTES) ?>"
                 data-estilo="<?= htmlspecialchars($estilo, ENT_QUOTES) ?>"
                 data-genero="<?= htmlspecialchars($genero, ENT_QUOTES) ?>"
            >

                <!-- Imagen -->
                <img src="<?= $imagen ?>" alt="Imagen producto" class="product-img">

                <!-- Nombre -->
                <h5 class="product-title"><?= $nombre ?></h5>

                <!-- Tipo -->
                <p class="text-secondary mb-1" style="font-size: 0.9rem;">
                    <strong>Tipo:</strong> <?= $tipo ?>
                </p>

                <!-- Descripción (legible) -->
                <p class="product-desc"><?= $descripcion ?></p>

                <!-- TAGS -->
                <div class="prod-tags">
                    <?php if (!empty($color)): ?>
                        <span class="badge" style="background:#7d3bd4; color:white;">
                            <i class="fa-solid fa-palette"></i>&nbsp;<?= 'Color: ' . $color ?>
                        </span>
                    <?php endif; ?>

                    <?php if (!empty($talla)): ?>
                        <span class="badge" style="background:#3c3c3c; color:#d8b9ff;">
                            <i class="fa-solid fa-ruler-vertical"></i>&nbsp;<?= 'Talla: ' . $talla ?>
                        </span>
                    <?php endif; ?>

                    <?php if (!empty($estilo)): ?>
                        <span class="badge" style="background:#242424; color:#cfa8ff;">
                            <i class="fa-solid fa-star"></i>&nbsp;<?= 'Estilo: ' . $estilo ?>
                        </span>
                    <?php endif; ?>

                    <?php if (!empty($genero)): ?>
                        <span class="badge" style="background:#1e1e1e; color:#b792ff;">
                            <i class="fa-solid fa-circle-user"></i>&nbsp;<?= ucfirst($genero) ?>
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Precio -->
                <p class="fw-bold product-price">
                    <?= '$' . number_format($precio, 0, ',', '.') . ' COP' ?>
                </p>

                <!-- Botón agregar al carrito (simulación) -->
                <div class="mt-3">
                    <button class="btn btn-add w-100 btn-add-to-cart" type="button"
                            data-name="<?= htmlspecialchars($nombre, ENT_QUOTES) ?>">
                        <i class="fa-solid fa-cart-plus"></i> Agregar al carrito
                    </button>
                </div>

            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>


<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-3">
                <h5>Monarch</h5>
                <p>Tienda de moda moderna con estilo único. Calidad y diseño en cada prenda.</p>
            </div>

            <div class="col-md-4 mb-3">
                <h5>Enlaces</h5>
                <a href="#">Mi cuenta</a><br>
                <a href="#">Carrito</a><br>
                <a href="index.php">Cerrar sesión</a>
            </div>

            <div class="col-md-4 mb-3">
                <h5>Síguenos</h5>
                <a href="#"><i class="fa-brands fa-facebook fa-lg me-2"></i></a>
                <a href="#"><i class="fa-brands fa-instagram fa-lg me-2"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok fa-lg me-2"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
            </div>

        </div>
    </div>
</footer>


<!-- Scripts: búsqueda en cliente y carrito simulado -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Búsqueda en cliente: filtra productos por el contenido de data-search
    (function() {
        const input = document.getElementById('searchInput');
        const cards = Array.from(document.querySelectorAll('.product-card')).map(c => c.closest('.col-md-3'));

        function normalize(s) {
            return (s || '').toString().trim().toLowerCase();
        }

        function filter() {
            const q = normalize(input.value);
            cards.forEach(col => {
                const card = col.querySelector('.product-card');
                const hay = normalize(card.getAttribute('data-search'));
                if (!q || hay.indexOf(q) !== -1) {
                    col.style.display = '';
                } else {
                    col.style.display = 'none';
                }
            });
        }

        input.addEventListener('input', filter);
        // permitir búsqueda con Enter (mismo comportamiento)
        input.addEventListener('keypress', function(e){
            if (e.key === 'Enter') e.preventDefault();
        });
    })();

    // Carrito simulado: incrementa contador y muestra alerta pequeña
    (function() {
        const buttons = document.querySelectorAll('.btn-add-to-cart');
        const cartCountEl = document.getElementById('cartCount');
        let count = 0;

        function showTempMessage(btn, text) {
            const original = btn.innerHTML;
            btn.innerHTML = '<i class="fa-solid fa-check"></i> ' + text;
            btn.disabled = true;
            setTimeout(() => {
                btn.innerHTML = original;
                btn.disabled = false;
            }, 1200);
        }

        buttons.forEach(btn => {
            btn.addEventListener('click', function() {
                count++;
                cartCountEl.textContent = count;
                showTempMessage(this, 'Agregado');
            });
        });
    })();
</script>

</body>
</html>














