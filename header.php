<!DOCTYPE html>
<html>
<head>
  <script type="text/JavaScript" src="js/actions.js"></script>

  <title>Patenator</title>
  <meta name="description" content="Fight Patents with Free Ideas" >
  <meta name="keywords" content="kill patents, patents, evil, ip, lawsuit, patent, patenator" >
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" >
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel='stylesheet' type='text/css' >
  <link href='http://fonts.googleapis.com/css?family=Galindo' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="style/style.css" >
</head>
<body>
<div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.php">paten<span class="logo_colour">ator</span></a></h1>
          <h2>Terminating Patents with Open Ideas</h2>
        </div>
	<div id="submit_idea" onmouseout="this.style.opacity=0.9;this.filters.alpha.opacity=90" onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100;" style="filter:alpha(opacity=90);opacity:0.90;border-radius:3px;color:white;font-weight:bold;background-color:darkorange;font-size:20px;padding:5px 10px;float:right;position:relative;top:53px;">
		<a href="submit.php" style="color:white;">SUBMIT AN OPEN IDEA</a>
	</div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li <?php if ($page == "p1"){echo 'class="selected"';}?> ><a href="index.php">Home</a></li>
          <li <?php if ($page == "p2"){echo 'class="selected"';}?> ><a href="search.php">Search</a></li>
          <li <?php if ($page == "p3"){echo 'class="selected"';}?> ><a href="faq.php">FAQ</a></li>
          <li <?php if ($page == "p4"){echo 'class="selected"';}?> ><a href="submit.php">Submit</a></li>
          <li <?php if ($page == "p5"){echo 'class="selected"';}?> ><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h5>August 1st, 2012</h5>
        <p>2011 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h5>January 1st, 2012</h5>
        <p>2011 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">

