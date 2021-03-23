
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
    <title><?= get_the_title(); ?></title>
    
    <?php 

    wp_head();

    ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__holder">
                <h1 class="header__name">Aeternum</h1>
                <ul class="header__menu display_none_Mobile" id="menu">
                    <li class="header__item">
                        <a href="<?= get_home_url();?>" class="header__link_active">HOME</a>
                    </li>
                    <li class="header__item">
                        <a href="<?= get_home_url(); ?>/ABOUT-COMPANY" class="header__link">ABOUT COMPANY</a>
                    </li>
                    <li class="header__item">
                        <a href="<?= get_home_url(); ?>/ACTIVE-OWNERSHIP" class="header__link">ACTIVE OWNERSHIP</a>
                    </li>
                    <li class="header__item">
                        <a href="<?= get_home_url(); ?>/TEAM" class="header__link">TEAM</a>
                    </li>
                    <li class="header__item">
                        <a href="<?= get_home_url(); ?>/CONTACT" class="header__link">CONTACT</a>
                    </li>
                    <div class="close" id="close"></div>
                </ul>
                <div class="hamburger" id="hamburger">
                </div>
            </div>
        </div>
    </header>