<?php
include "include/smsGateway.php";
header('Content-type: application/json');

$pnum = $_POST['pnum'];
$msg = $_POST['msg'];

$alert = array('alert' => '');
$smsGateway = new SmsGateway('orgen_c@yahoo.com', 'elisis123');

$deviceID = 7526;
$number = $pnum;
$message = $msg;



$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);

$alert['alert'] = 'Message Sent!';

echo json_encode($alert);
?>
