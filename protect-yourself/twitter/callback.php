<?php
    session_start();
    require_once("twitter-config.php");
    require_once("twitteroauth/autoload.php");

    use Abraham\TwitterOAuth\TwitterOAuth;

    $request_token["oauth_token"] = $_SESSION["twitter"]["token"];
    $request_token["oauth_token_secret"] = $_SESSION["twitter"]["secrettoken"];
    
    //Twitterから返されたOAuthトークンと、あらかじめlogin.phpで入れておいたセッション上のものと一致するかをチェック
    if (isset($_REQUEST["oauth_token"]) && $request_token["oauth_token"] !== $_REQUEST["oauth_token"]) {
        die("Invaild token.");
    }

    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token["oauth_token"], $request_token["oauth_token_secret"]);
    $_SESSION["access_token"] = $connection->oauth("oauth/access_token", ["oauth_verifier" => $_REQUEST["oauth_verifier"]]);
    
    header("Location: list.php");
?>