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

            <li class="filter-active" data-filter=".filter-1">Electromechanical Works</li>
            <li data-filter=".filter-2">Earthworks</li>
            <li data-filter=".filter-3">Concrete Works</li>
            <li data-filter=".filter-4">Building Construction</li>
            <li data-filter=".filter-5">Finishing</li>
            <li data-filter=".filter-6">Water Supply</li>
            <li data-filter=".filter-7">Installation Services</li>
            <li data-filter=".filter-8">Wastewater Treatment </li>
            <li data-filter=".filter-9">Steel Fabrication</li>
            <li data-filter=".filter-10">Road Construction and Maintenance</li>
          </ul>

        
        </div>
        <div class="col-lg-8">
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="row  portfolio-item filter-1">
 <?php echo $ElectromechanicalWorks;?>
  </div>
<div class="row  portfolio-item filter-2">
<?php echo $Earthworks;?>
</div>
<div class="row  portfolio-item filter-3">
            <?php echo $ConcreteWorks;?>
</div>
<div class="row  portfolio-item filter-4">
            <?php echo $BuildingConstruction;?>
</div>
<div class="row  portfolio-item filter-5">
            <?php echo $Finishing;?>
</div>
<div class="row  portfolio-item filter-6">
            <?php echo $WaterSupply;?>
</div>
<div class="row  portfolio-item filter-7">
            <?php echo $InstallationServices;?>
</div>
<div class="row  portfolio-item filter-8">
            <?php echo $Wastewater;?>
</div>
<div class="row  portfolio-item filter-9">
            <?php echo $SteelFabrication;?>
</div>
<div class="row  portfolio-item filter-10">
            <?php echo $RoadConstructionandMaintenance;?>
</div>
        

<!-- End Projects Item -->

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