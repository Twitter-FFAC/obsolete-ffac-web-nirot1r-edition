<?php
    include "../../inc/config.php";
    $title = "Twitter連携を利用する";
    include "../../inc/header.php";
?>
        <div class="container">
            <h1>Twitter連携を利用する</h1>
            <div class="column">
                <div class="card">
                    <div class="card-icon"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                    <div class="card-header">認証を行う</div>
                    <div class="card-content">
                        下のボタンをクリックし、ブロックリストを<br />
                        インポートするアカウントでログインしてください。<br />
                        その後、画面の指示に従って操作してください。
                        <br />
                        <a class="btn" href="oauth.php" target="blank">アプリケーション認証画面を開く</a>
                    </div>
                </div>
            </div>
        </div>
<?php include "../../inc/footer.php"; ?>
