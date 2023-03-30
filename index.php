<!DOCTYPE html>
<html lang="en">
<?php
include 'links2.php';
?>



<style>
  .carousel-item {
    -webkit-transition: 0s !important;
    -o-transition: 0s !important;
    transition: 0s !important;
    transition: -webkit-transform 0s ease-in-out !important;
    transition: transform 0s ease-in-out !important;
    transition: transform 0s ease-in-out, -webkit-transform 0s ease-in-out !important;


  }
</style>

<body>

  <!-- navbar start -->
  <?php
  $page = 'index';
  include 'navbar2.php';

  ?>
  <!-- navbar emds -->

  <!-- carousel start -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/new_pic/bg_1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="animation-delay:1s;font-size:30px;">Welcome to the Sounds of the Forest and Hear the Birds Sing!</h5>
          <h5 class="animated bounceInLeft" style="font-size:30px;">Discover Incredible Kings Sanctuary</h5>
          <a class="btn btn-primary btn-border btn-lg fs-5" href="facilities-jlr-kings-sanctuary.html">Explore Now!</a>
          <a class="btn  btn-primary btn-border btn-lg fs-5" href="reservation.html">Book Now!</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/new_pic/bg_2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="animation-delay:1s;font-size:30px;">Welcome to the Sounds of the Forest and Hear the Birds Sing!</h5>
          <h5 class="animated bounceInLeft" style="font-size:30px;">Discover Incredible Kings Sanctuary</h5>
          <a class="btn btn-primary btn-border btn-lg fs-5" href="facilities-jlr-kings-sanctuary.html">Explore Now!</a>
          <a class="btn   btn-primary btn-border btn-lg fs-5" href="reservation.html">Book Now!</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/new_pic/bg_3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="font-size:30px;">Welcome to the Sounds of the Forest and Hear the Birds Sing!</h5>
          <h5 class="animated bounceInLeft" style="font-size:30px;">Discover Incredible Kings Sanctuary</h5>
          <a class="btn btn btn-primary btn-border btn-lg fs-5" href="facilities-jlr-kings-sanctuary.html">Explore Now!</a>
          <a class="btn   btn-primary btn-border btn-lg fs-5" href="reservation.html">Book Now!</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- </div> -->

  <!-- carousel ends -->


  <!-- top KINGS SANCTUARY - NAGARAHOLE start -->

  <div class="container" style="margin-top:30px;margin-bottom:30px">
    <div class="row">

      <div class=" col-md-9" data-aos="fade-right">
        <div class="p-3 border border-dark ">
          <h1 style="color:#111211;text-transform:uppercase;font-size:30px;font-weight:bold;"> kings Sanctuary - Nagarahole</h1>
          <p></p>
          <p style="font-size:20px;font-family:Open Sans, sans-serif;text-align: justify;">We do see people looking for places to visit near Bangalore, jungle resorts in karnataka, Nagarhole homestay or forest guesthouse. If you are game for an adventure in the wild, but with all modern conveniences assured, look
            no further. Located close to Nagarhole National Park, we are pleased to welcome you for a memorable jungle vacation. </p>
          <p style="font-size:20px;font-family:Open Sans, sans-serif;text-align: justify;">A group of friends looking for a perfect weekend getaway or a couple looking for a unique honeymoon destination or a family looking to spend time together - We have something special for everyone!</p>

          <p style="font-size: 16px;font-family:Open Sans, sans-serif;">
            <a href="about.php" class="btn btn-primary btn-outline mb-1" style="font-size:16px;">About Kings Sanctuary</a>
            <a href="National_park.php" class="btn btn-primary btn-outline mb-1" style="font-size:16px;">About Nagarhole National Park</a>

            <a href="facilities.php" class="btn btn-primary btn-outline mb-1" style="font-size:16px;">Facilities</i></a>
          </p>
        </div>
      </div>


      <div class="col-md-3 " data-aos="slide-left">
        <div id="myImg">
          <img src="images/new_pic/KS.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <!-- top KINGS SANCTUARY - NAGARAHOLE ends -->


  <!-- video part -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 pt-3" data-aos="slide-right">
        <div class="pb-5">
          <h2 class="text-center"> About King Sanctuary</h2>
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="videos/Final video part 2.mp4" allowfullscreen></iframe>
          </div>
        </div>

      </div>
      <div class="col-md-6 pt-3" data-aos="slide-right">
        <div class="pb-5">
          <h2 class="text-center"> Jungle Safari</h2>
          <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="videos/Kings Santuary Jungle Safari - Video.mp4" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </div>
  </div>





  <!-- top card start -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center" data-aos="slide-left">
        <div class="card  border border-dark">
          <h3 style="font-size: 22px;font-weight:bold;padding-top:20px;">Book the Kings Sanctuary</h3>
          <img class="card-img-top" src="images/booknow.png" alt="Card image" class="img-fluid img-rounded">

          <div class="card-body">
            <!-- <h4 class="card-title fs-3">Book the Kings Sanctuary</h4> -->
            <p class="card-text fs-5" style="text-align: justify;font-family:Open Sans, sans-serif"> Kings Sanctuary is a part of jungle lodges and resorts and is a perfect getaway destination to experience the wildlife safari of Nagarahole National</p>

          </div>
        </div>
      </div>

      <div class="col-md-6  text-center" data-aos="slide-left" id="myImg">

        <div class="card  border border-dark">
          <h3 style="font-size: 22px;font-weight:bold;padding-top:20px;">Mysore Dasara</h3>
          <img class="card-img-top " src="images/mysore-dasara.jpg" alt="Card image" style="width:100%;" class="img-fluid img-rounded">

          <div class="card-body">

            <p class="card-text fs-5" style="text-align: justify;font-family:Open Sans, sans-serif">
              Dasara is a 10-day festival in the region culminating on Vijayadashami or tenth day.On all the 10 days of Dasara, various music and dance concerts are held.
            </p>

          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- top card ends -->

  <!-- brochure starts -->
  <div class="container" style="margin-top:30px;margin-bottom:50px;">

    <div class="row">

      <div class="col-md-7" align="center" data-aos="slide-left">

        <a href="https://www.skywaytour.com/static/pdf/jlr-brochure-compressed.pdf" target="_blank"><img src="https://www.bandipurnationalpark.in/images/download-e-catalogue.jpg" class="img-fluid img-rounded" alt="JLR Kings Sanctuary Brochure Download"></a>
      </div>

      <div class="col-md-1" align="center" id="myImg">
      </div>
      <div class="col-md-4" data-aos="slide-left">

        <a href="https://www.skywaytour.com/static/pdf/184-2021-07-26-04-37-36-JLRKingsSantuary.pdf" target="_blank"><img src="images/download-brochure.jpg" class="img-fluid img-rounded" alt="JLR Kings Sanctuary Brochure Download"></a>
      </div>

    </div>
  </div>

  <!-- brochure ends -->

  <!-- Explore section starts -->
  <div class="container" style="margin-top:30px" data-aos="zoom-in-up">
    <h3 style="font-size: 22px;font-weight:bold;" class="text-center">Explore Kings Sanctuary</h3><br>
    <div class="row">


    </div>

  </div>
  <!-- id="myDiv" -->
  <div class="container" data-aos="zoom-in-up">
    <div class="row">
      <div class="col-md-3 text-center pt-2">
        <div class="card  border border-dark" data-aos="zoom-in-up">
          <img class="card-img-top" src="images/new_pic/card1.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title fs-4"> Kings Sanctuary</h4>
            <p class="card-text fs-5 ">Incredible Kings Sanctuary</p>
            <a href="about.php" class="btn btn-primary fs-5">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center pt-2">
        <div class="card  border border-dark" data-aos="zoom-in-up">
          <img class="card-img-top" src="images/Home_activities.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title fs-4">Activities in Kings Sanctuary</h4>
            <p class="card-text fs-5">Travel with Nature</p>
            <a href="activity.php" class="btn btn-primary fs-5">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center pt-2">
        <div class="card  border border-dark" data-aos="zoom-in-up">
          <img class="card-img-top" src="images/Home_cottages.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title fs-4">Suits and Cottages</h4>
            <p class="card-text fs-5">Offers luxury in the wild.</p>
            <a href="accommodation.php" class="btn btn-primary fs-5">Explore</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center pt-2">
        <div class="card  border border-dark" data-aos="zoom-in-up">
          <img class="card-img-top" src="images/home-facilities.png" alt="Card image">
          <div class="card-body">
            <h4 class="card-title fs-4">Facilities</h4>
            <p class="card-text fs-5">Discover best places to Relax</p>
            <a href="facilities.php"" class=" btn btn-primary fs-5">Explore</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore section ends -->

  <!-- contact form starts -->

  <section id="contact" class="contact" data-aos="flip-up">

    <div class="container mt-5">

      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <h2 class="text-center fs-2 pb-4"> Quick Contact</h2>
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control border border-dark" id="name" placeholder="Your Name" style="font-size: 18px;" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control border border-dark" name="email" id="email" placeholder="Your Email" style="font-size: 18px;" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="number" class="form-control border border-dark" name="mobile" id="mobile" placeholder="Mobile Number" style="font-size: 18px;" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control border border-dark" name="message" rows="5" placeholder="Message" style="font-size: 18px;" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center fs-5"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section>
  <!-- contact form ends here -->

  <!-- fotter section start -->




  <?php
  // include 'footer_mobile.php';
  include 'footer_ipad.php';
  include 'footer_desktop.php';
  include 'copyright.php';
  include 'scrollup.php';
  include 'whatsapp.php';
  ?>

  <!-- <div style="padding:200px"></div> -->
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