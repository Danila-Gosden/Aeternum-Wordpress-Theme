
<!-- 
    Страница с контактамию
    На ней пользователь может узнать контактные данные сотрудников компании.
    Также найти локацию компании.
 -->



<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>


<main class="contact">
        <section class="contact__content">
            <div class="contact__content_img">
                <div class="contact__content_white_holder">
                    <div class="contact__content_white"></div>
                </div>
                <div class="contact__content_block">
                    <h2 class="contact__content_name"><?= get_theme_mod('contact__content_name'); ?></h2>
                    <p class="contact__content_text">
                        <?= get_theme_mod('contact__content_text'); ?>
                    </p>
                </div>
                <div class="contact__content_grey"></div>
            </div>
            <div class="contact__content_green_Mobile"></div>
        </section>

        <section class="contact__connection">
            <div class="container">
                <div class="contact__connection_holder">
                    <h2 class="contact__connection_name"><?= get_theme_mod('contact__connection_name'); ?></h2>
                    <div class="team__about_person">
                        <div class="team__person_img_holder">
                            <div class="block__green_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name team__about_1person_name"><?= get_theme_mod('team__about_1person_name'); ?></h3>
                        <p class="team__about_person_position team__about_1person_position"><?= get_theme_mod('team__about_1person_position'); ?></p>
                        <div class="contact__connection_text_holder">
                            <p class="contact__connection_person_text contact__connection_1person_mail">E-mail: <?= get_theme_mod('contact__connection_1person_mail'); ?></p>
                            <p class="contact__connection_person_text contact__connection_1person_phone">Phone:<?= get_theme_mod('contact__connection_1person_phone'); ?></p>
                        </div>
                    </div>
                    <div class="team__about_person">                   
                        <div class="team__person_img_holder">
                            <div class="block__grey_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name team__about_2person_name"><?= get_theme_mod('team__about_2person_name'); ?></h3>
                        <p class="team__about_person_position team__about_2person_position"><?= get_theme_mod('team__about_2person_position'); ?></p>
                        <div class="contact__connection_text_holder">
                            <p class="contact__connection_person_text contact__connection_2person_mail">E-mail: <?= get_theme_mod('contact__connection_2person_mail'); ?></p>
                            <p class="contact__connection_person_text contact__connection_2person_phone">Phone: <?= get_theme_mod('contact__connection_2person_phone'); ?></p>
                        </div>
                    </div>
                    <div class="team__about_person">
                        <div class="team__person_img_holder">
                            <div class="block__darkgrey_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name team__about_3person_name"><?= get_theme_mod('team__about_3person_name'); ?></h3>
                        <p class="team__about_person_position team__about_3person_position"><?= get_theme_mod('team__about_3person_position'); ?></p>
                        <div class="contact__connection_text_holder">
                            <p class="contact__connection_person_text contact__connection_3person_mail">E-mail: <?= get_theme_mod('contact__connection_3person_mail'); ?></p>
                            <p class="contact__connection_person_text contact__connection_3person_phone">Phone: <?= get_theme_mod('contact__connection_3person_phone'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="contact__map">
            <div class="contact__map_content">
                <h2 class="contact__map_name"><?= get_theme_mod('contact__map_name'); ?></h2>
                <div class="contact__map_text_holder">
                    <p class="contact__map_text contact__map_text"><?= get_theme_mod('contact__map_text'); ?></p>
                    <p class="contact__map_text contact__map_office"><?= get_theme_mod('contact__map_office'); ?></p>
                    <p class="contact__map_text contact__map_location"><?= get_theme_mod('contact__map_location'); ?></p>
                </div>
            </div>
            <div class="contact__map_green_holder">
                <div class="contact__map_green"></div>
            </div>
            <div class="contact__map_map">
                
            </div>
        </section>
    </main>

    <?php get_footer(); ?>

</body>
</html>