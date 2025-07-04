<?php get_header(); ?>

<main id="information"> <!-- 記事一覧用のセクション -->

  <h1 class="site-title">最新の投稿一覧</h1>

  <div class="articles">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <article>
          <!-- 投稿タイトル -->
          <h2><?php the_title(); ?></h2>

          <!-- 投稿日 -->
          <p><?php echo get_the_date(); ?></p>

          <!-- 続きを読むボタン -->
          <a href="<?php the_permalink(); ?>">続きを読む</a>
        </article>

      <?php endwhile; ?>
    <?php else : ?>
      <p>まだ投稿がありません。</p>
    <?php endif; ?>
  </div>

</main>

<?php get_footer(); ?>
