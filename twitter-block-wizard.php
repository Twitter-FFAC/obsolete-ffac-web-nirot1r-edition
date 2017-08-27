<?php
    include "header.php";
    require_once("twitter-config.php");
    require_once("twitteroauth/autoload.php");

    use Abraham\TwitterOAuth\TwitterOAuth;
    
    if(!isset($_SESSION["access_token"])) {
        die("Doesn't have access token.");
    }
    
?>

        <div class="container shadow">

            <h3 class="page-header">以下のアカウントのブロックを行います。</h3>
            <p>
                確認後、下の「了解しました」を<b>1回のみ</b>クリックしてください。<br>
                環境によっては、1分以上かかる場合があります。
            </p>
            <ol>
<?php
    $accountjson = file_get_contents("https://raw.githubusercontent.com/acid-chicken/fight-for-artistic-creativity/master/lists/blacklist.json");
    $accountdata = json_decode($accountjson, true);
    $_SESSION["twitter"]["block"] = $accountdata;
    
    foreach($accountdata as $account) {
        $name = $account["name"];
        $id = $account["id"];
        $screenname = $account["screen_name"];
?>
                <li><?= $name ?>(@<?= $screenname ?>)</li>

<?php
    }
?>
            </ol>
            <a href="twitter-blocking.php" class="btn btn-danger" onclick="c()" id="agree">了解しました</a>

        </div>

        <script>
            function c() {
                var agree = document.getElementById("agree");
                agree.classList.add("disabled");
            }
        </script>
<?php include "footer.php"; ?>