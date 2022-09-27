<?php

$keyId = 'rzp_test_ZplhEXKVVw0iO4';
$keySecret = 'Ov4ZVC2PC8u1kgYhxeKeCssT';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);


// //DATABASE CONNECTION DETAILS
// $host = "dandiya.mysql.database.azure.com";
// $username = "dandiya@dandiya";
// $password = "mitaoe@2022";
// $dbname = "razorpay_info";
// $conn = mysqli_init();
// mysqli_real_connect($conn,$host, $username, $password, $dbname,3306,MYSQLI_CLIENT_SSL);


$host = 'dandiya.mysql.database.azure.com';
$username = 'dandiya@dandiya';
$password = 'mitaoe@2022';
$db_name = 'razorpay_info';

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'dandiya.mysql.database.azure.com', 'dandiya@dandiya', 'mitaoe@2022', 'razorpay_info', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}



// $host = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "razorpay_info";