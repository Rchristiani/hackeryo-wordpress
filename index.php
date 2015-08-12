<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div id="main-wrapper">
	<div class="main-wrapper-style2">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="8u">
						<div id="content skel-cell-important">

							<!-- Content -->
								<?php  
								if(have_posts()) {
									while(have_posts()) {
										the_post();
										?>
										<article>
											<header class="major">
												<h2><?php the_title(); ?></h2>
											</header>

											<span class="image image-full"><?php the_post_thumbnail('header'); ?></span>
											<?php the_content(); ?>
										</article>
										<?php
									}//End of while loop
								}//End of if statement
								?>
						</div>
					</div>
					<div class="4u">
						<?php get_sidebar(); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>







