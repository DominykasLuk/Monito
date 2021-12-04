<?php get_header(); ?>
<div class="container">
    <div class="row justify-content-around">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', 'archive');
            }
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>