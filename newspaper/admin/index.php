<?php
session_start();
require_once '../inc/Database.php';  

include_once("modelAdmin/ModelAdmin.php");
include_once("modelAdmin/ModelAdminNews.php");
include_once("modelAdmin/ModelAdminCategory.php");

include_once("controllerAdmin/ControllerAdmin.php");
include_once("controllerAdmin/ControllerAdminNews.php");

include('routeAdmin/routingAdmin.php');

echo $response;
