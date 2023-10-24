<?php
function set_org_query_vars( $query_vars ) {
$query_vars[] = 'line'; // 独自のパラメータ prm1を配列最後尾に追加する。
$query_vars[] = 'pbfrom'; // 独自のパラメータ prm2を配列最後尾に追加する。
$query_vars[] = 'pbto'; // 独自のパラメータ prm2を配列最後尾に追加する。
$query_vars[] = 'date'; // 独自のパラメータ prm2を配列最後尾に追加する。
$query_vars[] = 'starthour'; // 独自のパラメータ prm2を配列最後尾に追加する。
$query_vars[] = 'adultcnt'; // 独自のパラメータ prm2を配列最後尾に追加する。
$query_vars[] = 'childcnt'; // 独自のパラメータ prm2を配列最後尾に追加する。
$query_vars[] = 'token'; // 独自のパラメータ prm2を配列最後尾に追加する。
return $query_vars;
}
function add_page_columns($columns)
{
  $columns['slug'] = "スラッグ";
  return $columns;
}
function add_page_column_row($column_name, $post_id)
{
  if ($column_name == 'slug') {
    $post = get_post($post_id);
    $slug = $post->post_name;
    echo esc_attr($slug);
  }
}
add_filter('manage_pages_columns', 'add_page_columns');
add_action('manage_pages_custom_column', 'add_page_column_row', 10, 2);

add_filter('query_vars', 'set_org_query_vars');
