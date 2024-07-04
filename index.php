<?php
  include_once 'header.php';
?>

  <!-- ========================================= Start Header -->
  <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="6" data-background="img/bg.jpg" data-stellar-background-ratio="0.5">
    <div class="svg">
      <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
        <polygon points="-30,300 355.167,210.5 1432.5,290 1920,198.5 1920,300"></polygon>
      </svg>
    </div>
    <div class="container">
      <div class="row">
        <div class="full-width text-center caption mt-30">
          <h1 class="cd-headline clip">
            <span>Yo soy </span>
            <span class="cd-words-wrapper">
              <b class="is-visible">Ester Duran</b>
              <b>Diseñadora</b>
              <b>Programadora</b>
            </span>
          </h1>
        </div>
      </div>
    </div>
    <div class="arrow bounce" data-scroll-nav="1">
      <img src="img/down-chevron.svg" alt="">
    </div>
  </header>
  <!-- End Header =========================================== -->
  <!-- ========================================= Start hero -->
  <section class="hero section-padding" data-scroll-index="1">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="author-img">
            <img src="img/hero.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="content">
            <h4>Yo soy Ester Duran</h4>
            <span>Diseñadora & Programadora</span>
            <p>
              Lorem Ipsum <b>Argentina</b> is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the standard dummy text ever since.
            </p>
            <p>
              Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <div class="skills mt-50">
              <div class="skill-item">
                <h6>Diseño Web <span>90%</span></h6>
                <div class="skills-progress"><span data-value="90%"></span></div>
              </div>
              <div class="skill-item">
                <h6>Programación <span>90%</span></h6>
                <div class="skills-progress"><span data-value="80%"></span></div>
              </div>
              <div class="skill-item">
                <h6>Diseño Gráfico <span>95%</span></h6>
                <div class="skills-progress"><span data-value="85%"></span></div>
              </div>
              <div class="skill-item">
                <h6>Marketing <span>80%</span></h6>
                <div class="skills-progress"><span data-value="70%"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="se-tring se-tring-gray">
      <span class="left"></span>
      <span class="right"></span>
    </div>
  </section>
  <!-- End hero =========================================== -->
  <!-- ========================================= Start services -->
  <section class="services section-padding bg-gray" data-scroll-index="2">
    <div class="container">
      <div class="row">
        <div class="section-head text-center col-sm-12">
          <h4>Mis Servicios</h4>
          <h6>Servicio 1</h6>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <span class="icon"><i class="icon-laptop"></i></span>
            <h6>Servicio 2</h6>
            <p>
              Lorem Ipsum is simply dummy text of the printing and type setting industry.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <span class="icon"><i class="icon-briefcase"></i></span>
            <h6>Servicio 3</h6>
            <p>
              Lorem Ipsum is simply dummy text of the printing and type setting industry.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <span class="icon"><i class="icon-circle-compass"></i></span>
            <h6>Servicio 4</h6>
            <p>
              Lorem Ipsum is simply dummy text of the printing and type setting industry.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <span class="icon"><i class="icon-layers"></i></span>
            <h6>Servicio 5</h6>
            <p>
              Lorem Ipsum is simply dummy text of the printing and type setting industry.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <span class="icon"><i class="icon-mobile"></i></span>
            <h6>Servicio 6</h6>
            <p>
              Lorem Ipsum is simply dummy text of the printing and type setting industry.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <span class="icon"><i class="icon-megaphone"></i></span>
            <h6>Servicio 7</h6>
            <p>
              Lorem Ipsum is simply dummy text of the printing and type setting industry.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="se-tring se-tring-rev">
      <span class="left"></span>
      <span class="right"></span>
    </div>
  </section>
  <!-- End services =========================================== -->
  <!-- ========================================= Start portfolio -->
  <section class="portfolio section-padding" data-scroll-index="3">
    <div class="container">
      <div class="row">
        <div class="section-head text-center col-sm-12">
          <h4>Proyectos</h4>
          <h6>Algunos de mis Proyectos</h6>
        </div>
        <!-- filter links -->
        <div class="filtering text-center mb-30 col-sm-12">
          <span data-filter='*' class="active">Todo</span>
          <span data-filter='.brand'>Programación</span>
          <span data-filter='.web'>Gráfico</span>
          <span data-filter='.graphic'>Marketing</span>
        </div>
        <div class="clearfix"></div>
        <!-- gallery -->
        <div class="gallery text-center full-width">
          <!-- gallery item -->
          <div class="col-md-6 col-lg-4 items graphic">
            <div class="item-img">
              <img src="img/portfolio/1.jpg" alt="image">
              <div class="item-img-overlay valign">
                <div class="overlay-info full-width vertical-center">
                  <h6>Proyecto 1</h6>
                  <p>
                    Breve descripción
                  </p>
                </div>
                <a href="img/portfolio/1.jpg" class="popimg">
                  <i class="fas fa-images"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- gallery item -->
          <div class="col-md-6 col-lg-4 items web">
            <div class="item-img">
              <img src="img/portfolio/2.jpg" alt="image">
              <div class="item-img-overlay valign">
                <div class="overlay-info full-width vertical-center">
                  <h6>Proyecto 2</h6>
                  <p>
                    Breve descripción
                  </p>
                </div>
                <a href="img/portfolio/2.jpg" class="popimg">
                  <i class="fas fa-images"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- gallery item -->
          <div class="col-md-6 col-lg-4 items brand">
            <div class="item-img">
              <img src="img/portfolio/3.jpg" alt="image">
              <div class="item-img-overlay valign">
                <div class="overlay-info full-width vertical-center">
                  <h6>Proyecto 3</h6>
                  <p>
                    Breve descripción
                  </p>
                </div>
                <a href="img/portfolio/3.jpg" class="popimg">
                  <i class="fas fa-images"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- gallery item -->
          <div class="col-md-6 col-lg-4 items graphic">
            <div class="item-img">
              <img src="img/portfolio/4.jpg" alt="image">
              <div class="item-img-overlay valign">
                <div class="overlay-info full-width vertical-center">
                  <h6>Proyecto 4</h6>
                  <p>
                    Breve descripción
                  </p>
                </div>
                <a href="img/portfolio/4.jpg" class="popimg">
                  <i class="fas fa-images"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- gallery item -->
          <div class="col-md-6 col-lg-4 items web">
            <div class="item-img">
              <img src="img/portfolio/5.jpg" alt="image">
              <div class="item-img-overlay valign">
                <div class="overlay-info full-width vertical-center">
                  <h6>Proyecto 5</h6>
                  <p>
                    Breve descripción
                  </p>
                </div>
                <a href="img/portfolio/5.jpg" class="popimg">
                  <i class="fas fa-images"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- gallery item -->
          <div class="col-md-6 col-lg-4 items brand">
            <div class="item-img">
              <img src="img/portfolio/6.jpg" alt="image">
              <div class="item-img-overlay valign">
                <div class="overlay-info full-width vertical-center">
                  <h6>Proyecto 6</h6>
                  <p>
                    Breve descripción
                  </p>
                </div>
                <a href="img/portfolio/6.jpg" class="popimg">
                  <i class="fas fa-images"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- gallery item -->
          <div class="col-md-6 col-lg-4 items web">
            <div class="item-img">
              <img src="img/portfolio/7.jpg" alt="image">
              <div class="item-img-overlay valign">
                <div class="overlay-info full-width vertical-center">
                  <h6>Proyecto 7</h6>
                  <p>
                    Breve descripción
                  </p>
                </div>
                <a href="img/portfolio/7.jpg" class="popimg">
                  <i class="fas fa-images"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="clear-fix"></div>
        </div>
      </div>
    </div>
    <div class="se-tring se-tring-gray">
      <span class="left"></span>
      <span class="right"></span>
    </div>
  </section>
  <!-- End portfolio =========================================== -->
  <!-- ========================================= Start blog -->
  <section class="blog section-padding bg-gray" data-scroll-index="4">
    <div class="container">
      <div class="row">
        <div class="section-head text-center col-sm-12">
          <h4>Mi Blog</h4>
          <h6>Novedades</h6>
        </div>
        <!-- Posts -->
        <div class="owl-carousel owl-theme col-sm-12">
          <div class="item mb-30">
            <div class="post-img">
              <img src="img/blog/1.jpg" alt="">
            </div>
            <div class="content">
              <span><a href="#0">Enero 20 , 2024</a></span>
              <span>/</span>
              <span><a href="#0">
                  <em>WordPress</em>
                </a></span>
              <h5><a href="#0">Publicación Blog 1</a></h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever.
              </p>
              <a href="#0" class="more">Continuar leyendo...<i class="fas fa-angle-right"></i></a>
            </div>
          </div>
          <div class="item">
            <div class="post-img">
              <img src="img/blog/2.jpg" alt="">
            </div>
            <div class="content">
              <span><a href="#0">Enero 19 , 2024</a></span>
              <span>/</span>
              <span><a href="#0">
                  <em>Categoria</em>
                </a></span>
              <h5><a href="#0">Publicación Blog 2</a></h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever.
              </p>
              <a href="#0" class="more">Continuar leyendo...<i class="fas fa-angle-right"></i></a>
            </div>
          </div>
          <div class="item">
            <div class="post-img">
              <img src="img/blog/3.jpg" alt="">
            </div>
            <div class="content">
              <span><a href="#0">Enero 18 , 2024</a></span>
              <span>/</span>
              <span><a href="#0">
                  <em>Categoria</em>
                </a></span>
              <h5><a href="#0">Publicación Blog 3</a></h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever.
              </p>
              <a href="#0" class="more">Continuar leyendo...<i class="fas fa-angle-right"></i></a>
            </div>
          </div>
          <div class="item">
            <div class="post-img">
              <img src="img/blog/2.jpg" alt="">
            </div>
            <div class="content">
              <span><a href="#0">Enero 17 , 2024</a></span>
              <span>/</span>
              <span><a href="#0">
                  <em>Categoria</em>
                </a></span>
              <h5><a href="#0">Publicación Blog 4</a></h5>
              <p>
                Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the dummy text ever.
              </p>
              <a href="#0" class="more">Continuar leyendo...<i class="fas fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="se-tring se-tring-rev">
      <span class="left"></span>
      <span class="right"></span>
    </div>
  </section>
  <!-- End blog =========================================== -->
  <!-- ========================================= Start contact -->
  <section class="contact section-padding" data-scroll-index="5">
    <div class="container">
      <div class="row">
        <div class="section-head text-center col-sm-12">
          <h4>Contactame</h4>
          <h6>Para Proyectos...</h6>
        </div>
        <!-- Contact Form -->
        <div class="col-md-12">
          <form class="form" id="contact-form" method="post" action="">
            <div class="messages"></div>
            <div class="controls">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <input id="form_name" type="text" name="name" placeholder="Nombre *" required="required"
                      data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input id="form_email" type="email" name="email" placeholder="Correo *" required="required"
                      data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input id="form_subject" type="text" name="subject" placeholder="Asunto">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="form_message" name="message" placeholder="Tu mensaje *" rows="4" required="required"
                      data-error="Your message is required."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="butn butn-bg"><span>Enviar mensaje</span></button>
                  <div class="info">
                    <span><strong>Correo</strong> : ester@gmail.com</span>
                    <span><strong>Telefono</strong> : +12 3456789</span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact =========================================== -->

<?php
  include_once 'footer.php';
?>
