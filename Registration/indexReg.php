<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $salt = bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
    $_SESSION["secretKey"] = $salt;
    echo "<form method='post'>
            <input type='number' max='10' name='myNumber'>
            <input type='submit' value='Send'>
            <input type='hidden' value='$salt' name='secretKey'>
         </form>";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["secretKey"] == $_SESSION["secretKey"]) {
        echo "<a> Твое число: " . $_POST["myNumber"] . "</a>";
    } else {
        echo "NE TOT KEY";
        echo "<br><a href='". $_SERVER["PHP_SELF"] ."'>COME BACK AND TRU AGAIN</a>";
    }
}