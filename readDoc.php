<?php if (!(isset($_GET["docid"]) && file_exists("docsMarkdown/".$_GET["docid"].".md"))) : ?>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>EarthMuku - EarthServer</title>
            <link rel="icon" href="/images/logo.ico">
            <link href="styles/style.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        </head>
        <body>
            <h1 style="text-align: center;">Not Found Document</h1>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        </body>
    </html>
<?php endif; ?>
<?php
    if (!(isset($_GET["docid"]) && file_exists("docsMarkdown/".$_GET["docid"].".md"))){exit;}
    require_once("PHPMarkdownLib/Michelf/Markdown.inc.php");
    use Michelf\Markdown;
    $markdown = file_get_contents("docsMarkdown/".$_GET["docid"].".md");
    $html = Markdown::defaultTransform($markdown);
?>

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
            <h1><?php echo $_GET["docid"].".md"; ?></h1>
        </div>
        <hr>
        <div class="container">
        <?php echo $html; ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>