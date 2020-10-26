<?php
include_once "config.php";
include "Database.php";
include "Activation.php";

use Core\Data\Database;
use Core\Data\Activation;

header('Content-type: application/json');

$db = new Database();
$activation = new Activation($db->connect());

$activation->STB_No = $_GET['STB_No'] ?? null;

if ( $activation->delete() > 0 ) {
    header("location:pform.php");
}
else{
    echo "error occured";
}

echo json_encode($response);

?>