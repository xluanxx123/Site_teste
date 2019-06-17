<article id="post-<?php the_ID();?>"<?php post_class(array('post-format-padrao')); ?>>

	<h1><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></h1></a>
	<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a></p>
	<p><?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
		<p>Categoria: <span><?php the_category(' '); ?></span></p>
		<p><?php  the_content (); ?></p><br>
	
</article>