<article id="post-<?php the_ID();?>"<?php post_class(); ?>>
	<h1><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></h1></a>
	<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>

	<p><?php the_excerpt(); ?></p>
</article>