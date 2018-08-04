<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>T-Coder Flexbox</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="/web120/css/portal.css">
   <link rel="stylesheet" href="/web120/css/form.css" />
   <link rel="stylesheet" href="/web120/css/big_nav.css">
   <link rel="stylesheet" href="/web120/css/big_content.css">
   
</head>
<body>
    

<div class="wrapper"> 
   
<h1><a href="https://www.tungthecoder.com/web120/big/bigIndex.php"><i class="logo fa fa-home"></i>TUNG NGUYEN PORTAL FOR BIG THINGS</a></h1>

    <nav id="cssmenu">
      <ul>
         <li><a href="/web120/index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
         <li><a href="/web120/big/bigIndex.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
         <li><a href="/web120/big/flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
         <li><a href="/web120/big/galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
         <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
            <ul>
               <li><a href="/web120/big/calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
               <li><a href="/web120/big/map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
               <li><a href="/web120/big/youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
            </ul>
         </li>
         <li><a href="/web120/big/parallax.php"><span><i class="fa fa-fw fa-fighter-jet"></i> Parallax</span></a></li>
         <li><a href="/web120/big/shoppingcarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
         <li><a href="/web120/big/siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
         <li><a href="/web120/big/webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
      </ul>
    </nav>
 
<section> 
 
 <h2 class="pageID">~Flexbox~</h2>
 
<div id="content">

    <p>Flexbox and CSS Grid are two new layout modes in CSS3. Flexbox, shorts for CSS Flexible Box Layout Module, 
    is aimed as a tool to help distribute space between items in a single column or row. While CSS Grid, shorts for 
    CSS Grid Layout Module, helps divide space into columns & rows. 
    </p>
    
    <p>To use flexbox, we need to put flex items inside a flex container and define the direction to which the items can “flex”. 
    A web page has two axis: horizontal axis (or x-axis for those of you who know basic math) and vertical axis (y-axis). 
    Using flexbox, it’s easier to put boxes in one axis to the container in different behaviours. Stating flex in display property, 
    you can start your way on Flexbox. 
    </p> 
    
    <code>.container {
    <br>&nbsp;&nbsp; display: flex;
    <br>   }
    </code>

    <p>Css-tricks.com will helps us to understand more about the properties of flexbox. According to the website, 
    there are 6 box properties for the flexbox layout (or properties for the parent - flex container):
    </p>
    
    <li>‘flex-direction’ property defines in which direction the container stacks the contents</li>
    
    <code>
    .container {
    <br>&nbsp;&nbsp; flex-direction: row | row-reverse | column | column-reverse;
    <br>}
    </code>
    
    <li>‘flex-wrap’ property defines whether to wrap items or not</li> 
    
    <code>
    .container {
    <br>&nbsp;&nbsp; flex-wrap: nowrap | wrap | wrap-reverse;
    <br>}
    </code>
    
    <li>‘flex-flow’ property is a combination of ‘flex-direction’ and ‘flex-wrap’, which together define the flex container's
    x and y axes</li>
    
    <code>
    flex-flow: <'flex-direction'> || <'flex-wrap'>
    </code>
    
    <li>‘justify-content’ property is used to align the flex items</li> 
    
    <code>
    .container {
    <br>&nbsp;&nbsp; justify-content: flex-start | flex-end | center | space-between | space-around | space-evenly;
    <br>}
    </code> 
    
    <li>‘align-items’ is used to align the items vertically</li>
    
    <code>
    .container {
    <br>&nbsp; align-items: flex-start | flex-end | center | baseline | stretch;
    <br>}
    </code>
    
    <li>‘align-content’ is used to align the flex lines</li>
    
    <code>
    .container {
    <br>&nbsp;&nbsp; align-content: flex-start | flex-end | center | space-between | space-around | stretch;
    <br>}
    </code>
    
    <p>There are also 6 properties about items in the box (or properties for the children - flex items):
    </p>

    <li>‘order’ property for item sequence (it controls the order in which the items appear in the flex container)</li>

    <code>
    .item {
    <br>&nbsp;&nbsp; order: (integer); /* default is 0 */
    <br>}
    </code>
    
    <li>‘flex grow’ property for enlarging scales (defines the ability for a flex item to grow if necessary)</li>
    
    <code>
    .item {
    <br>&nbsp;&nbsp; flex-grow: (number); /* default 0 */
    <br>}
    </code>
    
    <li>‘flex-shrink’ property for shrinking scales (defines the ability for a flex item to shrink if necessary)</li>
    
    <code>
    .item {
    <br>&nbsp;&nbsp; flex-shrink: (number); /* default 1 */
    <br>}
    </code>
    
    <li>‘flex-basis’ property for size occupied on main axis</li>
    
    <code>
    .item {
    <br>&nbsp;&nbsp; flex-basis: (length) | auto; /* default auto */
    <br>}
    </code>
    
    <li>‘flex’ property for combining ‘flex-grow’, ‘flex-shrink’ and ‘flex-basis’</li> 

    <code>
    .item {
    <br>&nbsp;&nbsp; flex: none | [ <'flex-grow'> <'flex-shrink'>? || <'flex-basis'> ]
    <br>}
    </code>
    
    <li>‘align-self’ for alignment (allows the default alignment (or the one specified by align-items) to be overridden 
    for individual flex items)</li>
    
    <code>
    .item {
    <br>&nbsp;&nbsp; align-self: auto | flex-start | flex-end | center | baseline | stretch;
    <br>}
    </code>

    <p>Browser support is an important issue that needs consideration. “As of August 2015, browser support is excellent! 
    The current Flexbox spec is fully supported in all modern browsers, including mobile, IE11 and Edge”, according to Scott Vandehey (Scott, 2016). 
    In recent years, flexbox is supported by most common browsers like Firefox, Chrome, Safari, IE and Opera, except some old versions. 
    However, for those webkit based browsers like Safari, little tweak like  -webkit is still needed in CSS file. In conclusion, having all 
    the advantages to set the web page layout without having to use float, I think it’s safe to say that’s now is a good time for you to start learning about flexbox.
    </p>
</div> 

	
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h2>~Works Cited~</h2>
 
 <ul>
     <li>Coyier, Christ. <em>“A Complete Guide to Flexbox.”</em> 
     CSS-Tricks, 23 Apr. 2018, <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">css-tricks.com/snippets/css/a-guide-to-flexbox/</a>
     </li>
     <li>Vandehey, Scott. “What IS Flexbox?” Space Ninja, Space Ninja, 22 Oct. 2016, 
     <a href="https://spaceninja.com/2015/08/24/what-is-flexbox/">spaceninja.com/2015/08/24/what-is-flexbox/</a>
     </li>
 </ul>

	
</aside>

<?php include '../includes/footer.php';?>

</div>    




   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="/web120/js/script.js" type="text/javascript"></script>
   
</body>
</html>
