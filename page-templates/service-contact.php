<?php
/**
 * Template Name: Service Landing Page Form
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type');
?>


<div class="wrapper" id="landing-page">
    <div class="wrapper landing-gradient">
        <div class="container" id="content">
            <div class="row" id="landing-headline-row">
                <div class="col-md-8 content-area" id="headline">
                    <h1 class="black-text-shadow"><?php the_field('headline'); ?></h1>
                    <h4 class="black-text-shadow"><?php the_field('subheadline'); ?></h4>
                </div>
                <div class="col-md-4 content-area" id="headline-image">
                    <img src="<?php the_field('headline_image'); ?>" alt="Logo"/>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-8 content-area pr-5" id="pitch">
                <?php the_field('main_hooks'); ?>
            </div>

            <div class="col-md-4 content-area" id="contact-form">
                <a name="ContactMe"></a>
                <?php the_field('contact_form'); ?>
            </div>
        </div>
    </div>


    <div class="wrapper landing-shaded" id="testimonial-wrapper">
        <div class="container">
            <div class="row text-center">

                <div class="col-md-4 testimonial">
                    <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle" src="<?php the_field('testimonial_image_1'); ?>"/></div>
                    <h6 class="testimonial-name"><?php the_field('testimonial_name_1'); ?></h6>
                    <h6 class="testimonial-title"><?php the_field('testimonial_title_1'); ?></h6>
                    <p class="testimonial-text"><?php the_field('testimonial_1'); ?></p>
                    <div class="testimonial-rating"><?php the_field('testimonial_rating_1'); ?></div>
                </div>

                <div class="col-md-4 testimonial">
                    <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle" src="<?php the_field('testimonial_image_2'); ?>"/></div>
                    <h6 class="testimonial-name"><?php the_field('testimonial_name_2'); ?></h6>
                    <h6 class="testimonial-title"><?php the_field('testimonial_title_2'); ?></h6>
                    <p class="testimonial-text"><?php the_field('testimonial_2'); ?></p>
                    <div class="testimonial-rating"><?php the_field('testimonial_rating_2'); ?></div>
                </div>

                <div class="col-md-4 testimonial">
                    <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle" src="<?php the_field('testimonial_image_3'); ?>"/></div>
                    <h6 class="testimonial-name"><?php the_field('testimonial_name_3'); ?></h6>
                    <h6 class="testimonial-title"><?php the_field('testimonial_title_3'); ?></h6>
                    <p class="testimonial-text"><?php the_field('testimonial_3'); ?></p>
                    <div class="testimonial-rating"><?php the_field('testimonial_rating_3'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <?php // the_field('contact_form'); ?>
    </div>

</div>
<?php get_footer(); ?>