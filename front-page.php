<?php get_header(); ?>
<main>
    <section class="home-hero">
        <div class="half" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/pexels-andrea-piacquadio-789822.jpg');">
        </div>
        <div class="container">
            <h2>
                <?php bloginfo('description'); ?>
            </h2>
            <p>personal and business lending made easy</p>
            <span class="box-row">
            <a href="#contact-us" class="btn">
                learn more
            </a>
            </span>
        </div>
    </section>
    <?php get_template_part( 'partials/contact' ); ?>
</main>
<?php get_footer(); ?>