<?php 

function meupersonalizador($wp_customize){

	// Seção copyright
	$wp_customize->add_section( 'sec_copyright', array(
		'title'			=> 'Copyright',
		'description'	=> 'Seção para o copyright'));

	$wp_customize->add_setting( 'set_copyright', array(
		'type'		=> 'theme_mod',
		'default'	=> 'Copyright - Todos os direitos reservados'));

	$wp_customize->add_control( 'ctrl_copyright', array(
		'label' 	=> 'Copyright',
		'description'	=> 'Informe o copyright',
		'section'		=> 'sec_copyright',
		'settings'		=> 'set_copyright',
		'type'			=> 'text') );


											//Seção Serviços
											$wp_customize->add_section( 'sec_servicos', array(
											'title'			=> 'Serviços',
											'description'	=> 'Seção para 	Serviços'));



		// Seção Serviços 1 - TITULO E DESCRIÇAO
		//TITULO
		$wp_customize->add_setting( 'set_servicos1_titulo', array(
			'default'	=> ''));
		$wp_customize->add_control( 'ctrl_servicos1_titulo', array(
		'label' 		=> 'Titulo para o serviço1',
		'description'	=> 'Informe o Titulo',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_titulo',
		'type'			=> 'text') );
		//DESCRIÇÃO
		$wp_customize->add_setting( 'set_servicos1_descricao', array(
			'default'	=> ''));
		$wp_customize->add_control( 'ctrl_servicos1_descricao', array(
		'label' 		=> 'Descriçao para o serviço1',
		'description'	=> 'Informe a Descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_descricao',
		'type'			=> 'textarea') );
		//Seção Serviços 1 - IMAGEM
		$wp_customize->add_section( 'sec_servicos', array(
			'title'			=> 'Serviços',
			'description'	=> 'Seção para 	Serviços'));

		$wp_customize->add_setting( 'set_servicos1', array(
		'default'	=> ''));
		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'ctrl_servicos_item1', array(
		'label' 		=> 'Imagem do serviço 1',
		'width'			=> 200,
		'heigth'		=> 200,
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1') ));


											// Seção Serviços 2 - TITULO E DESCRIÇAO
											//TITULO
											$wp_customize->add_setting( 'set_servicos2_titulo', array(
											'default'	=> ''));
											$wp_customize->add_control( 'ctrl_servicos2_titulo', array(
											'label' 		=> 'Titulo para o serviço2',
											'description'	=> 'Informe o Titulo',
											'section'		=> 'sec_servicos',
											'settings'		=> 'set_servicos2_titulo',
											'type'			=> 'text') );
											//DESCRIÇÃO
											$wp_customize->add_setting( 'set_servicos2_descricao', array(
												'default'	=> ''));
											$wp_customize->add_control( 'ctrl_servicos2_descricao', array(
											'label' 		=> 'Descriçao para o serviço2',
											'description'	=> 'Informe a Descrição',
											'section'		=> 'sec_servicos',
											'settings'		=> 'set_servicos2_descricao',
											'type'			=> 'textarea') );
											//Seção Serviços 2 - IMAGEM
											$wp_customize->add_setting( 'set_servicos2', array(
													'default'	=> ''));

											$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'ctrl_servicos_item2', array(
												'label' 		=> 'Imagem do serviço 2',
												'width'			=> 200,
												'heigth'		=> 200,
												'section'		=> 'sec_servicos',
												'settings'		=> 'set_servicos2') ));


	// Seção Serviços 3 - TITULO E DESCRIÇAO
	//TITULO
	$wp_customize->add_setting( 'set_servicos3_titulo', array(
			'default'	=> ''));
		$wp_customize->add_control( 'ctrl_servicos3_titulo', array(
		'label' 		=> 'Titulo para o serviço3',
		'description'	=> 'Informe o Titulo',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_titulo',
		'type'			=> 'text') );
		//DESCRIÇÃO
		$wp_customize->add_setting( 'set_servicos3_descricao', array(
			'default'	=> ''));
		$wp_customize->add_control( 'ctrl_servicos3_descricao', array(
		'label' 		=> 'Descriçao para o serviço3',
		'description'	=> 'Informe a Descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_descricao',
		'type'			=> 'textarea') );
		//Seção Serviços 3 - IMAGEM
		$wp_customize->add_setting( 'set_servicos3', array(
		'default'	=> ''));

		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,'ctrl_servicos_item3', array(
			'label' 		=> 'Imagem do serviço 3',
			'width'			=> 200,
			'heigth'		=> 200,
			'section'		=> 'sec_servicos',
			'settings'		=> 'set_servicos3') ));
}


add_action( 'customize_register', 'meupersonalizador' );