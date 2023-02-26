<!DOCTYPE html>
<?php include 'template-parts/variables.php' ?>
<html lang="ru">
    <head itemscope itemtype="http://schema.org/WPHeader">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />      
        <?php wp_head();?>
        
    </head>
    
    <body>
        <header>      
            <div class="d_flex header_container">
                <div class="header_wrapper container">
                    <div class="logo_img"><?php the_custom_logo() ?></div>
                    <div class="header_phone"><a href="tel:<?= $contacts_main_phone ?>" class="header_phone-link"><?= $contacts_main_phone ?></a></div>
                    <div class="header_burger">
                        <span></span>
                    </div>

                    <?php
                        $args = array(
                            'container'       => 'nav',          
                            'container_class' => 'header_menu menu',           
                            'menu_class'      => 'menu_list',          
                            'fallback_cb'     => 'wp_page_menu',            
                            'link_class'     => 'menu_link',           
                            'theme_location'  => 'main_menu',
                            'add_li_class'    => 'menu_item',
                            'echo'          => false,               
                        );
                        $temp_menu = wp_nav_menu($args);
                        preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matches);
                        foreach($matches[0] as $value){
                            if(strpos($value, "<span") === false){
                                $temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }else{
                                $temp_value = str_replace("<span", "<span itemprop='name'", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }
                        }
                        echo $temp_menu;
                    ?>                    
                </div>                
            </div>                    
        </header>
    
        <main>