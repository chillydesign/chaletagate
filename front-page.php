<?php get_header(); ?>
<?php $tdu = get_template_directory_uri(); ?>

<header>
  <div class="container">
    <nav class="header_nav">
      <div class="container">
        <ul>
          <?php chilly_nav('header_nav'); ?>
        </ul>
      </div>
    </nav>
  </div>

</header>



<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <!-- article -->
  <article id="post-<?php the_ID(); ?>">

    <section id="map_image">
      <img src="<?php echo $tdu; ?>/img/plan-geneve.jpg" alt="plan de Genève">
      <?php include('img/alertes-geneve.svg'); ?>
      <div class="top_content">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h1><img src="<?php echo $tdu; ?>/img/logo-sentinelle-ge.png" alt="Logo Sentinelle Genève"><span>Sentinelle-GE</span></h1>
            </div>
            <div class="col-sm-6">
              <h2>
                Chaque mois 600 demandes d’autorisations de construire sont déposées à Genève. Nous vous avertissons gratuitement si l’une d’elle est près de chez vous.
              </h2>
              <a class="yellow_button" href="#consulter">Consulter les autorisations près de chez vous</a>
            </div>
          </div>
        </div>

      </div>

    </section>

    <!-- End of map image section -->



    <section id="fonctionnement">
      <div class="container">
        <h2>Comment ça marche ?</h2>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="icon_blob blob1">
              <img src="<?php echo $tdu;?>/img/icon-marker.svg" alt="" />
              <p>Indiquez une adresse</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon_blob blob2">
              <img src="<?php echo $tdu;?>/img/icon-search.svg" alt="" />
              <p>Affichez les autorisations à proximité </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon_blob blob3">
              <img src="<?php echo $tdu;?>/img/icon-consultation.svg" alt="" />
              <p>Consultez le détail des autorisations qui vous intéressent</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon_blob blob4">
              <img src="<?php echo $tdu;?>/img/icon-mailing.svg" alt="" />
              <p>Recevez des alertes quand une nouvelle demande est déposée à proximité</p>
            </div>
          </div>
        </div>
      </div>


    </section>



    <section id="consultation">
      <div class="container">
        <h2>Consultez les autorisations près de chez vous</h2>
        <div class="row">
          <div class="col-sm-5">
            <div id="search1">
              <h3>1. Votre recherche</h3>
              <form action="/action_page.php">
                <input type="text" id="adresse" placeholder="Saisissez votre adresse">
                <p class="explanation">ou cliquez sur la carte pour choisir la position</p>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="radius">Rayon de consultation</label>
                  </div>
                  <div class="col-sm-5">
                    <select name="radius" id="radius">
                      <option value="small">50m</option>
                      <option value="medium">100m</option>
                      <option value="large">150m</option>
                    </select>
                  </div>
                </div>
                <h6><a class="yellow_button" href="#">Afficher</a></h6>
                <!-- <input type="submit" value="Afficher"> -->
              </form>
            </div>

            <div id="search2">
              <div class="grey_section">
                <h3>1. Votre recherche</h3>
                <a href="#">Modifier</a>
                <p>6 rue du Lustucru, 1202 Genève<br>Rayon de recherche : 50m</p>
              </div>

              <h3>2. Autorisations en cours</h3>

              <p><strong>Nous avons détecté 4 autorisations en cours dans un rayon de 200m autour de votre propriété :</strong></p>

              <ul>
                <li><strong>Rue Lustucru 14 </strong><span class="greyitalics">dossier déposé le 12/12/2020</span></li>
                <li><strong>Rue des Potimarrons 37 </strong><span class="greyitalics">dossier déposé le 12/12/2020</span></li>
                <li><strong>Route Çabroute 2 </strong><span class="greyitalics">dossier déposé le 12/12/2020</span></li>
                <li><strong>Avenue des marmottes 42 </strong><span class="greyitalics">dossier déposé le 12/12/2020</span></li>
              </ul>

              <h6><a class="yellow_button" href="#">Consulter les autorisations</a></h6>

            </div>

          </div>
          <div class="col-sm-7">
            <img src="<?php echo $tdu; ?>/img/example-map.jpg" alt="">
          </div>
        </div>
      </div>
    </section>






    <?php include('section-loop.php'); ?>


    <div class="container">
      <?php the_content(); ?>
    </div>



  </article>
  <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article class="container">

    <h2><?php _e( 'Sorry, nothing to display.', 'webfactor' ); ?></h2>

  </article>
  <!-- /article -->

<?php endif; ?>






<?php get_footer(); ?>
