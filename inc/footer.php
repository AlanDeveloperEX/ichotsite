<div id="pre_footer">
  <div class="container">
    <div class="row pt60 pb60">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-4 text-center">
            <img src="imgs/logo_rodape.png" alt="">
            <div class="row pt20 pb20">
              <div class="col-md-3">
                <a href="https://www.facebook.com/paginainstitutocrescer" target="_blank">
                  <i class="lab la-facebook"></i>
                </a>
              </div>
              <div class="col-md-3">
                <a href="https://www.youtube.com/user/InstCrescer" target="_blank">
                  <i class="lab la-youtube"></i>
                </a>
              </div>
              <div class="col-md-3">
                <a href="https://www.linkedin.com/company/instituto-crescer" target="_blank">
                  <i class="lab la-linkedin"></i>
                </a>
              </div>
              <div class="col-md-3">
                <a href="https://twitter.com/instcrescer" target="_blank">
                  <i class="lab la-twitter"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <h6>Sede</h6>
            <hr>
            <p>Rua Cubatão, 929 cj 101<br>
            CEP 04013-043 - Vila Mariana<br>
            São Paulo - SP - Brasil
            </p>
          </div>
          <div class="col-md-4 text-center">
            <h6>Contato</h6>
            <hr>
            <p>+55 11 4550-3910</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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