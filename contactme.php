<!-- START Header -->
<?php include 'includes/header.php';?>
<!-- END Header -->

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
    <div>Inside the source of this file, you can un-comment and test 
        2 different types of forms:
        <div class="indent">
            <ul>
                <li>simple.php - a simple contact form with reCAPTCHA</li>
                <li>multiple.php - a complex form with reCAPTCHA</li>
            </ul>
        </div>    
    </div>    
	<p><?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other 1!       
         *
         */
        include 'includes/simple.php'; #demonstrates a simple contact form
        //include 'includes/multiple.php';#demonstrates multiple form elements

	?></p>
	<p class="clear-recaptcha"></p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Your opinions are very important to me!!!</h3>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>So please leave a comments....</p>
 <p>.... to let me know how you feel about this site!!! :)</p>
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
