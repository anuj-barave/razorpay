<?php
include 'phpqrcode/qrlib.php';
require('config.php');
session_start();
//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $name = $_SESSION['customername'];
    $mobile = $_SESSION['contactno'];
    $gender = $_SESSION['gender'];
    // $sql = "INSERT INTO `orders` (`order_id`, `razorpay_payment_id`, `status`, `email`, `price`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$price')";
    // if(mysqli_query($conn, $sql)){
    //     echo "payment details inserted to db";
    // }
        $sql = "INSERT INTO `test` (`order_id`, `razorpay_payment_id`, `Name`, `mobile`, `gender`, `email`) VALUES ('$razorpay_order_id', '$razorpay_payment_id', '$name','$mobile','$gender','$email')";
    if(mysqli_query($conn, $sql)){
        echo "payment details inserted to db";
    }

    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
    $text = $_POST['razorpay_payment_id'];
    $file = "images/qr1.png";
    
    //other parameters
    $ecc = 'H';
    $pixel_size = 2;
    $frame_size = 2;
    
    // Generates QR Code and Save as PNG
    QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);
    
    // Displaying the stored QR code if you want
    echo "<div><a href=".$file." download> Download here<a></div>";
    
    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;