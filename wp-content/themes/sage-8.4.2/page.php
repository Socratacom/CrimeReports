<?php while (have_posts()) : the_post(); ?>
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php get_template_part('templates/content', 'page'); ?>
				</div>
			</div>
		</div>
	</section>  
<?php endwhile; ?>
