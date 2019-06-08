<?php
/**
 * Created by PhpStorm.
 * User: kkkum
 * Date: 6/7/2019
 * Time: 4:15 PM
 */

session_start();
require 'func.php';
require 'integrations.php';
if (isset($_SESSION['login'])){

    if ($_SESSION['login'] == 'yes'){

        echo "Session started.  "."<a href='logout.php'>Logout</a>";
?>

        <!Doctype html>
        <html>
            <head>
                <title>Delete</title>
            </head>
            <body>
               <center><table border="2" cellspacing="30px" class="text-center">

                   <?php
                   $res = SelectAll();
                   while ($result = mysqli_fetch_array($res)){
                       $n = $result['name'];
                       $r = $result['rollno'];
                       $b = $result['branch'];
                       ?>
                   <tr>
                       <td><?php echo $n; ?></td>
                       <td><?php echo $r; ?></td>
                       <td><?php echo $b; ?></td>
                       <td><form action='delete.php' method='post'>
                               <input style='display:none;' type='text' name='name' value='<?php echo $n;?>'>
                               <button type='submit' class='btn btn-danger' ><i class='fa fa-trash'></i> </button>
                           </form>
                       </td>
                   </tr>
                   <?php
                   }
                   ?>

               </table></center>
            </body>
        </html>


<?php

    }
}
else {

    echo '<script>location.href=\'index.php\'</script>';

}
?>