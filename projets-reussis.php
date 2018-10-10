<?php
// la variable est definie dans part/head et défini le titre
 $pageTitle ='Save our communty - Projets réussis'?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
  <?php include ('part/head.php'); ?>
</head>

<body>
<div class="wrapper"> 
  <!-- Header -->
  <header>
    <?php include('part/header-2.php'); ?>
  </header>
  
  <!-- Header Bottom -->
  <section class="header-bottom">
    <article>
      <div class="container">
        <h1>Projets</h1>
      </div>
    </article>
  </section>
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-6">
          
        </div>
        <div class="col-lg-6 align-right sub-menu">
          <ul>
            <!--<li><a href="projects-2.html">Trending</a></li>
            <li><a href="projects-2.html">Final Countdown</a></li>
            <li><a href="projects-2.html">New This Week</a></li>
            <li><a href="projects-2.html">Most Funded</a></li>-->
            <li id="filter-toggle"><i class="icon-search-projects"></i><strong>Rechercher</strong></li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  <section class="white filter">
    <article class="container">
      <form action="projects-2.html">
        <fieldset>
          <div class="form-group">
            <span class="filter-title">Chercher un projet</span>
          </div>
          <div class="form-group">
            <label for="categories"><strong>Catégories</strong></label>
            <select id="categories" class="form-control arrow-down">
              <option value="">Toutes les catégories</option>
              <option value="Animals">Animals</option>
              <option value="Community">Community</option>
              <option value="Education">Education</option>
              <option value="Environment">Environment</option>
              <option value="Food">Food</option>
              <option value="Health">Health</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Pays"><strong>Pays</strong></label>
            <input type="text" class="form-control" id="Pays" placeholder="Pays name">
          </div>
          <div class="form-group">
            <label for="Ville"><strong>Ville</strong></label>
            <select id="Ville" class="form-control arrow-down">
              <option value="">All Countries</option>
              <option value="Australia">Australia</option>
              <option value="Canada">Canada</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="form-group">
            <label><strong>Pourcentage</strong></label>
            <div class="radio-inputs">
              <div class="form-group">
                <input type="radio" value="all" name="percent-funded" id="all" checked="checked" >
                <label for="all">All</label>
              </div>
              <div class="form-group">
                <input type="radio" value="50-75" name="percent-funded" id="5075" >
                <label for="5075">50% - 75%</label>
              </div>
              <div class="form-group">
                <input type="radio" value="75-100" name="percent-funded" id="75100" >
                <label for="75100">75% - 100%</label>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-4 green" style="margin-top: 32px;">Lancer</button>
        </fieldset>
      </form>
    </article>
  </section>
  
  <!-- Page Content -->
  <section class="gray">
    <article class="container projects-page" id="popular">
      <div class="row">
      
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.html">View Details</a></figcaption>
              <img src="assets/images/popular_1.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Help us to save the nature <span class="line-green"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_1.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="70" data-barcolor="#34cc99" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.html">View Details</a></figcaption>
              <img src="assets/images/popular_2.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Charity hospital <span class="line-yellow"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_2.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="55" data-barcolor="#f2d031" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
             <div class="popular-details">
                <ul>
                 <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.html">View Details</a></figcaption>
              <img src="assets/images/popular_3.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">We Can Build Our Church <span class="line-blue"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_3.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="65" data-barcolor="#3298c9" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.html">View Details</a></figcaption>
              <img src="assets/images/popular_4.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Flood affected people <span class="line-red"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_4.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="80" data-barcolor="#ef6342" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.html">View Details</a></figcaption>
              <img src="assets/images/popular_1.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Help us to save the nature <span class="line-green"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_1.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="100" data-barcolor="#34cc99" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.html">View Details</a></figcaption>
              <img src="assets/images/popular_2.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Charity hospital <span class="line-yellow"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_2.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="60" data-barcolor="#f2d031" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
             <div class="popular-details">
                <ul>
                 <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.html">View Details</a></figcaption>
              <img src="assets/images/popular_3.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">We Can Build Our Church <span class="line-blue"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_3.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="35" data-barcolor="#3298c9" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.html">View Details</a></figcaption>
              <img src="assets/images/popular_4.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Flood affected people <span class="line-red"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_4.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#ef6342" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        
        <div class="clear"></div>
        <div class="popular-btn"> <a href="#">Plus de projets</a> </div>
      </div>
    </article>
  </section>
  
  <section class="send-us">
    <article class="container">
      <h3>Have a Community Project in Need of Funding?</h3>
      <a href="start.html" class="btn btn-3 green">Send to us</a>
    </article>
  </section>
  
     <?php include('footer.php'); ?>
  </div>

</body>
</html>