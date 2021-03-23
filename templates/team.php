
<!-- 
    Страница с командой.
    Она рассказывает о должности и о самих сотрудниках компании.
 -->



<?php
/*
Template Name: Team
*/
?>

    <?php get_header(); ?>


<main class="team">
        <section class="team__contact">
            <div class="team__contact_img">
                <div class="team__contact_text_holder">
                    <h2 class="team__contact_txt team__contact_txt">
                        <?= get_theme_mod('team__contact_txt'); ?>
                    </h2>
                </div>
            </div>
            <div class="team__contact_block">
                <div class="team__contact_field">
                    <p class="team__contact_why">
                        <?= get_theme_mod('team__contact_why'); ?>
                    </p>
                    <button class="team__contact_btn"><?= get_theme_mod('team__contact_btn'); ?></button>
                </div>
                <div class="block__grey"></div>
            </div>
        </section>

        <section class="team__about">
            <div class="container">
                <h2 class="team__about_name"><?= get_theme_mod('team__about_name'); ?></h2>
                <div class="team__about_holder">
                    <div class="team__about_person">
                        <div class="team__person_img_holder">
                            <div class="block__green_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name team__about_1person_name"><?= get_theme_mod('team__about_1person_name'); ?></h3>
                        <p class="team__about_person_position team__about_1person_position"><?= get_theme_mod('team__about_1person_position'); ?></p>
                        <p class="team__about_person_text team__about_1person_text1">
                            <?= get_theme_mod('team__about_1person_text1'); ?>
                        </p>
                        <p class="team__about_person_text team__about_1person_text2">
                            <?= get_theme_mod('team__about_1person_text2'); ?>
                        </p>
                        <p class="team__about_person_text team__about_1person_text3">
                            <?= get_theme_mod('team__about_1person_text3'); ?>
                        </p>
                    </div>
                    <div class="team__about_person">                   
                        <div class="team__person_img_holder">
                            <div class="block__grey_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name team__about_2person_name"><?= get_theme_mod('team__about_2person_name'); ?></h3>
                        <p class="team__about_person_position team__about_2person_position"><?= get_theme_mod('team__about_2person_position'); ?></p>
                        
                    </div>
                    <div class="team__about_person">
                        <div class="team__person_img_holder">
                            <div class="block__darkgrey_small"></div>
                            <img src="/images/Vegard Soeraunet_0010.png" alt="" class="team__person_img">
                        </div>
                        <h3 class="team__about_person_name team__about_3person_name"><?= get_theme_mod('team__about_3person_name'); ?></h3>
                        <p class="team__about_person_position team__about_3person_position"><?= get_theme_mod('team__about_3person_position'); ?></p>
                        <p class="team__about_person_text team__about_3person_text1"><?= get_theme_mod('team__about_3person_text1'); ?></p>
                        <p class="team__about_person_text team__about_3person_text2"><?= get_theme_mod('team__about_3person_text2'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>

</body>
</html>