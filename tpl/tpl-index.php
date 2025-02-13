

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?=  SITE_TITLE ?></title>
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="page">
  <div class="pageHeader">
    <div class="title">Dashboard</div>
    <div class="userPanel"><i class="fa fa-chevron-down"></i><span class="username">John Doe </span><img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/73.jpg" width="40" height="40"/></div>
  </div>
  <div class="main">
    <div class="nav">
      <div class="searchbox">
        <div>
        </div>
      </div>
      <div    class="menu">
        <div class="title">Folders</div>
        
        <ul class="folder-list">
         <?php
         foreach($folders as $folder ):?>
         <li>
            <a href="?folder_id=<?= $folder->id?>"> <i class="fa fa-folder"></i><?= $folder-> name ?></a> 
            <a href="?delete_folder=<?= $folder->id?>"class="fa fa-trash-o"></a> 

          
      
           </li>
          <?php endforeach; ?>



          <li  class="active"> <i  class="fa fa-home"></i> Current Floder</li>
        

        </ul class="folder-list">
      </div>
          <input type="text" id="addFolderInput" style='width: 70%;margin-left:3%' ; placeholder="Add  new Floder"/>
          <button id="addFolderBtn"  class="btn  clickable" >+</button>
    </div>
    <div class="view">
      <div class="viewHeader">
        <div class="title">Manage Tasks</div>
        <div class="functions">
          <div class="button active">Add New Task</div>
          <div class="button">Completed</div>
          <div class="button inverz"><i class="fa fa-trash-o"></i></div>
        </div>
      </div>
      <div class="content">
        <div class="list">
          <div class="title">Today</div>
          <ul>
          <?php
          foreach($tasks as $task ):?>

            <li class="<?=$task->is_done ? 'checked' :  '';  ?>">
            <i class="<?=$task->is_done ? 'fa fa-check-square-o' :  'fa fa-square-o';  ?>"></i>
              <span><?=$task->title?></span>
              <div class="info">
               <span class='created-at' >Created at <?=$task->created_at?></span>
               <a href="?delee_task=<?= $task->id?>"class="fa fa-trash-o"></a>
              </div>
            </li>
            <?php endforeach; ?>
            
         
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script><script 
   src="assets/js/script.js"></script>
<script>
$(document).ready(function(){
  $('#addFolderBtn').click(function(e){
    var input = $('input#addFolderInput');
    //alert(input.val());
    //alert(folderName);
    $.ajax({
      url :"process/ajaxHandelr.php",
      method :"post",
      data :{action: "addFolder",folderName: input.val()},
      
      success: function(response){
       if(response =='1'){
        //<li> <a href="?folder_id=29"> <i class="fa fa-folder"></i>xxx</a> <a href="?delete_folder=29" class="fa fa-trash-o"></a> </li>
        $('<li> <a href="?folder_id=29"> <i class="fa fa-folder"></i>'+input.val()+'</a> </li>').appendTo('ul.folder-list');
      }else{
        alert(response);
      }
      //alert(response);
    }
  
    });

  });
  });




</script>

<script>

</script>



</script>


</body>
</html>
