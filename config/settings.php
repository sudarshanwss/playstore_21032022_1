<?php
$setting["admin_username"] = "admin";
$setting["admin_password"] = "password@epiko";
/*$setting["db_server"] = "epiko-royal-db.cgkf0qydg6ah.eu-west-2.rds.amazonaws.com";
$setting["db_username"] = "db_user";
$setting["db_password"] = "Aqkl#W*PFsAFd";*/
$setting["db_server"] = "epiko-db.cgkf0qydg6ah.eu-west-2.rds.amazonaws.com";
$setting["db_username"] = "db_admin";
$setting["db_password"] = "TtKQRrorDKAp5cK0eczG";
$setting["db_name"] = "playstorev1";
$setting["memcache_server"] = "";
$setting["memcache_port"] = "";
$setting['mongo_server'] = "";
$setting['mongo_port'] = "";
$setting['mongo_db_name'] = "";
$setting["base_domain_path"] = "./";
$setting["language"] = "en";
$setting["static_path_image"] = "/static/images";
$setting["assets_path"] = "/static/assets";
$setting["home_page"] = "/";
$setting["temp_file_location"] = "/var/www/static/assets";
$setting["ios_push_certificate"] = "/var/www/config/ios-push-dev.pem";
$setting["ios_push_url"] = "gateway.sandbox.push.apple.com";
$setting["default_module"] = "home";
$setting["default_component"] = "index";
$setting["setup_mode"] = "test";  //test, production
$setting["enable_test_console"] = true;  //true, false
$setting["session_name"] = "aadya-session";
$setting["timezone"] = "";
$setting["project_title"] = "Epiko Royal";
$setting["server_name"] = "http://35.176.252.22/EPIKO/playstorev1/rest.php";
//$setting["server_name"] = "http://3.11.29.238/EPIKO-ROYAL/PROD/rest.php";

$setting['from_address'] = "abhijith.s@juegostudio.com";
$setting['reply_to_address'] = "abhijith.s@juegostudio.com";
$setting['smtp_host'] = "email-smtp.us-west-2.amazonaws.com";
$setting['smtp_port'] = "465";
$setting['smtp_username'] = "AKIAQ";
$setting['smtp_password'] = "AqQK";

//$setting['ios_push_certificate_dev'] = "/var/www/EPIKO_ROYAL/staging/config/EpicRoyaleDevck.pem";//development
$setting['ios_push_certificate_dev'] = "/var/www/html/EPIKO/staging/config/EpicRoyaleDevck.pem";//development
$setting['ios_push_url_dev'] = "gateway.sandbox.push.apple.com";//Development
$setting['ios_push_passphrase_dev'] = "EpicRoyalepush123";//Development

//$setting['ios_push_certificate_adhoc'] = "/var/www/EPIKO-ROYAL/staging/config/EpicRoyaleDistick.pem";//adhoc
$setting['ios_push_certificate_adhoc'] = "/var/www/html/EPIKO/staging/config/EpicRoyaleDistick.pem";//adhoc
$setting['ios_push_url_adhoc'] = "gateway.push.apple.com";//adhoc
$setting['ios_push_passphrase_adhoc'] = "EpicRoyalepush321";//adhoc

$setting["push_notification_legacy_key"] = "AIzaSyDs1EdgmCI2ZcB9V36qmilrqmRTPg-YIG0";
$setting['policy_path'] = "http://35.176.252.22/EPIKO/playstorev1/static/assets";
//$setting['policy_path'] = "http://juegostudio.in/EPIKO-ROYAL/staging/static/assets";
?>
