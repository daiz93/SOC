<form class="n-form" name="signform" id="signform" action="" method="">
    <div class="form-group">
        <h3>Se connecter</h3>
        <button class="btn btn-facebook"> <i class="fa fa-facebook"></i> &nbsp; Se connecter avec Facebook </button>
        <hr>
        <!-- <img src="assets/images/or.png" alt="OR" /> -->
        <p style="text-align: center">OU</p>
        <div id="htag">

        </div>
    
        <input class="form-control" id="email" name="email" type="text" value="" placeholder="Adresse e-mail">
        <input class="form-control" id="password" id="password" type="text" value="" placeholder="Mot de passe">
    </div>
    <div class="row">
    <div class="col-md-6">
        <span class="text-gray remember"><input type="checkbox" id="remember" value=""> <label for="remember">Se souvenir</label></span>
    </div>
    <div class="col-md-6">
        <input type="submit" name="submit" id="submit" class="btn btn-sigin" value="Connexion !" onclick="document.getElementById('email').focus()"> </input>
    </div>

    <br style="clear:both;">
    <hr><br>
    <a class="link" href="#"> Mot de passe oublié ?</a><span class="text-gray">  </span> <a class="link" href="subscribe.php" > S'inscrir</a>
 </form>
