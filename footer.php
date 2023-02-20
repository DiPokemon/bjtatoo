        </main>
        <footer>
          <?php
            $contacts_main_phone = carbon_get_theme_option( 'crb_main_phone' );
            $contacts_add_phone = carbon_get_theme_option( 'crb_second_phone' );
            $contacts_mail = carbon_get_theme_option( 'crb_email' );
            $contacts_vk = carbon_get_theme_option( 'crb_vk' );
            $contacts_wa = carbon_get_theme_option( 'crb_wa' );
            $contacts_tg = carbon_get_theme_option( 'crb_tg' );
            $contacts_inst = carbon_get_theme_option( 'crb_inst' );
          ?>
            <div class="container footer_container">
              <div class="footer_logo logo_img"><?php the_custom_logo() ?> </div>
                <?php
                  $args = array(
                    'container'       => 'nav',          
                    'container_class' => 'footer_menu menu',           
                    'menu_class'      => 'footer_menu_list',          
                    'fallback_cb'     => 'wp_page_menu',            
                    'link_class'     => 'menu_link',           
                    'theme_location'  => 'footer_menu',
                    'add_li_class'    => 'menu_item',
                    'echo'          => false,               
                    );
                  $temp_menu = wp_nav_menu($args);
                  echo $temp_menu;
                ?>  
              <div class="footer_contacts">
                <div class="footer_contacts_top">
                  <a href="tel:<?= $contacts_main_phone ?>"><?= $contacts_main_phone ?></a>
                  <a href="mailto:<?= $contacts_mail ?>"><?= $contacts_mail ?></a>
                </div>
                <div class="footer_contacts_bottom">
                  
                  <a href="<?= $contacts_vk ?>"><i class="fa fa-vk" aria-hidden="true"></i></a>
                  <a href="<?= $contacts_wa ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                  <a href="<?= $contacts_tg ?>"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                  <a href="<?= $contacts_inst ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>  
                </div>
                                  
              </div>              
            </div>
        </footer>    
    </body>
</html>

<?php wp_footer(); ?>