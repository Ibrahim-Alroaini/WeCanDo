


<?php 
echo '<body lang="' . $lang . '"  dir="' .$dir.'"   >';
include_once('Servicescontent.php');

?> 

  <main id="main">
    <section id="service-details" class="service-details">
  
  <div class="container portfolio-maincontainer" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-4">
      <ul class="services-list" id="portfolio-flters">
      <li data-filter=".filter-1">Manpower Recruitment</li>
      <li data-filter=".filter-2">Vehicles</li>
      <li data-filter=".filter-3">Equipments</li>
   
    </ul>
        <!-- <div><p> 
          sdfsssdfgsdfgsdfgstgwergfbfbdfgsfsfhertertertertetryertyertyert ert er te tr
        </p></div> -->
      </div>
      <div class="col-lg-8">
        <div class="mid-container grid-group portfolio-container">
        <div class="row list_service portfolio-item filter-3">
            <?php echo $Equipments;?>
</div>
        </div>
      </div>
    </div>

            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>


  

  </main>
  
  
  <script>
        function redirectToPage(url) {
            // Redirect to the specified URL using JavaScript
            window.location.href = url;
        }
    </script>

</body>

</html>