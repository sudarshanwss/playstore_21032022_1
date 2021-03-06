<?php
$response['METHOD_NOT_FOUND'] = array("code"=>'201', "message"=>'api_method does not exists');
$response['VERSION_NOT_FOUND'] = array("code"=>'202', "message"=>'The requested version does not exists');
$response['INVALID_REQUEST_METHOD'] = array("code"=>'203', "message"=>'The requested request method does not exists');
$response['INVALID_AUTH_TOKEN'] = array("code"=>'204', "message"=>'The auth token is invalid');
$response['SUCCESS'] = array("code"=>'001', "message"=>'Everything worked as expected');
$response['RESPONSE_CODE_NOT_FOUND'] = array("code"=>'205', "message"=>'Response code failure');
$response['INVALID_EMAIL'] = array("code"=>'206', "message"=>'paramName should be a Valid email address');
$response['PARAMETER_IS_MANDATORY'] = array("code"=>'207', "message"=>'paramName Mandatory Parameter');
$response['INVALID_INPUT_EMPTY'] = array("code"=>'208', "message"=>'paramName should not be empty');
$response['INVALID_BOOLEAN_INPUT'] = array("code"=>'209', "message"=>'paramName should be a boolean value');
$response['PARAMETER_DESCRIPTION_UNDEFINED'] = array("code"=>'210', "message"=>'paramName should have a description');
$response['INVALID_INPUT_INTEGER'] = array("code"=>'210', "message"=>'paramName should be a integer');
$response['INVALID_INPUT_STRING'] = array("code"=>'211', "message"=>'paramName should be a string');
$response['INVALID_STRING_MAX_SIZE'] = array("code"=>'212', "message"=>'paramName lenght should be a less than size characters');
$response['INVALID_STRING_MIN_SIZE'] = array("code"=>'213', "message"=>'paramName length should be a greater than size characters');
$response['INVALID_INPUT_INTEGER_MAX'] = array("code"=>'214', "message"=>'paramName should be less than value');
$response['INVALID_INPUT_INTEGER_MIN'] = array("code"=>'215', "message"=>'paramName should be greater than value');
$response['ERROR_LOGIN'] = array("code"=>'216', "message"=>'Invalid Credential, Please try again.');
$response['CUSTOM_ERROR'] = array("code"=>'228', "message"=>'error');

$response['USER_NAME_MANDATORY'] = array("code"=>'229', "message"=>'User name is mandatory.');
$response['NAME_ALREADY_TAKEN'] = array("code"=>'230', "message"=>'Name is already taken.');
$response['DEVICE_TOKEN_MANDATORY'] = array("code"=>'231', "message"=>'Device token is mandatory.');
$response['FAILED'] = array("code"=>'232', "message"=>'Failed to unlock the card.');
$response['MAX_CARD_IN_DECK_EXCEEDED'] = array("code"=>'233', "message"=>'Already maximum card found in deck.');
$response['REPLACE_CARD_NOT_FOUND'] = array("code"=>'234', "message"=>'Replacing card not found in user deck.');
$response['CARD_NOT_FOUND_IN_COLLECTION'] = array("code"=>'235', "message"=>'Card not found in user collection.');
$response['GOLD_IS_NOT_ENOUGH'] = array("code"=>'236', "message"=>'Gold is not enough to update card level.');
$response['CARD_IS_NOT_ENOUGH'] = array("code"=>'237', "message"=>'Card is not enough to update card level.');
$response['NO_MORE_CARD_LEVEL_UPGRADE'] = array("code"=>'238', "message"=>'Card level is already up-to-date.');
$response['CRYSTAL_IS_NOT_ENOUGH'] = array("code"=>'239', "message"=>'Insufficient crystal in user account.');
$response['INSUFFICIENT_BALANCE'] = array("code"=>'239', "message"=>'Insufficient balance in user account.');
$response['DAILY_REWARD_CLAIMED'] = array("code"=>'240', "message"=>'Daily special offer already claimed');
$response['INSUFFICIENT_DECK_COUNT'] = array("code"=>'241', "message"=>'Insufficient deck');
$response['MAX_DECK_COUNT_REACHED'] = array("code"=>'241', "message"=>'Deck count exeeds requirement');
$response['INVITE_TOKEN_MANDATORY'] = array("code"=>'242', "message"=>'Invite token mandatory');
$response['INVALID_INVITE_TOKEN'] = array("code"=>'243', "message"=>'Invalid invite token');
$response['MAX_INVITE_LIMIT_REACHED'] = array("code"=>'244', "message"=>'You have exceeded the maximum invite limit.');
$response['PLAYER_OFFLINE'] = array("code"=>'245', "message"=>'Player is offline');
$response['KATHIKA_FAILED'] = array("code"=>'232', "message"=>'Failed to unlock the kathika.');
$response['KATHIKA_ALREADY_FAILED'] = array("code"=>'232', "message"=>'Failed to unlock the kathika. Already fetched.');
$response['KATHIKA_CRYSTAL_FAILED'] = array("code"=>'232', "message"=>'Failed to unlock the kathika. Insufficient Crystal.');
$response['KINGDOM_NOT_CREATED'] = array("code"=>'232', "message"=>'Failed to create the kingdom. Incorrect Kingdom Name.');
$response['KINGDOM_NAME_ALREADY'] = array("code"=>'232', "message"=>'Kingdom Name Already Existed, Failed to create the kingdom.');
$response['KINGDOM_USER_ALREADY'] = array("code"=>'232', "message"=>'User Already Existed in Kingdom, Failed to create the kingdom.');
$response['KINGDOM_USER_ALREADY_EXISTED'] = array("code"=>'232', "message"=>'User Already Existed in Kingdom, Failed to join the kingdom.');
$response['INSUFFICIENT_GOLD'] = array("code"=>'232', "message"=>'Insufficient Gold for Create Kingdom, Failed to create the kingdom.');
$response['INSUFFICIENT_TROPHIES'] = array("code"=>'232', "message"=>'Insufficient Trophies/Cups for Create Kingdom, Failed to create the kingdom.');
$response['REQUEST_LIMIT_EXCEEDED'] = array("code"=>'232', "message"=>'You have exceed the request limit for Kingdom.');
$response['USER_ALREADY_IN_KINGDOM'] = array("code"=>'262', "message"=>'User already in the Kingdom.');
$response['G_USER_ALREADY_EXISTS'] = array("code"=>'246', "message"=>'user already exists!');

$response['CHARACTER_FAILED'] = array("code"=>'232', "message"=>'Failed to unlock the Character.');
$response['CHARACTER_ALREADY_FAILED'] = array("code"=>'232', "message"=>'Failed to unlock the Character. Already fetched.');
$response['CHARACTER_CRYSTAL_FAILED'] = array("code"=>'232', "message"=>'Failed to unlock the Character. Insufficient Crystal/Gems.');
$response['CHARACTER_GOLD_FAILED'] = array("code"=>'232', "message"=>'Failed to unlock the Character. Insufficient Gold.');
?>
