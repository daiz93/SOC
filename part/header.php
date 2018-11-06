<header>
    <div class="container">
      <div id="logo">
        <a href="/SOC"><img src="assets/images/logo.png" alt="SOC" /></a>
        <button type="button" class="collapsed" id="navbar-toggle"><i class="icon fa fa-bars"></i></button>
      </div>
      <div class="nav-header-right">
        <?php include('main-nav.php'); ?>
        <div class="header-right">
          <div class="header-right-btns">
          <?php if (!isset($_SESSION['user'])): ?>
             <ul>
              <li class="login-panel">
                <a href="#login">Se connecter</a><span> </span>
                <div class="dropdown-login">
                  <div class="arrow"></div>
                  <div class="reverse"></div>
                  <div class="box-reverse left"></div>
                  <div class="box-reverse right"></div>
                  
                
                  <?php include('part/connexion.php') ; //inclure le formulaire de connexion ?>


                </div>
              </li>
              <li><a href="inscription.php" class="btn btn-4 blue">S'inscrir</a></li>
            </ul>
          <?php else: ?>
            <a href="disconnect.php" class="btn btn-4 blue">Se déconnecter</a>
          <?php endif ?>
           
          </div>
          <div class="search-box border-right">
            <form method="get" action="index.php">
              <input type="text" value="Search Here" name="s" id="keyword">
              <span class="icon fa fa-search transition-color" title="Search"></span>
            </form>
          </div>
        </div>
      </div>
    </div>




    </header>

  


