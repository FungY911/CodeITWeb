<?php
// Set the name of the cookie
$cookieName = 'UsersCount';

// Check if the cookie is set
if (!isset($_COOKIE[$cookieName])) {
    // The cookie is not set, so this is a new user
    $storage_num = 0;
    // Increment the counter
    $storage_num = file_get_contents('UsersCount');
    $storage_num++;
    file_put_contents('UsersCount', $storage_num);

    // Set the cookie
    setcookie($cookieName, 1, time() + (86400 * 31), '/'); // 86400 = 1 day
    if ($_GET['traffic'] == 'show') { echo file_get_contents('UsersCount'); } else { echo('An error occured.');}
} else {
    // The cookie is set, so this is not a new user
if ($_GET['traffic'] == 'show') { echo file_get_contents('UsersCount'); } else { echo('An error occured.'); }
}