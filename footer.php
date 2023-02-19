        </main>
        <footer>
            <div class="container footer_container">
              <div class="footer_logo"><?php the_custom_logo() ?> </div>
                <?php
                  $args = array(
                    'container'       => 'div',          
                    'container_class' => 'footer_menu menu',           
                    'menu_class'      => 'menu_list',          
                    'fallback_cb'     => 'wp_page_menu',            
                    'link_class'     => 'menu_link',           
                    'theme_location'  => 'footer_menu',
                    'add_li_class'    => 'menu_item',
                    'echo'          => false,               
                    );
                  $temp_menu = wp_nav_menu($args);
                  echo $temp_menu;
                ?>                
            </div>
        </footer>    
    </body>
</html>

<?php wp_footer(); ?>