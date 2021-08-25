<?php

/**
 * slickSlider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slickSlider-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slickSlider';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
?>
        <?php
        if (have_rows('Slick-slider-container')) :
            while (have_rows('Slick-slider-container')) : the_row(); ?>
                <div class="center">
                    <div class="clip">
                        <h3 class="slider-heading">
                            <div class="top"><?php the_sub_field('title') ?></div>
                            <div class="content"><?php the_sub_field('text') ?></div>
                            <div class="bottom"><img src="<?php the_sub_field('image'); ?>"></div>
                        </h3>
                    </div>
            <?php endwhile;
        else :
        endif;
            ?>

                </div>
    </div>
</div>
