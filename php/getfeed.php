<?php

require_once('loader.php');

print_r($HTTP_RAW_POST_DATA);

//$friends=$_GET["friends"];
/**
 * Registering a user device in database
 * Store reg id in users table
 */

//echo '{"challenges":[{"friend":"782093555198877","desc":"This is an example challenge used for testing purposes."}]}';
if (isset($friends)) {
  echo $friends;
    // Store user details in db
    echo json_encode(getChallengeList($friends));
}
?>
