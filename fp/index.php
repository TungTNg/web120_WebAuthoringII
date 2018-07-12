
<!DOCTYPE html>
<html>
<head>
<title>WEB120 Portal - Edit this code to make it your own!</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="../css/nav.css" />
<link rel="stylesheet" href="../css/portal.css" />
<link rel="stylesheet" href="../css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
    
<!-- START Header -->
<?php include '../includes/header.php';?>
<!-- END Header -->
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<?php include '../includes/footer.php';?>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>
