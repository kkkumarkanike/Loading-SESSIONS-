<?php
/**
 * Created by PhpStorm.
 * User: kkkum
 * Date: 6/7/2019
 * Time: 3:59 PM
 */

session_start();
unset($_COOKIE['name']);
unset($_COOKIE['name']);
unset($_SESSION['login']);
setcookie('name',null,-1);
session_destroy();
echo '<script>location.href=\'index.php\'</script>';

?>