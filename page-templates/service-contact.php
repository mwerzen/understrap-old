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

    <!-- Headline and Subheading -->
    <div class="wrapper" id="landing-page">
        <div class="wrapper landing-shaded no-margin no-padding">
            <div class="wrapper landing-background">
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
        </div>

        <!-- Main Message and contact form -->
        <div class="container body-copy-wrapper">
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

        <!-- Testimonials  -->
        <div class="wrapper landing-shaded body-copy-wrapper" id="testimonial-wrapper">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 testimonial">
                        <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle"
                                                                               src="<?php the_field('testimonial_image_1'); ?>"/>
                        </div>
                        <h6 class="testimonial-name"><?php the_field('testimonial_name_1'); ?></h6>
                        <h6 class="testimonial-title"><?php the_field('testimonial_title_1'); ?></h6>
                        <p class="testimonial-text"><?php the_field('testimonial_1'); ?></p>
                        <div class="testimonial-rating"><?php the_field('testimonial_rating_1'); ?></div>
                    </div>
                    <div class="col-md-4 testimonial">
                        <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle"
                                                                               src="<?php the_field('testimonial_image_2'); ?>"/>
                        </div>
                        <h6 class="testimonial-name"><?php the_field('testimonial_name_2'); ?></h6>
                        <h6 class="testimonial-title"><?php the_field('testimonial_title_2'); ?></h6>
                        <p class="testimonial-text"><?php the_field('testimonial_2'); ?></p>
                        <div class="testimonial-rating"><?php the_field('testimonial_rating_2'); ?></div>
                    </div>
                    <div class="col-md-4 testimonial">
                        <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle"
                                                                               src="<?php the_field('testimonial_image_3'); ?>"/>
                        </div>
                        <h6 class="testimonial-name"><?php the_field('testimonial_name_3'); ?></h6>
                        <h6 class="testimonial-title"><?php the_field('testimonial_title_3'); ?></h6>
                        <p class="testimonial-text"><?php the_field('testimonial_3'); ?></p>
                        <div class="testimonial-rating"><?php the_field('testimonial_rating_3'); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 1 LT -->
        <div class="container body-copy-wrapper">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 copy-text copy-text-left" id="body-copy-1">
                    <?php the_field('body_copy_1'); ?>
                </div>
                <div class="col-md-4" id="body-copy-1-image">
                    <img class="copy-img copy-img-right rounded" src="<?php the_field('body_copy_1_image'); ?>"/>
                </div>
            </div>
        </div>

        <!--  Copy 2 RT -->
        <div class="wrapper body-copy-wrapper landing-shaded-grey">
            <div class="container body-copy-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4" id="body-copy-2-image">
                        <img class="copy-img copy-img-left rounded" src="<?php the_field('body_copy_2_image'); ?>"/>
                    </div>
                    <div class="col-md-6 copy-text copy-text-right" id="body-copy-2">
                        <?php the_field('body_copy_2'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy Cards 1-6 -->
        <div class="wrapper body-copy-wrapper">
            <div class="container body-copy-wrapper">
                <div class="row pb-5 padded-row align-items-center justify-content-between">
                    <div class="col-md-3  copy-text copy-text-left" id="body-card-3">
                        <?php the_field('body_card_1'); ?>
                    </div>
                    <div class="col-md-3  copy-text copy-text-left" id="body-card-3">
                        <?php the_field('body_card_2'); ?>
                    </div>
                    <div class="col-md-3  copy-text copy-text-left" id="body-card-3">
                        <?php the_field('body_card_3'); ?>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-3  copy-text copy-text-left" id="body-card-4">
                        <?php the_field('body_card_4'); ?>
                    </div>
                    <div class="col-md-3 copy-text copy-text-left" id="body-card-5">
                        <?php the_field('body_card_5'); ?>
                    </div>
                    <div class="col-md-3  copy-text copy-text-left" id="body-card-6">
                        <?php the_field('body_card_6'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 3 LT -->
        <div class="wrapper body-copy-wrapper landing-shaded-grey">
            <div class="container body-copy-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6  copy-text copy-text-left" id="body-copy-3">
                        <?php the_field('body_copy_3'); ?>
                    </div>
                    <div class="col-md-4 text-center" id="body-copy-3-image">
                        <img class="copy-img copy-img-right rounded" src="<?php the_field('body_copy_3_image'); ?>"/>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials 2 -->
        <div class="wrapper landing-shaded body-copy-wrapper" id="testimonial-wrapper">
            <div class="container">
                <div class="row text-center">

                    <div class="col-md-4 testimonial">
                        <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle"
                                                                               src="<?php the_field('testimonial_image_4'); ?>"/>
                        </div>
                        <h6 class="testimonial-name"><?php the_field('testimonial_name_4'); ?></h6>
                        <h6 class="testimonial-title"><?php the_field('testimonial_title_4'); ?></h6>
                        <p class="testimonial-text"><?php the_field('testimonial_4'); ?></p>
                        <div class="testimonial-rating"><?php the_field('testimonial_rating_4'); ?></div>
                    </div>

                    <div class="col-md-4 testimonial">
                        <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle"
                                                                               src="<?php the_field('testimonial_image_5'); ?>"/>
                        </div>
                        <h6 class="testimonial-name"><?php the_field('testimonial_name_5'); ?></h6>
                        <h6 class="testimonial-title"><?php the_field('testimonial_title_5'); ?></h6>
                        <p class="testimonial-text"><?php the_field('testimonial_5'); ?></p>
                        <div class="testimonial-rating"><?php the_field('testimonial_rating_5'); ?></div>
                    </div>

                    <div class="col-md-4 testimonial">
                        <div class="mx-auto .testimonial-image-container"><img class="testimonial-image rounded-circle"
                                                                               src="<?php the_field('testimonial_image_6'); ?>"/>
                        </div>
                        <h6 class="testimonial-name"><?php the_field('testimonial_name_6'); ?></h6>
                        <h6 class="testimonial-title"><?php the_field('testimonial_title_6'); ?></h6>
                        <p class="testimonial-text"><?php the_field('testimonial_6'); ?></p>
                        <div class="testimonial-rating"><?php the_field('testimonial_rating_6'); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 4 MT -->
        <div class="wrapper body-copy-wrapper">
            <div class="container body-copy-wrapper">
                <div class="row mb-4 align-items-center justify-content-between">
                    <div class="col-md-12 text-center" id="body-copy-4-image">
                        <img class="img-responsive copy-img-left rounded" src="<?php the_field('body_copy_4_image'); ?>"/>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8 offset-2 copy-text copy-text-right" id="body-copy-4">
                        <?php the_field('body_copy_4'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 5 LT-->
        <div class="wrapper body-copy-wrapper landing-shaded-grey">
            <div class="container body-copy-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6  copy-text copy-text-left" id="body-copy-5">
                        <?php the_field('body_copy_5'); ?>
                    </div>
                    <div class="col-md-4 text-center" id="body-copy-5-image">
                        <img class="copy-img copy-img-right rounded" src="<?php the_field('body_copy_5_image'); ?>"/>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 6 RT -->
        <div class="wrapper body-copy-wrapper">
            <div class="container body-copy-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4" id="body-copy-6-image">
                        <img class="copy-img copy-img-left rounded" src="<?php the_field('body_copy_6_image'); ?>"/>
                    </div>
                    <div class="col-md-6 copy-text copy-text-right" id="body-copy-6">
                        <?php the_field('body_copy_6'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 7 LT -->
        <div class="wrapper body-copy-wrapper landing-shaded-grey">
            <div class="container body-copy-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6  copy-text copy-text-left" id="body-copy-7">
                        <?php the_field('body_copy_7'); ?>
                    </div>
                    <div class="col-md-4 text-center" id="body-copy-7-image">
                        <img class="copy-img copy-img-right rounded" src="<?php the_field('body_copy_7_image'); ?>"/>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy Cards 7-9 -->
        <div class="wrapper body-copy-wrapper landing-shaded">
            <div class="container body-copy-wrapper">
                <div class="row pb-5 padded-row align-content-stretch justify-content-between">
                    <div class="col-md-3 copy-text copy-text-left" id="body-card-7">
                        <div class="card card-default">
                            <div class="card-body"><?php the_field('body_card_7'); ?></div>
                        </div>
                    </div>
                    <div class="col-md-3  copy-text copy-text-left" id="body-card-8">
                        <div class="card card-default">
                            <div class="card-body"><?php the_field('body_card_8'); ?></div>
                        </div>
                    </div>
                    <div class="col-md-3  copy-text copy-text-left" id="body-card-9">
                        <div class="card card-default">
                            <div class="card-body"><?php the_field('body_card_9'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 8 RT -->
        <div class="wrapper body-copy-wrapper">
            <div class="container body-copy-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4" id="body-copy-8-image">
                        <img class="copy-img copy-img-left rounded" src="<?php the_field('body_copy_8_image'); ?>"/>
                    </div>
                    <div class="col-md-6 copy-text copy-text-right" id="body-copy-8">
                        <?php the_field('body_copy_8'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 9 LT -->
        <div class="wrapper body-copy-wrapper landing-shaded-grey">
            <div class="container body-copy-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6  copy-text copy-text-left" id="body-copy-9">
                        <?php the_field('body_copy_9'); ?>
                    </div>
                    <div class="col-md-4 text-center" id="body-copy-9-image">
                        <img class="copy-img copy-img-right rounded" src="<?php the_field('body_copy_9_image'); ?>"/>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copy 10 MT -->
        <div class="wrapper body-copy-wrapper">
            <div class="container body-copy-wrapper">
                <div class="row mb-4 align-items-center justify-content-between">
                    <div class="col-md-12 text-center" id="body-copy-4-image">
                        <img class="img-responsive copy-img-left rounded" src="<?php the_field('body_copy_10_image'); ?>"/>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8 offset-2 copy-text copy-text-right" id="body-copy-4">
                        <?php the_field('body_copy_10'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mailing List -->
        <div class="wrapper body-copy-wrapper landing-shaded-grey">
            <div class="container body-copy-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4 offset-4 content-area" id="contact-form">
                        <a name="MailingList"></a>
                        <?php the_field('mailing_list'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="row">
            <?php // the_field('contact_form'); ?>
        </div>

    </div>
<?php get_footer(); ?>