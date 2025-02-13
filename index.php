<?php
//include "tpl/tpl-index.php";
include "bootstrap/init.php";



if(isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])){
    
$deletedCunt=deleteFolder($_GET['delete_folder']);
  // echo"$deletedCunt succfuly deleted";
   
}


$folders= getFolders();
//var_dump($folders);
$tasks= getTasks();

include "tpl/tpl-index.php";
 