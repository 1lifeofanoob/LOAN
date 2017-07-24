<?php
// Advanced Custom Fields
// https://www.advancedcustomfields.com/resources/
$vorstellungs_foto = get_field('vorstellungs_foto');
$vorstellung_titel = get_field('vorstellung_titel');
$vorstellung_beschreibung = get_field('vorstellung_beschreibung');
$grund_1_titel = get_field('grund_1_titel');
$grund_1_beschreibung = get_field('grund_1_beschreibung');
$grund_2_titel = get_field('grund_2_titel');
$grund_2_beschreibung = get_field('grund_2_beschreibung');
?>

<!-- BOOST YOUR INCOME
================================================== -->
<section id="boost-income">
  <div class="container">

    <div class="section-header">

      <!-- If user uploaded an image -->
      <?php if (!empty($vorstellungs_foto)) : ?>

        <img src="<?php echo $vorstellungs_foto['url'] ?>" alt="<?php echo $vorstellungs_foto['alt']; ?>">

      <?php endif; ?>


      <h2><?php echo $vorstellung_titel; ?></h2>
    </div>
    <!-- section-header -->

    <p class="lead"><?php echo $vorstellung_beschreibung; ?></p>
    <div class="row">
      <div class="col-sm-6">
        <h3><?php echo $grund_1_titel; ?></h3>
        <p><?php echo $grund_1_beschreibung; ?></p>
      </div>
      <!-- end col -->

      <div class="col-sm-6">
        <h3><?php echo $grund_2_titel; ?></h3>
        <p><?php echo $grund_2_beschreibung; ?></p>
      </div>
      <!-- end col -->
    </div>
    <!-- row -->

  </div>
  <!-- container -->
</section>
<!-- boost-income -->
