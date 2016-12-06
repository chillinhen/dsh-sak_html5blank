<?php /* Template Name: DSH-Redirect */ get_header(); ?>
<?php get_template_part('partials/banner'); ?>
<?php
$warteliste = get_field('warteliste');
$absage = get_field('absage');
?>
<?php if (have_posts()): ?>
    <div class="site-content">
        <?php
        //CFDBCOunt
        $countShortCode = new CFDBShortcodeCount();
        $attributes = array('form' => 'Anfrage DSH Prüfung');
        $dbcount = $countShortCode->handleShortCode($attributes);
        ?>
        <?php while (have_posts()) : the_post(); ?>
                <?php if ($dbcount <= 1) : ?>
                <div class="main-content">
                <?php the_content(); ?>
                </div>
            <?php
            endif;
            if ($dbcount > 1 && $dbcount <= 3) :
                if ($warteliste) :
                    echo $warteliste;
                endif;
            endif;
            if ($dbcount > 3) :
                if ($absage) :
                    echo $absage;
                endif;
            endif;
            ?>
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