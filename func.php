<?php
/**
 * Created by PhpStorm.
 * User: kkkum
 * Date: 6/7/2019
 * Time: 4:12 PM
 */
require 'db_config.php';
//-------------------checking cookie--------------------//
function CheckCookie()
{
    global $conn;
    if (isset($_COOKIE['name'])) {
        $val = $_COOKIE['name'];
        $q = "select nam from cook where value = '$val'";
        $result = mysqli_query($conn, $q);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            return true;
        }
        else
        {
            return false;
        }

    }


}

//----------------session values---------------------//

function CookieSessionVariables(){

    global $conn;
    if (isset($_COOKIE['name'])) {
        $val = $_COOKIE['name'];
        $q = "select * from cook where value = '$val'";
        $result = mysqli_query($conn, $q);
        $rows = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $_SESSION['login'] = 'yes';
            $_SESSION['name'] = $rows['nam'];
        }
    }

}

function RandomValueGenerator(){

    $randvalue = rand(0000,9999);
    return $randvalue;

}

//--------------select alll-----------------//

function SelectAll(){
    global $conn;
    $q = 'select * from users';
    $result = mysqli_query($conn,$q);
    return $result;

}

//-----------------delete from users---------------//

function DeleteSelectedRow($table,$value){
    global $conn;
    $q = "delete from $table where name = '$value'";
    if ( mysqli_query($conn,$q))
    {
       return true;
    }
    else
    {
        return false;
    }


}


?>