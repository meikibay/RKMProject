<?php get_header('special');?>
<!--"Blog page" that displays POSTS if the user decides to remove "Front_Pag"-->
<?php
// the post loop
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
?>

    <section class="is-fullhd hero">
        <div class="column">
            <div class="has-text-centered">
                <div class="post-preview">
                    <a href ="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </a>
                    <a href ="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <h1 class="post-title">
                            <?php the_title();?>
                        </h1>
                    </a>
                    <h4 class="post-subtitle">
                        <?php the_excerpt(); ?>
                    </h4>
                    <p class="post-meta">Posted by
                        <?php the_author(); ?> at <?php the_time(); ?>
                    </p>
                </div>
                <hr>
            </div>
        </div>
    </section>
<?php
    } // end while
    } // end if
?>
<?php get_footer(); ?>