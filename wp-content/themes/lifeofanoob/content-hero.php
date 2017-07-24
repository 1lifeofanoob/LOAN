<?php
// Custom Fields

$html_css_skills = get_post_meta( 7, 'html_css_skills', true);
$wordpress_skills = get_post_meta( 7, 'wordpress_skills', true);
$javascript_skills = get_post_meta( 7, 'javascript_skills', true);
$button_text = get_post_meta( 7, 'button_text', true);
$button_blog_url = get_post_meta( 7, 'button_blog_url', true);
?>



<!-- HERO
    ================================================== -->
	<section id="hero" data-type="background" data-speed="5">
		<article>
			<div class="container clearfix">
				<div class="row">

					<div class="col-sm-5">
						<img src="<?php bloginfo ('stylesheet_directory') ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
					</div>
					<!-- col -->

					<div class="col-sm-7 hero-text">
						<h1><?php bloginfo('name'); ?></h1>
						<p class="lead"><?php bloginfo('description'); ?></p>

						<div id="price-timeline">
							<div class="price active">
								<h4>HTML & CSS<small>Skill Level</small></h4>
								<span><?php echo $html_css_skills; ?></span>
							</div>
							<!-- end price -->
							<div class="price">
								<h4>WordPress<small>Skill Level</small></h4>
								<span><?php echo $wordpress_skills; ?></span>
							</div>
							<!-- end price -->
							<div class="price">
								<h4>JavaScript<small>Skill Level</small></h4>
								<span><?php echo $javascript_skills; ?></span>
							</div>
							<!-- end price -->
						</div>
						<!-- price-timeline -->

						<p><a class="btn btn-lg btn-danger" href="<?php echo $button_blog_url; ?>" role="button"><?php echo $button_text; ?></a></p>
					</div>
					<!-- col -->

				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</article>
	</section>
