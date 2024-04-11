<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EarthMuku - EarthServer</title>
        <link rel="icon" href="/images/logo.ico">
        <link href="styles/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <?php include "header.html" ?>
        <p style="height: 10px;"></p>
        <div style="text-align: center;">
            <h1>The <mark>new</mark> earth server!</h1>
            <h2>Let's play with it!</h2>
            <p style="height: 10px;"></p>
            <span class="display-4 bg-info p-3 mt-3 w-10" onclick="navigator.clipboard.writeText('play.earthmuku.f5.si');">play.earthmuku.f5.si</span>
            <p style="height: 10px;"></p>
        </div>
        <hr>
        <h2 class="container">Server Status</h2>
        <div class="container d-flex">
            <span class="text-info">Minecraft Server(Towny Server)</span> :
            <?php
                //ちゃんと動いてしっくりくる
                $socket = stream_socket_client("tcp://play.earthmuku.f5.si:25565");
                if ($socket ===false) {
                    echo "<span class=\"text-error\"> not running</span>";
                    exit();
                } else {
                    echo "<span class=\"text-success\">running</span>";
                }
            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>