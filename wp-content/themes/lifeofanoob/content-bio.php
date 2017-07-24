<?php
// Social and Phil Section
$social_and_phil_title = get_field('social_and_phil_title');
$social_and_phil_name = get_field('social_and_phil_name');
$bio_auszug = get_field('bio_auszug');
$full_bio = get_field('full_bio');
$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$instagram_username = get_field('instagram_username');
$anzahl_leser = get_field('anzahl_leser');
$anzahl_artikel = get_field('anzahl_artikel');
$anzahl_der_kurse = get_field('anzahl_der_kurse');

?>


<!-- LOAN PHIL, SOCIAL, BILD AND BIO
================================================== -->
<section id="instructor">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-lg-8">
            <h2><?php echo $social_and_phil_title; ?> <small><?php echo $social_and_phil_name; ?></small></h2>
          </div>
          <!-- end col -->
          <div class="col-lg-4">

            <?php if( !empty($twitter_username) ): ?>
              <a href="https://twitter.com/<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <?php endif; ?>

            <?php if( !empty($facebook_username) ): ?>
              <a href="https://facebook.com/<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <?php endif; ?>

            <?php if( !empty($instagram_username) ): ?>
              <a href="https://instagram.com/<?php echo $instagram_username; ?>" class="badge social instagram" target="_blank"><i class="fa fa-instagram"></i></a>
            <?php endif; ?>

          </div>
          <!-- end col -->

        </div>
        <!-- row -->

        <p class="lead"><?php echo $bio_auszug; ?><p>

            <?php echo $full_bio; ?>

            <hr>

            <h3>In Zahlen - nur ein Versuch hoffe das füllt sich eines Tages!</h3>
            <div class="row">
              <div class="col-xs-4">
                <div class="num">
                  <div class="num-content">
                    <?php echo $anzahl_leser; ?><span>Leser</span>
                  </div>
                  <!-- num-content -->
                </div>
                <!-- num -->
              </div>
              <!-- end col -->

              <div class="col-xs-4">
                <div class="num">
                  <div class="num-content">
                    <?php echo $anzahl_artikel; ?><span>Artikel</span>
                  </div>
                  <!-- num-content -->
                </div>
                <!-- num -->
              </div>
              <!-- end col -->

              <div class="col-xs-4">
                <div class="num">
                  <div class="num-content">
                    <?php echo $anzahl_der_kurse ?> <span>Kurse</span>
                  </div>
                  <!-- num-content -->
                </div>
                <!-- num -->
              </div>
              <!-- end col -->
            </div>
            <!-- row -->

      </div>
      <!-- end col -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>
<!-- bio -->
