<!--https://www.youtube.com/watch?v=LS8KubY9m2c-->
<!--WordPressテーマ自作！一番カンタンなWordPressクラシックテーマの作り方をカンタン解説
-->

<!--WordPressクラシックテーマ作成！実践編。HTMLサイトWordPress化の手順大公開！保存版
-->
<!--https://www.youtube.com/watch?v=Tv8FaSWi-tY-->

<!--15:10-->
<!---->


<?php get_header(); ?>
    <main>
        <h2>ファッションで自信をつける方法</h2>
        <img src="<?php echo get_template_directory_uri();?>/img/sunahama_josei.jpg" alt="砂浜を歩く女性">
    </main>

    <main>
    <section id="hero">
        <img src="<?php echo get_template_directory_uri();/*これでimg画像を読み込む*/ ?>/img/shinrin_hizashi.jpg" alt=" 参考">
    </section>
    <section id="about">
    </section>
    <section id="information">
        <div class="articles"><!--メインループ。ループ文でwpの投稿を回す-->
            <?php if (have_posts()): ?><!--投稿のif判定コロン構文（投稿があるときとない時で判定する-->
                <?php while (have_posts()): the_post(); ?><!--←投稿のwhileメインループ（投稿がある間は投稿の情報を読み込む）-->
                    <article>
                        <?php if (has_post_thumbnail()): ?><!--サムネイル画像のif判定コロン構文（サムネイル画像があるときは下記を表示する）-->
                            <figure>
                                <?php the_post_thumbnail('post-thumbnails'); ?><!--functons.phpのadd_theme_support('post-thumbnails')←※sがいる※を効かせて、これでwpのサムネイル画像を読み込む-->
                            </figure>
                        <?php else : ?><!--※※※wpサムネイル画像のif判定（サムネイル画像がない場合は下記を表示する-->
                            <figure>
                                <p class="nothing"><!--wpサムネイル画像がないときの画像-->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/shitugen_tozando.jpg" alt=""><!--これでimg画像を読み込む-->
                                </p>
                            </figure>
                        <?php endif; ?><!--wpサムネイル画像のif判定終了（サムネイル画像）-->
                        <!--※※コロン構文 if文の終わりなのでend ifとセミコロン；で閉じる-->
                        <p><?php echo get_the_date(); ?></p><!--日付を読み込む-->
                        <h2><?php the_title(); ?></h2><!--wpの投稿のタイトルを読み込む-->
                        <a href="<?php the_permalink(); ?>">ニュース記事詳細はこちら</a><!---->
                    </article><!--投稿のwhileループ情報-->
                <?php endwhile;
            else: ?><!--投稿のwhileループ終了--><!--投稿のif判定-->
                <p>投稿がありません</p><!--投稿がない時は「投稿がありません」が表示される-->
            <?php endif; ?><!--投稿のif判定終了-->
        </div><!--メインループarticleタグの閉じタグ。ループ文でarticleタグ（wpの投稿）を回す-->
        <div class="list_link"><a href="<?php bloginfo('url'); ?>/news">🔗news</a></div><!---->
    </section>
<?php get_footer(); ?>