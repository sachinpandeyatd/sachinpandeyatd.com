<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sachin Pandey - Full Stack Web Developer and Data Scientist</title>
    <meta name="description" content="I am <b>Sachin Pandey</b>, a 3rd year B.Tech (CS&E) student. Professionally, I build beautiful websites and play with datasets to reveal the patterns they're hiding. I love to model and reduce real world into the virtual word with the power and flexibility of code.">
    <meta name="keywords" content="Sachin Pandey, Sachin, Pandey, HTML, CSS, JavaScript, jQuery, Bootstrap, PHP, MySQL, Pythonista, pythoneer, python, web developement, Website, Full Stack Web Developer, data, data Scientist, C, C++, Java, Siddharth Nagar, Lucknow, web developement lucknow, the astroverse, suhu naturalis, infinoscope">
    <meta name="author" content="Sachin Pandey">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('front/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Roboto + Roboto Slab-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('front/vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- animate.css-->
    <link rel="stylesheet" href="{{asset('front/vendor/animate.css/animate.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('front/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('front/img/favicon.ico')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Reference item-->
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="#intro" class="navbar-brand scrollTo">Sachin Pandey</a>
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#intro" class="nav-link link-scroll">Intro</a></li>
              <li class="nav-item"><a href="#about" class="nav-link link-scroll">About</a></li>
              <li class="nav-item"><a href="#services" class="nav-link link-scroll">Services</a></li>
              <li class="nav-item"><a href="#references" class="nav-link link-scroll">My work</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Intro Image-->
    <section id="intro" style="background: url(front/img/home.webp) center center no-repeat; background-size: cover;" class="intro-section pb-2">
      <div class="container text-center">
        <div data-animate="fadeInDown" class="logo"><img src="{{asset('front/img/logo-big.webp')}}" alt="logo" width="160"></div>
        <h1 data-animate="fadeInDown" class="text-shadow mb-5">Hello, I am Sachin!</h1>
        <p data-animate="slideInUp" class="h3 text-shadow text-400">I am here to build beautiful, secure, performant and SEO friendly websites for <strong>YOU</strong></p>
      </div>
    </section>
    <!-- About-->
    <section id="about" class="about-section">  
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">A little about me</h2>
        </header>
        <div class="row">
          <div data-animate="fadeInUp" class="col-lg-6">
            <p>I am Sachin Pandey, a Junior year B.Tech (CS&E) student from BBD University, Lucknow. 
              <br><br>Professionally, I'm a full stack web developer, but I also like tinkering with datasets to reveal the patterns they're hiding, which can then be used to optimize a problem. 
              <br><br>I love modelling the real world so that I can reduce it into a virtual frame with the power and flexibility of code, and build solutions that are efficient, scalable, and maintainable. 
              <br><br>I try staying at the forefront of my field and build applications that are relevant to the specifications and follow the latest practices.</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-6" ><img src="{{asset('front/img/about.webp')}}" alt="This is your Sachin" class="image rounded-circle img-fluid"></div>
        </div>
      </div>
    </section>


    <!-- About-->
    <section class="about-section" id="experince">
        <div class="container">
            <div class="text-center">
                <h2 data-animate="fadeInDown" class="title">Experience</h2>
                <h3 data-animate="fadeInDown" class="lead">I have been part of some awesome families</h3>
            </div>
            <ul class="timeline" style="margin-top: 10px;">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('front/img/astroverse.webp')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Oct 2019 - Nov 2020</h4>
                            <h4 class="subheading">The Astroverse</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">It was a science magazine company, started by me and 2 other friends of mine. I was in the chief technology officer. I single-handedly developed the website and did other technical works. But due to the lack of resources and time, we had to eventually shut it down.</p></div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('front/img/infinoscope.webp')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Feb 2021 - Apr 2021</h4>
                            <h4 class="subheading">Infinoscope</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">It was again a science magazine company. I worked here as a full stack web developer intern. Here too, I built their website solo, as a replacement to their existing website, leading to significant improvements across vital metrics. My internship ended in Apr 2021.</p></div>
                    </div>
                </li>

                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{asset('front/img/abyom.webp')}}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>May 2021 - Present</h4>
                            <h4 class="subheading">Abyom</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Abyom is an Indian rocket start-up. I am currently working here as a web develoer intern. I'm working with an amazing team here, who provide a lot of oppurtunities to learn. It has also taught me to collaborate better with others.</p></div>
                    </div>
                </li>

                <li class="timeline-inverted">
                  <div class="timeline-image">
                      <h4>
                          Time to
                          <br />
                          be part of 
                          <br />
                          Your Family
                      </h4>
                  </div>
              </li>
            </ul>
        </div>
    </section>


    <!-- Service-->
    <section id="services" class="bg-gradient services-section">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">Services</h2>
        </header>
        <div class="row services text-center">
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-laptop"></i></div>
            <h3 class="heading mb-3 text-400">Full stack Web development</h3>
            <p class="text-left description">I build beautiful websites with intuitive design elements which are extremely user-friendly, while simultaneously being extremely secure, efficient and Search Engine Optimized.
              <br><br>I have 3+ year of experince in web development and knowledge of tons of programming languages and framework. I can build the entire front-end, back-end and database for your application.</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-code"></i></div>
            <h3 class="heading mb-3 text-400">Pythoneer</h3>
            <p class="text-left description">I know a bunch of programming languages like C, C++, Java, PHP etc. but I always liked <b>Python</b> the most. It is my favourite programming language. It is easy, takes relatively less time, secure and can be used to write or interface with a multitude of applications. For these reasons I've been actively developing with Python since 2019.</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-tachometer"></i></div>
            <h3 class="heading mb-3 text-400">Data Science/Data Vizualisation</h3>
            <p class="text-left description">I won't lie, I like data science, but currently I don't have much knowledge and experience in this field. Although I am continuously learning, I still feel like I am just a beginner here.</p>
          </div>
        </div>
        <hr data-animate="fadeInUp">
        <div data-animate="fadeInUp" class="text-center">
          <p class="lead">Would you like to know more or just discuss something?</p>
          <p><a href="#contact" class="btn btn-outline-light link-scroll">Contact Me</a></p>
        </div>
      </div>
    </section>


    <!--
    *** REFERENCES IMAGE ***
    _________________________________________________________
    -->
    <section id="references">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 data-animate="fadeInUp" class="title">My work</h2>
            <p data-animate="fadeInUp" class="lead">I have worked on a multitude of <a href="https://github.com/sachinpandeyatd">projects</a>, but I'm only gonna showcase a couple of my the lates ones here.</p>
          </div>
          <!--<ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="webdesign">Webdesign</a></li>
            <li><a href="#" data-filter="seo">SEO</a></li>
            <li><a href="#" data-filter="marketing">Marketing</a></li>
            <li><a href="#" data-filter="other">Other</a></li>
          </ul>-->
          <div id="detail">
            <div class="row">
              <div class="col-lg-10 mx-auto"><span class="close">×</span>
                <div id="detail-slider" class="owl-carousel owl-theme"></div>
                <div class="text-center">
                  <h1 id="detail-title" class="title"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>
          <!-- Reference detail-->
          <div id="references-masonry" data-animate="fadeInUp">
            <div class="row">
              <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                <div class="reference"><a href="#"><img src="{{asset('front/img/portfolio/portfolio-01.webp')}}" alt="" class="img-fluid">
                    <div class="overlay">
                      <div class="inner">
                        <h3 class="h4 reference-title">The Astroverse</h3>
                        <p>A PHP powered fully functional website for a Space Magazine</p>
                      </div>
                    </div></a>
                  <div data-images="{{asset('front/img/portfolio/portfolio-01.webp')}},{{asset('front/img/portfolio/portfolio-01.webp')}},{{asset('front/img/main-slider3.jpg')}}" class="sr-only reference-description">
                    <p>
                      <ul>
                        <li>Science magazine website</li>
                        <li>Full Control with admin panel</li>
                        <li>md5 password encryption</li>
                        <li>Signup with name, email(with phpmailer), password</li>
                        <li>Home, login, cart, checkout, about, privacy-policy, contact, blog etc. pages</li>
                        <li>Compatible and responsive in all devices and browser</li>
                      </ul>
                    </p>
                    <p class="buttons text-center"><a target="_blank" rel="noreferrer" href="https://the-astroverse.com" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a></p>
                  </div>
                </div>
              </div>
              <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                <div class="reference"><a href="#"><img src="{{asset('front/img/portfolio/portfolio-02.webp')}}" alt="" class="img-fluid">
                    <div class="overlay">
                      <div class="inner">
                        <h3 class="h4 reference-title">Infinoscope</h3>
                        <p>Another PHP powered responsive website for another Space Magazine</p>
                      </div>
                    </div></a>
                  <div data-images="{{asset('front/img/portfolio/portfolio-02.webp')}},{{asset('front/img/portfolio/portfolio-02.webp')}},{{asset('front/img/portfolio/portfolio-02.webp')}}" class="sr-only reference-description">
                    <p><li>Developed with Laravel 8</li></p>
                    <p><li>Full Control with admin panel</li></p>
                    <p><li>md5 password encryption</li></p>
                    <p><li>Signup with name, email(with phpmailer), password</li></p>
                    <p><li>Home, login, cart, checkout, about, privacy-policy, contact, blog etc. pages</li></p>
                    <p><li>Compatible and responsive in all devices and browser</li></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ==========================
        CONTACT SECTION
        =========================== -->
        <section data-animate="bounceIn" class="text-center section-padding contact-wrap" id="contact">
          <div class="container">
            <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
                <h1 class="title">Drop <span>me</span> a line</h1>
              </div>
            </div>

            <div class="row contact-details">
              <div class="col-md-12">
              <!-- Adress Box -->
              <a target="_blank" rel="noreferrer" href="https://goo.gl/maps/fX4F9xZumZ9nkqm37">
              <div class="">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p>Siddharth Nagar, India</p>
                </div>
              </div></a>
              <!-- Phone Number Box -->
              <a href="tel:+91 7518693356">
                <div class="">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>+91 7518693356</p>
                </div>
              </div></a>
              <!-- E-Mail Box -->
              <a href="mailto:contact@sachinpandeyatd.com">
                <div class="">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p>contact@sachinpandeyatd.com</p>
                </div>
              </div></a>
              <!-- Resume Box -->
              <a href="mailto:contact@sachinpandeyatd.com">
                <div class="">
                <div class="dark-box box-hover">
                  <a href="{{asset('storage/resume/Sachin-Pandey-Resume.pdf')}}" class="outline-btn" download>Download Resume</a>
                </div>
              </div></a>

            </div>
            </div>
          </div>
        </section>
    <!-- ==========================
        CONTACT SECTION END
        =========================== -->


    <!-- Contact
    <section data-animate="bounceIn" class="contact-section contact">
      <div class="container">
        <header class="text-center">
          <h2 class="title">Contact me</h2>
        </header>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="contact-form" method="post" action="">
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="name" placeholder="Your name *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="email" placeholder="Your email *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="phone" placeholder="Your phone" class="form-control">
                  </div>
                  <div class="col-md-12">
                    <textarea name="message" placeholder="Message for me *" rows="4" required="required" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-outline-primary">Send message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> -->


    <!-- Map-->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-lg-left">
            <!-- Social Buttons - use font-awesome, past in what you want -->
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/sachinpandeyatd/" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
                  <li><a target="_blank" rel="noreferrer" href="https://github.com/sachinpandeyatd/" class="social-btn"><i class="fa fa-github"></i></a></li>
                  <li><a target="_blank" rel="noreferrer" href="https://twitter.com/SachinPandeyATD/" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <li><a target="_blank" rel="noreferrer" href="http://facebook.com/profile.php?id=100011419521727" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                  <li><a target="_blank" rel="noreferrer" href="https://www.instagram.com/sachinpandeyatd/" class="social-btn"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <!-- /.6-->
          <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
            <p>© 2021 Sachin Pandey. All rights reserved.</p>
          </div>
          <!-- <div class="col-12 mt-4">
            <p class="template-bootstrapious">Template by <a href='https://bootstrapious.com/p/bootstrap-carousel'>Bootstrapious</a> & <a href="https://fity.cz/ostrava">Fity</a></p>
            Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)
          </div>-->
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('front/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/vendor/jquery.counterup/jquery.counterup.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="{{asset('front/js/front.js')}}"></script>
  </body>
</html>