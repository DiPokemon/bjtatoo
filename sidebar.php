<?php
$contacts_main_phone = carbon_get_theme_option( 'crb_main_phone' );
$contacts_add_phone = carbon_get_theme_option( 'crb_second_phone' );
$contacts_mail = carbon_get_theme_option( 'crb_email' );
$contacts_vk = carbon_get_theme_option( 'crb_vk' );
$contacts_wa = carbon_get_theme_option( 'crb_wa' );
$contacts_tg = carbon_get_theme_option( 'crb_tg' );
$contacts_inst = carbon_get_theme_option( 'crb_inst' );
?>
<div class="page_content_sidebar">
    <div class="sidebar_text">
        <p class="sidebar_title">Оставьте заявку прямо сейчас!</p>
        <p class="sidebar_subtitle">Позвоните или напишите нам в соцсетях</p>
    </div>

    <?php get_template_part( 'template-parts/form', 'vertical' ); ?>  

    <div class="sidebar_contacts"> 
        <?php if ($contacts_main_phone) :?><a class="sidebar_phone" href="tel:<?= $contacts_main_phone ?>"><?= $contacts_main_phone ?></a> <?php endif; ?>
        <div class="sidebar_socials">
            <?php if ($contacts_vk) :?> <a href="<?= $contacts_vk ?>"><i class="fa fa-vk" aria-hidden="true"></i></a> <?php endif; ?>
            <?php if ($contacts_vk) :?> <a href="<?= $contacts_wa ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> <?php endif; ?>
            <?php if ($contacts_vk) :?> <a href="<?= $contacts_tg ?>"><i class="fa fa-telegram" aria-hidden="true"></i></a> <?php endif; ?>
            <?php if ($contacts_vk) :?> <a href="<?= $contacts_inst ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a> <?php endif; ?>
        </div>                        
    </div>
</div>