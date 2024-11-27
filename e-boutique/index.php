<?php

include_once("controleurs/controleurManifacture");

$view = "index";

// controleurManifacture::creer

if(isset($_GET["view"])){
    $view = $_GET["view"];
}

header("location: vues/". $view . ".php");

?>