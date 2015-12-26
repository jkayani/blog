<?php get_header(); ?>
<body>
	<?php get_sidebar(); ?>
	<section class="blogs">
		<h1>Sorted under: <?php single_cat_title(); ?></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
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
