
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

          <li data-filter=".filter-1">Customs Clearance</li>
          <li data-filter=".filter-2">Forwarding</li>
          <li data-filter=".filter-3">Transportation</li>
        </ul>
        <div>
</div>

      </div>
      <div class="col-lg-8">
        <div class="mid-container grid-group portfolio-container">
        <div class="row list_service portfolio-item filter-1">
            <?php echo $CustomsClearance;?>
          </div>
          <div class="row list_service portfolio-item filter-2">
            <?php echo $Forwarding;?>
          </div>
          <div class="row list_service portfolio-item filter-3">
            <?php echo $Transportation;?>
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