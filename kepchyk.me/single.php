<?php get_header();?>
<?while(have_posts()):
    the_post();?>
    <h1 class="my-4 page-title"><?wp_title();?></h1>
    <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(null, 'full');?>" alt="<?the_title();?>">
    <p><small class="text-muted"><?the_time('j F Y');?> <?php the_tags('');?></small></p>
    <?the_content();?>
    <?php comments_template(); ?>
<?endwhile;?>
<?php get_footer();?>