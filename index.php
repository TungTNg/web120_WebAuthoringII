
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tung The Coder Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
    
<!-- START Header -->
<?php include 'includes/header.php';?>
<!-- END Header -->
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome!!!</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <p>Welcome to my personal page. My name is Tung Nguyen. I'm a 24-years-old college student. I got my Associate of Arts Degree at Seattle Central College (SCC) 3 years ago. 
 However, I recently went back to SCC for some of the programming certificates. My goals are to finish the courses requirements for below certificates & get a hand-on coding practice: </p>
     <ul>
        <li>Programming Core Certificate</li>
        <li>Mobile Development</li>
        <li>Web Scripting</li>
        <li>Web Programming</li>
        <li>Software Developer</li>
        <li>Web Development</li>
     </ul>
 <p>I love new technologies & cool gadgets. During my free times, I usually hang out with friends & check out new restaurants together with them. I'm also an avid movie lover. 
 I go to the movie theater to catch newly released movies at least once a week. Being a geeky nerd, games play an important role in my life as well. I play a lot of offline RPG games, MMORPG games and 
 most important, MOBA games which includes Dota, Dota 2, League of Legends & Heroes of the Storm.</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Still wanna know more about me?!?... *Sigh*!!!</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>Geeezzzzzz.... what do you wanna know more?</p>
 <p>Leave me alone!!!!! :(( (Just kiddin', those lines are just placeholders, I'll come back and change them later!!!)</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<?php include 'includes/footer.php';?>
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
