<?php get_header(); ?>
<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post(); ?>
      <article class="post">
        <h2>
          <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="entry">
          <?php the_content(); ?>
        </div>
      </article><!-- post -->
    <?php endwhile; ?>
  <?php endif; ?>
      <?php get_footer(); ?>