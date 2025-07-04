<?php get_header(); ?>

<main class="main-content">
  <h1>最新の投稿一覧</h1>

  <div class="articles">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <article>
          <h2><?php the_title(); ?></h2>
          <p><?php echo get_the_date(); ?></p>
          <a href="<?php the_permalink(); ?>">続きを読む</a>
        </article>
      <?php endwhile; ?>
    <?php else: ?>
      <p>まだ投稿がありません。</p>
    <?php endif; ?>
  </div>

</main>

<?php get_footer(); ?>
