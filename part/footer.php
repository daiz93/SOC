   
  <footer>
    <div class="container footer-links">
      <div class="row">
        <div class="col-lg-3 footer-about">
          <img src="assets/images/footer-logo.png" alt="Fundz" />
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
      <p>Iincididunt ut labore et dolore magna aliqua. Sed ut perspiciatis unde omnis iste natus.</p>
          <ul>
            <li title="Facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li title="Twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li title="Youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li title="LinkedIn"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li title="Google+"><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h5>Projets</h5>
          <ul>
            <li><a href="start">Soumettre</a></li>
            <li><a href="#">Projets encour</a></li>
            <li><a href="#">Les plus aimés</a></li>
            <li><a href="#">Partenaires</a></li>
            <li><a href="#">Comment ça marche ?</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h5>Bon à savoir</h5>
          <ul>
            <li><a href="crowdfunding-financement-participatif-de-projet">Le crowdfunding</a></li>
            <li><a href="actualites">Actualités</a></li>  
            <li><a href="a-propos">A propos</a></li>          
            <li><a href="#">Gallerie</a></li>
            <li><a href="faqs">Faq</a></li>
            
          </ul>
        </div>
        <div class="col-lg-3">
          <h5>Paiement sécurisé</h5>
          <img src="assets/images/paiement-securiser300x188.png" alt="">
      <!--     <ul>            
            <li><a href="#">Qui sommes-nous ?</a></li>
            <li><a href="#">Notre équipe</a></li>
            <li><a href="#">Ils parlent de nous</a></li>
            <li><a href="about">A propos</a></li>
            <li><a href="#">Nous contacter</a></li>
          </ul> -->
        </div>
        <div class="col-lg-2">
          <h5>Nos contacts</h5>
          <ul class="contact-info">
            <li><i class="fa fa-map-marker"></i> <span>Abidjan, Côte d'ivoire<br /> O1BB000</span></li>
            <li><i class="fa fa-phone"></i> <span>+225 79 79 00 51</span></li>
            <li><i class="fa fa-envelope-o"></i> <span>info@saveourcommunity.org</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyrights">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 copyright-text">
            &copy; 2018 <a href="africa-service.com">Africa-service</a> | Touts droits réservés.
          </div>
          <div class="col-lg-6 newsletter">
            S'abonner à la newsletter
            <form action="index" method="post">
              <input type="text" name="email" id="email-id" placeholder="Entrez votre e-mail" />
              <button type="submit"><i class="fa fa-check"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

 <!-- jQuery (necessary for JavaScript plugins) -->
<!-- <script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/migrate.js"></script>
 -->

 <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-3.0.1.min.js"></script>

<!-- Get from code
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.1.min.js"></script> -->



<!-- Bootstrap Javascript -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- Progressbar -->
<script type="text/javascript" src="assets/js/pieprogress/scripts/rainbow.min.js"></script>
<script type="text/javascript" src="assets/js/pieprogress/scripts/jquery-asPieProgress.js"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="assets/js/slider-revolution/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="assets/js/slider-revolution/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Carousels js -->
<script type="text/javascript" src="assets/js/bxslider/jquery.bxslider.min.js"></script>

<!-- Google Maps -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;v=3.exp"></script>
<script type="text/javascript" src="assets/js/maps/scripts/jquery.gmap.min.js"></script>

<!--Custom Scroll Bar -->
<script type="text/javascript" src="assets/js/jquery.scroll.js"></script>

<!-- Grayscale Images -->
<script type="text/javascript" src="assets/js/jquery.hoverizr.min.js"></script>


<!-- Custom Settings -->
<script type="text/javascript" src="assets/js/custom.js"></script>

<!-- Jquery Plugins - (For Selectbox, EventCountDown) -->
<script type="text/javascript" src="assets/js/plugin.js"></script>

<!-- Event Countdown -->
<script type="text/javascript" src="assets/js/countdown.js"></script>

<!-- Retina Script -->
<script type="text/javascript" src="assets/js/retina.min.js"></script>



<!-- js -->
<script type="text/javascript" src="assets/js/js.js"></script>


 
<script>
    /* var myForm = document.getElementById('signform');
    
      myForm.addEventListener('submit', function(e) {
        //  alert('Vous avez envoyé le formulaire !\n\nMais celui-ci a été bloqué pour que vous ne changiez pas de page.');
          e.preventDefault();
  
          var email = $('#email').val();
        var password = sha1(encodeURIComponent($('#password').val()));
        
        $.post("actions/login.php",{email:email,password:password,submit:$('#submit').val()},
         
          function(data)
          {
           // alert("ok");
            if (data.toString().trim()!="success")
            {
              $('#htag').html(data);
              $('#htag').fadeIn(1000);
              //alert(data);
            } 
            else              
            {
             window.location.reload(true);
  
            }
        });
      
  
      });  */
</script>



