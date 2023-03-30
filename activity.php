<!DOCTYPE html>
<html lang="en">
<?php
include 'links2.php';
?>

<body>
    <?php
     $page = 'activity';
    include 'navbar2.php';
    ?>




    <div class="container" style="padding-top:50px" data-aos="slide-right">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav">

                    <a class="nav-link btn-primary btn-border btn-lg fs-5 mr-3 mt-2" style="border-radius:5px;" href="#Day_one">Day one</a>
                    <a class="nav-link btn-primary btn-border btn-lg fs-5 mr-3 mt-2" style="border-radius:5px;" href="#Day_two">Day two </a>

                </nav>
             </div>
            </div>
        </div>

        <section id="Day_one">
            <div class="container pb-5 pt-5" data-aos="fade-left">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="pb-5">DAY'S ACTIVITY</h2>

                        <table class="table table-striped fs-5" style="font-family:Open Sans, sans-serif;">
                            <tbody>

                                <tr>
                                    <td colspan="2"><strong>Day One </strong></td>
                                </tr>
                                <tr>
                                    <td>12:30 Noon </td>
                                    <td>Check in</td>
                                </tr>
                                <tr>
                                    <td>01:30 PM - 03:00 PM: </td>
                                    <td>Freshen up and have the sumptuous lunch spread for you at the Gol Ghar.</td>
                                </tr>
                                <tr>
                                    <td>03:15 PM: </td>
                                    <td>Tea/ Coffee, leave for a jeep / bus safari into the Ngarahole National Park.</td>
                                </tr>
                                <tr>
                                    <td>03:30 PM - 06:30 PM: </td>
                                    <td>Drive for a jeep / bus safari into the Nagarahole National Park.</td>
                                </tr>

                                <tr>
                                    <td>07:30 PM: </td>
                                    <td>Wildlife film show at the Gol Ghar / dining hall</td>
                                </tr>

                                <tr>
                                    <td>08:30 PM - 10:00 PM: </td>
                                    <td>Buffet Dinner at the Gol Ghar & Bonfire</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>



        <section id="Day_two">
            <div class="container" data-aos="fade-right">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped fs-5" style="font-family:Open Sans, sans-serif;">
                            <tbody>
                                <tr>
                                    <td colspan="2"><strong>Day Two </strong></td>
                                </tr>
                                <tr>
                                    <td>05:45 AM: </td>
                                    <td>Wake-up call, Tea Coffee</td>
                                </tr>
                                <tr>
                                    <td>06:15 AM - 09:15 AM: </td>
                                    <td>Drive into the Nagarahole National Park for Safari or guided nature walk or bird watching.</td>
                                </tr>
                                <tr>
                                    <td>09:15 AM: </td>
                                    <td>Get back to the lodge in time for freshening up and breakfast.</td>
                                </tr>
                                <tr>
                                    <td>11.00 AM</td>
                                    <td>Time to leave with sweet memories. </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

       


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