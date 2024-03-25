
<?php
// $lang = (isset($_GET['lang'])) ? $_GET['lang'] : 'en';
$type = $_GET['type'];
include_once('views/translate.php');
include_once('helper/constant.php');
$type1=1;
$type2=2;
$type3=3;
$type4=4;
$type5=5;
echo '<html >
';

?>
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
      
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
           function selectLanguage() {
    // Check the current language and update the link accordingly
    var newLang = '<?php echo $lang === "en" ? "ar" : "en"; ?>';
    var selectedType='<?php echo $type?>'
    window.location.href = window.location.href.split('?')[0] + '?lang=' + newLang +'&type='+selectedType;
}

        </script>
    </div>
</header>

    <main id="main">
            <!-- ======= Breadcrumbs ======= -->
    <?php include 'helper/Breadcrumbs.php'; ?>

    
<!-- End Breadcrumbs -->


<?php 
include './views/templetservices.php';?>
<?php

      if($type==$type1){
        include('./views/servicestype/constrator.php');

      }else if($type==$type2){
        include('./views/servicestype/logisticdetils.php');

      }else if($type==$type3){
        include('./views/servicestype/rinting.php');

    }else if($type==$type4){
        include('./views/servicestype/warehousing.php');

      }else if($type==$type5){
        include('./views/servicestype/petroleum.php');

      }
     
      ?>

</main>
<!-- End #main -->
  



  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
   <!-- Template Main JS File -->
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

 

</body>

</html>