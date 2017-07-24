<?php
$loan_image = get_field('loan_image');
$was_ist_loan_title = get_field('was_ist_loan_title');
$loan_section_body = get_field('loan_section_body');
?>

<!-- WAS GENAU IST LOAN
================================================== -->
<section id="who-benefits">
  <div class="container">

    <div class="section-header">

      <!-- If user uploaded an image -->
      <?php if (!empty($loan_image)) : ?>

        <img src="<?php echo $loan_image['url'] ?>" alt="<?php echo $loan_image['alt']; ?>">

      <?php endif; ?>

      <h2><?php echo $was_ist_loan_title; ?></h2>
    </div>
    <!-- section-header -->

    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">

        <?php echo $loan_section_body; ?>

      </div>
      <!-- end col -->
    </div>
    <!-- row -->

  </div>
  <!-- container -->
</section>
<!-- who-benefits -->
