<?php include 'back/getter.php';
$db = new getter('cv');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>php native Portifilo</title>

  <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">

  <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/nice-select/css/nice-select.css">

  <link rel="stylesheet" type="text/css" href="assets/vendor/fancybox/css/jquery.fancybox.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/virtual.css">

  <link rel="stylesheet" type="text/css" href="assets/css/minibar.virtual.css">
</head>

<body class="theme-red">

  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>

  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>
      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
    </div>
  </div>

  <div class="topbar-nav fixed-top">
    <div class="brand">
      <img src="assets/favicon.ico" alt="" width="30" height="30">
    </div>
    <h3 class="ml-1">Ftoh</h3>
    <button class="btn-fab toggle-menu mr-3"><span class="ti-menu"></span></button>
  </div>

  <!-- Minibar -->
  <div class="minibar">
    <div class="header">
      <div class="brand">
      </div>
    </div>
    <div class="content">
      <ul class="main-menu">
        <li class="menu-item active">
          <a href="#home" class="menu-link">
            <span class="icon ti-home"></span>
            <span class="caption">Home</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#about" class="menu-link">
            <span class="icon ti-user"></span>
            <span class="caption">About</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#services" class="menu-link">
            <span class="icon ti-file"></span>
            <span class="caption">Service</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#portfolio" class="menu-link">
            <span class="icon ti-briefcase"></span>
            <span class="caption">Portfolio</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#blog" class="menu-link">
            <span class="icon ti-book"></span>
            <span class="caption">Blog</span>
          </a>
        </li>
        <li class="menu-item">
          <a href="#contact" class="menu-link">
            <span class="icon ti-location-pin"></span>
            <span class="caption">Contact</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="vg-main-wrapper">
    <!-- Home -->
    <div class="vg-page page-home" id="home" style="background-image: url(assets/img/bg_image_2.jpg);">
      <div class="caption wow zoomInUp">
        <h1 class="fw-normal">Welcome</h1>
        <h2 class="fw-medium fg-theme">I'm Ftoh Tarek</h2>
        <p class="tagline">Full Stack Developer</p>
      </div>
    </div>

    <!-- Page About -->
    <div class="vg-page page-about" id="about">
      <!-- Profile -->
      <?php $data = $db->getData('about')->fetch(); ?>
      <div class="container py-3">
        <div class="row">
          <div class="col-md-6">
            <div class="img-place wow zoomIn">
              <img class="serviceImg" src="image/<?php echo $data['img'] ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="caption wow fadeInRight">
              <h2 class="fg-dark"><?php echo $data['name'] ?></h2>
              <p class="fg-theme fw-medium"><?php echo $data['jop'] ?></p>
              <p><?php echo $data['description'] ?></p>
              <ul class="theme-list">
                <li class="fg-dark"><b>From:</b> <?php echo $data['fromLocation'] ?></li>
                <li class="fg-dark"><b>Lives In:</b><?php echo $data['live_in'] ?></li>
                <li class="fg-dark"><b>Age:</b> <?php echo $data['age'] ?></li>
                <li class="fg-dark"><b>Gender:</b> <?php echo $data['gender'] ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- End profile -->

      <!-- Skills -->
      <div class="container mt-5">
        <h1 class="text-center fg-dark wow fadeInUp">My Skills</h1>
        <div class="row py-3">
          <?php $data = $db->getData('skill');
          while ($row = $data->fetch()) { ?>
            <div class="col-md-6">
              <div class="progress-wrapper wow fadeInUp">
                <span class="caption"><?php echo $row['name'] ?></span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo $row['percentage'] ?>%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo $row['percentage'] ?>%</div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div> <!-- End skills -->
        <!-- Resume -->
        <div class="container pt-5">
          <div class="row">
            <div class="col-md-6 wow fadeInRight">
              <h2 class="fg-dark">Education</h2>
              <ul class="timeline mt-4 pr-md-5">
                <?php $data = $db->getData('education');
                while ($row = $data->fetch()) { ?>
                  <li>
                    <div class="title"><?php echo $row['year'] ?></div>
                    <div class="details">
                      <h5><?php echo $row['title'] ?></h5>
                      <small class="fg-theme"><?php echo $row['university'] ?></small>
                      <p><?php echo $row['description'] ?></p>
                    </div>
                  </li>
                <?php } ?>
              </ul>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
              <h2 class="fg-dark">Experience</h2>
              <ul class="timeline mt-4 pr-md-5">
                <?php $data = $db->getData('experience');
                while ($row = $data->fetch()) { ?>
                  <li>
                    <div class="title"><?php echo $row['year'] ?></div>
                    <div class="details">
                      <h5><?php echo $row['name'] ?></h5>
                      <small class="fg-theme"><?php echo $row['university'] ?></small>
                      <p><?php echo $row['description'] ?></p>
                    </div>
                  </li>
                <?php } ?>

              </ul>
            </div>
          </div>
        </div> <!-- End resume -->
      </div> <!-- End page about -->

      <!-- Page Service -->
      <div class="vg-page page-service" id="services">
        <h1 class="text-center wow fadeInUp">Services</h1>
        <div class="container">
          <div class="row">
            <?php $data = $db->getData('service');
            while ($row = $data->fetch()) { ?>
              <div class="col-md-6 col-lg-4 wow fadeInUp">
                <div class="card card-body">
                  <div class="iconic">
                    <img style="height: 100px;" src="image/<?php echo $row['img'] ?>">
                  </div>
                  <h4 class="fg-theme"><?php echo $row['title'] ?></h4>
                  <p><?php echo $row['description'] ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div> <!-- End page services -->

      <!-- Portfolio page -->
      <div class="vg-page page-portfolio" id="portfolio">
        <div class="container">
          <div class="text-center wow fadeInUp">
            <div class="badge badge-subhead">Portfolio</div>
          </div>
          <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
          <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
            <button class="btn btn-theme-outline selected" data-filter="*">All</button>
            <?php $data = $db->getData('category;');
            while ($row = $data->fetch()) { ?>
              <button class="btn btn-theme-outline" data-filter=".categoryId<?php echo $row['id'] ?>"><?php echo $row['name'] ?></button>
            <?php } ?>

          </div>

          <div class="gridder my-3">
            <?php $data = $db->getData('product');
            while ($row = $data->fetch()) { ?>
              <div class="grid-item template categoryId<?php echo $row['catogeryId'] ?> zoomIn">
                <div class="img-place" style="border-radius: 0;" data-src="image/<?php echo $row['img'] ?>"
                 data-fancybox data-caption="<h5 class='fg-theme'><?php echo $row['title'] ?></h5> <p><?php echo $row['slug'] ?>
                </p> <a target='_blank'  href='<?php echo $row['href']?>'>Go To Site</a>">
                  <img class ='img-fluid' src="image/<?php echo $row['img'] ?>">
                  <div class="img-caption">
                    <h5 class="fg-theme"><?php echo $row['title'] ?></h5>
                    <p><?php echo $row['slug'] ?></p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div> <!-- End gridder -->
        </div>
      </div> <!-- End Portfolio page -->

      <!-- Page Contact -->
      <div class="vg-page page-contact" id="contact">
        <h1 class="text-center fg-dark wow fadeInUp">Contact</h1>
        <div class="container-fluid">
          <div class="row py-5">
            <div class="col-lg-7 wow zoomIn">
              <div class="vg-maps">
                <div id="google-maps" style="width: 100%; height: 100%;"></div>
              </div>
            </div>
            <div class="col-lg-5">
              <form class="vg-contact-form">
                <div class="form-row">
                  <div class="col-12 wow fadeInUp">
                    <input class="form-control" type="text" name="Name" placeholder="Your Name">
                  </div>
                  <div class="col-6 wow fadeInUp">
                    <input class="form-control" type="text" name="Email" placeholder="Email Address">
                  </div>
                  <div class="col-6 wow fadeInUp">
                    <input class="form-control" type="text" name="Subject" placeholder="Subject">
                  </div>
                  <div class="col-12 wow fadeInUp">
                    <textarea class="form-control" name="Message" rows="6" placeholder="Enter message here.."></textarea>
                  </div>
                  <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> <!-- End page contact -->

      <!-- Footer -->
      <div class="vg-footer">
        <h1 class="text-center">Virtual Folio</h1>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 py-3">
              <div class="footer-info">
                <p>Where to find me</p>
                <hr class="divider">
                <p class="fs-large fg-white">1600 Amphitheatre Parkway Mountain View, California 94043 US</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3">
              <div class="float-lg-right">
                <p>Follow me</p>
                <hr class="divider">
                <ul class="list-unstyled">
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Youtube</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 py-3">
              <div class="float-lg-right">
                <p>Contact me</p>
                <hr class="divider">
                <ul class="list-unstyled">
                  <li>info@virtual.com</li>
                  <li>+8890234</li>
                  <li>+813023</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-12 mb-3">
              <h3 class="fw-normal text-center">Subscribe</h3>
            </div>
            <div class="col-lg-6">
              <form class="mb-3">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Email address">
                  <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
                </div>
              </form>
            </div>
            <div class="col-12">
              <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made with <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode ID</a></p>
            </div>
          </div>
        </div>
      </div> <!-- End footer -->
    </div> <!-- End main wrapper -->


    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>

    <script src="assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>

    <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>

    <script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

    <script src="assets/vendor/wow/wow.min.js"></script>

    <script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>

    <script src="assets/js/google-maps.js"></script>

    <script src="assets/js/minibar-virtual.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>