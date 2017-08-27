<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="/bootstrap.min.css" media="screen">
        <!--<link rel="stylesheet" href="style.css" media="screen">-->
        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Fight for artistic creativity</title>
        <style>
            html {
                height: 100%;
            }
            body {
                height: 100%;
                text-shadow: 0px 0px 2px #aaa;
            }
            .profile {
                text-align: left;
                padding: 7px;
                margin-bottom: 20px;
            }
                .profile .title {
                    font-size: 1.5em;
                    font-weight: bold;
                }
                .profile .content {
                    margin: 5px;
                    font-size: 1em;
                }
            .shadow {
                box-shadow: 0px 1px 3px #aaa;
            }
        </style>
    </head>
    <body>
        <div class="container shadow">

            <h1 class="page-header">Fight for artistic creativity</h1>
            <p class="lead">Twitterをディストピアにしないために、我々ができること。</p>
            <p>
                <a href="https://github.com/acid-chicken">硫酸鶏さん</a>が先頭に立って進めている「Fight for artistic creativity」に感銘を受け、WEBサイトを小野咲みなみが開設したものです。<br>
                "協力"する際の手助けとして、<a href="https://github.com/acid-chicken/fight-for-artistic-creativity/blob/master/lists/blacklist.json">攻撃に用いられるアカウントリスト</a>を用いて各アカウントのリストアップを行います。<br>
                詳細な情報は、硫酸鶏さんのFight for artistic creativityリポジトリをご覧ください。
            </p>

            <h3 class="page-header">リストアップされているアカウント</h3>
            <div class="row">
                <div class="container">

<?php
    $accountjson = file_get_contents("https://raw.githubusercontent.com/acid-chicken/fight-for-artistic-creativity/master/lists/blacklist.json");
    $accountdata = json_decode($accountjson, true);
    
    foreach($accountdata as $account) {
        $id = $account["id"];
        $name = $account["name"];
        $screenname = $account["screen_name"];
        $createdate = $account["created_at"];
?>
                    <div class="col-sm-12 shadow profile">
                        <div class="title"><a href="https://twitter.com/<?= $screenname ?>" class="btn btn-primary" target="_blank"><?= $name ?>(@<?= $screenname ?>)</a></div>
                        <div class="content">
                            <div>固有ID : <?= $id ?> / アカウント作成日時 : <?= $createdate ?></div>
                        </div>
                    </div>


<?php
    }
?>
                </div>

            </div>

            <div class="profile shadow">
                Project with <span class="text-danger"><i class="fa fa-heart" aria-hidden="true"></i></span>&nbsp;<a href="https://github.com/acid-chicken/fight-for-artistic-creativity"><i class="fa fa-github" aria-hidden="true"></i>&nbsp;Fight for artistic creativity by acid-chicken</a>
            </div>
            
        </div>

            
    </body>
    
</html>