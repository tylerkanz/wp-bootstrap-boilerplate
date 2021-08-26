<?php

/**
 * Template Name: Full-Width
 */

get_header(); ?>

<div class="entry-content-exact">
    <div class="container-fluid">
        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <?php edit_post_link(); ?>
            <?php endwhile;
            ?>
        <?php else : ?>
            <div class="container">
                <h1>Nothing here :(</h1>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
