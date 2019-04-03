<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $title ?></title>
        <meta charset="utf-8" />
        <link href="<?= statics("main.css") ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require "errors.view.php" ?>
        <?php require "header.view.php" ?>
        <?php require "appointment.content.view.php" ?>
    </body>
    <script type='text/javascript' src='../statics/javascripts/main.js'></script>
</html>
