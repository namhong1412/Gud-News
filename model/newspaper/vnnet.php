<?php 
    include_once '../post/simple_html_dom.php';
    $html_vnnet = file_get_html("https://vietnamnet.vn");
    $list_vnnet = $html_vnnet->find('div[class=top-one]',0);
    $bigtitle_vnnet = $list_vnnet->find('img',0)->alt;
    $biglink_vnnet = "https://vietnamnet.vn/".$list_vnnet->find('a',0)->href;
    echo "<p>🚀 <a href='$biglink_vnnet' class='hihi'>".$bigtitle_vnnet."</a></p>";
    $list = $html_vnnet->find('div[class=TopNew va-top] ul[class=height-list] a');
    foreach ($list as $key) {
        $link_vnnet = "https://vietnamnet.vn".$key->href;
        $title = $key->plaintext ;
        $text_vnnet=  str_replace("icon","", $title);
        echo "<p>🚀 <a href='$link_vnnet' class='hihi'>".$text_vnnet."</a></p>";
    }
?>