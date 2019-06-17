<article id="post-<?php the_ID();?>"<?php post_class(); ?>>
	<header>
		<h1><?php the_title(); ?></h1>
		<p><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
		<p><?php the_tags('Tags: ', ', '); ?></p>
	</header>

<?php the_content(); ?>

</article>