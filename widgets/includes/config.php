<?php

/* 
config.php
stores configuration information for our web application

*/
// prevents header already sent errors 
ob_start();
// we want to see all errors
define('DEBUG',TRUE); #we want to see all errors
// prevents date errors
date_default_timezone_set('America/Los_Angeles');

//add include references here;
include 'credentials.php'; //database connection
include 'common.php'; //favorite functions here
include"weekPlan.php";




//create config object
$config = new stdClass; 


// find the current page url:

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//START NEW THEME STUFF
$sub_folder = 'widgets';//change to 'widgets' or 'sprockets' etc.

//add subfolder, in this case 'fidgets' if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
$config->virtual_path = 'http://' . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;
$config->theme = 'BusinessCasual';//sub folder to themes

$config->title = THIS_PAGE;
$config->banner = "Web Design Website";

switch(THIS_PAGE)
{
    case 'index.php':
        $config->title = "home Page";
$config->banner = "Web Design Home Page";
        break;
    case 'appointment.php':
        $config->title = "Appointment Page";
$config->banner = "Web Design Appointment Page";
        break;
            case 'contact-us.php':
        $config->title = "Contact Page";
$config->banner = "Web Design Contact Page";
        break;
         case 'daily.php':
        $config->title = "Web Design Daily";
$config->banner = "Daily";
        break;
}

?>
