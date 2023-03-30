<button onclick="scrollToTop()" class="scroll-to-top" id="scrolltotop">
    <i class="fas fa-arrow-up" ></i>
  </button>


  <script>
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}


</script>
 <!-- scrollToTop end -->


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   document.getElementById('scrolltotop').style.display="none";
  $(window).scroll(function() {
		// code for scroll up icon 
    
    if ($(this).scrollTop() >= 500) {
       
       document.getElementById('scrolltotop').style.display="block";
   } else {
   
     document.getElementById('scrolltotop').style.display="none";
   }
	});

</script>

<!-- code for card animation -->
<script>
  $(document).ready(function() {
    var lastScrollTop = 0;
    $(window).scroll(function() {
      var windowBottom = $(this).scrollTop() + $(this).innerHeight();
      var elementTop = $('#myDiv').offset().top;
      var elementHeight = $('#myDiv').outerHeight();
      
      if (elementTop + elementHeight >= $(this).scrollTop() && elementTop <= windowBottom) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop){
          // Scrolling down
          $('#myDiv').stop().animate({opacity: 1}, 500);
        } else {
          // Scrolling up
          $('#myDiv').stop().animate({opacity: 0}, 500);
        }
        lastScrollTop = st;
      }
    });
  });
</script>
