<?php

/*function isAjaxRequest(){
    if( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])= 'xmlhyyprequest'){
       //request is ajax 
       return true;
    }
    return false;
}*/

function diepage($msg){
    echo "<div>$msg</div>";
    die();
    
};
function isAjaxRequest (){
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' )){
       //request is ajax 
       return true;
    }
    return false;
}
function dd($var){
    echo"<pre style='color: #9c4100; backgaround: #fff; z-index:999; position:relative; padding: 10px; margin: 10px; border-left: 3px solid #c56705';>";
    var_dump($var);
    echo"</pre>";


}