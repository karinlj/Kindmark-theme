<!-- footer -->
<footer id="footer" class="footer_main section_spacing_top_small darkgreen">
    <div class="container">
        <div class="row align-items-start justify-content-between">
            <div class="col-12 col-md-6 col-xl-5">
                <div class="logo_footer margin_2">
                    <a href="<?php echo home_url() ?>" aria-label="Home page">
                        <!-- <h2 class="colored_light_green_part">Sample site logo</h2> -->
                        <img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_circle__small.png"
                            width="100" height="auto" alt="Kindmarks logo" />
                        <!-- <img class="logo_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/boozang_logo_reverse@2x.png 325w" width="208" height="51" alt="Boozang home page" /> -->
                    </a>
                </div>

                <?php $footer_heading = get_field('footer_heading', 'option');
                if ($footer_heading) { ?>
                    <h2 class="footer_heading">
                        <?php echo $footer_heading; ?>
                    </h2>
                <?php   } ?>

                <div class="customer_contact" id="contact_us">

                    <?php $telephone = get_field('telephone', 'option');
                    if ($telephone) { ?>
                        <div class="customer_contact_info">
                            <p>
                                <span class="contact_icon color_lightgreen"><i class="fa-solid fa-phone"></i>
                                </span>
                                <span class="">Telefon:</span>
                            </p>
                            <a href="tel:<?php echo $telephone; ?>" class="underscore_link " target="_top" aria-label="Company telephone"><?php echo $telephone; ?>
                            </a>
                        </div>
                    <?php   } ?>

                    <?php $mail_link = get_field('mail_link', 'option');
                    if ($mail_link) { ?>
                        <div class="customer_contact_info">
                            <p>
                                <span class="contact_icon color_lightgreen"><i class="fa-regular fa-envelope"></i>
                                </span>
                                <span class="">Email:</span>
                            </p>
                            <a href="<?php echo esc_url('mailto:' . antispambot(($mail_link))); ?>" class="underscore_link " target="_top" aria-label="Company email"><?php echo esc_html($mail_link); ?>
                            </a>
                        </div>

                    <?php   } ?>

                </div>
                <div class="social_icons">
                    <ul class="social">
                        <!-- repeater -->
                        <?php if (have_rows('social_icons', 'option')) {
                            while (have_rows('social_icons', 'option')) {
                                the_row();

                                $social_url = get_sub_field('social_url');
                                $social_site = get_sub_field('social_site'); ?>
                                <li class="social_item">
                                    <a href="<?php echo $social_url; ?>" aria-label="<?php echo $social_site; ?>">
                                        <i class="fa-brands fa-<?php echo $social_site; ?>" aria-hidden="true"></i>
                                    </a>
                                </li>
                        <?php
                            }
                        } ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="contact_form margin_2">
                            <?php $text_editor = get_field('text_editor', 'option');
                            if ($text_editor) { ?>
                                <?php echo $text_editor; ?>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-start">
            <div class="col-md-12 col-xl-6">
                <?php $footer_extra_info = get_field('footer_extra_info', 'option');
                if ($footer_extra_info) { ?>
                    <p class="footer_extra_info">
                        <?php echo $footer_extra_info; ?>
                    </p>
                <?php   } ?>

                <ul class="badges">
                    <?php
                    //repeater
                    if (have_rows('footer_bages', 'option')) {
                        while (have_rows('footer_bages', 'option')) {
                            the_row();
                            $img_id = get_sub_field('image');
                            $image = wp_get_attachment_image_src($img_id, 'full');
                            $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);  ?>

                            <li class="badge_item">
                                <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                            </li>
                    <?php
                        }
                    } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer_copy">
        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-10">

                    <div class="copy">
                        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> <a href="http://localhost/Kindmarks/integritetspolicy/" target="_blank" rel="noopener noreferrer" aria-label="Integritetspolicy"><span class="color_lightgreen">Integritetspolicy</span></a></br>
                            Site & design av <a href="http://frilans.karinljunggren.com/" target="_blank" rel="noopener noreferrer" aria-label="Karin Ljunggren Home Page"><span class="color_lightgreen">Karin Ljunggren</span></a>
                        </p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="back_to_top_link">
                        <a href="#header_top" aria-label="To top of page">
                            <i class="fas fa-angle-up" aria-hidden="true" aria-label="Toppen av sidan" title="To top of page"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>