<?php 
include_once('views/translate.php');

?>
 <footer id="footer" class="footer">

<div class="footer-content position-relative">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="footer-info">
          <h3><?php echo $Subtitles['orgName'][$lang]; ?><span>.</span></h3>
          <p>
            P.O. Box: 16484 Sana'a-REPUBLIC OF YEMEN.<br><br>
            <strong><?php  echo $Subtitles['contactus']['contact']['Call'][$lang];?></strong> +967 - 734100308<br>
            <strong><?php  echo $Subtitles['contactus']['contact']['email'][$lang];?></strong> dgm@wecandoltd.com<br>
          </p>
          <div class="social-links mt-3">
   
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End footer info column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li> <a href="#hero"><?php echo $navBar['home'][$lang] ;?></a></li>
          <li> <a href="#about"><?php echo $navBar['About'][$lang] ;?></a></li>
          <li> <a href="#services"><?php echo $navBar['Services'][$lang] ;?></a></li>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4><?php echo $navBar['Services'][$lang] ;?></h4>
  
        <ul>
          <li> <a href="#services"><?php echo $Services['elmentservice']['CONSTRUCTION'][$lang]; ?></a></li>
          <li> <a href="#services"><?php echo $Services['elmentservice']['LOGISTICS'][$lang]; ?></a></li>
          <li> <a href="#services"><?php echo $Services['elmentservice']['RENTING'][$lang]; ?></a></li>
          <li> <a href="#services"><?php echo $Services['elmentservice']['CONSULTATION'][$lang]; ?></a></li>
          <li> <a href="#services"><?php echo $Services['elmentservice']['PETROLEUM'][$lang]; ?></a></li>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-6 footer-links">
       
   <h4>Company Profile</h4>
        <div class="qr-code-container"> <img src="assets/img/qrdownload.png" alt="Icon"></div>
<div>
          <!-- <a href="assets/pdf/wecondo_profile.pdf" download="wecondo_profile.pdf">
            <button>Download PDF</button>
         </a> -->
          <p>
            <a target="_blank" href="assets/pdf/wecondo_profile.pdf" button class="getstarted"
              download="wecondo_profile.pdf">
              <i class="fa fa-download"></i>
              Download PDF
            </a>
          </p>
          <!--how to add qr for link download pdf-->


        </div>

    </div>
  </div>
</div>

<div class="footer-legal text-center position-relative">
 <div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Wecando Company</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by  <a href="https://www.facebook.com/profile.php?id=100007163684775&mibextid=ZbWKwL">HereTech Solutions</a>
  </div>
</div>
</div>

</footer>