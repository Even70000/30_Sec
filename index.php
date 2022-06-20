<?php 
include('includes/config.inc.php');
include(PAGEMAKER);

if(isset($_GET['page'])){
    $page = $_GET['page'];

}else{
    $page = START;
}

$getPage = new PageMaker();
echo $getPage->getPage($page);