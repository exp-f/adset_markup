<? get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div class="bg_item bg_item--1 bg_item--round" data-parallax="0.0001"></div>
        <div class="bg_item bg_item--2 bg_item--round" data-parallax="0.0002"></div>
        <div class="bg_item bg_item--7 bg_item--round" data-parallax="0.1"></div>
        <?
        if (is_page('privacy-policy') || is_page('end-user-agreement') || is_page('terms-and-conditions-of-use')) {
            ?>
            <section class="block_5">
                <div class="wrapper">
                    <?
                    the_content();
                    ?>
                </div>
            </section>
            <?
        } else {
            the_content();
        }
    }
}

get_footer(); ?>