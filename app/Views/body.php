<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Raihan Herlambang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>/assets/img/rlogo.jpeg" rel="icon">
  <link href="<?= base_url()?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1><?= $nama ?></h1>
      <p>I'm <span class="typed" data-typed-items="Front-End Developer, Designer, A Music Enthusiast, A Football Enthusiast "></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p><?= $about ?></p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="<?= base_url() ?>/assets/img/raihan3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Describe</h3>
            <p class="fst-italic">
            Hello! I'm Raihan Herlambang, a passionate Front End Developer and Designer with a keen eye for detail and a love for creating visually stunning and user-friendly web experiences. With a strong foundation in both development and design, I strive to bridge the gap between functionality and aesthetics.
            
            I have extensive experience in HTML, CSS, JavaScript, and various modern frameworks like React and Codeigniter. My design skills are honed in tools such as Adobe Creative Suite, Sketch, and Figma, allowing me to create compelling interfaces and seamless user experiences.

I thrive in collaborative environments and enjoy working closely with teams to bring creative visions to life. My goal is to continuously evolve my skills and deliver exceptional digital products that not only meet but exceed client and user expectations.

Whether it's developing responsive websites, designing interactive UI components, or optimizing user journeys, I am dedicated to crafting high-quality, accessible, and impactful web solutions.

