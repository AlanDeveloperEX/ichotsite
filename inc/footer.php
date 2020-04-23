<footer>
  <div id="footer" class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        ©Copyright <?=date('Y').' '.$app?> Todos os direitos reservados
      </div>
    </div>
  </div>
</footer>
<a class="nav-link" id="to_top" href="#top">
  <i class="las la-angle-up"></i>
</a>
<script src="js/jquery.3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.js"></script>
<!-- NAV FLOW -->
<script>
	function openNav() {
		document.getElementById("myNav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("myNav").style.width = "0%";
    }

    function openModal(id){
        $('#modalServices_'+id).modal('show'); 
    }
</script>

    <!-- SCROLL APPLICATIONS  -->
<script>
    $(document).ready(function(){
        $(window).scroll(function() { // check if scroll event happened
            if ($(document).scrollTop() > 70) { // check if user scrolled more than 50 from top of the browser window
                $('header').addClass('top_fixed')
            } else {
                $('header').removeClass('top_fixed')
            }
        });
    });
</script>

<!-- SCROLL ANIMATION  -->
<script>
    $(document).ready(function(){
        $("a.nav-link").on('click', function(event) {
            if (this.hash !== "") {
                // event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top -80
                }, 800, function(){
                    // window.location.hash = hash;
                });
            }
        });
    });
</script>

<!-- BACK TO TOP  -->
<script>
//Get the button
var mybutton = document.getElementById("to_top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }
</script>
<!-- WOW AND ANIMATED TO SCROLL EFECTS  -->
<script>
  var wow = new WOW(
    {
      boxClass:     'wow',      // animated element css class (default is wow)
      animateClass: 'animated', // animation css class (default is animated)
      offset:       300,          // distance to the element when triggering the animation (default is 0)
      mobile:       true,       // trigger animations on mobile devices (default is true)
      live:         true,       // act on asynchronously loaded content (default is true)
      callback:     function(box) {
        // the callback is fired every time an animation is started
        // the argument that is passed in is the DOM node being animated
      },
      scrollContainer: null,    // optional scroll container selector, otherwise use window,
      resetAnimation: true,     // reset animation on end (default is true)
    }
  );
  wow.init();
</script>