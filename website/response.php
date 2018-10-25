<?php
/*
if (!$link = new mysqli("localhost", "root", "root", "texting")) { echo 'Could not connect to mysql<HR>';}
if ($link->connect_error) { die('Connect Error ('.$mysqli->connect_errno.') ' . $link->connect_error); }

$name = $_GET["name"];
$message = $_GET["message"];

if ($name == "Jenna" || $name == "Meg") {

    $query = "INSERT INTO texts (name, message) VALUES ('$name', '$message');";
    echo $query;
    $link->query($query, MYSQLI_USE_RESULT);
}

if ($name == "Clear") {
    $query = "DELETE FROM texts";
    $link->query($query, MYSQLI_USE_RESULT);
}

if ($name == "Display") {
    $query = "Select * FROM texts";
    $results = $link->query($query, MYSQLI_USE_RESULT);
    $result = array();
    while ($r = mysqli_fetch_assoc($results)) {
        array_push($result, $r["name"], $r["message"]);
    }
}

echo json_encode($result);
 */
?>
