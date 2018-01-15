<?php
    session_start();
    require_once("twitter-config.php");
    require_once("twitteroauth/autoload.php");

    use Abraham\TwitterOAuth\TwitterOAuth;

    $accesstoken = $_SESSION["access_token"];
    $blocklist = $_SESSION["twitter"]["block"];
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $accesstoken['oauth_token'], $accesstoken['oauth_token_secret']);

    foreach($blocklist as $block) {
        $connection->post("blocks/create", [
            "user_id" => $block["id"]
            ]);
    }

    $_SESSION["error"] = [
        "title" => "ブロックが完了しました。",
        "detail" => "ご協力ありがとうございました。"
    ];

    header("Location:/");