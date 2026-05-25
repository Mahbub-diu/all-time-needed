<?php
$footer_logo         = get_field('footer_logo', 'option');
$footer_description  = get_field('footer_description', 'option');
$footer_social_links = get_field('footer_social_links', 'option');
$footer_privacy_links = get_field('footer_privacy_links', 'option');
$footer_copyright         = get_field('footer_copyright', 'option');
$footer_contact_btn_content = get_field('footer_contact_btn_content', 'option');
$footer_contact_btn_url     = get_field('footer_contact_btn_url', 'option');
?>

<footer>
    <div class="footer-main" aria-label="Footer Main">
        <div class="container">
            <div class="row">

                <!-- Col 1: Logo & Description -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="footer-logo-box" aria-label="Footer Logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Footer Logo Link">
                            <?php if ($footer_logo) : ?>
                                <img src="<?php echo esc_url($footer_logo['url']); ?>"
                                    alt="<?php echo esc_attr($footer_logo['alt']); ?>" aria-label="Footer Logo">
                            <?php endif; ?>
                        </a>
                    </div>
                    <?php if ($footer_description) : ?>
                        <div class="footer-description" aria-label="Footer Description">
                            <article>
                                <?php echo wp_kses_post($footer_description); ?>
                            </article>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Cols 2-4: Nav menus -->
                <?php
                $footer_locations = get_nav_menu_locations();
                $footer_cols = [
                    'footer-1' => 'footer-common-links',
                    'footer-2' => 'footer-common-links',
                    'footer-3' => 'footer-contact-box',
                ];
                foreach ($footer_cols as $location => $box_class) :
                    $menu_obj = isset($footer_locations[$location])
                        ? wp_get_nav_menu_object($footer_locations[$location])
                        : null;
                ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="<?php echo esc_attr($box_class); ?>">
                            <?php if ($menu_obj) : ?>
                                <div class="footer-common-title"><?php echo esc_html($menu_obj->name); ?></div>
                            <?php endif; ?>
                            <?php wp_nav_menu([
                                'theme_location' => $location,
                                'container'      => false,
                                'items_wrap'     => '<ul>%3$s</ul>',
                                'fallback_cb'    => false,
                            ]); ?>
                            <?php if ($box_class === 'footer-contact-box' && $footer_social_links) : ?>
                                <div class="footer-social-links">
                                    <ul>
                                        <?php foreach ($footer_social_links as $link) : ?>
                                            <li>
                                                <a href="<?php echo esc_url($link['url']); ?>">
                                                    <?php echo esc_html($link['label']); ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <!-- Bottom row: Privacy & Copyright -->
            <div class="row align-items-center justify-content-between">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <?php if ($footer_privacy_links) : ?>
                        <div class="privacy-policy">
                            <ul>
                                <?php foreach ($footer_privacy_links as $link) : ?>
                                    <li>
                                        <a href="<?php echo esc_url($link['url']); ?>">
                                            <?php echo esc_html($link['label']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <?php if ($footer_copyright) : ?>
                        <div class="footer-copyright">
                            <p>© <span id="year"></span> <?php echo esc_html($footer_copyright); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</footer>
<?php if ($footer_contact_btn_content || $footer_contact_btn_url) : ?>
    <div class="fix-contact-us">
        <a href="<?php echo esc_url($footer_contact_btn_url); ?>">
            <div class="contact-wrapper">
                <?php echo wp_kses_post($footer_contact_btn_content); ?>
            </div>
        </a>
    </div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>

</html>