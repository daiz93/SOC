<!DOCTYPE HTML>
<html lang="en">
<head>
<?php include('part/head.php'); ?>
</head>

<body>
<div class="wrapper"> 
  <!-- ************************ Header ************************ -->
  <header>
    <?php include('part/header.php'); ?>
  </header>
  
  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <div class="container"><h3>Démarrer votre projet</h3></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp; You are here:</li>
            <li><a href="index.html">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li><a href="start.html">Start</a></li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container">
      
      <!-- ************************ Form Area Start ************************ -->
      
      <div class="start-project">
        <div class="title">
          <ul>
            <li data-link="basic-data" class="current"><a href="#"><i class="fa fa-pagelines"></i><span>Informations du projet</span></a></li>
            <li data-link="social-media" class=""><a href="#"><i class="fa fa-link"></i><span>Vos adresses web</span></a></li>
            <li data-link="add-perks" class=""><a href="#"><i class="fa fa-tags"></i><span>Contre parties</span></a></li>
            <li data-link="image-vidoe" class=""><a href="#"><i class="fa fa-file-image-o"></i><span>Image et vidéos</span></a></li>
          </ul>
        </div>
        <hr>
        <div class="start-content">
          <form action="start.html" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Titre du projet" name="title">
                </div>
                <div class="form-right">
                  <input type="text" value="" class="form-control" placeholder="Montant à collecter" name="money">
                </div>
                <div class="clear"></div>
              </div>
            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Phrase d'acroche" name="tagline">
                </div>
                <div class="form-right">
                  <select class="form-control arrow-down" name="category">
                    <option value="">Selectionné une catégorie</option>
                    <option value="Animals">Animals</option>
                    <option value="Community">Community</option>
                    <option value="Education">Education</option>
                    <option value="Environment">Environment</option>
                    <option value="Food">Food</option>
                    <option value="Health">Health</option>
                  </select>
                </div>
                <div class="clear"></div>
              </div>
            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Deadline - Funding ends" name="date">
                </div>
                <div class="form-right">
                    <select class="form-control arrow-down" name="recipient">
                    <option value="">Bénéficaires</option>
                    <option value="An Individual">An Individual</option>
                    <option value="A Business">A Business</option>
                    <option value="A Nonprofit">A Nonprofit</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <div class="form-left selectimage" id="imguploadbasic-1">
                  <input type="text" value="" class="form-control" placeholder="Project Image">
                  <button type="button" class="imageUploadBtn">Photo de couverture</button>
                  <input type="file" name="basicimg[]" />
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <textarea name="description" class="form-control" placeholder="Résumé"></textarea>
              </div>
              <hr>

              <div class="form-group">
                <textarea name="details" class="form-control" placeholder="Détails du projet"></textarea>
              </div>
              
              <div class="next-btn"><button type="button" class="btn btn-4 blue" data-link="social-media" onClick="moveform(this,'social-media')">Suivant</button></div>
              
            </div>
            
            <div id="social-media" class="form-wizard">
              
              <div class="form-group">
                <div class="form-left">
                  <input type="url" value="" class="form-control" placeholder="Facebook" name="fb">
                </div>
                <div class="form-right">
                  <input type="url" value="" class="form-control" placeholder="Twitter" name="tw">
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <div class="form-left">
                  <input type="url" value="" class="form-control" placeholder="Youtube" name="yt">
                </div>
                <div class="form-right">
                  <input type="url" value="" class="form-control" placeholder="Site web" name="web">
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 blue" data-link="basic-data" onClick="moveform(this,'basic-data')">Précédent</button>
                <button type="button" class="btn btn-4 blue" data-link="add-perks" onClick="moveform(this,'add-perks')">Suivant</button>
              </div>
            </div>
            
            <div id="add-perks" class="form-wizard">
              <div id="perk-elements">
                <div class="form-group">
                  <div class="form-left">
                    <input type="text" value="" class="form-control" placeholder="Libellé" name="perk-title[]">
                  </div>
                  <div class="form-right">
                    <input type="text" value="" class="form-control" placeholder="Montant minimal" name="price[]">
                  </div>
                  <div class="clear"></div>
                </div>
                
                <div class="form-group">
                  <div class="form-left">
                    <input type="text" value="" class="form-control" placeholder="Quantité" name="perk-title[]">
                  </div>
                  <div class="form-right">
                    <input type="text" value="" class="form-control" placeholder="Date d'envoie prévisionnelle" name="senddate[]">
                  </div>
                  <div class="clear"></div>
                </div>
              
                <div class="form-group">
                  <textarea name="perk-description[]" class="form-control" placeholder="Description"></textarea>
                </div>
              </div>
              
              <div id="add-more-perks"></div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 green add-perk-btn" onClick="addperk()">Ajouter</button>
                <button type="button" class="btn btn-5 blue" data-link="social-media" onClick="moveform(this,'social-media')">Précédent</button>
                <button type="button" class="btn btn-4 blue" data-link="image-vidoe" onClick="moveform(this,'image-vidoe')">Suivant</button>
                <div class="clear"></div>
              </div>
            </div>
            
            <div id="image-vidoe" class="form-wizard">
              <div class="form-group">
                <div class="select-gallery-type">
                  <ul>
                    <li data-galerytype="vid" class="active">Vidéo</li>
                    <li data-galerytype="img">Images</li>
                  </ul>
                </div>
              </div>
              
              <div id="video-inputs" class="imgORvid">
                <div class="form-group">
                  <div class="form-left" style="width:100%;">
                    <input type="text" value="" class="form-control" placeholder="Lien de votre vidéo" name="title">
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              
              <div id="images-inputs" class="imgORvid">
                <div class="form-group">
                  <div id="image-field-cnt">
                    <div class="form-left selectimage" id="imgupload-1">
                      <input type="text" value="" class="form-control" placeholder="Sélectionner une image sur mon disque">
                      <button type="button" class="imageUploadBtn">Sélectionner</button>
                      <input type="file" name="galleryimg[]" />
                    </div>
                  </div>
                  <div id="add-image-field-cnt"><input type="hidden" value="1" id="imgNumber" name="imgNumber" ></div>
                  <div class="clear"></div>
                  <button type="button" class="btn btn-5 green add-perk-btn add-imgbtn" onClick="addimage()">Ajouter</button>
                </div>
              </div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 blue" data-link="add-perks" onClick="moveform(this,'add-perks')">Précédent</button>
                <button type="submit" class="btn btn-4 blue">Valider</button>
              </div>
            </div>
            
          </form>
        </div>
      </div>
      
      <!-- ************************ Form Area End ************************ -->
      
    </article>
  </section>
  
  <!-- ************************ Footer ************************ -->
  
    
    <!-- ************************ Footer Links ************************ -->
   <?php include('part/footer.php'); ?>
  </div>


</body>
</html>