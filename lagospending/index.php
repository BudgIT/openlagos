<!DOCTYPE html>

<html>
<head>
    <title>OpenLagos</title>
    <meta name="description" content="openlagos" />
    <meta name="keywords" content="lagos spending" />
    <meta charset="utf-8">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="jquery-1.8.3.min.js"></script>
<script src="jquery.joverlay.min.js"></script>
    <script src="js/script.js"></script> 
          <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.4"></script>
    <script src="jquery.animateNumbers.js"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.4" media="screen" />
</head>

<body>
<div id="wrapper">
    
<div id="header">
<div id="logo"><a href="index.php" class="home" title="OpenLagos"><span class="first_name">Open</span> <span class="last_name">Lagos</span></a></div> <!-- Logo End -->    
<div id="navigation">

<div id="hire_circle"><a href="index.php" title="BudgIT!"><img src="images/budgit.png"/></a></div>
<div id="okfn"><a href="index.php" title="OKFN!"><img src="images/okfn.png"/></a></div> <!-- Hire Circle End -->
</div> <!-- Navigation End -->    
<div id="profession"><h1>Visualizing Lagos Spending with OpenSpending tool</h1><br/><p>Click on the timeline and circle to visualise</p> </div> <!-- Profession End -->
<span id='figures'><span id='tags'>Lagos Expenditure</span><span> &#x20a6; </span><span id="amt"></span></span> 
<span id='figure'><span id='tags'>Lagos Revenue</span><span>&#x20a6;</span><span id="prc"></span></span></span></span>

</div> <!-- Header End -->

<div id="middle">
	<h1></h1>
	<?php include 'timeline.php';?>
		
</div>
<div id="text">

<p class="index"></p>    
</div> <!-- Text End -->

</div> <!-- Middle End -->   
    
<div id="footer">
<div id="articles">
<!-- Articles End -->      

<div id="rights">Common Creative License 2013</div> <!-- Rights End -->    
        
</div> <!-- Footer End -->

</div> <!-- Wrapper End -->

</body>
</html>
