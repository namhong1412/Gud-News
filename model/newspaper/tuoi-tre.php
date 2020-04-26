<?php
	include_once '../post/simple_html_dom.php';
    $html_tuoitrau =  file_get_html("https://tuoitre.vn/tin-moi-nhat.htm");
    $list_tuoitrau = $html_tuoitrau->find("a[data-linktype=newsdetail]");
    foreach ($list_tuoitrau as $menu_tuoitrau) {
        $title_tuoitrau = $menu_tuoitrau->title;
        $link_tuoitrau = "https://tuoitre.vn".$menu_tuoitrau->href;
        echo "<p>🚀 <a href='$link_tuoitrau' class='hihi'>".$title_tuoitrau."</a></p>";
    }
?>