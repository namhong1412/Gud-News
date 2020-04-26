<?php
    include_once 'create.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Previews</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../views/assets/css/create.css?v=8">
</head>

<body>
    <div class='card-news' id='card_img'>
        <img class="logo" src='../views/assets/images/logo/logo.png?v=2' />
        <div class="images-news" id="image" style=""></div>
        <div class='description-news'>
            <h5 class='title-news' id="title"></h5>
            <p class='description' id="description"></p>
            <p style='font-family: Roboto '><span id="time"></span> || <span id="host"></span></p>
            <div class="adds">
                Mắm Ads - Không quảng cáo thì làm app làm sao (･´з`･)
            </div>
            <img src="../views/assets/images/logo/watermark.png" class="watermark">
        </div>
    </div>
    <script>
        get_data('<?php echo $link; ?>');
        function get_data(url) {
            $.ajax({
                    url: '../model/post/crawl.php',
                    type: 'POST',
                    data: { url: url },
                })
                .done(function(data) {
                    summarization(JSON.parse(data));
                })
                .fail(function() {
                    console.log("error");
                })
        }

        function summarization(data) {
            var title = data.title;
            var image = data.image;
            var time = data.time;
            var host = data.host;
            var description = data.description;
            fetch('https://hackcovy.herokuapp.com/summarization', {
                    method: 'post',
                    mode: 'cors',
                    headers: {
                        'Content-Type': 'application/json',
                        'Access-Control-Allow-Origin': '*'
                    },
                    body: JSON.stringify({
                        "contents": description,
                        "title": title,
                        "number": 4,
                        "keyword": [],
                        "hash": "edd64e8c6a95c2f85aa138c6abdf4a22"
                    })
                }).then((response) => response.json())
                .then((data) => {
                    window.array_info = [];
                    $('#image').attr('style', 'background: url('+image+') no-repeat center center;');
                    $('#title').html(title);
                    $('#description').html(data.text);
                    $('#time').html(time);
                    $('#host').html(host);
                    array_info.push(title,image,time,host,data.text,'<?php echo $link; ?>');
                    $('#add-post').attr('class', 'btn btn-danger');
                    $('#add-post').text('Đăng điểm tin');
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    </script>
</body>

</html>