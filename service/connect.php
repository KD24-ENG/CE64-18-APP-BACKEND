<?php
    /** Data source name */
    $servername = "btnbcxly8baxpkzg9huh-mysql.services.clever-cloud.com";
    $username = "uqvykwjijpvxqtoh";
    $password = "KYlkiYTgazmveEkUNovo";
    $dbname = "btnbcxly8baxpkzg9huh";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /**echo "SUCCESS"; */
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }
?>