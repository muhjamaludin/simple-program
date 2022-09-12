<?php

$response = array("success" => false, "data" => array("id" => 1, "id" => 2));
// http_response_code(200);
header("Content-Type: application/json", true, 400);
echo json_encode($response);