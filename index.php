
<!-- 
    Главная страница ссайта. 
    Пользоатель попадает на неё при входе на ссайт. 
    На этой странице пользователь может в краци узнать о миссии компании и её главных плюсах.
-->



<?php 

get_header();

?>


<main class="home">
    <section class="home__welcome">
        <div class="home__welcome_img">
            <h2 class="home__welcome_name"><?= get_theme_mod('home_header_title'); ?></h2>
        </div>
        <div class="home__welcome_part">
            <div class="home__welcome_block">
                <h3 class="home__welcome_block_name"><?= get_theme_mod('home__welcome_block_name'); ?></h3>
                <p class="home__welcome_text"><?= get_theme_mod('home__welcome_text'); ?></p>
                <button class="home__welcome_btn">
                    <a href="" class="home__welcome_link"><?= get_theme_mod('home__welcome_link'); ?></a>
                </button>
                <div class="home__welcome_green"></div>
                <div class="home__welcome_grey"></div>
            </div>
        </div>
    </section>
    <section class="home__philosophy">
        <div class="home__icons container">
            <div class="home__icons_block">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="44" viewBox="0 0 62.203 62.703"><defs><style>.a,.c{fill:none;stroke-width:1.5px;}.a{stroke:#707070;}.b{clip-path:url(#a);}.c{stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style><clipPath id="a"><rect class="a" width="62.203" height="62.703"/></clipPath></defs><g class="b" transform="translate(0 0)"><path class="c" d="M58.106,33.725A24.478,24.478,0,1,1,33.627,9.247,24.479,24.479,0,0,1,58.106,33.725Z" transform="translate(-2.209 -2.232)"/><circle class="c" cx="5.495" cy="5.495" r="5.495" transform="translate(25.924 25.998)"/><line class="c" x2="11.286" transform="translate(0.379 31.352)"/><line class="c" x2="10.659" transform="translate(51.165 31.352)"/><line class="c" y2="11.159" transform="translate(31.351 51.165)"/><line class="c" y2="11.913" transform="translate(31.351 0.38)"/></g></svg>
                <p class="home__icons_text home__icons_text1">
                    <?= get_theme_mod('home__icons_text1'); ?>

                </p>
            </div>
            <div class="home__icons_block">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="44" viewBox="0 0 71.335 55.48"><defs><style>.a,.c{fill:none;stroke-width:1.5px;}.a{stroke:#707070;}.b{clip-path:url(#a);}.c{stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style><clipPath id="a"><rect class="a" width="71.335" height="55.48"/></clipPath></defs><g class="b" transform="translate(0 0)"><path class="c" d="M23.606,40.405l-5.37-5.37a7.457,7.457,0,0,1-2-4.279l-.249-1.633L29.072,16.04c3.29-.1,5.831.712,7.516,2.4" transform="translate(-3.983 -3.994)"/><rect class="c" width="33.981" height="8.759" transform="translate(0.375 24.403) rotate(-45)"/><rect class="c" width="8.759" height="33.981" transform="translate(40.738 8.406) rotate(-45)"/><path class="c" d="M32.4,48.914,28.463,52.85a2.908,2.908,0,0,1-4.112-4.112L28.286,44.8A2.908,2.908,0,1,1,32.4,48.914Z" transform="translate(-5.855 -10.95)"/><path class="c" d="M70.05,32.449,52.575,14.973l-3,3a3.487,3.487,0,0,1-4.432.339l-.05-.032a2.979,2.979,0,0,0-3.673.48l-4.836,4.836a2.972,2.972,0,0,0-.457,3.7,2.916,2.916,0,0,0,4.5.483L45.608,22.8a2.717,2.717,0,0,0,.214-.264L62.894,39.6Z" transform="translate(-8.888 -3.73)"/><path class="c" d="M38.206,53.755,34.27,57.69a2.908,2.908,0,1,1-4.113-4.111l3.935-3.936a2.908,2.908,0,0,1,4.113,4.112Z" transform="translate(-7.301 -12.155)"/><path class="c" d="M44.014,59.562,40.079,63.5a2.907,2.907,0,0,1-4.112-4.111L39.9,55.45a2.908,2.908,0,0,1,4.112,4.113Z" transform="translate(-8.748 -13.602)"/><path class="c" d="M49.822,65.371l-3.935,3.935a2.908,2.908,0,0,1-4.113-4.111l3.935-3.936a2.908,2.908,0,0,1,4.113,4.112Z" transform="translate(-10.195 -15.049)"/><path class="c" d="M64.711,41.979l3.935,3.935a3.016,3.016,0,0,1-4.263,4.263l-3.935-3.935" transform="translate(-15.058 -10.458)"/><path class="c" d="M58.869,47.787,62.8,51.722a3.089,3.089,0,0,1-4.36,4.361l-3.936-3.935" transform="translate(-13.578 -11.904)"/><path class="c" d="M54.25,53.8l3.935,3.935a2.907,2.907,0,0,1-4.111,4.112" transform="translate(-13.47 -13.401)"/><path class="c" d="M52.757,65.131a2.908,2.908,0,0,1-3.748,4.333" transform="translate(-12.208 -16.225)"/></g></svg>
                <p class="home__icons_text home__icons_text2">
                    <?= get_theme_mod('home__icons_text2'); ?>

                </p>
            </div>
            <div class="home__icons_block">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="44" viewBox="0 0 57.097 58.763"><defs><style>.a,.c{fill:none;stroke-width:1.5px;}.a{stroke:#707070;}.b{clip-path:url(#a);}.c{stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style><clipPath id="a"><rect class="a" width="57.097" height="58.763"/></clipPath></defs><g class="b" transform="translate(0 0)"><path class="c" d="M44.142,43.035V58.41H.5V.5H44.142V10.571" transform="translate(-0.074 -0.073)"/><path class="c" d="M62.128,24.905c0,1.593-1.957,2.787-2.531,4.171-.6,1.436-.078,3.658-1.16,4.74s-3.3.564-4.741,1.16c-1.385.574-2.577,2.531-4.171,2.531s-2.786-1.957-4.171-2.531c-1.436-.6-3.658-.078-4.739-1.16s-.565-3.3-1.16-4.74c-.575-1.385-2.532-2.579-2.532-4.171s1.957-2.786,2.532-4.171c.595-1.436.077-3.658,1.16-4.74s3.3-.564,4.739-1.159c1.386-.575,2.579-2.532,4.171-2.532s2.786,1.957,4.171,2.532c1.437.595,3.658.077,4.741,1.16S59,19.3,59.6,20.734C60.172,22.119,62.128,23.312,62.128,24.905Z" transform="translate(-5.458 -1.818)"/><path class="c" d="M56.8,26.024a6.155,6.155,0,1,1-6.155-6.155A6.155,6.155,0,0,1,56.8,26.024Z" transform="translate(-6.576 -2.936)"/><line class="c" x2="15.108" transform="translate(8.819 10.498)"/><line class="c" x2="15.108" transform="translate(8.819 18.051)"/><line class="c" x2="15.108" transform="translate(8.819 25.605)"/><line class="c" x2="15.108" transform="translate(8.819 48.266)"/><path class="c" d="M44.49,38.837V54.844L50.633,48.7l6.557,6.557V38.837" transform="translate(-6.576 -5.74)"/></g></svg>
                <p class="home__icons_text home__icons_text3">
                    <?= get_theme_mod('home__icons_text3'); ?>

                </p>
            </div>
            <div class="home__icons_block">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="44" viewBox="0 0 65 62"><defs><style>.a,.c{fill:none;stroke-width:1.5px;}.a{stroke:#707070;}.b{clip-path:url(#a);}.c{stroke:#000;stroke-linecap:round;stroke-linejoin:round;}</style><clipPath id="a"><rect class="a" width="65" height="62" transform="translate(0 0)"/></clipPath></defs><g transform="translate(0.734 0.066)"><g class="b" transform="translate(-0.734 -0.066)"><circle class="c" cx="5.278" cy="5.278" r="5.278" transform="translate(27.994 6.393)"/><path class="c" d="M50.3,13.4a12.9,12.9,0,1,0-19.94,10.811V22.2a5.293,5.293,0,0,1,5.278-5.278h3.519A5.293,5.293,0,0,1,44.44,22.2v2.014A12.888,12.888,0,0,0,50.3,13.4Z" transform="translate(-4.13 0.028)"/><path class="c" d="M40.8,21.5H37.278A5.293,5.293,0,0,0,32,26.778v2.014a12.889,12.889,0,0,0,14.075,0V26.778A5.293,5.293,0,0,0,40.8,21.5Z" transform="translate(-5.765 -4.551)"/><circle class="c" cx="5.278" cy="5.278" r="5.278" transform="translate(46.761 41.581)"/><path class="c" d="M74.3,58.4a12.9,12.9,0,1,0-19.94,10.811V67.2a5.293,5.293,0,0,1,5.278-5.278h3.519A5.293,5.293,0,0,1,68.44,67.2v2.014A12.888,12.888,0,0,0,74.3,58.4Z" transform="translate(-9.363 -9.783)"/><path class="c" d="M64.8,66.5H61.278A5.293,5.293,0,0,0,56,71.778v2.014a12.889,12.889,0,0,0,14.075,0V71.778A5.293,5.293,0,0,0,64.8,66.5Z" transform="translate(-10.998 -14.362)"/><circle class="c" cx="5.278" cy="5.278" r="5.278" transform="translate(9.227 41.581)"/><path class="c" d="M26.3,58.4A12.9,12.9,0,1,0,6.365,69.214V67.2a5.293,5.293,0,0,1,5.278-5.278h3.519A5.293,5.293,0,0,1,20.44,67.2v2.014A12.888,12.888,0,0,0,26.3,58.4Z" transform="translate(1.103 -9.783)"/><path class="c" d="M16.8,66.5H13.278A5.293,5.293,0,0,0,8,71.778v2.014a12.889,12.889,0,0,0,14.075,0V71.778A5.293,5.293,0,0,0,16.8,66.5Z" transform="translate(-0.532 -14.362)"/><line class="c" y1="13" x2="8" transform="translate(17 23)"/><line class="c" x2="4" y2="13" transform="translate(44 23)"/><line class="c" x2="11" transform="translate(28 50)"/></g></g></svg>
                <p class="home__icons_text home__icons_text4">
                    <?= get_theme_mod('home__icons_text4'); ?>

                </p>
            </div>
        </div>
        <div class="home__content container">
            <div class="home__content_img">
                <div class="home__content_green"></div>
                <div class="home__content_grey"></div>
            </div>
            <div class="home__content_block">
                <h2 class="home__content_name"><?= get_theme_mod('home__content_name'); ?>  </h2>
                <p class="home__content_text">
                    <?= get_theme_mod('home__content_text'); ?>
                </p>
            </div>
        </div>
        <div class="home__hieroglyphs container">
            <p class="home__hieroglyphs_text">
                <?= get_theme_mod('home__hieroglyphs_text'); ?>

            </p>
            <div class="home__hieroglyphs_img">
                <div class="home__hieroglyphs_grey"></div>
            </div>
        </div>
    </section>
</main>


<?php 

get_footer();

?>

</body>
</html>
