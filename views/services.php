
<?php
// $lang = (isset($_GET['lang'])) ? $_GET['lang'] : 'en';
// $rootDir = "";
// if(strpos($_SERVER['HTTP_HOST'],'localhost')===FALSE)
// {
//   //On Production
//   $rootDir = $_SERVER['DOCUMENT_ROOT'];
// }
// else
// {
//   //On Dev server
//   $rootDir = $_SERVER['DOCUMENT_ROOT'].'/f';
// }
include_once('views/translate.php');
include_once('helper/constant.php');



echo '<html >';
?>
<!-- <!DOCTYPE html>
<html lang="en"> -->
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $orgName[$lang];?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <!-- <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">
   -->
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous"> -->

  
    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>


  <?php 
echo '<body lang="' . $lang . '"  dir="' .$dir.'"   >';
?>   


        <!-- End Header -->
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2><?php echo $navBar['Services'][$lang]; ?></h2>
        <ol>
          <li><a href="index.html"><?php echo $navBar['home'][$lang]; ?></a></li>
          <li><?php echo $navBar['Services'][$lang]; ?></li>
        </ol>

      </div>
    </div>

    <!-- End Breadcrumbs -->

    <main id="main">
      
      <!-- ======= Services Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4">
        
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="fa-solid fa-mountain-city"></i>
                </div>
                <h3><?php echo $Services['elmentservice']['CONSTRUCTION'][$lang]; ?></h3>
                <?php echo $Services['content_elmentservice']['CONSTRUCTION'][$lang];?>
                <a href="<?php echo $urlConstraction; ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                </div>
                <h3><?php echo $Services['elmentservice']['LOGISTICS'][$lang]; ?></h3>
                <?php echo $Services['content_elmentservice']['LOGISTICS'][$lang];?>

                <a href="<?php echo $urllogist;?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-compass-drafting"></i>
                </div>
                <h3><?php echo $Services['elmentservice']['RENTING'][$lang]; ?></h3>
                <?php echo $Services['content_elmentservice']['RENTING'][$lang];?>
                <a href="<?php echo $urlrinting; ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-trowel-bricks"></i>
                </div>
                <h3><?php echo $Services['elmentservice']['CONSULTATION'][$lang]; ?></h3>
                <?php echo $Services['content_elmentservice']['CONSULTATION'][$lang];?>

                <a href="<?php echo $urlwarhousing; ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon">
                  <i class="fa-solid fa-trowel-bricks"></i>
                </div>
                <h3><?php echo $Services['elmentservice']['PETROLEUM'][$lang]; ?></h3>
                <?php echo $Services['content_elmentservice']['PETROLEUM'][$lang];?>

                <a href="<?php echo $urlpetroleum; ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <!-- End Service Item -->
  
          </div>
  
        </div>
      </section>
      <!-- End Services Section -->
  
    </main><!-- End #main -->
<!--   
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a> -->
    <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
    <!-- <script>

$(document).ready(function(){
          
  function loadPage(pageName) {
              $.ajax({
                  url: pageName + '.php', 
                  type: 'GET',
                  success: function(data) {
                    window.location = pageName + '.php'; 
                    // windwos.loca
                    //   $('#service-details').html(data);
                  },
                  error: function() {
                      alert('Error loading page ' + pageName);
                  }
              });
          }

          // Set up click events for the buttons
          $('#constrator').click(function() {
              loadPage('./helpingFiles/servicesCategory/constrator');
          });
        });



    </script> -->
  </body>

</html>