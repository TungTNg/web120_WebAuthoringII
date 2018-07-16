<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "T-Coder Main Page";
        $logo = 'fa-home';
        $PageID = 'Welcome to the main page of Tung The Coder (T-Coder)!!!';
    break;
    
    case 'bigIndex.php':
        $title = "T-Coder Big Page";
        $logo = 'fa-home';
        $PageID = 'Welcome to the big page!!!';
    break;
    
    case 'contactme.php':
        $title = "T-Coder Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'This is where you can contact me!!!';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
    
}

$nav1['/web120/index.php'] = "Welcome";
$nav1['/web120/big/bigIndex.php'] = "Big";
$nav1['/web120/aia.php'] = "AIA";
$nav1['/web120/flowchart.php'] = "Flowchart";
$nav1['/web120/fp/index.php'] = "Final Project";
$nav1['/web120/contactme.php'] = "Contact Tung";

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}


?>