
<?php
// include_once('views/translate.php');
// include_once('helper/constant.php');
// echo '<html >';

?>


<?php 
echo '<body lang="' . $lang . '"  dir="' .$dir.'"   >';
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center justify-content-center" data-aos="fade-up" >

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 class="nameOfcompany" ><?php echo $orgName[$lang];?><span>.</span></h2>
          </div>
          <section>
            <div class="container">
    
              <div class="row">
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href=""><?php echo $Subtitles['contactus']['hero']['vision'][$lang];?></a></h4>
                    <p id="aboutUstext"><?php echo $OurVision[$lang]; ?></p>
                    <button for="read_more"  class="readmore_btn" id="readMoreButton">Read More</button>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 ><a href=""><?php echo $Subtitles['contactus']['hero']['Mission'][$lang];?></a></h4>
                    <p id="aboutUstext1"><?php echo $OurMission[$lang]?></p>
                    <button for="read_more"  class="readmore_btn" id="readMoreButton1">Read More</button>
    
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href=""><?php echo $Subtitles['contactus']['hero']['Goals'][$lang];?></a></h4>
                    <p id="aboutUstext2">
                    <?php echo $OurGoals[$lang]; ?></p>
                    </p>
                    <!-- <h4 id="readMoreButton2">Read More</h4> -->
    
                    <button for="read_more"  class="readmore_btn" id="readMoreButton2">Read More</button>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

     
    
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section>
  <!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
   
    <!-- ======= About Section ======= -->
    <?php 
echo '<section id="about" class="about" lang="' . $lang . '"  dir="' .$dir.'"   >';
?>
   
   <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
			   <div>
                <span data-purecounter-start="0" data-purecounter-end=" 27" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Happy Client</p>
              </div>
             
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
 <p>Expert Worker</p>
 </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
               <div>
                <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                <p>Completed Project</p>
              </div>
            </div>
          </div>
		   <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
                  <i class="bi bi-award"></i>
               <div>
                <span data-purecounter-start="0" data-speed="1500"  data-purecounter-end="1994" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Year of incorporation</p>
              </div>
            </div>
          </div>
		  
        </div>

      </div>
    </section>
      <div class="container" data-aos="fade-up">
        <div class="row ">
          <!-- <div class="image col-lg-6 order-lg-2" style='background-image: url("assets/img/profile.jpg");' data-aos="fade-right">
          </div> -->
          <div class="col-lg-6 order-1 order-lg-2 imagemessage" data-aos="fade-left" data-aos-delay="50">
            <img src=<?php echo$Senatorimg;?> class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3><?php echo $welcomMesag[$lang];?></h3><br>
           

            <div class="company-wellcom">
              <?php
              echo $wellcomMesage[$lang];?>
            </div>

          </div>
        </div>
      </div>
      <div id="features" class="features">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="image col-lg-6 " style='background-image: url(<?php echo $profile_img;?>);' data-aos="fade-right">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
              <div class="icon-box mt-5 mt-lg-0 " data-aos="zoom-in" data-aos-delay="150">
                <!-- <i class="bx bx-receipt"></i> -->
                <h3><?php echo $Subtitles['org_Profile'][$lang];?></h3>
               <?php  echo $org_profile[$lang];?>
              
              </div>


            </div>
          </div>
        </div>

      </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= HSE Section ======= -->
    <section id="HSE">
      <div class="container" data-aos="fade-up">


        <div class="section-title">
          <h2>HSE</h2>
          <p><?php echo $Subtitles['hse'][$lang];?></p>
        </div>
        <div class=" row features portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="row portfolio-item filter-CONSTRUCTION">


            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card" style="background-image: url(assets/img/hse1.jpg);">
                <div class="card-body">
                  <h5 class="card-title"><a href=""></a></h5>
                  <p class="card-text " id="texthse1"><?php echo $hse1[$lang];?></p>
                  <div class="read-more" id="readMorehse1" onclick="toggleServicesText('texthse1','readMorehse1')"><i
                      class="bi bi-arrow-right"></i>
                    Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up">
              <div class="card" style="background-image: url(assets/img/hse2.jpg);">
                <div class="card-body">
                  <h5 class="card-title"><a href=""></a></h5>
                  <p class="card-text" id="hsetext"><?php echo $hse2[$lang];?></p>
                  <div class="read-more" id="readMorehsetext" onclick="toggleServicesText('hsetext','readMorehsetext')">
                    <i class="bi bi-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>

            </div>


          </div>





        </div>
      </div>
      </div>
      </div>
    </section>
    <!-- End HSE Section -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $Subtitles['contact'][$lang];?></h2>
          <p><?php echo $Subtitles['contactus']['header'][$lang];?></p>
        </div>
        
        <!-- <div>
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>
        </div> -->

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt" style="color: white;"></i>
                <h4><?php  echo $Subtitles['contactus']['contact']['Location'][$lang];?></h4>
                <p>Republic of Yemen - Sanaa - Al-Asbahi New City, 23 June Street (next to the main water tank)</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope" style="color: white;"></i>
                <h4><?php  echo $Subtitles['contactus']['contact']['email'][$lang];?></h4>
                <p> gm@wecandoltd.com <br>
                  fm@wecandoltd.com<br>
                  Saeed@wecandoltd.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone" style="color: white;"></i>
                <h4><?php  echo $Subtitles['contactus']['contact']['Call'][$lang];?></h4>
                <p>
                  Tel:+967-1-421761/2
                  Fax:+967-1-412584
                </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


</div>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

<!-- </html> -->