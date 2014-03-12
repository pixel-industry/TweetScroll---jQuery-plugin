<?php
session_start();
require_once("twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = $_GET['username'];
$notweets = $_GET['limit'];
$consumerkey = "8NQiQlbkGAkN8mNY2ieg";
$consumersecret = "sgxVB6NF1mWa7xkpPMWyEwGEJBWn4j5HmSL0gc0s";
$accesstoken = "766190528-2hKqgFrBA1fPm168gr0o8Fjc91DOurnH7Ok4XSIR";
$accesstokensecret = "zIjansn5IBYStdb7uGWuQMm9yXhFJAHbteIdVdxgd0";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

header('content-type: application/json');
echo json_encode($tweets);
exit();
?>