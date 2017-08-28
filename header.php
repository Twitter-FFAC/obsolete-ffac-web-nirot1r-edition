<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="//cdn.g-second.net/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="//cdn.g-second.net/css/g-second.css?version=2">
        <link rel="stylesheet" href="//cdn.g-second.net/css/font-awesome/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta property="og:type" content="<?php if($_SERVER["REQUEST_URI"] == "/"){echo "website";}else{echo "article";}?>">
        <meta property="og:image" content="https://raw.githubusercontent.com/acid-chicken/fight-for-artistic-creativity/master/assets/logo.png" />
        <meta property="og:title" content="Fight for artistic creativity" />
        <meta property="og:description" content="Twitterをディストピアにしないために、我々ができること。" />
        <meta property="og:url" content="https://ffac.mnmonzk.f5.si/" />
        <meta property="og:site_name" content="Fight for artistic creativity" />
        <meta property="og:locale" content="ja_JP" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@mnmonzk" />
        <title>Fight for artistic creativity</title>
        <style>   
            .data {
                margin: 5px;
                padding: 5px;
                height: 150px;
            }
        </style>
    </head>
    <body>
    
    <div class="container">
<?php
    if(isset($_SESSION["error"]) && $_SESSION["error"] != []) {
?>
        <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?= $_SESSION["error"]["title"] ?></h4>
            <p><?= $_SESSION["error"]["detail"] ?></p>
        </div>

<?php
        $_SESSION["error"] = [];
    }
?>
        <h1 class="page-header">Fight for artistic creativity</h1>
        <p class="lead">Twitterをディストピアにしないために、我々ができること。</p>
        <div class="text-right">
            プロジェクトを共有 : <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
    </div>
