<?php
//header("Accept: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
//header("Authorization: xxx");
//header("Content-type: application/json");

//require the twitteroauth (API Twitter)
require_once("oauth/twitteroauth.php"); 


//Save the information sended by POST from angularjs
$post_data 	= file_get_contents("php://input");
$request 	= json_decode($post_data);
$usuario 	= $request->user;
$password 	= $request->pass;


//Specify the name user and number of tweets to obtain
$name_user 		= "FutApp";
$number_tweets 	= 5;


//Privated data for authentification
$consumer_key 			= "tZfK0PjSpkwdoYLq3qSHjlXGy";
$consumer_secret 		= "MXXsIxgdQ0ulFrqlyR0f6aROM4wPmEmcOe1W3Z4FFpXhESzFgo";
$access_token 			= "2542735675-AnseFjpZGpgEmFbS0IcQJx37faiWPFVhTN6yqCi";
$access_token_secret 	= "raIcBt69nplFyiR82WU4c8NoGgJRxNtRMmcLRAwjK1gyy";


//Declaration of the function to validate access token
function connectWithToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}


//Validation of the information with access token
$connection = connectWithToken($consumer_key, $consumer_secret, $access_token, $access_token_secret);


//Call to a function to get tweets with valid information
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$name_user."&count=".$number_tweets);


//Encoding data for the response
echo json_encode($tweets);


?>
