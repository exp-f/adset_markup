<?php


function get_features()
{
    ob_start();
    ?>
    <div class="block_2_features">
        <?
        $fields = get_field('features');
        foreach ($fields as $feature) {
            ?>
            <div class="block_2_feature animate">
                <div class="block_2_feature_text">
                    <h3><?=$feature['title']?></h3>
                    <?=$feature['text']?>

                </div>
                <div class="block_2_feature_image">
                    <img src="<?=$feature['image']?>" alt="">
                </div>
            </div>
            <?
        }
        ?>
    </div>
    <?
    return ob_get_clean();
}

function main_title()
{
    ob_start();
    ?>
    <h2><?=get_field('main_title')?></h2>
    <?
    return ob_get_clean();
}

function main_subtitle()
{
    ob_start();
    ?>
    <p><?=get_field('main_subtitle')?></p>
    <?
    return ob_get_clean();
}

function get_email()
{
    ob_start();
    ?>
    <a class="block_4_mail" href="mailto:<?=get_field('email')?>"><?=get_field('email')?></a>
    <?
    return ob_get_clean();
}

function get_phone()
{
    ob_start();
    ?>
    <a class="block_4_phone" href="mailto:<?=get_field('phone')?>"><?=get_field('phone')?></a>
    <?
    return ob_get_clean();
}
function get_address()
{
    ob_start();
    ?>
    <p class="block_4_address"><?=get_field('address')?></p>
    <?
    return ob_get_clean();
}
function get_disclaimer()
{
    ob_start();
    ?>
    <p><?=get_field('disclaimer')?></p>
    <?
    return ob_get_clean();
}





add_shortcode('features', 'get_features');
add_shortcode('main_title', 'main_title');
add_shortcode('main_subtitle', 'main_subtitle');
add_shortcode('email', 'get_email');
add_shortcode('phone', 'get_phone');
add_shortcode('address', 'get_address');
add_shortcode('disclaimer', 'get_disclaimer');
