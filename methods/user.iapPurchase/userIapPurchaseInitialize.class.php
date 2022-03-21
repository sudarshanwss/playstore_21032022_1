<?php
class userIapPurchaseInitialize extends baseInitialize{

  public $requestMethod = array("GET", "POST");
  public $isSecured = true;

  public function getParameter()
  {
    $parameter = array();

    $parameter["productId"] = array(
      "name" => "product_id",
      "type" => "text",
      "required" => false,
      "default" => "",
      "description" => "product Id"
    );
    $parameter["transactionId"] = array(
      "name" => "transaction_id",
      "type" => "text",
      "required" => false,
      "default" => "",
      "description" => "transaction Id"
    );
    $parameter["transactionSuccess"] = array(
      "name" => "transaction_success",
      "type" => "text",
      "required" => false,
      "default" => "",
      "description" => "transaction Success"
    );

    return $parameter;
  }
}
