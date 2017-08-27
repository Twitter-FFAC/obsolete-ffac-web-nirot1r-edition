<?php
    $path = "/event/";
    $system["prefix"] = "Point Null";
    $title = $system["title"]." - ".$system["prefix"];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="<?= $path ?>bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="<?= $path ?>font-awesome/css/font-awesome.min.css?">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?= $title ?></title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= $path ?>">Point Null</a>
                </div>
            </div>
        </nav>