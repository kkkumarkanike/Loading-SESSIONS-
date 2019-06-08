<?php
/**
 * Created by PhpStorm.
 * User: kkkum
 * Date: 6/7/2019
 * Time: 6:46 PM
 */

require 'db_config.php';
require 'func.php';

if (isset($_POST['name'])){
    $n = $_POST['name'];
}
$tab = 'users';
$deleted = DeleteSelectedRow($tab,$n);

if ($deleted){

    echo 'Deletion success';
    echo '<script>location.href=\'session.php\'</script>';

}
else{

    echo 'error in deletion';
    echo '<script>location.href=\'session.php\'</script>';
}

?>