<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make( 'theme_options', __( 'Настройки темы' ) )
    ->set_icon( 'dashicons-admin-customizer' )
    ->add_tab( __( 'Контакты' ), array(
        Field::make( 'text', 'crb_main_phone', __( 'Основной телефон' ) )
            ->set_width(33),
        Field::make( 'text', 'crb_email', __( 'E-mail' ) )
            ->set_width(33),
        Field::make( 'text', 'crb_second_phone', __( 'Доп. телефон' ) )
            ->set_width(33),
        Field::make( 'text', 'crb_vk', __( 'Вконтакте' ) )
            ->set_width(33),
        Field::make( 'text', 'crb_tg', __( 'Телеграм' ) )
            ->set_width(33),
        Field::make( 'text', 'crb_wa', __( 'WhatsApp' ) )
            ->set_width(33),
        Field::make( 'text', 'crb_inst', __( 'Инстаграм' ) )
            ->set_width(33),
        Field::make( 'text', 'crb_fb', __( 'Фейсбук' ) )
            ->set_width(33),
    ) )
    ->add_tab( __( 'Адрес' ), array(
        Field::make( 'text', 'crb_adress_city', __( 'Город' ) ),
        Field::make( 'text', 'crb_adress_street', __( 'Улица' ) ),
        Field::make( 'text', 'crb_adress_build', __( 'Дом' ) ),
        Field::make( 'text', 'crb_adress_index', __( 'Индекс' ) ),
    ) );

Container::make( 'theme_options', __( 'Главная страница' ) )
    ->set_page_parent( $basic_options_container ) // reference to a top level container
    

    ->add_tab( __( 'Фоновые иконки' ), array(
        Field::make( 'complex', 'crb_main_icons_left',  __('Иконки слева') )
            ->add_fields( 'crb_main_icons_left', __('Иконки слева'), array(                
                Field::make( 'image', 'crb_main_icon_img', __( 'Иконка' ) )
                    ->set_value_type( 'url' ),                    
                Field::make( 'text', 'crb_main_icon_alt', __( 'Alt' ) )
                    ->set_width(50),
                Field::make( 'text', 'crb_main_icon_title', __( 'Title' ) )
                    ->set_width(50),
            ) )           
            ->set_width(50)
            ->set_max(7),
            
        Field::make( 'complex', 'crb_main_icons_right', __('Иконки справа') )
            ->add_fields( 'crb_main_icons_left', __('Иконка'), array(                
                Field::make( 'image', 'crb_main_icon_img', __( 'Иконка' ) )
                    ->set_value_type( 'url' ),                    
                Field::make( 'text', 'crb_main_icon_alt', __( 'Alt' ) )
                    ->set_width(50),
                Field::make( 'text', 'crb_main_icon_title', __( 'Title' ) )
                    ->set_width(50),
            ) )           
            ->set_width(50)
            ->set_max(7),
           
        ) )

    ->add_tab( __( 'Слайдер' ), array(
        Field::make( 'complex', 'crb_main_slider', __( 'Слайд' ))
            ->add_fields( array(
                Field::make( 'image', 'crm_main_slide_img', __('Фото') )
                    ->set_width(33),
                Field::make( 'text', 'crb_main_slide_alt', __('Alt') )
                    ->set_width(33),
                Field::make( 'text', 'crb_main_slide_title', __('Title') )
                    ->set_width(33),
            ) )
    ) )    

    ->add_tab( __( 'Услуги' ), array(
        Field::make( 'complex', 'crb_main_services', __('Услуга') )
            ->add_fields( array(
                Field::make( 'text', 'crb_main_service_title', __('Заголовок') )
                    ->set_width(30),
                Field::make( 'rich_text', 'crb_main_service_text', __('Текст') )
                    ->set_width(70),
            ) )        
    ) )

    ->add_fields( array(
        Field::make( 'text', 'crb_main_service_title', __( 'Заголовок услуги' ) ),
        Field::make( 'text', 'crb_twitter_link', __( 'Twitter Link' ) ),
    ) );