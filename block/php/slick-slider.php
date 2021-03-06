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
<div class="customSlider">
        <?php
        if (have_rows('Slick-slider-container')) :
            while (have_rows('Slick-slider-container')) : the_row(); ?>

                <div class="customSlider__content">
                    <div class="customSlider__slide">
                        <div class="customSlider__card">
                            <div class="customSlider__title">
                                <h3 class="customSlider__title__heading"><?php the_sub_field('title') ?></h3>
                            </div>
                            <div class="customSlider__text">
                                <span class="customSlider__text__content"><?php the_sub_field('text') ?></span>
                            </div>
                            <div class="customSlider__image">
                                <img src="<?php the_sub_field('image'); ?>">
                            </div>
                        </div>
                    </div>

                </div>
        <?php endwhile;
        else :
        endif;
        ?>
    </div>
</div>
