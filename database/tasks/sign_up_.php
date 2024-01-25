<?php

include 'connection.php';

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$query = "INSERT INTO kraUSERS (email, password, picture) VALUES ('$email', '$password', NULL)";

$result = mysqli_query($connection, $query);

if ($result) {
    echo "success";
} else {
    echo "fail";
}

mysqli_close($connection);

?>

