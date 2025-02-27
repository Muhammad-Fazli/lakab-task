<?php
/*** Auth Functions ***/
function deleteFolder($folder_id){
    global $pdo;
    $sql = "delete  from folders where id = $folder_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
   return $stmt->rowCount();
}


 function addFolders($folder_name){
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql = "INSERT INTO  folders (name, user_id) VALUES (:folder_name ,  :user_id );";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':folder_name'=> $folder_name, ':user_id'=>$current_user_id ]);
   $records= $stmt->fetchAll(PDO :: FETCH_OBJ);
   return $records;
}


function getFolders(){
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql = "select * from folders where user_id = $current_user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
   $records= $stmt->fetchAll(PDO :: FETCH_OBJ);
   return $records;
}



function getTasks(){
   global $pdo;
   $current_user_id = getCurrentUserId();
   $sql = "select * from tasks where user_id = $current_user_id";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
  $records= $stmt->fetchAll(PDO :: FETCH_OBJ);
  return $records;
}
