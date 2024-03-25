
<?php
include_once('views/translate.php');
include_once('constant.php');

?>
<!-- ======= Header ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src=<?php echo$logo_icon;?> alt="Icon" class="img-fluid">
        <h1><?php echo $Subtitles['orgName'][$lang];?><span>.</span></h1>
      </a>
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a  href="index.php?lang=en#hero">Home</a></li>
          <li><a  href="index.php?lang=en#about">About</a></li>
          <li><a  href="index.php?lang=en&route=services">Services</a></li>
          <li><a  href="index.php?lang=en#HSE">HSE</a></li>
          <li><a  href="index.php?lang=en#contact">Contact</a></li>
          <li> <div class="languages"> '
          
          
        
            <a  class="getstarted" href="#" onclick="selectLanguage();"> <?php if($lang=='ar'){
              echo'English';}else{
                echo'العربية';
              } 
              ;?></a>;
            
        </div></li>
       
      </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

  <script type="text/javascript">
            function selectLanguage() {
              var newLang = '<?php echo $lang === "en" ? "ar" : "en"; ?>';
var urlObject = new URL(window.location.href);

var lang = urlObject.searchParams.get("lang");

// Update the language parameter in the URL
urlObject.searchParams.set("lang", newLang);

// Get the updated URL
var updatedUrl = urlObject.toString();
window.location.href=updatedUrl;
console.log("Updated URL:", updatedUrl);


                // Check the current language and update the link accordingly
                // var newLang = '<?php echo $lang === "en" ? "ar" : "en"; ?>';
                // var urlObject = new URL(url);

                // var lang = urlObject.searchParams.get("lang");
                // window.location.href = window.location.href.split('?')[0] + '?lang=' + newLang;
            }
        </script>
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
  <!-- End Header -->
  


