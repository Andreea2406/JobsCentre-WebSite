
<?php

require_once("connection.php");

if (!isset($_SESSION["id"]) || $_SESSION["id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mesaje</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

    <style>
        .message-input, .message-input .inline-label, .menu-bar {margin-bottom: 0;}
        #sidebar, .messages {border-right: 1px solid #eee;}
        .message-side-bar {border-left: 1px solid #eee;}
        .avatar-section {border-top: 1px solid #eee;}
    </style>
</head>
<body>



<div class="grid-x grid-padding-x">

    <div class="grid-frame">

        <div class="grid-block collapse medium-9 large-9 vertical">

            <div class="grid-block">
                <div class="grid-block small-12 medium-9 vertical">
                    <div class="grid-content">
                        <h4><img src="http://placehold.it/30x30"> Cady Heron</h4>
                        <p>Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor posuere. Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue.</p>
                        <hr />
                        <h4><img src="http://placehold.it/30x30"> Kevin Gnapoor</h4>
                        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat.</p>
                        <hr />
                        <h4><img src="http://placehold.it/30x30"> Cady Heron</h4>
                        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat.</p>
                        <hr />
                        <h4><img src="http://placehold.it/30x30"> Trang Pak</h4>
                        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat.</p>
                        <hr />
                        <h4><img src="http://placehold.it/30x30"> Coach Carr</h4>
                        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat.</p>
                        <hr />
                        <h4><img src="http://placehold.it/30x30"> Cady Heron</h4>
                        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat.</p>
                        <hr />
                        <h4><img src="http://placehold.it/30x30"> Trang Pak</h4>
                        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat.</p>
                        <hr />
                        <h4><img src="http://placehold.it/30x30"> Cady Heron</h4>
                        <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat.</p>
                        <hr />
                    </div>
                    <div class="message-input grid-content collapse shrink">
              <span class="inline-label">
                <input type="text" placeholder="Message">
                <a href="#" class="button">Send</a>
              </span>
                    </div>
                </div>
                <div class="grid-content medium-3 show-for-medium message-side-bar">
                    <section class="block-list">
                        <header>In This Room</header>
                        <ul>
                            <li><a href="#">Cady Heron</a></li>
                            <li><a href="#">Kevin Gnapoor</a></li>
                            <li><a href="#">Trang Pak</a></li>
                            <li><a href="#">Coach Carr</a></li>
                            <li><a href="#">Regina George</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>

    </div>




</div>





<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>