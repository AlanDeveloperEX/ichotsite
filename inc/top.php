<header class="shadow_bottom">
  <div id="nav" class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-sm navbar-dark">
          <a class="navbar-brand" href="index.php">
            <img class="logo" src="imgs/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="las la-bars"></i>
          </button>
          <div class="collapse navbar-collapse j_end a_center" id="collapsibleNavbar">
            <ul class="navbar-nav a_center">
              <li class="nav-item">
                <a class="nav-link <?=$page == 'about'?'active':'' ?>" href="index.php#about">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=$page == 'sign'?'active':'' ?>" href="inscricao.php">Inscrição</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=$page == 'doubts'?'active':'' ?>" href="duvidas.php">Dúvidas</a>
              </li>    
              <li class="nav-item">
                <a class="nav-link <?=$page == 'ic'?'active':'' ?>" href="http://institutocrescer.org.br/" target="_blank">Instituto Crescer</a>
              </li>    
              <li class="nav-item">
                <a class="nav-link <?=$page == 'contact'?'active':'' ?>" href="index.php#contact">Contato</a>
              </li>    
            </ul>
            <a id="access" class="btn btn-dark" href="http://cursos.institutocrescer.org.br/login/index.php" target="_blank">ACESSE AO CURSO</a>
          </div>  
        </nav>
      </div>
    </div>
  </div>
</header>
<a class="btn btn-dark nav_side" href="" target="_blank">ACESSE AO CURSO</a>
<!-- OVERLAY NAV -->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <ul class="list_overlay">
      <li><a href="" class=" " onclick="closeNav()">Sobre</a></li>
      <li><a href="" class=" " onclick="closeNav()">Inscrição</a></li>
      <li><a href="" class=" " onclick="closeNav()">Dúvidas</a></li>
      <li><a href="" class=" " onclick="closeNav()">Instituto Crescer</a></li>
      <li><a href="" class=" " onclick="closeNav()">Contato</a></li>
    </ul>
  </div>
</div><!-- OVERLAY NAV END-->