<!-- SECTION JOIN PLATFORM -->
<section class="section_join_platform">
    <div class="join_content">
        <h2>Únete a la plataforma</h2>
        <a href="register.php" class="btn-register">Regístrate</a>
    </div>
</section>
<!-- SECTION JOIN PLATFORM END -->
<footer class="main-footer">
    <div class="footer-container">
        <!-- Top Navigation -->
        <nav class="footer-nav">
            <ul>
                <li><a href="soluciones.php">Soluciones</a></li>
                <li><a href="consumidores-energia.php">Consumidores</a></li>
                <li><a href="usuario-calificado.php">Usuario Calificado</a></li>
                <li><a href="participantes-mem.php">Participantes MEM</a></li>
                <li><a href="infraestructura-energeticos.php">Infraestructura y Energéticos</a></li>
                <li><a href="descarbonizacion.php">Descarbonización</a></li>
            </ul>
        </nav>

        <!-- Company Info -->
        <div class="footer-info">
            <img src="_images/_logos/logo_main_alt.svg" alt="Amina Logo" class="footer-logo">
            <h2>Energía y Descarbonización</h2>
            <div class="contact-info">
                <p>+52 (55) 4866 4891</p>
                <p>comercial@amina.com.mx</p>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <p>Desarrollado por Upgrade DI© 2024</p>
            <a href="/privacidad" class="privacy-link">Aviso de Privacidad</a>
        </div>
    </div>
</footer>

<!-- Form popup that will be hidden by default -->
<div id="popupForm" class="popup-overlay">
  <div class="popup-content">
    <span class="close-btn" id="closePopupBtn">×</span>
    <h2>Solicitud de acceso</h2>
    <p>Completa el siguiente formulario para solicitar acceso a la plataforma.</p>
    
    <form id="registrationForm" class="registration-form">
      <div class="form-row">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" name="telefono" required>
        </div>
        <div class="form-group">
          <label for="empresa">Empresa:</label>
          <input type="text" id="empresa" name="empresa" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="puesto">Puesto:</label>
          <input type="text" id="puesto" name="puesto" required>
        </div>
        <div class="form-group">
          <label for="tipo">Tipo:</label>
          <select id="tipo" name="tipo" required>
            <option value="">Selecciona una opción</option>
            <option value="CI">Consumidor Industrial</option>
            <option value="PM">Participante de Mercado</option>
            <option value="DI">Desarrollador infraestructura en sitio</option>
            <option value="DA">Trader-asesor</option>
            <option value="OT">Otro</option>
          </select>
        </div>
      </div><!-- /.form-row -->
      <div class="form-row">
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea 
                    id="mensaje" 
                    name="mensaje" 
                    rows="4" 
                    placeholder="Escribe tu mensaje aquí..."
                    class="form-input"
                ></textarea>
        </div>
        </div><!-- /.form-row -->
      <button type="submit" class="submit-btn">Registrar</button>
    </form>
  </div>
</div>

