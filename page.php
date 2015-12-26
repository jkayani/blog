<?php get_header(); ?>
<body>
	<?php get_sidebar(); ?>
	<section class="blogs">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title()?></h1>
			<br />
			<p>
				<?php the_content(); ?>
			</p>
		<?php endwhile; else : ?><?php endif; ?>
	</section>
</body>
</html>
