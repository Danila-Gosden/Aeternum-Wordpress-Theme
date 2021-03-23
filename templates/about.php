
<!-- 
    Страница о компании. 
    Находясь на ней пользователь может узнать главное о компании и инвестиционном процессе. 
-->



<?php
/*
Template Name: About Aeternum
*/
?>

<?php

    get_header();

?>
    <main class="about">
        <section class="about__capital">
            <div class="about__capital_content">
                <h2 class="about__capital_name"><?= get_theme_mod('about__capital_name'); ?></h2>
                <p class="about__capital_text">
                    <?= get_theme_mod('about__capital_text'); ?>
                </p>
            </div>
            <div class="about__capital_grey_holder">
                <div class="about__capital_grey"></div>
                <div class="about__capital_grey_Mobile"></div>
            </div>
            <img src="/images/iStock-1250524373.png" alt="" class="about__capital_img">
        </section>
        <div class="about__beige_holder">
            <div class="block__beige"></div>
        </div>
        <section class="about__process">
            <div class="about__process_img">
                <div class="about__process_block">
                    <h2 class="about__process_name"><?= get_theme_mod('about__process_name'); ?></h2>
                    <p class="about__process_text">
                        <?= get_theme_mod('about__process_text'); ?>
                        <div class="about__process__white"></div>
                    </p>
                </div>
            </div>
        </section>
        <section class="about__sectors container">
            <div class="about__sectors_content">
                <h2 class="about__sectors_name"><?= get_theme_mod('about__sectors_name'); ?></h2>
                <p class="about__sectors_text">
                    <?= get_theme_mod('about__sectors_text'); ?>
                </p>
            </div>
            <div class="about__sectors_img">
                <div class="about__sectors_white"></div>
            </div>
        </section>
        <div class="about__back_block">
            
        </div>
    </main>

    <?php get_footer(); ?>

</body>
</html>