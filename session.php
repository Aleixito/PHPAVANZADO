
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $_SESSION["username"] = $name;

    echo "<h2> Information received </h2>";
    echo "The name received is: " . $name . "<br/>";
    echo "The subject received is: " . $subject . "<br/>";
    echo "The message received is: " . $message . "<br/>";
}

if (isset($_SESSION["username"])) {
    echo "<h1>Welcome, " . $_SESSION["username"] . "!</h1>";
} 
?>
