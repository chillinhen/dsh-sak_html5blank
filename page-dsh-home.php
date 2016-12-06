<?php /* Template Name: DSH-Home */ get_header(); ?>
<?php get_template_part('partials/banner'); ?>
<?php if (have_posts()): ?>
    <div class="site-content">
        <?php while (have_posts()) : the_post(); ?>
            <div class="main-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile;
        ?>
    </div>
<?php else:
    ?>
    <div class="main-content">
        <?php get_template_part('partials/article', '404'); ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>