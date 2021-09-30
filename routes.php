<?php
$controller = array('pages'=>['home','error']); //list controller and action
function call($controller,$action){
    echo "routes to".$controller."-".$action."<br>";
    require_once("controller/".$controller"_controller.php");
    switch($controller){
        case "pages": $controller = new PagesController();
                        break;
    }
    $controller->{$action}();
}
if(array_key_exists($controller,$controller)){
    if(in_array($action,$controller[$controller])){ 
        call($controller,$action) 
    }
    else
    {
        call('pages','error');
    }
}
else{
    call('pages','error');
}
?>
