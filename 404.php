<?php get_header(); ?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">

					<div class="404 col-md-9">
						
						<header>
							<h1>Página Não Encontrada!</h1>
							<p>A Página que você tentou acessar não existe!</p>
						</header>
							<div class="erro">
								<p>Pesquisar outro conteudo no Site:
								<?php get_search_form(); ?> </p>

							</div>

					</div>
				</div>
			</div>
		</section>

	</main>	
</div>
<?php get_footer(); ?>
