<!--https://www.youtube.com/watch?v=LS8KubY9m2c-->
<!--WordPressテーマ自作！一番カンタンなWordPressクラシックテーマの作り方をカンタン解説
-->

<!--WordPressクラシックテーマ作成！実践編。HTMLサイトWordPress化の手順大公開！保存版
-->
<!--https://www.youtube.com/watch?v=Tv8FaSWi-tY-->

<!--36:00-->
<!--page.phpから-->
<!---->

<?php get_header();/*これでヘッダーを読み込む*/ ?>
<main>
    <section id="hero">
        <h1>How to Build Confidence in Fashion</h1>
        <img src="<?php echo get_template_directory_uri();/*これでimg画像を読み込む*/ ?>/img/ayakomi-design-header.jpg" alt=" 参考">
    </section>
    <section id="about">
    </section>
    <section id="information">
        <div class="articles"><!--wp投稿をループで回す-->
            <?php if (have_posts()): ?><!--投稿があるときとない時で判定する※コロン構文-->
                <?php while (have_posts()): the_post(); ?><!--wp投稿がある間は投稿の情報を読み込む-->
                    <article><!--↓↓↓wpサムネイル画像-->
                        <?php if (has_post_thumbnail()): ?><!--↓↓↓画像があるときは下記を表示する※コロン構文-->
                            <figure>
                                <?php the_post_thumbnail('post-thumbnails'); ?><!--functons.phpのadd_theme_support('post-thumbnails')←※sがいる※を効かせて、これでwpのサムネイル画像を読み込む-->
                            </figure>
                        <?php else : ?><!--※※※↓↓↓もし画像がない場合は下記を表示する-->
                            <figure>
                                <p class="nothing"><!--画像がないときの画像-->
                                    <img class="nothing-thumbnails" src="<?php echo get_template_directory_uri(); ?>/img/dinosaur_spinosaurus_water.png" alt=""><!--これでimg画像を読み込む-->
                                </p>
                            </figure>
                        <?php endif; ?><!--↑↑↑wpサムネイル画像の有無のif判定終了※コロン構文-->
                        <p><?php echo get_the_date(); ?></p><!--日付を読み込む※if判定はなし-->
                        <h2><?php the_title(); ?></h2><!--タイトルを読み込む※if判定はなし-->
                        <a href="<?php the_permalink(); ?>">ニュース記事詳細はこちら</a><!---->
                    </article><!--投稿のwhileループ情報終わり-->
                <?php endwhile;
            else: ?><!--投稿のwhileループ終了--><!--投稿のif判定-->
                <p>投稿がありません</p><!--投稿がない時の表示-->
            <?php endif; ?><!--投稿のif判定終了-->
        </div><!--メインループarticleタグの閉じタグ。ループ文でarticleタグ（wpの投稿）を回す-->
        <div class="list_link"><a href="<?php bloginfo('url'); ?>/news">🔗news</a></div><!---->
    </section>
</main>
<?php get_footer(); ?>