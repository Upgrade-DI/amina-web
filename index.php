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
                Suministro Eléctrico <span class="arrow">→</span>
            </li>
            <li data-target="infraestructura">
                Infraestructura Y Energéticos <span class="arrow">→</span>
            </li>
            <li data-target="descarbonizacion">
                Descarbonización <span class="arrow">→</span>
            </li>
            <li data-target="transacciones">
                Transacciones De Mercado <span class="arrow">→</span>
            </li>
        </ul>

        <a href="soluciones.php" class="btn-solutions">Soluciones</a>
    </div>

    <!-- Columna Derecha: Galería de imágenes -->
    <div class="section_solution_gal">
        <div class="image suministro" data-hover="suministro">
            <div class="solution_gradient"></div>
            <span class="image-title">Suministro<br>Eléctrico</span>
            <div class="description">
                Amina es un software especializado en la procura de energía. Mediante nuestro concurso de adquisición explora propuestas de suministro eléctrico y elige la opción óptima para las necesidades de tu empresa.
            </div>
        </div>
        <div class="image infraestructura" data-hover="infraestructura">
        <div class="solution_gradient"></div>
            <span class="image-title">Infraestructura y<br>Energéticos</span>
            <div class="description">
                Tecnologías de eficiencia energética avanzadas, reducción de costos de energía y disminución de la huella de carbono. Compara proveedores, términos financieros y rendimiento con nuestras herramientas.
            </div>
        </div>
        <div class="image descarbonizacion" data-hover="descarbonizacion">
        <div class="solution_gradient"></div>
            <span class="image-title">Descarbonización</span>
            <div class="description">
                Crea estrategias de descarbonización adaptadas a tu empresa. Tener tus datos de emisiones y el plan de reducción en Amina te ofrece una claridad inmediata sobre el impacto de tus acciones.
            </div>
        </div>
        <div class="image transacciones" data-hover="transacciones">
        <div class="solution_gradient"></div>
            <span class="image-title">Transacciones de<br>Mercado</span>
            <div class="description">
                La plataforma es ideal para participantes del mercado, permitiéndoles encontrar ofertas de productos del mercado al igual que la opción en poder mostrar sus productos para conectar con compradores potenciales.
            </div>
        </div>
    </div><!-- Contenedor de las imágenes -->
</section>
<!-- SECTION SOLUTION END -->



<!-- SECTION CUADRANTES -->
<section class="section_services">
    <div class="service_card">
        <h3>Suministro Eléctrico</h3>
        <a href="#" class="btn-info">Más información</a>
        <div class="service_image consumo_energia"></div>
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
    <div class="service_card">
        <h3>Transacciones MEM</h3>
        <a href="#" class="btn-info">Más información</a>
        <div class="service_image participantes_mem"></div>
    </div>
</section>


<!-- SECTION CUADRANTES END -->

 <!-- SECTION CONNECTIONS -->
<section class="section_connections">
    <!-- Columna Izquierda -->
    <div class="connections_content">
        <div class="connection_item active">
            <div class="connection_card">
                <h3>Simplificando Conexiones</h3>
                <p class="hidden_content">Encuentra fácilmente empresas que consumen y proveen energía accediendo a la plataforma.</p>
            </div>
        </div>
        <div class="connection_item">
            <div class="connection_card">
                <h3>Acelerando Decisiones</h3>
                <p class="hidden_content">Accede a procesos de descarbonización. Elige la mejor ruta utilizando las herramientas de planeación y análisis.</p>
            </div>
        </div>
        <div class="connection_item">
            <div class="connection_card">
                <h3>Múltiples Soluciones</h3>
                <p class="hidden_content">Elige entre una variedad de productos de diferentes proveedores, diseñados para ofrecer el máximo valor.</p>
            </div>
        </div>
    </div>

    <!-- Columna Derecha: Imagen -->
    <div class="connections_image">
        <img src="_images/_home/connections_example.svg" alt="Amina - Conexiones">
    </div>