When I'm not coding or designing, you can find me exploring the latest design trends, contributing to open-source projects, or experimenting with new technologies to stay ahead in the ever-evolving digital landscape.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  
                  <li><i class="bi bi-chevron-right"></i> <strong>Address :</strong> <span>Like Earth City, West Java</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>Email :</strong> <span>raihanhans12@gmail.com</span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> -->
                </ul>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
          <h2>Skills</h2>
        </div>
        
        <div class="row skills-content">
          
          <div class="col-lg-6">
            
            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div class="progress">
              <span class="skill">MySQL <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div class="progress">
              <span class="skill">Bootstrap <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          
          
          
          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">c++ <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill">Codeinigter <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">React JS <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill">Adobe Ilustrator <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill">Adobe Photoshop <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Corel Draw <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>



          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item pb-0">
              <h4>Universitas Muhammadiyah Sukabumi</h4>
              <h5>2021 - 2025</h5>
              <h5>Informatics Engineering</h5>
              <p><em>I am an active undergraduate student at Universitas Muhammadiyah Sukabumi, currently in my fourth year of pursuing a Bachelor's degree in Informatics Engineering. With a strong commitment to both academic excellence and extracurricular activities, I have gained valuable experience through my involvement in various organizations and professional development programs.</em></p>
              <ul>
                <li>Department Head Of Public Relations, BEM Fakultas Saintek UMMI (2023 - Now)</li>
                <li>Division Secretary Of Human Resource Development, HMIF UMMI (2022 - 2023)</li>
                <li>Member, Bulutangkis UMMI (2021 - 2023)</li>
              </ul>
            </div>

            
            <div class="resume-item">
              <h4>SMAN 4 KOTA SUKABUMI</h4>
              <h5>2018 - 2021</h5>
              <h5>Mathematics</h5>
              <p><em>I'm a dedicated and active student at SMAN 4 Kota Sukabumi, where I have consistently contributed to both academic and extracurricular activities. My involvement in various school organizations and extracurricular programs has allowed me to develop a diverse skill set and a strong sense of community.</em></p>
              <li>Member, Archery Club (2019 - 2021)</li>
            </div>
            <div class="resume-item">
              <h4>Al-Azhar Islamic Boarding School</h4>
              <h5>2015 - 2018</h5>
              <p><em>I'm an dedicated and active student at Al Azhar Boarding School, where I have significantly contributed to both academic and extracurricular activities. My involvement in various school organizations and sports has provided me with a well-rounded educational experience.</em></p>
              <li>Division Head Of Sports & Science, OSIS (2017 - 2018)</li>
              <li>Division Secretary Of Sports & Science, OSIS (2016 - 2017)</li>
              <li>Treasurer, Futsal (2016 - 2018)</li>
            </div>
            <div class="resume-item">
              <h4>SDN Pintukisi Kota Sukabumi</h4>
              <h5>2009 - 2015</h5>
              <p><em>I'm an enthusiastic and active student at SDN Pintukisi, where I have made meaningful contributions to both academic and extracurricular activities. My involvement in various school organizations and sports has allowed me to develop a diverse set of skills and a strong sense of community.</em></p>
              <li>Member, Scout</li>
              <li>Member, Futsal</li>
            </div>
            <h3 class="resume-title">External</h3>
            <div class="resume-item pb-0">
              <h4>DKM Al-Ikhlas Cikole</h4>
              <p><em>As a member of the Al Ikhlas cikole mosque prosperity council, I'm actively involved in various activities that support the maintenance and operation of the mosque. I play a role in organizing religious events, such as regular recitations, lectures, and celebrations of Islamic holidays. Apart from that, I work together with other DKM members to ensure the smooth running of mosque programs as well as being involved in social initiatives such as social service and assistance to underprivileged communities.</em></p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Experience</h3>
            <div class="resume-item">
              <h4>Artificial Intelligence Program</h4>
              <h5>February 2024 - July 2024</h5>
              <p><em>MSIB Kampus Merdeka Batch 6</em></p>
              <ul>
                <li>(Machine Learning) Study of supervised and unsupervised learning algorithms, including regression, classification, clustering, and model evaluation techniques.</li>
                <li>(Deep Learning) Understanding of neural networks, convolutional neural networks (CNN), and recurrent neural networks (RNN) and their application in various cases.</li>
                <li>Natural Language Processing (NLP) Text analysis techniques, natural language processing, and creating text-based models such as chatbots and sentiment analysis.</li>
                <li>(Capstone Project) Undertake practical projects that enable the application of AI knowledge in real cases, including the development and implementation of AI solutions.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Assistant Lecturer</h4>              
              <h5>October 2023 - February 2024</h5>              
              <p><em>Informatics Engineering</em></p>
              <ul>
                <li>Assist lecturer in preparing basic programming course</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Front-End Web & Back End</h4>
              <h5>August 2023 - January 2024</h5>
              <p><em>MSIB Kampus Merdeka Batch 5</em></p>
              <ul>
                <li>(HTML, CSS, and JavaScript) Learn the basics of web page structure, styling, and interactivity.</li>
                <li>(Modern Frameworks) Mastery of popular frameworks such as React and Vue.js to build dynamic and responsive user interfaces.</li>
                <li>(Responsive Design) Responsive design techniques to ensure optimal user experience across devices.</li>
                <li>(UI/UX Principles) Application of user interface and user experience design principles to create a web that is intuitive and easy to use.</li>
                <li>(Server-Side Programming) Learn back end programming languages ​such as Node.js and Python to manage server logic.</li>
                <li>(Database Management) The use of relational (MySQL) and non-relational (MongoDB) databases to store and manage data.</li>
                <li>(API Development) Building and consuming RESTful APIs for communication between front end and back end.</li>
                <li>(Authentication & Security) Implementation of authentication and security techniques to protect web applications.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Master Student</h4>
              <h5>December 2022 - March 2023</h5>
              <p><em>HMIF UMMI</em></p>
              <ul>
                <li>Build a case study-based website with new students</li>
              </ul>
            </div>

            
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach ($projects as $project) : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= base_url() ?>/assets/img/portfolio/<?= $project['filename'] ?>.png" class="img-fluid" alt="">
                <!-- <img src="<?= base_url() ?>/assets/img/portfolio/rds.png" class="img-fluid" alt=""> -->
                <div class="portfolio-info">
                  <h4><?= $project['nama'] ?></h4>
                  <p><?= $project['description'] ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url()?>/assets/img/portfolio/<?= $project['filename'] ?>.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                    <a href="<?= $project['link-site'] ?>" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Front-End Web</a></h4>
              <p>User Interface</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Machine Learning</a></h4>
              <p>Natural Language Processing</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Design</a></h4>
              <p>Digital Art</p>
            </div>
          </div>


          

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url() ?>/assets/img/testimonials/testimonials-1.png" class="testimonial-img" alt="">
                <h3>Bruno Fernandes</h3>
                <h4>Attacking Miedfilder (c)</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Muito fácil de usar e cheio de recursos úteis!.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url() ?>/assets/img/testimonials/testimonials-2.png" class="testimonial-img" alt="">
                <h3>Scott Mctominay</h3>
                <h4>Central Miedfilder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Great user experience!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url() ?>/assets/img/testimonials/testimonials-3.png" class="testimonial-img" alt="">
                <h3>Lisandro Martinez</h3>
                <h4>Centre Back</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Mejor solución
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url() ?>/assets/img/testimonials/testimonials-4.png" class="testimonial-img" alt="">
                <h3>Alejandro Garnacho</h3>
                <h4>Right Wing</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Impresionante amigo.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="<?= base_url() ?>/assets/img/testimonials/testimonials-5.png" class="testimonial-img" alt="">
                <h3>Kobbie Mainoo</h3>
                <h4>Defensive Miedfilder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Interested mate, so impressive.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Like Earth City, West Java</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email</h4>
                <p>raihanhans12@gmail.com</p>
              </div>


            </div>

          </div>

          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Raihan Herlambang</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>rhan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>

</html>