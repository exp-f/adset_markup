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


add_shortcode('features', 'get_features');
