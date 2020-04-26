<?php
include_once 'simple_html_dom.php';
error_reporting(0);
$url = $_POST['url'];
$urll = parse_url($url);
$host = $urll['host'];
if ($host == 'vnexpress.net') {
    $html  = file_get_html(str_replace("beta.", "", $url));
    $title = $html->find("meta[name=its_title]", 0)->content;
    $image   = $html->find("meta[name=twitter:image]", 0)->content;
    $time  = $html->find("span[class=date]", 0)->innertext;
    $description  = $html->find("article[class=fck_detail]", 0)->innertext;
    $figcaption_array = [];
    for ($i = 0; $i < 10; $i++) { 
        $figcaption = $html->find("figcaption" ,$i)->innertext;
        $figcaption1 = $html->find("p[class=Normal][align=right]" ,$i)->innertext;
        if ($figcaption != null) {
            $figcaption_array[] = $figcaption;
        }
        if ($figcaption1 != null) {
            $figcaption_array[] = $figcaption1;
        }
    }
    $title = str_replace('\\','',$title);
    $description = str_replace(array($tag,$author),'',$description);
    $description = str_replace($figcaption_array,'',$description);
    $description = str_replace('"',"'",$description);
    $title = str_replace(array('"',"'","&quot;"),'',$title);
    $description = trim(strip_tags($description));
} else if ($host == 'dantri.com.vn') {
    $html = file_get_html($url);
    $title = $html->find("meta[name=twitter:title]", 0)->content;
    $image = $html->find("meta[name=twitter:image]",0)->content;
    $time = $html->find("span[class=fr fon7 mr2 tt-capitalize]",0)->innertext;
    $description = $html->find("div[id=divNewsContent]" ,0)->innertext;
    $figcaption_array = [];
    for ($i = 0; $i < 10; $i++) { 
        $figcaption = $html->find("figcaption" ,$i)->innertext;
        if ($figcaption != null) {
            $figcaption_array[] = $figcaption;
        }
    }
    $tag = $html->find("div[class=news-tag]" ,0)->innertext;
    $author = $html->find("p[style=text-align:right]" ,0)->innertext;
    $title = str_replace('\\','',$title);
    $description = str_replace(array($tag,$author),'',$description);
    $description = str_replace($figcaption_array,'',$description);
    $description = str_replace('"',"'",$description);
    $title = str_replace(array('"',"'","&quot;"),'',$title);
    $description = trim(strip_tags($description));

} else if ($host == 'vietnamnet.vn') {
    $html  = file_get_html($url);
    $title = $html->find("meta[property=og:title]", 0)->content;
    $image   = $html->find("meta[property=og:image]", 0)->content;
    $time  = $html->find("p[class=time-zone]", 0)->innertext;
    $description  = $html->find("div[id=ArticleContent]", 0)->innertext;
    $figcaption_array = [];
    for ($i = 0; $i < 10; $i++) { 
        $figcaption = $html->find("div[class=article-relate] a" ,$i)->innertext;
        $figcaption1 = $html->find("table[class=FmsArticleBoxStyle ImageBox ImageCenterBox Border-1 image] td" ,$i)->innertext;
        $figcaption2 = $html->find("div[class=inner-article] p" ,$i)->innertext;
        $figcaption3 = $html->find("div[class=inner-article] h4" ,$i)->innertext;
        $figcaption4 = $html->find("div[class=template]" ,$i)->innertext;
        if ($figcaption != null) {
            $figcaption_array[] = $figcaption;
        }
        if ($figcaption1 != null) {
            $figcaption_array[] = $figcaption1;
        }
        if ($figcaption2 != null) {
            $figcaption_array[] = $figcaption2;
        }
        if ($figcaption3 != null) {
            $figcaption_array[] = $figcaption3;
        }
        if ($figcaption4 != null) {
            $figcaption_array[] = $figcaption4;
        }
    }
    $title = str_replace('\\','',$title);
    $description = str_replace(array($tag,$author),'',$description);
    $description = str_replace($figcaption_array,'',$description);
    $description = str_replace('"',"'",$description);
    $title = str_replace(array('"',"'","&quot;"),'',$title);
    $description = trim(strip_tags($description));
} else if ($host == 'tuoitre.vn') {
    $html  = file_get_html($url);
    $title = $html->find("h1[class=article-title]", 0)->innertext;
    $image   = $html->find("meta[property=og:image:secure_url]", 0)->content;
    $time  = $html->find("p[class=title-time-home fr]", 0)->innertext;
    $description  = $html->find("div[id=main-detail-body]", 0)->innertext;
    $figcaption_array = [];
    for ($i = 0; $i < 10; $i++) { 
        $figcaption = $html->find("div[class=VCSortableInPreviewMode] p" ,$i)->innertext;
        $figcaption1 = $html->find("div[class=VCSortableInPreviewMode active] a" ,$i)->innertext;
        $figcaption2 = $html->find("div[class=VCSortableInPreviewMode active] p" ,$i)->innertext;
        if ($figcaption != null) {
            $figcaption_array[] = $figcaption;
        }
        if ($figcaption1 != null) {
            $figcaption_array[] = $figcaption1;
        }
        if ($figcaption2 != null) {
            $figcaption_array[] = $figcaption2;
        }
    }
    $title = str_replace('\\','',$title);
    $description = str_replace(array($tag,$author),'',$description);
    $description = str_replace($figcaption_array,'',$description);
    $description = str_replace('"',"'",$description);
    $title = str_replace(array('"',"'","&quot;"),'',$title);
    $description = trim(strip_tags($description));
}
http_response_code(200);
echo json_encode(array(
    "title" => trim($title),
    "image" => trim($image),
    "time" => trim($time),
    "host" => trim($host),
    "description" => trim($description)
));
?>