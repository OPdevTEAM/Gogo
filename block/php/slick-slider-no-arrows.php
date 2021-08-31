<?php

/**
 * slickSliderNoArrows Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slickSliderNoArrows-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slickSliderNoArrows';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
?>
<div class="customSliderNoArrows">
        <?php
        if (have_rows('Slick-slider-container-no-arrows')) :
            while (have_rows('Slick-slider-container-no-arrows')) : the_row(); ?>

                <div class="customSliderNoArrows__content">
                    <div class="customSliderNoArrows__slide">
                        <div class="customSliderNoArrows__card">
                            <div class="customSliderNoArrows__title">
                                <h3 class="customSliderNoArrows__title__heading"><?php the_sub_field('title') ?></h3>
                            </div>
                            <div class="customSliderNoArrows__text">
                                <span class="customSliderNoArrows__text__content"><?php the_sub_field('text') ?></span>
                            </div>
                            <div class="customSliderNoArrows__image">
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
