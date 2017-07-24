<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Life_of_a_Noob
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
    	<h1 class="page-title">Ops diese Seite konnte nicht gefunden werden!</h1>
    </section>

	<div class="container">
		
		<div id="primary" class="row">
				
			<main id="content" class="col-sm-8">
			
				<div class="error-404 not-found">
					
					<div class="page-content">
						
						<h2>Keine Panik hier gehts zurück oder weiter :)</h2>
						
						<!-- RESOURCES
						================================================== -->
						<h3>Ressourcen</h3>
						<p>Suchst du vielleicht nach einer bestimmten Technologie?</p>
						
						<?php $loop = new WP_Query( array( 'post_type' => 'ressource', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>
						
						<div class="resource-row clearfix">
							
							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							
							<?php
								$ressourcen_bild = get_field('ressourcen_bild');
                				$ressourcen_url = get_field('ressourcen_url');
                				$button_text = get_field('button_text');
							?>
							
							<div class="resource">
	
								<img src="<?php echo $ressourcen_bild[url]; ?>" alt="<?php echo $ressourcen_bild[alt]; ?>">
								
								
								<h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
								<?php the_excerpt(); ?>
					    	
								<?php if( !empty($button_text) ) : ?>
								<a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
								<?php endif; ?>
							</div><!-- resource -->
							
							<?php endwhile; ?>
							
						</div><!-- resource-row -->
						
						<!-- CATEGORIES
						================================================== -->
						<h3>Kategorien</h3>
						<p>...oder eine beliebte Kategorie?</p>
						
						<div class="widget widget_categories">
							<h4 class="widget-title">Die Beliebtesten Kategorien</h4>
							<ul>
								<?php
									wp_list_categories( array (
										
										'orderby'	=> 'count',
										'order'		=> 'DESC',
										'show_count'=> 1,
										'title_li'	=> '',
										'number'	=> 10
										
									) );
								?>
							</ul>
						</div><!-- .widget -->
						
						<!-- ARCHIVES
						================================================== -->
						<h3>Archiv</h3>
						<p>Durchstöber unser Archiv</p>
						<?php the_widget( 'WP_Widget_Archives', 'title=Unser Archiv', 'before_title=<h4 class="widgettitle">&after_title=</h4>' ); ?>
						
						<p>...oder einfach zurück auf die <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a>.</p>
						
					</div><!-- .page-content -->
					
				</div><!-- .error-404 -->
			
			</main><!-- #content -->
			
			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
				
		</div><!-- #primary -->
		
	</div><!-- .container -->

<?php get_footer(); ?>
