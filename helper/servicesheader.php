<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="index.php"><?php echo $orgName[$lang];?><span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <?php
if ($lang === 'en'){
    echo '
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
    <ul>
<li><a href="index.php?lang=en#hero">Home</a></li>
<li><a  href="index.php?lang=en#about">About</a></li>
<li><a class="active"  href="services.php?lang=en">Services</a></li>
<li><a  href="index.php?langen#HSE">HSE</a></li>
<li><a  href="index.php?lang=en#contact">Contact</a></li>
      <li> <div class="languages"> '
      ?>
      <?php
    
          echo '<a class="btn btn-outline btn-circle" href="#" onclick="selectLanguage();"> العربية </a>';
     
     ?>
     <?php  echo
      '</div></li>
   
  </ul>
  </nav>';
}
else{
    echo '  
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    
    <nav id="navbar" class="navbar"> 
     <ul>
    <li><a   href="index.php?=ar#hero">الصفحة الرئيسيه</a></li>
    <li><a  href="index.php?lang=ar#about">من نحن</a></li>
    <li><a class="active" href="services.php?lang=ar">خدماتنا</a></li>
    <li><a  href="index.php?lang=ar#HSE">HSE</a></li>
    <li><a  href="index.php?lang=ar#contact">بيانات التواصل</a></li>
       <li> <div class="languages">'
       ?>
       <?php
      
           echo '<a class="btn btn-outline btn-circle" href="#" onclick="selectLanguage();"> English </a>';
     
        ?>
        <?php 
  echo  '</div></li>
    </ul>
</nav>';
}
?>

       
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
           function selectLanguage() {
    // Check the current language and update the link accordingly
    var newLang = '<?php echo $lang === "en" ? "ar" : "en"; ?>';
     var newtype = '<?php echo $type?>';
    window.location.href = window.location.href.split('?')[0] + '?lang=' + newLang +'&type='+newtype+;
}

        </script>
    </div>
</header>
