<?php
/**
 * Created by PhpStorm.
 * User: kkkum
 * Date: 6/7/2019
 * Time: 11:51 AM
 */
include 'db_config.php';
require 'func.php';
if (CheckCookie())
{
    echo '<script type="text/javascript">location.href = \'session.php\';</script>';
}

if (isset($_POST['name'])){
    $name = $_POST['name'];
}
if (isset($_POST['password'])){
    $pass = $_POST['password'];
}

    $value = RandomValueGenerator();
    $q = "select * from cook where nam = '$name' and pass = '$pass'";
    setcookie('name',$value,time()+3600);
    $insert = "update cook set value = '$value' where nam = '$name'";
    mysqli_query($conn,$insert);
    $result = mysqli_query($conn,$q);
    $rows = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if ($count == 1){

        //echo 'Freshly logged in ';
        //echo "<a href='logout.php'>Logout</a>";
        $_SESSION['login'] = 'yes';
        $_SESSION['name'] = $rows['nam'];
        echo '<script>location.href=\'session.php\'</script>';
    }
    else{

        echo 'Your credentials are incorrect';


    }


?>