<?php
// Ziele Section
$ziele_title = get_field('ziele_title');
$ziele_body = get_field('ziele_body');
?>

<!-- ZIELE
================================================== -->
<section id="project-features">
  <div class="container">

    <h2><?php echo $ziele_title; ?></h2>
    <p class="lead"><?php echo $ziele_body; ?></p>

    <div class="row">

      <?php $loop = new WP_Query( array(
        'post_type' => 'ziele_feature',
        'orderby' => 'post_id',
        'order' => 'ASC'
      ) ); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-sm-4">

          <!-- Hier wird gecheckt ob Bild vorhanden ist -->
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            } //else {
                // hier wäre es möglich mit einem else ein statisches bild anzeigen zu lassen
            // }
          ?>

          <!-- the_title(); bezieht sich in diesem fall auf den post_type der oben
          im array als ziele_feature deklariert wurde -->
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
        <!-- col -->

      <?php endwhile; wp_reset_query();?>

    </div>
    <!-- row -->

  </div>
  <!-- container -->
</section>
<!-- ziele -->
