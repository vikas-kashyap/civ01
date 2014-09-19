<?php ob_start(); ?>
<?php
include("login/include/session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Virtual Labs - IIT Roorkee</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="javascript/jquery.simplemodal.js"></script>
<script type="text/javascript" src="javascript/init.js"></script>
<link type='text/css' href='style/stylesheet.css' rel='stylesheet' media='screen' />
<link type='text/css' href='style/basic.css' rel='stylesheet' media='screen' />
</head>
<body>
<div id="wrapper">
   <div id="header">
      <div id="logo">
            <h1><a href="#">Virtual Labs in Surveying - IIT Roorkee</a></h1>
         <p><a href="#"></a>Civil Enginnering lab</p>
      </div>
   </div>
   <!-- end #header -->
   <div id="menu">
      <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="exp.php">Experiments</a></li>
          <li><a href="nptl.php">NPTL Lecture</a></li>        
         <li><a href="team.php">Team</a></li>
         <li><a href="contact.php">Contact us</a></li>
         <li><a href="page.php">FAQs</a></li>
         <li><a href="references.php">References</a></li>
         <li style="background: url() no-repeat right top;"><a href="feedback.php">Feedback</a></li>
      </ul>
   </div>
   <!-- end #menu -->
<div id="page">
<div id="page-bgtop">
<div id="page-bgbtm">
<div id="content">
<div class="post">
<div class="post-bgtop">
<div class="post-bgbtm">
<div class="entry">
<?php
/**
 * User has already logged in, so display relavent links, including
 * a link to the admin center if the user is an administrator.
 */
if($session->logged_in)
{
//echo "[<a href=\"login/process.php\">Logout</a>]";
}
else
{
header("Location: login/login.php");
}
?>

<table border="0" width="100%">
   <tr>
       <td align="left"><a href="autolevel_mid.php"><img src="images/back_icon.png"></a></td>
       <td align="right"><a href="login/process.php" class="clsLink">Logout</a></td>
   </tr>
</table>
<p align="center" class="mytitle">Flyleveling using Autolevel</p>
<p>
<table border="0" width="100%">
       <tr><td class="numsubcont">1.</td><td><a href="videocuv.php" class="subcontLink">Summary of Experiment</a></td></tr>
          <tr><td class="numsubcont">2.</td><td><a href="audiov_obj_al.php" class="subcontLink">Objective</a></td></tr>
          <tr><td class="numsubcont">3.</td><td><a href="audiov_eqp_al.php" class="subcontLink">Equipment Used</a></td></tr>
          <tr><td class="numsubcont">4.</td><td><a href="audiov_bp_al.php" class="subcontLink">Principle</a></td></tr>
          <tr><td class="numsubcont">5.</td><td><a href="videocuv_mth_al.php" class="subcontLink">Methodology</a></td></tr>
          <tr><td class="numsubcont">6.</td><td><a href="autolevel_manual.php" class="subcontLink">Manual for Auto Level Working </a></td></tr>
          <tr><td class="numsubcont">7.</td><td><a href="experiments/flylevel/index.htm" target="_blank" class="subcontLink">Working of Instrument</a></td></tr>
          <tr><td class="numsubcont">8.</td><td><a href="experiments/flylevel_exe.rar" class="subcontLink">Download Executable File </a></td></tr>
          <tr><td class="numsubcont">9.</td><td><a href="observation_al.php" class="subcontLink">Observations</a></td></tr>
          <tr><td class="numsubcont">10.</td><td><a href="result_al2.php" class="subcontLink">Results</a></td></tr>
          <tr><td class="numsubcont">11.</td><td><a href="compute_al.php" class="subcontLink">Compute Your Own Data</a></td></tr>
</table>  
</p>





<div id="login_form" style='display:none'>
<div id="status" align="left">
<center><h1><img src="images/key.png" align="absmiddle">&nbsp;LOGIN</h1> 
<div id="login_response"><!-- spanner --></div> </center>
<form id="login" action="javascript:alert('success!');">
<input type="hidden" name="action" value="user_login">
<input type="hidden" name="module" value="login">
<label>E-Mail</label><input type="text" name="email"><br />  
<label>Password</label><input type="password" name="password"><br />  
<label>&nbsp;</label><input value="Login" name="Login" id="submit" class="big" type="submit" />

<div id="ajax_loading">
<img align="absmiddle" src="images/spinner.gif">&nbsp;Processing...
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #content -->
<div id="sidebar">


         <ul>

            <li>
               <h2>About Virtual labs</h2>
               <p><p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.</p></p>
            </li>
            <li>
               <h2>Recent Updates</h2>
               <ul>                 
            <marquee direction="up" scrollamount="3" behavior="alternate" onmouseover="this.setAttribute('scrollamount', 0, 0);"onmouseout="this.setAttribute('scrollamount', 3, 0);">

            <li><a href="autolevel_mid.php">Auto Level Parts & Fly Leveling </a><span>Auto Level Features </a></span></li>
            <li><a href="profile.php">Profile Leveling Using Auto Level</a><span>Profile Leveling Using Auto Level</span></li>
            <li><a href="total_station.php">Measurement of Vertical angle Slope Distance and Horizontal Distance Using Total Station</a><span>Measurement of Vertical angle Slope Distance and Horizontal Distance Using Total Station</span></li>
            <li><a href="Planetable.php">Plain Table and its Accessories</a><span>Plain Table and its Accessories</a></span></li>
            <li><a href="radiation.php">Details plotting by Radiation Method</a><span>Details plotting by Radiation Method</span></li>
            <li><a href="intersection.php">Details plotting by Intersection Method</a><span>Details plotting by Radiation Method</span></li>

            </marquee>                                                 
               </ul>
            </li>
            <li>
               <h2>Virtual Labs</h2>
               <ul>
                  <li><a href="login/login.php" >Login</a><span>Login</span> </li>
                  <li><a href="exp.php">Experiments details</a><span>Experiment details</span> </li>
                  <li><a href="links.php">Related Links</a><span>Related Links</span> </li>
               </ul>
            </li>
            
         </ul>

</div>      <!-- end #sidebar -->
      <div style="clear: both;">&nbsp;</div>
   </div>
   </div>
   </div>
   <!-- end #page -->
   <div id="footer">
      <p>  Civil Engineering Lab <a href="#">Virtual Labs - IIT Roorkee</a>.</p>
   </div>
   <!-- end #footer -->
</div>
</body>
</html>
