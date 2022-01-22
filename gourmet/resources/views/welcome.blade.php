<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- vendor link -->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main Css -->
    <link href="css/style.css" rel="stylesheet">


    <title>Happy Food | Home</title>
</head>
<body>
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="home">Happy Food</a></h1>
        
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#recipe">Recipe</a></li>
            <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a href="#footer" class="book-a-table-btn scrollto d-none d-lg-flex">Request A Recipe</a>

        </div>
    </header>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
            <h1>Welcome to <span>Happy Food</span></h1>
            <h2>a collection of food recipes with charming flavors</h2>

            <div class="btns">
                <a href="#recipe" class="btn-menu animated fadeInUp scrollto">Our Recipe</a>
                <a href="#footer" class="btn-book animated fadeInUp scrollto">Request A Recipe</a>
            </div>
            </div>
        </div>
        </div>
    </section>
<!-- End Hero -->

<!-- ======= About Section ======= --> 
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3 order-1 order-lg-2 ms-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Happy Food, Make luxury meals with home recipes</h3>
            <p class="fst-italic">
              Meyediakan beraneka ragam resep rumahan yang bernuansa mewah, denagn contoh plating yang indah serta rasa yang nikmat <br>
              <br>beberapa jenis masakan yang tersedia :
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Side Dish / Lauk Pauk</li>
              <li><i class="bi bi-check-circle"></i> Snack / Makana Ringan</li>
              <li><i class="bi bi-check-circle"></i> Drinks / minuman</li>
            </ul>
            <p>
              cari dan coba beberapa resep dengan berbeda kategori dan ciptakan penyajian sesuai selera anda.
            </p>
          </div>
        </div>

      </div>
    </section>
<!-- End About Section -->

<!-- ======= Recipe Section ======= -->
    <section id="recipe" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Recipe List</h2>
          <p>Check our recipe collection</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-sidedish">Side Dish</li>
              <li data-filter=".filter-snacks">Snacks</li>
              <li data-filter=".filter-drinks">Drinks</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          
            <div class="col-lg-6 menu-item filter-starters">
                <img src="img/gallery/gallery-1.jpg" class="menu-img" alt="">
                <div class="menu-content">
                <a href="#">Fried Rice</a>
                </div>
                <div class="menu-ingredients">
                
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-sidedish">
                <img src="img/gallery/gallery-2.jpg" class="menu-img" alt="">
                <div class="menu-content">
                <a href="#">Chicken Roasted</a>
                </div>
                <div class="menu-ingredients">
                
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-snacks">
                <img src="img/gallery/gallery-3.jpg" class="menu-img" alt="">
                <div class="menu-content">
                <a href="#">Crispy Mushroom</a>
                </div>
                <div class="menu-ingredients">
                
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-drinks">
                <img src="img/gallery/gallery-4.jpg" class="menu-img" alt="">
                <div class="menu-content">
                <a href="#">Choco Ice Blend</a>
                </div>
                <div class="menu-ingredients">
                
                </div>
            </div>          

        </div>

      </div>
    </section>
<!-- End Recipe Section -->

<!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Gallery</h2>
        <p>Some photos For Our Food Recipe</p>
      </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-0">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
              <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section>
<!-- End Gallery Section -->


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Happy Food</h3>
              <p>
                <strong>Phone:</strong> 087898942501<br>
                <strong>Email:</strong> imam.rsydn@gmail.com<br>
                <br><br><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Let Us Know The Recipe You Need</h4>
            <p>Masukkan resep yang anda butuhkan kedalam kolom dibawah. <br> <br> <i>masukkan nama makanan</i> </p>
            <form action="" method="post">
              <input type="text" name="request">
              <input type="submit" value="Send Request">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Happy Food</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Imam Rasyidin M R P</a>
      </div>
    </div>
  </footer>
<!-- End Footer -->  


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Vendor JS -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Main JS -->
  <script src="js/main.js"></script>

</body>
</html>