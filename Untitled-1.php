<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos Necesarios - Habi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <link href="styles.css" rel="stylesheet">
</head>
<body>

<header>
    <div class="container">
        <!-- Sección de logo -->
        <div class="logo">
            <img src="logo.png" alt="Logo de Habi"> <!-- Logo de la empresa -->
        </div>
        <!-- Barra de navegación -->
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#">¿Quiénes somos?</a></li>
                <li class="nav-item"><a class="nav-link" href="#">¿Cómo funciona?</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li> <!-- Enlaces de navegación -->
            </ul>
        </nav>
    </div>
</header>
<?php

// Obtener las propiedades
$propiedades = obtenerPropiedades();

?>

<section class="hero">
  <img src="imagen-principal.jpg" alt="Habi - Tu aliado inmobiliario" class="img-fluid">
  <h1>Encuentra el hogar de tus sueños con Habi</h1>
  <form action="/buscar" class="form-inline justify-content-center">
    <input type="text" name="ubicacion" placeholder="¿Dónde quieres vivir?" class="form-control mr-sm-2">
    <input type="submit" value="Buscar" class="btn btn-primary">
  </form>
</section>

<section class="secciones">
  <div class="container">
    <h2>Apartamentos en venta</h2>
    <ul class="list-unstyled">
      <?php foreach ($propiedades['venta']['apartamentos'] as $apartamento) : ?>
        <li><a href="/apartamento-<?php echo $apartamento['id']; ?>"><?php echo $apartamento['titulo']; ?></a></li>
      <?php endforeach; ?>
    </ul>

    <h2>Casas en renta</h2>
    <ul class="list-unstyled">
      <?php foreach ($propiedades['renta']['casas'] as $casa) : ?>
        <li><a href="/casa-<?php echo $casa['id']; ?>"><?php echo $casa['titulo']; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="testimonios">
  <div class="container">
    <p>“Habi me ayudó a encontrar el apartamento perfecto en muy poco tiempo.” - Maria</p>
    <p>“El proceso de compra con Habi fue muy fácil y rápido.” - Juan</p>
  </div>
</section>

<section class="llamada-a-la-accion">
  <div class="container">
    <a href="/contactanos" class="btn btn-lg btn-primary">Contáctanos y encuentra tu hogar ideal</a>
  </div>
</section>
Usa el código con precaución.
3. Función para obtener las propiedades:

PHP
<?php

function obtenerPropiedades() {
  // Conectarse a la base de datos
  $db = new PDO('mysql:host=localhost;dbname=habi', 'root', '');

  // Obtener las propiedades
  $sql = "SELECT * FROM propiedades";
  $stmt = $db->query($sql);
  $propiedades = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Cerrar la conexión a la base de datos
  $db = null;

  return $propiedades;
}

?>

<main>
    <!-- Sección de inicio -->
    <section id="inicio" class="py-5 text-center">
        <div class="container">
            <h2 class="display-4 section-title">Bienvenidos.</h2>
            <p class="lead">Aquí encontrarás los documentos necesarios para una vinculación exitosa.</p>
            <a href="#documentos" class="btn btn-primary btn-lg">Ver Documentos</a>
        </div>
    </section>

    <!-- Sección de documentos -->
    <section id="documentos" class="py-5 text-center">
        <div class="container">
            <h2 class="display-4 section-title">Documentos para vinculación con recursos propios</h2>
            <p class="lead">Aquí puedes encontrar nuestros documentos.</p>

            <?php
            // Definir el número total de documentos y el número de columnas por fila
            $num_documentos = 12; // Supongamos que tienes 12 documentos en total
            $num_columnas = 3;

            // Calcular el número total de filas necesarias
            $num_filas = ceil($num_documentos / $num_columnas);

            // Iterar sobre cada fila
            for ($i = 0; $i < $num_filas; $i++) {
                echo '<div class="row">';

                // Iterar sobre cada columna en la fila actual
                for ($j = 0; $j < $num_columnas; $j++) {
                    // Calcular el índice del documento actual
                    $indice_documento = $i * $num_columnas + $j + 1;

                    // Verificar si el índice del documento está dentro del rango
                    if ($indice_documento <= $num_documentos) {
                        echo '<div class="col-md-4 documento">';
                        // Aquí puedes generar dinámicamente el contenido del recuadro de documento
                        echo '<div class="card mb-4">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">Documento ' . $indice_documento . '</h5>';
                        // Agregar más contenido si es necesario
                        echo '<a href="#" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse' . $indice_documento . '" aria-expanded="false" aria-controls="collapse' . $indice_documento . '">Más información</a>';
                        echo '<div class="collapse" id="collapse' . $indice_documento . '">';
                        echo '<div class="card card-body">';
                        echo 'Contenido del documento ' . $indice_documento;
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }

                echo '</div>';
            }
            ?>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="py-5 text-center">
        <div class="container">
            <h2 class="display-4 section-title">Contacto</h2>
            <p class="lead">Ponte en contacto con nosotros.</p>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Correo electrónico">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" placeholder="Mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
            </form>
        </div>
    </section>
</main>

<footer class="py-4" style="background-color: #0700c468; color: #ffffffac;">
    <div class="container">
        <p>&copy; 2024 Habi. Todos los derechos reservados.</p> <!-- Derechos de autor -->
    </div>
</footer>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Tu archivo de scripts personalizados -->
<script src="scripts.js"></script>

</body>
</html>
