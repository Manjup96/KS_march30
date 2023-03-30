<!DOCTYPE html>
<html lang="en">
<?php
  include 'links2.php';
?>

<body>
<?php
 $page = 'safari';
  include 'navbar2.php';
?>



<div class="container" style="padding-top:50px;">
      <div class="row">
        <div class="col-md-8 border border-dark" data-aos="zoom-in-right">
        
          <h2 class="text-center pt-2 pb-2"> Wildlife Safari </h2>
            <p style="font-size:20px;font-family:Open Sans, sans-serif;padding-top:20px;text-align: justify;">Jungle Safari by Jeep/Bus accompanied by the naturalist.</p>

                <p style="font-size:20px;font-family:Open Sans, sans-serif;padding-top:20px;text-align: justify;">(Safari timings 5.45 am to 9.00 am and 3.00 pm 6.30 pm.)</p>

                <p style="font-size:20px;font-family:Open Sans, sans-serif;padding-top:20px;text-align: justify;"><strong>JUNGLE SAFARI IS SUBJECTED TO WEATHER CONDITIONS.</strong></p>

                  <p style="font-size:20px;font-family:Open Sans, sans-serif;padding-top:20px;text-align: justify;">For Bookings Contact:&nbsp;<a href="tel:9945247201">9945247201 / 0821-2435250</a> or <a href="reservation.php">Click  here for Reservation</a></p>

                                </div>
        
        <div class="col-md-4 " id="myImg">
        <div data-aos="zoom-out-right">
        <img src="images/safari-1.png"  class="img-fluid" style="border-radius:10px;">
        
                            
          </div>
        </div>
      </div>
    </div>








            <?php
  include 'footer_ipad.php';
  include 'footer_desktop.php';
  include 'copyright.php';
   include 'scrollup.php';
   include 'whatsapp.php';
  ?>

<!-- Animation links -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
      offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 3000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', 
    });
  </script>




</body>
</html>