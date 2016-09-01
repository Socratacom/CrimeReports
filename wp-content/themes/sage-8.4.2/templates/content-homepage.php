<section class="section-padding hero">
	<div class="text">
		<div class="vertical-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1">
						<h1 class="color-white text-center margin-bottom-30">Welcome to Crime Reports</h1>
						<h4 class="text-center color-white">Search over 500 departments by name, region, or zip code</h4>
						<form class="searchbar">
							<ul>					
							<li><a href="#" class="btn btn-success">Explore the Map</a></li>
							<li>or</li>
							<li><input name="location" type="text" placeholder="Search CrimeReports" autocomplete="off" value=""></li>
							<li><button type="submit">Search</button></li>				
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="image" style="background-image:url(/wp-content/uploads/home-hero.jpg);"></div>
</section>
<section class="section-padding">
	<div class="container">
		<div class="row no-gutters horizontal-card">
			<div class="col-sm-6 col-md-7 col-lg-8">
				<div class="col match-height">
					<div class="thumb" style="background-image:url(http://placehold.it/760x428);"></div>
					<div class="play-button">Play</div>
				</div>	
			</div>
			<div class="col-sm-6 col-md-5 col-lg-4">
				<div class="col match-height">
					<div class="text">
						<h3 class="margin-bottom-15">How to use CrimeReports</h3>
						<p>CrimeReports is the nation's largest collection of law enforcement agencies commited to transparency, public access, and citizen engagement.</p>
					</div>
					<div class="btn-wrapper">
						<a href="#" class="btn btn-primary btn-block">Watch Video</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center section-title">Partner with Crime Reports</h2>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card match-height">
					<div class="thumb" style="background-image:url(http://placehold.it/560x315);">
						<a href="/register-a-camera"></a>
					</div>
					<div class="text">
						<h5 class="margin-bottom-15">Register a Camera</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					</div>
					<div class="btn-wrapper">
						<a href="/register-a-camera" class="btn btn-primary btn-block">Regerster Camera</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card match-height">
					<div class="thumb" style="background-image:url(http://placehold.it/560x315);">
						<a href="/submit-a-crime-tip"></a>
					</div>
					<div class="text">
						<h5 class="margin-bottom-15">Submit a Crime Tip</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					</div>
					<div class="btn-wrapper">
						<a href="/submit-a-crime-tip" class="btn btn-primary btn-block">Submit Tip</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card match-height">
					<div class="thumb" style="background-image:url(http://placehold.it/560x315);">
						<a href="/law-enforcement-agency"></a>
					</div>
					<div class="text">
						<h5 class="margin-bottom-15">Law Enforcement Agency</h5>
						<p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient.</p>
					</div>
					<div class="btn-wrapper">
						<a href="/law-enforcement-agency" class="btn btn-primary btn-block">Subscribe</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="card match-height">
					<div class="thumb" style="background-image:url(http://placehold.it/560x315);">
						<a href="/data-researchers"></a>
					</div>
					<div class="text">
						<h5 class="margin-bottom-15">Data Researchers</h5>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Aenean eu leo quam.</p>
					</div>
					<div class="btn-wrapper">
						<a href="/data-researchers" class="btn btn-primary btn-block">View Data</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center section-title">Browse by State</h2>
			</div>
			<?php
			$args = array(
			'post_type'         => 'socrata_states',
			'order'             => 'asc',
			'orderby'			=> 'title',
			'posts_per_page'    => 52,
			'post_status'       => 'publish',
			);

			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if($the_query->have_posts()) : 
			while($the_query->have_posts()) : 
			$the_query->the_post();
			?>

			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
				<div class="listing match-height">
					<a href="<?php the_permalink() ?>"><?php the_title();?></a>
				</div>
			</div>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>


		</div>
	</div>
</section>
<?php echo do_shortcode('[match-height]');?>