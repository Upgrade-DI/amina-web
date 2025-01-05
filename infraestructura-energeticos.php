<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Soluciones de infraestructura y energéticos para el sector energético"/>
    <meta name="keywords" content="infraestructura energética, energéticos, energía renovable, Amina"/>
    <?php include_once("phpAssets/head.php"); ?>
    <link rel="stylesheet" href="_includes/_css/infrastructure.css">
    <title>Infraestructura y Energéticos - Amina</title>
</head>
<body>
    <?php include_once("phpAssets/header.php"); ?>
    <?php include_once("phpAssets/analytics.php"); ?>
    
    <!-- SECTION BANNER -->
    <section class="section_banner">
        <div class="banner_image">
            <img src="_images/_banners/infraestructura-energeticos.jpg" alt="Infraestructura y Energéticos">
            <h1>Infraestructura y<br>energéticos</h1>
        </div>
        <div class="banner_text">
            <p>Infraestructura sostenible y energías alternativas que generan un impacto positivo en tus costos y huella de carbono.</p>
        </div>
    </section>
    <!-- SECTION BANNER END -->

    <!-- SECTION COMPARE -->
    <section class="section_compare">
        <div class="compare_container">
            <div class="compare_content">
                <h2>Compara todas<br>tus opciones</h2>
                <p>Evalúa los alcances e impacto de las propuestas de proveedores de infraestructura, energéticos y electromovilidad.</p>
                <a href="#" class="btn-primary">Comenzar</a>
            </div>
            <div class="compare_image">
                <img src="_images/_infraestructura/comparativa.jpg" alt="Herramienta de comparación">
            </div>
        </div>
    </section>

    <!-- SECTION INFRASTRUCTURE -->
    <section class="section_infrastructure">
        <div class="infrastructure_container">
            <div class="infrastructure_options">
                <div class="option_item active">
                    <h3>Sistemas fotovoltaicos (SFV)</h3>
                    <div class="option_content">
                        <ul>
                            <li>Reducción en costos de energía eléctrica.</li>
                            <li>Energía limpia, reducción de emisiones de CO2.</li>
                            <li>Costo de operación y mantenimiento económico.</li>
                        </ul>
                    </div>
                </div>
                <div class="option_item">
                    <h3>Sistemas de almacenamiento de energía (SAE)</h3>
                    <div class="option_content">
                        <ul>
                            <li>Carga en precios bajos, descarga en precios altos.</li>
                            <li>Reducción de picos de demanda.</li>
                            <li>Respaldo durante cortes o intermitencias de energía.</li>
                        </ul>
                    </div>
                </div>
                <div class="option_item">
                    <h3>Infraestructura para descarbonización</h3>
                    <div class="option_content">
                        <ul>
                            <li>Reducción en costos de energía eléctrica.</li>
                            <li>Energía limpia, reducción de emisiones de CO2.</li>
                            <li>Costo de operación y mantenimiento económico.</li>
                        </ul>
                    </div>
                </div>
                <div class="option_item">
                    <h3>Electromovilidad</h3>
                    <div class="option_content">
                        <ul>
                            <li>Reducción en la dependencia de combustibles fósiles.</li>
                            <li>Disminución en las emisiones de CO2.</li>
                            <li>Uso de residuos agrícolas y forestales como materia prima.</li>
                        </ul>
                    </div>
                </div>
                <div class="option_item">
                    <h3>Biocumbustibles</h3>
                    <div class="option_content">
                        <ul>
                            <li>Reducción en la dependencia de combustibles fósiles.</li>
                            <li>Disminución en las emisiones de CO2.</li>
                            <li>Uso de residuos agrícolas y forestales como materia prima.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="infrastructure_image">
                <img src="_images/_infraestructura/paneles_solares.jpg" alt="Paneles solares">
            </div>
        </div>
    </section>

    <!-- SECTION SALES -->
    <section class="section_sales">
        <h2>Esquemas de venta más comunes</h2>
        <div class="sales_grid">
            <div class="sales_card">
                <h3>Venta Directa</h3>
                <p>Adquiere los productos mediante capital.</p>
            </div>
            <div class="sales_card">
                <h3>PPA</h3>
                <p>Pago durante el cual se adquiere la energía de los productos a una tarifa determinada.</p>
            </div>
            <div class="sales_card">
                <h3>Leasing</h3>
                <p>Adquiere los productos mediante leasing o financiamiento.</p>
            </div>
            <div class="sales_card">
                <h3>SaaS</h3>
                <p>Pago por el uso del producto como un servicio. Cero inversión.</p>
            </div>
        </div>
    </section>

    <?php include_once("phpAssets/footer.php"); ?>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const optionItems = document.querySelectorAll('.option_item');
        
        function closeAllItems() {
            optionItems.forEach(item => {
                item.classList.remove('active');
                item.querySelector('.option_content').style.maxHeight = null;
            });
        }

        function openItem(item) {
            item.classList.add('active');
            const content = item.querySelector('.option_content');
            content.style.maxHeight = content.scrollHeight + "px";
        }
        
        optionItems.forEach(item => {
            const header = item.querySelector('h3');
            
            header.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                closeAllItems();
                
                if (!isActive) {
                    setTimeout(() => {
                        openItem(item);
                    }, 300); // Ajusta este valor para cambiar la velocidad de la transición
                }
            });
        });

        // Abrir el primer elemento por defecto
        openItem(optionItems[0]);
    });
    </script>
</body>
</html>