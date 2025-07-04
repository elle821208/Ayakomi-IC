<!DOCTYPE html>
<html lang="ja">
<html lang="<?php bloginfo('language'); ?>"><!--WPの一般設定の言語を持ってくる-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php titles(); ?></title><!--サイトタブタイトル用にfunctions.phpで設定した | サイトのキャッチコピー（サイトタブ表示、functions.phpより）--->
    <meta name="description" content="<?php bloginfo('description');/*これでwpの   を読み込む*/ ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css"><!--cssが読み込まれないときは検証ツールを開いてリロードボタン長押し。「キャッシュの消去とハード再読み込み」をする-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
    <?php wp_head(); ?><!--headが終わる前に入れる-->
</head>

<body <?php body_class(); ?>>

  <header class="wix-style-header">
    <!-- 背景画像 -->
    <div class="header-background">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header-bg.jpg" alt="背景画像">
    </div>

    <!-- ロゴ＆ナビ -->
    <div class="header-content">
      <h1 class="site-title">Ayakomi Insight Coordinator</h1>

      <!-- Wixと同じメニュー -->
      <nav class="header-nav">
        <ul>
          <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
          <li><a href="<?php echo home_url('/about'); ?>"></a></li>
          <li><a href="<?php echo home_url('/about'); ?>">初めての方へ</a></li>
          <li><a href="<?php echo home_url('/course'); ?>">コース</a></li>
          <li><a href="<?php echo home_url('/counseling'); ?>">プラン</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
          <li><a href="<?php echo home_url('/about'); ?>">ブログ</a></li>
          <li><a href="https://www.instagram.com/【あなたのインスタID】" target="_blank" rel="noopener">Instagram</a></li>
        </ul>
      </nav>
    </div>
  </header>
