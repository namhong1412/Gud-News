<?php
    session_start();
    include_once 'model/post/processing.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Create Images</title>
    <meta charset="utf-8">
    <script src="views/assets/js/jquery.min.js"></script>
    <script src="views/assets/js/html2canvas.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="views/assets/css/create.css?v=8">
</head>

<body>
    <div class='card-news' id='card_img'>
        <img class="logo" src='views/assets/images/logo/logo.png' />
        <div class="images-news" style="background: url(<?php echo $_SESSION['image']; ?>) no-repeat center center;"></div>
        <div class='description-news'>
            <h5 class='title-news'><?php echo $_SESSION['title']; ?></h5>
            <p class='description'><?php echo $_SESSION['description']; ?></p>
            <p style='font-family: Roboto '><?php echo $_SESSION['time']; ?> || <?php echo $_SESSION['host']; ?></p>
            <div class="adds">
                Mắm Nam Ngư Đệ Nhất - Không quảng cáo thì sao làm được app?
            </div>
            <img src="views/assets/images/logo/watermark.png" class="watermark">
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(()=>{
                hi();
            },500);
            function hi(){
                div_content = document.querySelector("#card_img")
                html2canvas(div_content, {
                    scale: 2,
                    allowTaint: true,
                }).then(function(canvas) {
                    data = canvas.toDataURL('image/jpeg');
                    save_img(data);
                });
            };
        });
        function close_window() {
            close();
        }
        //to save the canvas image
        function save_img(data) {
            $.ajax({
                url: 'model/post/save.php',
                type: 'POST',
                dataType: 'text',
                data: {
                    data: data,
                    images: '<?php echo $_SESSION['image']; ?>',
                    title: '<?php echo $_SESSION['title']; ?>',
                    link: '<?php echo $_SESSION['link']; ?>'
                }
            })
            .done(()=>{
                close_window();
            })
            .fail(()=>{
                alert('Lỗi đăng bài');
            })
        }
    </script>
</body>

</html>