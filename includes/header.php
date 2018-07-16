<?php include 'portal-config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="/web120/css/nav.css" />
<link rel="stylesheet" href="/web120/css/portal.css" />
<link rel="stylesheet" href="/web120/css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
    
<h1><a href="index.php"><i class="logo fa <?=$logo?>"></i>TUNG NGUYEN SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <?=makeLinks($nav1)?>    
      
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
      
    </ul>
  </nav>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>
 