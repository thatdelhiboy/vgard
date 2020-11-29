<?php
  $product = $_GET['q']; 
?>


<?php include "./include/header.php";?>

<section class="section-50 section-sm-90 brandPhilosophySection" id="aboutus">
      <div class="shell text-center">
        <h1 class="orange" ><?php echo($product) ; ?> Brochure</h1>
        <div class="range range-xs-center offset-top-40">
          <div class="cell-xs-10 cell-sm-12 cell-md-12 height-fill">
          <embed src="https://drive.google.com/viewerng/
viewer?embedded=true&url=https://www.rehaaninternational.com/Livpower%20Voltage%20Brochure.pdf" width="100%" height="600px" 
 type="application/pdf">
          </div>
        </div>
      </div>
</section>

<?php include "./include/footer.php";?>