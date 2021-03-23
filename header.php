
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/styles/reset.css">
    <link rel="stylesheet" href="/styles/style.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    
    <?php 

    wp_head();

    ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__holder">
                <h1 class="header__name">aeternum.</h1>
                <ul class="header__menu display_none_Mobile" id="menu">
                    <li class="header__item">
                        <a href="/index.php" class="header__link_active">home</a>
                    </li>
                    <li class="header__item">
                        <a href="http://defaultdomain.com/?page_id=17" class="header__link">ABOUT AETERNUM</a>
                    </li>
                    <li class="header__item">
                        <a href="http://defaultdomain.com/?page_id=22" class="header__link">ACTIVE OWNERSHIP</a>
                    </li>
                    <li class="header__item">
                        <a href="http://defaultdomain.com/?page_id=27" class="header__link">TEAM</a>
                    </li>
                    <li class="header__item">
                        <a href="http://defaultdomain.com/?page_id=33" class="header__link">CONTACT</a>
                    </li>
                    <div class="close" id="close"></div>
                </ul>
                <div class="hamburger" id="hamburger">
                </div>
            </div>
        </div>
    </header>