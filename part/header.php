<header>
    <div class="container">
      <div id="logo">
        <a href="/SOC"><img src="assets/images/logo.png" alt="Fundz" /></a>
        <button type="button" class="collapsed" id="navbar-toggle"><i class="icon fa fa-bars"></i></button>
      </div>
      <div class="nav-header-right">
        <?php include('main-nav.php'); ?>
        <div class="header-right">
          <div class="header-right-btns">
            <ul>
              <li class="login-panel">
                <a href="#login">Se connecter</a><span> </span>
                <div class="dropdown-login">
                  <div class="arrow"></div>
                  <div class="reverse"></div>
                  <div class="box-reverse left"></div>
                  <div class="box-reverse right"></div>
                  <form name="signform" id="signform" action="" method="">
                    <div class="form-group">
                      <h3>Se connecter</h3>
                      <button class="btn btn-facebook"> <i class="fa fa-facebook"></i> &nbsp; Se connecter avec Facebook </button>
                      <hr>
                      <!-- <img src="assets/images/or.png" alt="OR" /> -->
                      <p style="text-align: center">OU</p>
                      <div id="htag"></div>
                      <input id="email" name="email" type="text" placeholder="Adresse e-mail">
                      <input id="password" id="password" type="text" placeholder="Mot de passe">
                    </div>
                    <span class="text-gray remember"><input type="checkbox" id="remember" value=""> <label for="remember">Se souvenir</label></span>
                    <input type="submit" name="submit" id="submit" class="btn btn-sigin" value="Connexion !"> </input>
                    
                    
                    <br style="clear:both;">
                    <hr><br>
                    <a class="link" href="#"> Mot de passe oublié ?</a><span class="text-gray">  </span> <a class="link" href="subscribe.php" > S'inscrir</a>
                  </form>
                </div>
              </li>
              <li><a href="subscribe.php" class="btn btn-4 blue">S'inscrir</a></li>
            </ul>
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

  


