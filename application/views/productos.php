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
                    <span><h3><  KIT ></h3></span>
                    <h1 data-aos="fade-right" data-aos-delay="300" style="color:black;text-shadow:-2px -2px 0 yellow, 2px -2px 0 yellow, -2px 2px 0 yellow, 2px 2px 0 yellow;">BIENVENIDO A NUESTRO EMPRENDIMIENTO</h1>
                    <h2 data-aos="fade-left" data-aos-delay="300" style="color:black;text-shadow:-1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white, 1px 1px 0 white;">"PROVISIONES UNA FUERZA"</h2>
                    <h5 data-aos="fade-center" data-aos-delay="300" style="color:white;">Nuevas oportunidades para hacer crecer la econom&iacute;a de nuestra familia.</h5>
                    <h5 data-aos="fade-center" data-aos-delay="300" style="color:white;">Balanzas Justas, pesas justas y medidas justas tendreis.<br> LEVITICO 19.36</h5>
                    <a class="btn btn-primary" href="<?= base_url('programa') ?>" role="button" >BACKOFFICE</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Services Section Start -->
<section class="services">
    <!--Accordion wrapper-->
    <div class="container">
        <div class="accordion accordion-1" id="accordionEx23" role="tablist">
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96" style="text-align:center;">
                    <h2 class="text-uppercase mb-0 py-1" style="background-color:yellow;">
                        <a data-toggle="collapse" href="#collapse96" aria-expanded="true" aria-controls="collapse96" >
                            <span style="text-align:center;">KITS</span> <i class="fa fa-angle-down rotate-icon fa-2x"></i>
                        </a>
                    </h2>
                </div>
                <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96" data-parent="#accordionEx23">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-14">
                                <div class="inner-content"  data-aos="fade-up" data-aos-delay="300">               
                                    <div class="form-group row">
                                        <div class="col-sm-5">

                                            <img src="<?= base_url('asset/images/productos/SacoPruf.jpeg') ?>" width="100px" height="100px" alt="about-bg" text-align="center" class="thumbnail image">
                                        </div>
                                        <div class="col-sm-5">
                                            <p style="text-align:justify;  color:#212529;"><b>Kit Ganador 1</b><br>
                                                Para ser parte de PRUF primero debe registrarse bajo el c&oacute;digo de un promotor y luego se le direccionar&aacute; como realizar al supermarket onlne donde generara la orden de su KIT  de $ 13,00 d&oacute;lares del primer kit.</p>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <img src="<?= base_url('asset/images/productos/SacoPruf.jpeg') ?>" width="100px" height="100px" alt="about-bg" text-align="center" class="thumbnail image">
                                        </div>

                                        <div class="col-sm-5">
                                            <p style="text-align:justify; color:#212529;"><b>Kit Ganador 2</b><br>
                                                Para ser parte de PRUF primero debe registrarse bajo el c&oacute;digo de un promotor<span style="text-align:justify;  color:#212529;"> y luego se le direccionar&aacute; como realizar al supermarket onlne donde generara la orden de su KIT </span> de $ 26 d&oacute;lares del primer kit.</p>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <img src="<?= base_url('asset/images/productos/SacoPruf.jpeg') ?>" width="100px" height="100px" alt="about-bg" text-align="center" class="thumbnail image">
                                        </div>
                                        <div class="col-sm-5">
                                            <p style="text-align:justify; color:#212529;"><b>Kit Ganador 3</b><br>
                                                Para ser parte de PRUF primero debe registrarse bajo el c&oacute;digo de un promotor<span style="text-align:justify;  color:#212529;"> y luego se le direccionar&aacute; como realizar al supermarket onlne donde generara la orden de su KIT </span> de $ 52 d&oacute;lares del primer kit.</p>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Accordion wrapper-->
    </div>
</section>

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

    window.onscroll = function () {
        myFunction()
    };

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
