<?php
require_once 'path/to/twilio-php/autoload.php'; // Include the Twilio PHP library

// Your Twilio API credentials
$accountSid = 'AC89bc5cd644675b538b6e32cfb83d3d65';
$authToken = '80e065d213b42fd963ad1e344f777979';

// Create a Twilio client
$client = new Twilio\Rest\Client($accountSid, $authToken);

// Generate a random OTP
$otp = mt_rand(1000, 9999);

// Recipient phone number (where OTP will be sent)
$recipientPhoneNumber = '8890668409';

// Send OTP via SMS
$message = $client->messages->create(
    $recipientPhoneNumber,
    [
        'from' => '+13346506516', // Your Twilio phone number
        'body' => "Your OTP is: $otp",
    ]
);

echo "OTP sent to $recipientPhoneNumber: $otp";
?>