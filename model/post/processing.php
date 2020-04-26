<?php 
	if (@$_POST['image'] || @$_POST['title'] || @$_POST['description'] || @$_POST['host'] || @$_POST['time']) {
        $image = $_POST['image'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $host = $_POST['host'];
        $time = $_POST['time'];
        $_SESSION['title'] = $_POST['title'];
        $_SESSION['description'] = $_POST['description'];
        $_SESSION['host'] = $_POST['host'];
        $_SESSION['time'] = $_POST['time'];
        $_SESSION['link'] = $_POST['link'];
        $random = date('YmdHis', time());
        $url = $image;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        // Lưu file ảnh
        $my_save_dir = "views/assets/images/demo/";
        $filename = ".jpg";
        $link = "views/assets/images/demo/".$random.$filename;
        $complete_save = $my_save_dir.$random.$filename;
        $fp = fopen($complete_save, 'x');
        fwrite($fp, $result);
        fclose($fp);
        $_SESSION['image'] = $link;
    }
?>