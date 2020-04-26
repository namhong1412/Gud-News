<?php
  include_once '../post/simple_html_dom.php';
  $html_vnex = file_get_html("https://vnexpress.net/");
  $big_title = $html_vnex->find('div[class=thumb-art] img' , 0);
  $big_title = $big_title->alt;
  $big_link = $html_vnex->find('div[class=thumb-art] a' , 0)->href;
  echo "<p>🚀 <a href='$big_link' class='hihi'>".$big_title."</a></p>"; 

  $list = $html_vnex->find('ul[class=list-sub-feature] li a[data-thumb=0]');
  foreach ($list as $menu) {
    $title_vnex = $menu->innertext;
    $link_vnex =  $menu->href;
    echo "<p>🚀 <a href='$link_vnex' class='hihi'>".$title_vnex."</a></p>";
  }
  $list1 = $html_vnex->find('div[class=col-left col-small] article[class=item-news item-news-common] h3[class=title-news] a');
  foreach ($list1 as $menu2) {
    $link_vnex1 = $menu2->href;
    $title_vnex1 =  $menu2->title;
    echo "<p>🚀 <a href='$link_vnex1' class='hihi'>".$title_vnex1."</a></p>";
  }
?>