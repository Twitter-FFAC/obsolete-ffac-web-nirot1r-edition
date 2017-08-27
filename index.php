<?php include "header.php"; ?>
        <div class="container shadow">

            <h3 class="page-header">このWEBサイトについて</h3>
            <p>
                <a href="https://github.com/acid-chicken">硫酸鶏さん</a>が先頭に立って進めている「<a href="https://github.com/acid-chicken/fight-for-artistic-creativity">Fight for artistic creativity</a>」に感銘を受け、WEBサイトを小野咲みなみが開設したものです。<br>
                "協力"する際の手助けとして、<a href="https://github.com/acid-chicken/fight-for-artistic-creativity/blob/master/lists/blacklist.json">攻撃に用いられるアカウントリスト</a>を用いて各アカウントのリストアップを行います。<br>
                詳細な情報は、硫酸鶏さんのFight for artistic creativityリポジトリをご覧ください。
            </p>

            <h3 class="page-header">一斉ブロックシステム Alpha</h3>
            <p>
                現在リストアップされているアカウントを一斉ブロックします。
            </p>
            <div>
                <a href="twitter-login.php" class="btn btn-primary"><i class="fa fa-twitter" aria-hidden="true"></i></span>Twitterログイン</a>
            </div>

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
                    <div class="col-md-6 profile">
                        <div class="shadow data">
                            <div class="title"><a href="https://twitter.com/<?= $screenname ?>" target="_blank"><?= $name ?>(@<?= $screenname ?>)</a></div>
                            <div class="content">
                                <div>固有ID : <?= $id ?> / アカウント作成日時 : <?= $createdate ?></div>
                            </div>
                        </div>
                    </div>


<?php
    }
?>
                </div>

            </div>

            <div class="footer shadow">
                Project with <span class="text-danger"><i class="fa fa-heart" aria-hidden="true"></i></span>&nbsp;<a href="https://github.com/acid-chicken/fight-for-artistic-creativity"><i class="fa fa-github" aria-hidden="true"></i>&nbsp;Fight for artistic creativity by acid-chicken</a><br>
                このWEBサイトは、GitHubにてバージョン管理しています。リポジトリは<a href="https://github.com/mnmonzk/ffac-web">こちら</a>です。
            </div>
            
        </div>
<?php include "footer.php"; ?>