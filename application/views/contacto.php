<?= $cabecera ?>  
    <header class="content">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
         <div class="carousel-item active">
        <img src="<?= base_url('asset/images/banner-1.jpg') ?>" alt="...">
           <div class="gradient"></div>
           <div class="carousel-caption">
            <span><h3><  CONT&Aacute;CTANOS  ></h3></span>
            <h1 data-aos="fade-right" data-aos-delay="300" style="color:black;text-shadow:-2px -2px 0 yellow, 2px -2px 0 yellow, -2px 2px 0 yellow, 2px 2px 0 yellow;">BIENVENIDO A NUESTRO EMPRENDIMIENTO</h1>
            <h2 data-aos="fade-left" data-aos-delay="300" style="color:black;text-shadow:-1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white, 1px 1px 0 white;">"PROVISIONES UNA FUERZA"</h2>
            <h5 data-aos="fade-center" data-aos-delay="300" style="color:white;">Nuevas oportunidades para hacer crecer la econom&iacute;a de nuestra familia.</h5>
            <a class="btn btn-primary" href="<?= base_url('programa') ?>" role="button" >BACKOFFICE</a>
            </div>
          </div>

        </div>

      </div>
    </header>


<!-- Contact section Start -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 heading">
               <div class="">
                   <i class="fa fa-envelope-open" style="font-size:60px;color:#2cbf84" aria-hidden="true"></i>
               </div>
            </div>
            <div class="col-sm-12 heading">
                <h3>COMUNICATE CON NOSOTROS</h3>
                <h4 data-aos="fade-up">¿Tienes alguna curiosidad? ¿Ocurri&oacute; algún tipo de problema?<br>No dudes en contactarnos, tenemos un centro de Servicio al Cliente activo para usted 24/7.</h4>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h3 style="text-align:center;"><i class="fa fa-map-marker"></i> Direcci&oacute;n</h3>
                        <p class="text-muted" style="text-align:justify;">Cdla. Los Almendros, Av. Ernesto Alb&aacute;n #24-25 1er. Piso Oficina #4 Frente a De Prati Sur.
                        <br>Guayas - Guayaquil - Ecuador
                        <br>
                        <strong><a href="https://goo.gl/maps/nCmemDwaCix">Ubicaci&oacute;n</a></strong>
                    </p>
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <h3 style="text-align:center;"><i class="fa fa-phone"></i> Tel&eacute;fono</h3>
                    <p class="text-muted" style="text-align:justify;">Este número es para Atenci&oacute;n al P&uacute;blico en General, aunque puede utilizar la forma electrónica de comunicación.
                    <br><strong><a href="https://api.whatsapp.com/send?phone=593984266295">+593984266295</a></strong>
                    </p>
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <h3 style="text-align:center;"><i class="fa fa-envelope"></i> Correo</h3>
                    <p class="text-muted" style="text-align:justify;">Por favor, siéntase libre de escribirnos un correo electrónico para cualquier tipo de consulta, recomendacion o reclamos.
                    <strong><a href="mailto:">info@pruf-ec.com</a></strong></p>
                </div>
            </div>
        </div>

    </div>
</section>


<div id="contact">
  <div class="container">
     <div class="container py-5">
      <div class="row" data-aos="fade-up" data-aos-duration="800">
          <div class="col-md-12">
              <?php echo form_open('contacto'); ?>
                  <div class="form-group row">
                      <div class="col-sm-4">
                      <?= form_error('nom'); ?>
                          <input id="nom" name="nom" value="<?php echo set_value('nom'); ?>" type="text" class="form-control" placeholder="Ingrese su Nombre Completo" required>
                      </div>
                          <div class="col-sm-4">
                          <input id="mail" name="mail" type="email" class="form-control" placeholder="Ingrese su Correo" required>
                      </div>
                      <div class="col-sm-4">
                          <input id="tel" name="tel" type="text" class="form-control" maxlength="10"  placeholder="Ingrese su Tel&eacute;fono" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-xs-12 col-md-12">
                          <textarea id="msj" name="msj" type="text" class="form-control" placeholder="Ingrese su Mensaje" rows="6" required></textarea>
                      </div>
                  </div>
                  <CENTER>  
                  <div class="g-recaptcha" data-sitekey="6Lf-jkobAAAAALGg5FCAq5fWygwML8upzRtRPlvo" style="align:center;" Required></div>
                 </CENTER>  
                 
                  <button type="submit" class="btn btn-success px-4" style="text-align:center;">Enviar</button>
              </form>
              <script src='https://www.google.com/recaptcha/api.js'></script>
              
<!--
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.761051434672!2d-79.90950258572022!3d-2.2430931380497254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d6fc35ae57f67%3A0x110ce54b0cb0af4a!2s5to+Callejon+49+S%2C+Guayaquil+090207!5e0!3m2!1ses!2sec!4v1546063027363"  frameborder="0" style="border:0" allowfullscreen></iframe>
-->
          </div>
      </div>
     </div>
  </div>

</div>

<?= $footer ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script src="<?= base_url('asset/js/animate.js') ?>"></script>
    <script src="<?= base_url('asset/js/custom.js') ?>"></script>
<script>
$('.carousel').carousel({
  interval: 2000
})

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
  </body>
</html>
