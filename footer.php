<footer class="footer">
    <div class="footer__container">
        <div class="footer__holder">
            <div class="footer__part">
                <h2 class="footer__name">AETERNUM</h2>
                <p class="footer__item">Aeternum Capital AS</p>
                <p class="footer__item">Pier X, Bryggegata 3, 0250 Oslo</p>
                <p class="footer__item">+47 00 00 00 00</p>
                <p class="footer__item">contact@test.com</p>
                </div>
                <div class="footer__part">
                    <a href="<?= get_home_url(); ?>" class="footer__link">Home</a>
                    <a href="<?= get_home_url(); ?>/ABOUT-COMPANY" class="footer__link">About COMPANY</a>
                    <a href="<?= get_home_url(); ?>/ACTIVE-OWNERSHIP" class="footer__link">Active ownership</a>
                    <a href="<?= get_home_url(); ?>/TEAM" class="footer__link">Team</a>
                    <a href="<?= get_home_url(); ?>/CONTACT" class="footer__link">Contact</a>
                </div>
                <div class="footer__part">
                    <a href="" class="footer__link_DisplayBlock footer__link">Linkedin</a>
                    <a href="" class="footer__link">Terms and conditions</a>
                    <a href="" class="footer__link">Privacy Policy</a>
                    <p class="footer__copyright">© Copyright <?= date('Y')." ".get_bloginfo('name'); ?></p>
                </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>