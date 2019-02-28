<?php
if(empty($_GET["page"]))
{
    require("controller/c_index.php");
}
else
{
    $page = $_GET["page"];
    switch($page)
    {   case "productDetail":
            require("controller/c_productDetail.php");
            break;
       
        default :
            require("controller/c_index.php");
    }
}
?>