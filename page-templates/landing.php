<?php
/**
 * Template Name: Landing Page Template
 *
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>
<main>
    <section class="inner-bg"></section>


</main>
<div class="row">
    hello world from a row;
</div>

<?php
get_footer();
?>
