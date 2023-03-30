<div class="social-icons">
  <ul style="margin-right:55%;font-size:19px;">
    <li><a href="https://www.facebook.com/profile.php?id=100091049631418"><i class="fab fa-facebook-f" style="color:#426782;"></i></a></li>
    <li style="margin-left:25px;"><a href="https://www.youtube.com/@KingsSanctuary-Resort"><i class="fab fa-youtube" style="color:red;"></i></a></li>
    <li style="margin-left:25px;"><a href="https://www.instagram.com/kings_sanctuary/"><i class="fab fa-instagram" style="color:#d62976;"></i></a></li>
  </ul>
  <div class="contact-info" style="color:whitesmoke; font-size:25px;">
    <i class="fas fa-envelope p-1" ></i>
    <span style="font-size:20px;">vhks2005@gmail.com</span>
    <i class="fa fa-phone-square p-1"></i>
    <span style="font-size:20px;">9945247201</span>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/vh_new.png" alt="Logo" style="margin-right:100px;">
      <img src="images/jungle-lodges.jpg" style="height: 80px;width:80px;margin-right:10px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="font-size:20px;">
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'index') ? 'active' : ''; ?>" style="<?php echo ($page == 'index') ? 'background-color:orange;color:white' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>" style="<?php echo ($page == 'about') ? 'background-color:orange;color:white' : ''; ?>" href="about.php">About</a>
        </li>
        <li class="nav-item" style="padding-right:20px;">
          <a class="nav-link <?php echo ($page == 'accommodation') ? 'active' : ''; ?>" style="<?php echo ($page == 'accommodation') ? 'background-color:orange;color:white' : ''; ?>" href="accommodation.php">Accommodation</a

              </li>
              <li class="nav-item" style="padding-right:20px;">
                <a class="nav-link <?php echo ($page == 'activity') ? 'active' : ''; ?>" style="<?php echo ($page == 'activity') ? 'background-color:orange;color:white' : ''; ?>" href="activity.php"> Activity</a>
              </li>
              <li class="nav-item" style="padding-right:20px;">
                <a class="nav-link <?php echo ($page == 'reservation') ? 'active' : ''; ?>" style="<?php echo ($page == 'reservation') ? 'background-color:orange;color:white' : ''; ?>" href="reservation.php">Reservation</a>
              </li>
              <li class="nav-item" style="padding-right:20px;">
                <a class="nav-link <?php echo ($page == 'facilities') ? 'active' : ''; ?>" style="<?php echo ($page == 'facilities') ? 'background-color:orange;color:white' : ''; ?>" href="facilities.php">Facilities</a>
              </li>
              <li class="nav-item" style="padding-right:20px;">
                <a class="nav-link <?php echo ($page == 'safari') ? 'active' : ''; ?>" style="<?php echo ($page == 'safari') ? 'background-color:orange;color:white' : ''; ?>"  href="safari.php">Safari</a>
              </li>
              <li class="nav-item" style="padding-right:20px;">
                <a class="nav-link <?php echo ($page == 'gallery') ? 'active' : ''; ?>" style="<?php echo ($page == 'gallery') ? 'background-color:orange;color:white' : ''; ?>"  href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item" style="padding-right:20px;">
                <a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" style="<?php echo ($page == 'contact') ? 'background-color:orange;color:white' : ''; ?>" href="contact.php">Contact</a>
              </li>
              
            </ul>
            <img src="images/KS_new.png " style= "margin-left:70px;"  alt=" ">
          </div>
        </div>
      </nav> 
 

 

      <script>
        $(window).scroll(function() {
		if ($(this).scrollTop() >= 500) {
			$('.back-to-top').fadeIn();
			$('.back-to-top').css('display','flex');
		} else {
			$('.back-to-top').fadeOut();
		}
	});

	$(".back-to-top").click(function() {
		$("html, body").animate({scrollTop: 0}, 1000);
	 });
      </script>

