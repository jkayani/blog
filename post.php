<?php get_header(); ?>
<body>
	<?php get_sidebar(); ?>
	<section class="blogs">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title()?></h1>
			<br />
			<time><?php the_time('F jS, Y'); ?></time>
			<br />
			<div class="tags">
			<em>Tags:</em>
				<span class="tag"><?php the_category( ', ' ); ?></span>
			</div>
			<br />
			<p>
				<?php the_content(); ?>
			</p>
		<?php endwhile; else : ?><?php endif; ?>
	</section>
</body>
</html>
