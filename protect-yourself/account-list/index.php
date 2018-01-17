<?php
    include "../../inc/config.php";
    $title = "リストをダウンロードする";
    include "../../inc/header.php";
?>
        <div class="container">
            <h1>リストをダウンロードする</h1>
            <p>
                GitHubにて、<a href="https://twitter.com/settings/blocked" target="blank">Twitterの設定</a>でインポートできるアカウントリストを提供しております。
            </p>
            <div class="column">
                <div class="card">
                    <div class="card-icon"><i class="fa fa-download" aria-hidden="true"></i></div>
                    <div class="card-header">Twitter-FFACのダウンロード</div>
                    <div class="card-content">
                        ダウンロードされたzipファイルを展開し、<br />
                        lists/blacklist.csvを<a href="https://twitter.com/settings/blocked" target="blank">Twitterの設定</a>からインポートしてください。
                        <a class="btn" href="https://github.com/Twitter-FFAC/fight-for-artistic-creativity/archive/master.zip">ダウンロード</a>
                        <a class="btn" href="https://twitter.com/settings/blocked">設定を開く</a>
                    </div>
                </div>
            </div>
        </div>
<?php include "../../inc/footer.php"; ?>
