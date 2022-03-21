<?php 
/*
//echo "test";
function parse_signed_request($signed_request) {
  list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

  $secret = "8fd534c7ac1180efd06a59ccf6f1f68b"; // Use your app secret here

  // decode the data
  $sig = base64_url_decode($encoded_sig);
  $data = json_decode(base64_url_decode($payload), true);

  // confirm the signature
  $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
  if ($sig !== $expected_sig) {
    error_log('Bad Signed JSON signature!');
    return null;
  }

  return $data;
}

function base64_url_decode($input) {
  return base64_decode(strtr($input, '-_', '+/'));
}
*/
?>
<?php
header('Content-Type: application/json');

$user_id = $_GET['u_id'];

    $status_url = 'http://35.176.252.22/EPIKO/playstorev1/rest.php?applicationKey=12345&methodName=user.fbUnlinkAccount&id='.$user_id; // URL to track the deletion
    $confirmation_code = $user_id; // unique code for the deletion request
    $data = array(
      'url' => $status_url,
      'confirmation_code' => $confirmation_code
    );
    echo json_encode($data);
?>
<?php
/*
header('Content-Type: application/json');

$signed_request = $_POST['signed_request'];
$data = parse_signed_request($signed_request);
$user_id = $data['user_id'];

// Start data deletion

$status_url = 'https://www.epikoregal.com/EPIKO/staging/fb/delete?id='.$user_id; // URL to track the deletion
$confirmation_code = $user_id; // unique code for the deletion request


$data = array(
  'url' => $status_url,
  'confirmation_code' => $confirmation_code
);
$db_server = "epiko-db.cgkf0qydg6ah.eu-west-2.rds.amazonaws.com";
$db_username = "db_admin";
$db_password = "TtKQRrorDKAp5cK0eczG";
$db_name = "epic-royale-prod";

$mysqli = new mysqli($db_server, $db_username, $db_password, $db_name);
 
//$id=$_GET['id'];
$sql = "UPDATE user SET facebook_id='' WHERE facebook_id=".$user_id;
if($mysqli->query($sql) === true){
  echo json_encode($data);
} else{ 
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
echo json_encode($data);

function parse_signed_request($signed_request) {
  list($encoded_sig, $payload) = explode('.', $signed_request, 2);

  $secret = "8fd534c7ac1180efd06a59ccf6f1f68b"; // Use your app secret here

  // decode the data
  $sig = base64_url_decode($encoded_sig);
  $data = json_decode(base64_url_decode($payload), true);

  // confirm the signature
  $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
  if ($sig !== $expected_sig) {
    error_log('Bad Signed JSON signature!');
    return null;
  }

  return $data;
}

function base64_url_decode($input) {
  return base64_decode(strtr($input, '-_', '+/'));
}*/
?>