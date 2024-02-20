
<?php

$name = $_POST["name"];
$subject = $_POST["subject"];
$message = $_POST["message"];

echo "<h2> Information received </h2>";
echo "The name received is: " . $name . "<br/>";
echo "The subject received is: " . $subject . "<br/>";
echo "The message received is: " . $message . "<br/>";

?>