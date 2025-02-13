<?php
include_once "../bootstrap/init.php";
if(!isAjaxRequest()){
    diepage('Invalid Request!');
};
if(!isset($_POST['action'])|| empty($_POST['action'])){
    diepage('Invalid Request!');
};
//var_dump($_POST['folderName']);
//var_dump($_POST['action']);
switch($_POST['action']){
    case "addFolder":
        if(!isset($_POST['folderName'])|| strlen($_POST['folderName'])<3){
            echo"نام پوشه باید بزرگ تر از دو حرف باشد";
            die();
        
        } else{
            echo"پوشه با موفقیت ساخته شد";
        }   
    
    
        addFolders($_POST['folderName']);
        


        break;
    case "addTask":
       // var_dump($_POST);
    
    
        break;    

        default:
        diepage('Invalid Request!');

};

