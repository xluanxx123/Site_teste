<?php get_header();  ?>
<div id="priamary">
	<main id="main">
		<div class="container">
			<h2>Resultados de pesquisa para: <?php echo get_search_query(); ?></h2>
			<?php get_search_form();  ?>

			<?php 
				while (have_posts()):the_post(); 
					get_template_part('content','search');

				if(comments_open()||get_comments()):
					comments_template();
				endif;
				
				endwhile;

				the_posts_pagination(array(
					'prev_text' => 'Anterior',
					'next_text' => 'Proximo'

				));
			 ?>


		</div>

	</main>


</div>


<?php get_footer(); ?>