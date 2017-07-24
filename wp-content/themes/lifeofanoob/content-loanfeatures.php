<?php
$loan_features_section_image = get_field('loan_features_section_image');
$loan_features_section_title = get_field('loan_features_section_title');
$loan_features_section_body = get_field('loan_features_section_body');
?>

<!-- LOAN FEATURES
================================================== -->
<section id="course-features">
  <div class="container">

    <div class="section-header">

      <!-- If user uploaded an image -->
      <?php if (!empty($loan_features_section_image)) : ?>

        <img src="<?php echo $loan_features_section_image['url'] ?>" alt="<?php echo $loan_features_section_image['alt']; ?>">

      <?php endif; ?>

      <h2><?php echo $loan_features_section_title; ?></h2>

      <!-- Wenn Nutzer einen Body Text haben möchte -->
      <?php if (!empty($loan_features_section_body)) : ?>

        <p class="lead"><?php echo $loan_features_section_body; ?></p>

      <?php endif; ?>

    </div>
    <!-- section-header -->

    <div class="row">

      <?php $loop = new WP_Query( array(
        'post_type' => 'loan_features',
        'orderby' => 'post_id',
        'order' => 'ASC'
      ) ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-sm-2">
          <i class="<?php the_field('loan_features_icon'); ?>"></i>
          <h4><?php the_title(); ?></h4>
        </div>
        <!-- end col -->

      <?php endwhile; wp_reset_query();?>

    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>
<!-- loan-features -->
