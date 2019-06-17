<?php get_header(); ?>
<div class="conteudo">
	<main>
		<section class="slide">
			<?php motoPressSlider( "home-slider" ) ?>
		</section>
		<section class="servicos">
			<div class="container">
				<h1>Serviços</h1>
					<div class="row">

<!--IMAGEM1-->			<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="servicos-item">
								<div class="servicos-img">
									<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos1')); ?>" alt="">
								</div>
								<div class="servicos-desc">
<!--TITULO1-->						<h2><?php echo get_theme_mod('set_servicos1_titulo')  ?></h2>
<!--DESCRIÇÃO1-->					<p><?php echo get_theme_mod('set_servicos1_descricao')  ?></p>
								</div>
							</div>
						</div>
<!--IMAGEM2-->			<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="servicos-item">
								<div class="servicos-img">
									<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos2')); ?>" alt="">
								</div>
								<div class="servicos-desc">
<!--TITULO2-->						<h2><?php echo get_theme_mod('set_servicos2_titulo')  ?></h2>
<!--DESCRIÇÃO2-->					<p><?php echo get_theme_mod('set_servicos2_descricao')  ?></p>
								</div>
							</div>
						</div>
<!--IMAGEM3-->			<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="servicos-item">
								<div class="servicos-img">
									<img src="<?php echo wp_get_attachment_url(get_theme_mod('set_servicos3')); ?>" alt="">
								</div>
								<div class="servicos-desc">
<!--TITULO3-->						<h2><?php echo get_theme_mod('set_servicos3_titulo')  ?></h2>
<!--DESCRIÇÃO3-->					<p><?php echo get_theme_mod('set_servicos3_descricao')  ?></p>
								</div>
							</div>
						</div>								
					</div>
				</div>
			</div>

		</section>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-4">
						<?php get_sidebar('home'); ?>
					</aside>
					<div class="noticias col-md-8">
						<div class="row">

							<?php 
							//Usando WP_Query MOSTRAR DESTAQUE
							$destaque = new WP_Query('post_type=post&posts_per_page=1&cat=6,8');
							if($destaque->have_posts()):
								while($destaque->have_posts()):
									$destaque->the_post();
												//DESTAQUE PRINCIPAL COM 12 COLUNAS/ CHAMA CONTENT.DESTAQUE
							?>
												<div class="col-md-12">
													<?php get_template_part('content','destaque'); ?>
												</div>
								
							<?php
							// LIMPANDO os dados da consulta
								endwhile; 
								wp_reset_postdata();
								endif;
							 ?>

							<?php 
							// PASSANDO OQUE MOSTRAR NO DESTAQUE SECUNDARIA
							$args = array(
								'post_type'			=>	'post',
								'posts_per_page'	=> 	2,
								'category__not_in'	=>	array(7),
								'category__in'		=>	array(6,8),
								'offset'			=>	1
							);
							//Usando WP_Query MOSTRAR DESTAQUE SECUNDARIA
							$secundarias = new WP_Query($args);
							if($secundarias->have_posts()):
								while($secundarias->have_posts()):
									$secundarias->the_post();
											//DESTAQUE SECUNDARIA COM 6 COLUNAS/ CHAMA CONTENT.SECUNDARIA
							?>
											<div class="col-md-6">
												<?php get_template_part('content','secundaria'); ?>
											</div>
								
						<?php
							endwhile;
							// LIMPA os dados da consulta 
							wp_reset_postdata();
						endif;
						 ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		
		</section>
	</main>	
</div>
<?php get_footer(); ?>