</section>
<!-- SECTION CONNECTIONS END -->



<!-- SECTION DECISION CIRCLES -->
<section class="section_decision_circles">
    <div class="decision_content">
        <h2>Eleva tu toma de decisión</h2>
        <div class="decision_text">
            <div class="info" data-info="control">
                <p>Gestiona toda tu información y procesos de manera segura desde un solo lugar.</p>
            </div>
            <div class="info" data-info="evalua">
                <p>Analiza, compara y selecciona utilizando múltiples herramientas y datos para tomar decisiones informadas.</p>
            </div>
            <div class="info" data-info="asesora">
                <p>Preparación y evaluación de RFPs, con soporte para procesos clave.</p>
            </div>
            <div class="info" data-info="ofertas">
                <p>Los RFPs garantizan un entorno competitivo con acceso a las mejores propuestas del mercado.</p>
            </div>
            <div class="info" data-info="carboneutralidad">
                <p>Adquiere productos que reflejan un sólido compromiso con un futuro descarbonizado.</p>
            </div>
        </div>
    </div>
    <div class="circles_wrapper">
        <div class="circles_background">
            <div class="ring ring-1"></div>
            <div class="ring ring-2"></div>
            <div class="center-logo">
                <img src="_images/_home/logo-center.svg" alt="Logo Amina">
            </div>
        </div>
        <div class="circles_container">
            <div class="circle" data-circle="control">
                <img src="_images/_home/icon_control.svg" alt="Icono de Control">
                <span class="circle_name">Control</span>
            </div>
            <div class="circle" data-circle="evalua">
                <img src="_images/_home/icon_evalua.svg" alt="Icono de Evalúa">
                <span class="circle_name">Evalúa</span>
            </div>
            <div class="circle" data-circle="asesora">
                <img src="_images/_home/icon_asesora.svg" alt="Icono de Asesora">
                <span class="circle_name">Asesora</span>
            </div>
            <div class="circle" data-circle="ofertas">
                <img src="_images/_home/icon_ofertas.svg" alt="Icono de Ofertas">
                <span class="circle_name">Ofertas</span>
            </div>
            <div class="circle" data-circle="carboneutralidad">
                <img src="_images/_home/icon_carboneutralidad.svg" alt="Icono de Carboneutralidad">
                <span class="circle_name">Carboneutralidad</span>
            </div>
        </div>
    </div>
</section>
<!-- SECTION DECISION CIRCLES END -->



<!-- SECTION VALIDATE AND SEND -->
<section class="section_validate_send">
    <div class="validate_mockup">
        <div class="browser_frame">
            <div class="browser_dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="browser_content">
                <img src="_images/_logos/logo_main_alt.svg" alt="Amina Logo" class="mockup_logo">
                <h3>Minera MR</h3>
                <p>RFP 200 GWh Solares y 20 MW</p>
                <button class="btn_review">Revisar Consumos</button>
                <div class="mockup_text">
                    <h4>Minera MR RFP</h4>
                    <h5>Introducción</h5>
                    <p>Es un placer extenderles una cordial invitación para participar en nuestro proceso de solicitud de propuestas (RFP) para la provisión de energía solar a la empresa Minera MR. Como líderes en la industria minera, en Minera MR estamos comprometidos con la sostenibilidad y la innovación en todas nuestras operaciones.</p>
                    <p>El objetivo de esta RFP es asegurar la adquisición de 200 GWh/año energía solar y 20 MW de potencia para satisfacer las necesidades energéticas de nuestras operaciones.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="validate_content">
        <h2>Valida y envía</h2>
        <p>Simplificamos la creación de RFPs con nuestras plantillas pre-cargadas y automatizadas.</p>
    </div>
</section>
<!-- SECTION VALIDATE AND SEND END -->


        <div id="footer_cut">
            <?php include_once("phpAssets/footer.php"); ?>
        </div>
    </div>
</body>
</html>
