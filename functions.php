<?php
function my_setup() {//Developer Resourcesから
  add_theme_support('post-thumbnails');//WordPressに準備されている特定の機能をテーマで使えるようにするための関数
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");

function my_script_init() {
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");
    wp_enqueue_style("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css", array());
    wp_enqueue_style("reset", get_template_directory_uri() . "/css/reset.css", array(), filemtime(get_theme_file_path('css/reset.css')), "all");
    wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array("reset"), filemtime(get_theme_file_path('css/style.css')), "all");
    wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js", true);//wordpressではjqueryは標準で読み込まれているので依存関係のみの設定で良い
    wp_enqueue_script("my", get_template_directory_uri() . "/js/script.js", array("jquery"), filemtime(get_theme_file_path('js/script.js')), true);//wordpressではjqueryは標準で読み込まれているので依存関係のみの設定で良い

    if (is_single()) {
    wp_enqueue_script("sns", get_template_directory_uri() . "/js/sns.js", array("jquery"), filemtime(get_theme_file_path('js/sns.js')), true);
    }
}
add_action("wp_enqueue_scripts", "my_script_init");

function my_menu_init() {
    register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー'
)
);
}
add_action('init', 'my_menu_init');

/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title) {

  if (is_category()) { // カテゴリーアーカイブの場合
    $title = single_cat_title('', false);
  } elseif (is_tag()) { // タグアーカイブの場合
    $title = single_tag_title('', false);
  } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title('', false);
  } elseif (is_tax()) { // タームアーカイブの場合
    $title = single_term_title('', false);
  } elseif (is_author()) { // 作者アーカイブの場合
    $title = get_the_author();
  } elseif (is_date()) { // 日付アーカイブの場合
    $title = '';
    if (get_query_var('year')) {
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')) {
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')) {
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

function my_the_post_category($anchor = true) {
  $category = get_the_category();
  if($category[0]) {
    if($anchor) {
      echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
    } else {
      echo $category[0]->cat_name;
    }
  }
}




//アイキャッチ画像をシンプルにする
//add_filter( 'post_thumbnail_html', 'custom_attribute' );
//function custom_attribute( $html ){
//    $html = preg_replace('/class=".*\w+"\s/', '', $html);    // class を削除する
//    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);    // width height を削除する
//    return $html;
//}

?>