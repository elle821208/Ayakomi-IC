<?php
//※※※↑↑↑functions.phpトップの<?phpより上にはコメントを書かないこと(エラーの原因になる)_！

add_theme_support('post-thumbnails');/*index.phpのループ文のthumbnail用とこれでwpのサムネイル画像を読み込む*/
add_image_size('post-thumbnails',400,200,true);/*サムネイル画像のサイズを指定する。post-thumbnailsはsがいる*/



//WPサイトタブタイトル（wpの一般設定より）をheader.phpでを読み込む時の設定
function titles()
{
$title = wp_title(' | ',true,'right');
if  (is_home()) {//もしトップページ(Homeページ)のときはAyakomi |トップを表示
echo'①Ayakomi |トップ ';
}else{//それ以外は下記を表示
    echo $title.'サイト名';//$title(wp固定ページタイトル)にサイト名を足したものを使う
}
};

