<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <?php include_once("phpAssets/head.php"); ?>
    <title>Amina</title>
</head>
<body>
    <?php include_once("phpAssets/header.php"); ?>
    <?php include_once("phpAssets/analytics.php"); ?>
    <div id="big-container">

        <!-- MAIN BANNER -->

        <section class="main-banner">
            <div class="main-banner-content">
                <h1>La plataforma para evaluar,<br>comparar y elegir energía</h1>
                <p>Adquiere tu energía mediante concursos<br>Optimiza tu proceso de descarbonización</p>
                <a href="register.php" class="btn-register-banner">Regístrate</a>
            </div>
            <div class="banner-image">
                <img src="_images/_home/main_mockup.svg" alt="Amina - Dashboard">
            </div> <!-- Contenedor para la imagen del dashboard -->
        </section>

<!-- MAIN BANNER END -->


<!-- SECTION SOLUTION -->

<section class="section_solution">
    <!-- Columna Izquierda: Contenido de texto -->
    <div class="section_solution_content">
        <h2>Integramos todas las <br>soluciones de energía <br>en un mismo lugar</h2>
        <ul>
            <li data-target="suministro">
                SUMINISTRO ELÉCTRICO <span class="arrow">→</span>
            </li>
            <li data-target="infraestructura">
                INFRAESTRUCTURA Y ENERGÉTICOS <span class="arrow">→</span>
            </li>
            <li data-target="descarbonizacion">
                DESCARBONIZACIÓN <span class="arrow">→</span>
            </li>
            <li data-target="transacciones">
                TRANSACCIONES DE MERCADO <span class="arrow">→</span>
            </li>
        </ul>
        <a href="#" class="btn-solutions">Soluciones</a>
    </div>

    <!-- Columna Derecha: Galería de imágenes -->
    <div class="section_solution_gal">
        <div class="image suministro" data-hover="suministro"></div>
        <div class="image infraestructura" data-hover="infraestructura"></div>
        <div class="image descarbonizacion" data-hover="descarbonizacion"></div>
        <div class="image transacciones" data-hover="transacciones"></div>
    </div>
</section>

<!-- SECTION SOLUTION END -->

<!-- SECTION CUADRANTES -->
<section class="section_services">
    <div class="service_card">
        <h3>Consumidores de Energía</h3>
        <a href="#" class="btn-info">Más información</a>
        <div class="service_image consumo_energia"></div>
       
    </div>
    <div class="service_card">
        <h3>Participantes MEM</h3>
        <a href="#" class="btn-info">Más información</a>
        <div class="service_image participantes_mem"></div>
    </div>
    <div class="service_card">
        <h3>Infraestructura y Energéticos</h3>
        <a href="#" class="btn-info">Más información</a>
        <div class="service_image infraestructura_energeticos"></div>
    </div>
    <div class="service_card">
        <h3>Descarbonización</h3>
        <a href="#" class="btn-info">Más información</a>
        <div class="service_image descarbonizacion"></div>
    </div>
</section>

<!-- SECTION CUADRANTES END -->

 <!-- SECTION CONNECTIONS -->

 <section class="section_connections">
    <!-- Columna Izquierda -->
    <div class="connections_content">
        <div class="connection_item">
            <div class="connection_card">
                <h3>Simplificando Conexiones</h3>
                <p class="hidden_content">Encuentra fácilmente las empresas consumidoras y vendedoras de energía al acceder a la plataforma.</p>
            </div>
        </div>
        <div class="connection_item">
            <div class="connection_card">
                <h3>Acelerando Decisiones</h3>
                <p class="hidden_content">Facilitamos la toma de decisiones rápida y precisa a través de análisis detallados.</p>
            </div>
        </div>
        <div class="connection_item">
            <div class="connection_card">
                <h3>Múltiples Soluciones</h3>
                <p class="hidden_content">Ofrecemos una variedad de soluciones para satisfacer las necesidades energéticas de cada cliente.</p>
            </div>
        </div>
    </div>

    <!-- Columna Derecha: Imagen -->
    <div class="connections_image">
        <img src="_images/_home/connections_example.svg" alt="Amina - Conexiones">
    </div>
</section>
 <!-- SECTION CONNECTIONS END -->

        <div id="footer_cut">
            <?php include_once("phpAssets/footer.php"); ?>
        </div>
    </div>
</body>
</html>
