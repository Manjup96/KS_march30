<!DOCTYPE html>
<html lang="en">
<?php
  include 'links2.php';
?>

<body>
 
<?php
 $page = 'gallery';
  include 'navbar2.php';
  include 'whatsapp.php';
?>

<div class="container">
    <div class="row">
    <div class="col-md-12">
    <h5 class ="animated bounceInRight text-center" style="font-size:30px;padding-top:30px">Photo Gallery</h5> 
    </div>
  </div>
  </div> 

    <div class="gallery" style="padding-top:50px;" data-aos="zoom-in-right">
            <div class="gallery-item">
          <a href="images/bg.jpg" data-lightbox="gallery"><img src="images/bg.jpg" alt="Image 1"></a>
        </div>
        <div class="gallery-item">
          <a href="images/bg2.jpg" data-lightbox="gallery"><img src="images/bg2.jpg" alt="Image 2"></a>
        </div>
        <div class="gallery-item">
          <a href="images/bg3.jpg" data-lightbox="gallery"><img src="images/bg3.jpg" alt="Image 3"></a>
        </div>
        <div class="gallery-item">
          <a href=" images/Gallery/large/1.png "data-lightbox="gallery"><img src="images/Gallery/small/1.png " alt="Image 4"></a>
        </div>
        <div class="gallery-item">
          <a href="images/Gallery/large/2.png" data-lightbox="gallery"><img src="images/Gallery/small/2.png" alt="Image 1"></a>
        </div>
        <div class="gallery-item">
          <a href="images/Gallery/large/3.png" data-lightbox="gallery"><img src="images/Gallery/small/3.png" alt="Image 2"></a>
        </div>
        <div class="gallery-item">
          <a href="images/Gallery/large/4.png" data-lightbox="gallery"><img src="images/Gallery/small/4.png" alt="Image 3"></a>
        </div>
        <div class="gallery-item">
          <a href="images/Gallery/large/5.png" data-lightbox="gallery"><img src="images/Gallery/large/5.png" alt="Image 4"></a>
        </div>

        <div class="gallery-item">
          <a href=" images/Gallery/large/6.png "data-lightbox="gallery"><img src="images/Gallery/small/6.png " alt="Image 4"></a>
        </div>
        <div class="gallery-item">
          <a href="images/Gallery/large/7.png" data-lightbox="gallery"><img src="images/Gallery/small/7.png" alt="Image 1"></a>
        </div>
        <div class="gallery-item">
          <a href="images/Gallery/large/8.png" data-lightbox="gallery"><img src="images/Gallery/small/8.png" alt="Image 2"></a>
        </div>
        <div class="gallery-item">
          <a href="images/Gallery/large/9.png" data-lightbox="gallery"><img src="images/Gallery/small/9.png" alt="Image 3"></a>
        </div>
        <div class="gallery-item">
          <a href="images/Gallery/large/5.png" data-lightbox="gallery"><img src="images/Gallery/large/5.png" alt="Image 4"></a>
        </div>
      </div>
 
<script>
    // Initialize lightbox
lightbox.option({
  'resizeDuration': 200,
  'wrapAround': true
});
</script>

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
