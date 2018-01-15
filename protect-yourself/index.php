<?php
    include "../inc/config.php";
    $title = "自分で守る";
    include "../inc/header.php";
?>
        <div class="container">
            <h1>自分で守る</h1>
            <p>
                ここでは、Twitterアプリケーション連携機能を利用し、リストアップされているアカウントのスパムブロックを行います。<br />
                このアプリケーションは、アプリケーション連携をスパム報告・ブロックのみに利用し、<br />
                事前に利用者へ確認することなくツイートなどを行うことはございませんのでご安心ください。<br />
                <br />
                万一、心配が残るようでしたら「リストをダウンロードする」方法を選択してください。
            </p>
            <div class="column">
                <div class="card">
                    <div class="card-icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    <div class="card-header">Twitter連携を利用する</div>
                    <div class="card-content">
                        最も簡単です。下のボタンを押下して次の画面に進んでください。<br />
                        <a class="btn" href="twitter">この方法で守る</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-icon"><i class="fa fa-download" aria-hidden="true"></i></div>
                    <div class="card-header">リストをダウンロードする</div>
                    <div class="card-content">
                        利用者自身がアカウントリストをインポートする方法です。<br />
                        <a class="btn" href="account-list" target="blank">この方法で守る</a>
                    </div>
                </div>
            </div>
        </div>
<?php include "../inc/footer.php"; ?>
