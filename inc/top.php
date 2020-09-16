<header class="shadow_bottom">
  <div id="nav" class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-sm navbar-dark">
          <a class="navbar-brand" href="index.php">
            <img class="logo" src="imgs/logo.svg" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="las la-bars"></i>
          </button>
          <div class="collapse navbar-collapse j_end a_center" id="collapsibleNavbar">
            <ul class="navbar-nav a_center">   
              <li class="nav-item">
                <a class="nav-link <?=$page == 'ic'?'active':'' ?>" href="http://institutocrescer.org.br/" target="_blank">Instituto Crescer</a>
              </li>    
              <li class="nav-item">
                <a class="nav-link <?=$page == 'contact'?'active':'' ?>" href="index.php#contact">Contato</a>
              </li>    
            </ul>
          </div>  
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- OVERLAY NAV -->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <ul class="list_overlay">
      <li><a href="http://institutocrescer.org.br/" class="nav-link" onclick="closeNav()">Instituto Crescer</a></li>
      <li><a href="index.php#contact" class="nav-link" onclick="closeNav()">Contato</a></li>
    </ul>
  </div>
</div><!-- OVERLAY NAV END-->