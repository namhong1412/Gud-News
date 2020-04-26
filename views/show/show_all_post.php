<?php
include_once 'model/objects/post.php';
$post = new Post();
$get = $post->read();
while ($row = mysqli_fetch_array($get)) {
    echo "<div class='col-lg-6 col-md-6'>
            <div class='single-blog-inner'>
                <div class='post-image'>
                    <a href='".$row['link_base']."'>
                        <img src='".$row['image']."' alt='".$row['title']."' title='".$row['image']."'>
                    </a>
                </div>
            </div>
        </div>";
}
?>