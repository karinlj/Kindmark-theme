<?php
// header background
$color = get_field('header_background');
if (is_home() || is_archive()) {
    $color = get_field('header_background', get_option('page_for_posts'));
}
?>
<div id="nav-wrap" class="">
    <div class="container">

        <nav class="main_menu" role="navigation" aria-label="Main Navigation">
            <a class="logo_header" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home page">
                <!--extra double size image for retina-->
                <!-- <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_ligg_white.png"
                            alt="Kindmarks logo" />  -->

                <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_01.png"
                    width="100" height="auto" alt="Kindmarks logo" />
                <span>Sample site</span>
            </a>

            <div class="nav_links">
                <?php  //wp_nav_menu();
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                ));
                ?>
                <section class="signup">
                    <ul>
                        <li>
                            <a class="btn_link outline_color_white" href="<?php echo esc_url(home_url('#footer')); ?>"
                                aria-label="Kontakt">
                                Kontakta Oss
                            </a>
                        </li>
                        <li>

                        </li>
                    </ul>
                </section>
            </div>
            <!--hamburger-->
            <button class="menu_toggle_btn" aria-expanded="false" aria-label="Mobile Menu">
                <div aria-hidden="true"></div>
            </button>
        </nav>
    </div>

</div>

<div class="nav-mobile">
    <div class="nav_links">
        <?php  //wp_nav_menu();
        wp_nav_menu(array(
            'theme_location' => 'primary',
        ));
        ?>
        <div class="signup">
            <ul>
                <li>
                    <a class="btn_link green" href="<?php echo esc_url(home_url('/Kindmarks/#footer')); ?>"
                        aria-label="Kontakt">
                        Kontakta Oss
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>