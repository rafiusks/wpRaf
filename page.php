<?php get_header(); ?>
<?php echo do_shortcode('[metaslider id=7]'); ?>
<div id="ctaWrapper">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('CTA Widget')) : ?>
    <?php endif; ?>
</div>
<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="header">
            <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
        </header>
        <section class="entry-content">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
            <div class="entry-links">
                <?php wp_link_pages(); ?>
            </div>
        </section>
    </article>
    <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>
</section>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar')) : ?>
    [ do default stuff if no widgets ]
<?php endif; ?>
<?php get_footer(); ?>