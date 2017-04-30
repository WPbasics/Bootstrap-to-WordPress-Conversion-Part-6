<?php get_header(); ?>

<div class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php if(have_posts()): ?>
                <?php while (have_posts()) : the_post();?>

                    <div class="blog-post">

                        <div class="post_thumbnail"><?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php endif; ?>


                        <h2 class="blog-post-title"><?php the_title(); ?></h2>
                        <p class="blog-post-meta">
                            <?php the_date(); ?> by
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                        </p>

                        <?php the_content(); ?>
                        <hr>
                        <?php comments_template(); ?>

                    </div><!-- /.blog-post -->

                <?php endwhile; ?>
            <?php else: ?>
                <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>





        </div><!-- /.blog-main -->

        <?php get_footer(); ?>
