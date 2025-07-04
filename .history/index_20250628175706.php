

<?php get_header(); // ヘッダー部分（header.php）を読み込む ?>

<main class="main-content">

  <!-- ★ メインビジュアルセクション -->
  <section id="hero">
    <h1>How to Build Confidence in Fashion!!!</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/ayakomi-design-header.jpg" alt="参考画像">
    <!-- ↑ テーマフォルダ内のimgフォルダから画像を読み込む。ファイルは自分で用意する必要あり -->
  </section>

  <!-- ★ コース紹介セクション -->
  <section class="course-list">
    <h2>あなたらしさ発見</h2>

    <!-- 1ヶ月コース -->
    <div class="course-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/course1.jpg" alt="1ヶ月コース">
      <div class="course-info">
        <h3>1ヶ月コース</h3>
        <p>短期間で自分の魅力を知りたい方におすすめ</p>
        <a href="#" class="btn">詳細を見る</a>
      </div>
    </div>

    <!-- 3ヶ月コース -->
    <div class="course-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/course2.jpg" alt="3ヶ月コース">
      <div class="course-info">
        <h3>3ヶ月コース</h3>
        <p>ファッションを通じて自己理解を深める</p>
        <a href="#" class="btn">詳細を見る</a>
      </div>
    </div>

    <!-- 6ヶ月コース -->
    <div class="course-item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/course3.jpg" alt="6ヶ月コース">
      <div class="course-info">
        <h3>6ヶ月コース</h3>
        <p>自信とスタイルを定着させる長期プログラム</p>
        <a href="#" class="btn">詳細を見る</a>
      </div>
    </div>
  </section>

  <!-- ★ ニュース・投稿記事一覧セクション -->
  <section id="information">
    <div class="articles">
      <?php if (have_posts()): // 投稿が存在するかチェック ?>
        <?php while (have_posts()): the_post(); // 投稿がある間ループ ?>

          <article>
            <?php if (has_post_thumbnail()): // アイキャッチ画像がある場合 ?>
              <figure>
                <?php the_post_thumbnail('post-thumbnails'); // アイキャッチ画像を表示 ?>
              </figure>
            <?php else: // 画像がない場合 ?>
              <figure>
                <p class="nothing">
                  <img class="nothing-thumbnails" src="<?php echo get_template_directory_uri(); ?>/img/dinosaur_spinosaurus_water.png" alt="No Image">
                </p>
              </figure>
            <?php endif; ?>

            <p><?php echo get_the_date(); // 投稿日時を表示 ?></p>
            <h2><?php the_title(); // 記事タイトルを表示 ?></h2>
            <a href="<?php the_permalink(); ?>">ニュース記事詳細はこちら</a>
          </article>

        <?php endwhile; ?>
      <?php else: // 投稿が存在しない場合 ?>
        <p>投稿がありません</p>
      <?php endif; ?>
    </div>

    <!-- News一覧ページへのリンク -->
    <div class="list_link">
      <a href="<?php bloginfo('url'); ?>/news">🔗 news 一覧を見る</a>
    </div>

  </section>

</main>

<?php get_footer(); // フッター部分を読み込む ?>
