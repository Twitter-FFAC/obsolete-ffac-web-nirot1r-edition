<?php
    session_start();
    require_once("twitter-config.php");
    require_once("twitteroauth/autoload.php");

    use Abraham\TwitterOAuth\TwitterOAuth;
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

    $request_token = $connection->oauth("oauth/request_token", ["oauth_callback" => OAUTH_CALLBACK]);

    $_SESSION["twitter"]["token"] = $request_token["oauth_token"];
    $_SESSION["twitter"]["secrettoken"] = $request_token["oauth_token_secret"];

    $url = $connection->url("oauth/authenticate", ["oauth_token" => $request_token["oauth_token"]]);
    header("Location: ".$url);