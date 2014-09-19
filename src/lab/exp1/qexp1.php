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
<!--<link type='text/css' href='style/stylesheet.css' rel='stylesheet' media='screen' />-->
<link type='text/css' href='style/basic.css' rel='stylesheet' media='screen' />
<script src="js/flash_detect.js" type="text/javascript"></script>
    <style type="text/css">
      .style1
      {
      width: 20px;
   color: #000000;
      }
      .style2
      {
      width: 22px;
   color: #000000;
      }
      .style3
      {
      width: 200px;
   color: #000000;
      }
    </style>
</head>

<body>
<div id="wrapper">
   <div id="header">
         <div id="logo">
               <h1><a href="#">Virtual Labs - IIT Roorkee</a></h1>
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
<div class="entry" style="color: #000000;">

<table border="0" width="100%">
   <tr>
       <td align="left"><a href="autolevel_mid.php"><img src="images/back_icon.png"></a></td>
       <td align="right"><a href="login/process.php" class="clsLink">Logout</a></td>
   </tr>
</table>


   <p align="center" style="font-family: 'decorative fontFINAL'; font-size: x-large; color: #993300; font-weight: bold;">Questionare</p>
      <form action="calc_ques.php" name="first" method="post">
            <p>
               Q1. The accuracy depends upon
            
            <table border="0" style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q1a" name="q1" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">Precise instruments</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q1b" name="q1" type="radio" value="b" />
                                 </td>
                                 <td class="style3">Precise methods</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q1c" name="q1" type="radio" value="c" />
                                 </td>
                                 <td class="style3">Good planning</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q1d" name="q1" type="radio" value="d" />
                                 </td>
                  <td class="style3">All of the above</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(e)</td>
                                 <td class="style2">
                                    <input id="q1e" name="q1" type="radio" value="e" />
                                 </td>
                                 <td class="style3">None of the above</td>

                                 <td class="style1">
                                    &nbsp;
                                 </td>
                                 <td class="style2">
                                    &nbsp;
                                 </td>
                                 <td class="style3">
                                    &nbsp;
                                 </td>
                              </tr>
            </table>
            </p>
            
            <p>
            Q2. In a 5 m telescopic staff, the length of lower box is
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q2a" name="q2" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">1 meter</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q2b" name="q2" type="radio" value="b" />
                                 </td>
                                 <td class="style3">1.5 meter</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q2c" name="q2" type="radio" value="c" />
                                 </td>
                                 <td class="style3">1.73 meter</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q2d" name="q2" type="radio" value="d" />
                                 </td>
                  <td class="style3">1.8 meter</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(e)</td>
                                 <td class="style2">
                                    <input id="q2e" name="q2" type="radio" value="e" />
                                 </td>
                                 <td class="style3">2.0 meter</td>

                                 <td class="style1">
                                    &nbsp;
                                 </td>
                                 <td class="style2">
                                    &nbsp;
                                 </td>
                                 <td class="style3">
                                    &nbsp;
                                 </td>
                              </tr>
            </table>
            </p>

            <p>
            Q3. The cross hair is made of
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q3a" name="q3" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">Threads from the cocoon of the brown spider</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q3b" name="q3" type="radio" value="b" />
                                 </td>
                                 <td class="style3">Fine platinum wire</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q3c" name="q3" type="radio" value="c" />
                                 </td>
                                 <td class="style3">Filaments of silk</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q3d" name="q3" type="radio" value="d" />
                                 </td>
                  <td class="style3">Etching on glass</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(e)</td>
                                 <td class="style2">
                                    <input id="q3e" name="q3" type="radio" value="e" />
                                 </td>
                                 <td class="style3">Any of above</td>

                                 <td class="style1">
                                    &nbsp;
                                 </td>
                                 <td class="style2">
                                    &nbsp;
                                 </td>
                                 <td class="style3">
                                    &nbsp;
                                 </td>
                              </tr>
            </table>
            </p>

            <p>
            Q4. The magnification of a telescope depends upon
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q4a" name="q4" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">Focal length of objective lens</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q4b" name="q4" type="radio" value="b" />
                                 </td>
                                 <td class="style3">Focal length of eye-piece</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q4c" name="q4" type="radio" value="c" />
                                 </td>
                                 <td class="style3" valign="center">Ratio of fical length of objective lens/focal length of eye piece</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q4d" name="q4" type="radio" value="d" />
                                 </td>
                  <td class="style3">Sum of focal length of objective lens and focal length of eye piece</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(e)</td>
                                 <td class="style2">
                                    <input id="q4e" name="q4" type="radio" value="e" />
                                 </td>
                                 <td class="style3">(1/focal length of objective lens)+(1/focal length of eye piece)</td>

                                 <td class="style1">
                                    &nbsp;
                                 </td>
                                 <td class="style2">
                                    &nbsp;
                                 </td>
                                 <td class="style3">
                                    &nbsp;
                                 </td>
                              </tr>
            </table>
            </p>

            <p>
            Q5. The cross-hair in a telescope are fitted
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q5a" name="q5" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">In front of eye piece</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q5b" name="q5" type="radio" value="b" />
                                 </td>
                                 <td class="style3">At the centre of the telescope</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q5c" name="q5" type="radio" value="c" />
                                 </td>
                                 <td class="style3" valign="center">In the objective glass</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q5d" name="q5" type="radio" value="d" />
                                 </td>
                  <td class="style3">At the optical centre of eye piece</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(e)</td>
                                 <td class="style2">
                                    <input id="q5e" name="q5" type="radio" value="e" />
                                 </td>
                                 <td class="style3">Anywhere between objective and eye piece</td>

                                 <td class="style1">
                                    &nbsp;
                                 </td>
                                 <td class="style2">
                                    &nbsp;
                                 </td>
                                 <td class="style3">
                                    &nbsp;
                                 </td>
                              </tr>
            </table>
            </p>

            <p>
            Q6. Which one of the following may be termed as instrumental error in levelling
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q6a" name="q6" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">Error due to sluggish bubble</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q6b" name="q6" type="radio" value="b" />
                                 </td>
                                 <td class="style3">Error due to imperfect adjustment</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q6c" name="q6" type="radio" value="c" />
                                 </td>
                                 <td class="style3" valign="center">Error due to movement of objective slide</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q6d" name="q6" type="radio" value="d" />
                                 </td>
                  <td class="style3">Error due to defective joint</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(e)</td>
                                 <td class="style2">
                                    <input id="q6e" name="q6" type="radio" value="e" />
                                 </td>
                                 <td class="style3">All of the above</td>

                                 <td class="style1">
                                    &nbsp;
                                 </td>
                                 <td class="style2">
                                    &nbsp;
                                 </td>
                                 <td class="style3">
                                    &nbsp;
                                 </td>
                              </tr>
            </table>
            </p>

            <p>
            Q7. The angle of field of the telescope
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q7a" name="q7" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">Increases as the magnifying power increase</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q7b" name="q7" type="radio" value="b" />
                                 </td>
                                 <td class="style3">Increases as the distance between eye piece and object increases</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q7c" name="q7" type="radio" value="c" />
                                 </td>
                                 <td class="style3" valign="center">Increases as the size of the eye piece increases</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q7d" name="q7" type="radio" value="d" />
                                 </td>
                  <td class="style3">Depends in the size of the object glass</td>
                              </tr>
            </table>
            </p>

            <p>
            Q8. A fixed point of reference of known elevation is known as
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q8a" name="q8" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">Bench Mark</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q8b" name="q8" type="radio" value="b" />
                                 </td>
                                 <td class="style3">Datum</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q8c" name="q8" type="radio" value="c" />
                                 </td>
                                 <td class="style3" valign="center">Change point</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q8d" name="q8" type="radio" value="d" />
                                 </td>
                  <td class="style3">Station point</td>
                              </tr>
            </table>
            </p>

            <p>
            Q9. The levelling of instrument is done so that
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q9a" name="q9" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">Vertical axis is truly vertical</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q9b" name="q9" type="radio" value="b" />
                                 </td>
                                 <td class="style3">Line of sight is truly horizontal</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q9c" name="q9" type="radio" value="c" />
                                 </td>
                                 <td class="style3" valign="center">Optical axis is truly horizontal</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q9d" name="q9" type="radio" value="d" />
                                 </td>
                  <td class="style3">Effect of curvature of earth is nullified</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(e)</td>
                                 <td class="style2">
                                    <input id="q9e" name="q9" type="radio" value="e" />
                                 </td>
                                 <td class="style3">Line of collimation is truly horizontal</td>

                                 <td class="style1">
                                    &nbsp;
                                 </td>
                                 <td class="style2">
                                    &nbsp;
                                 </td>
                                 <td class="style3">
                                    &nbsp;
                                 </td>
                              </tr>
            </table>
            </p>

            <p>
            Q10. When the bubble of the level tube of a level, is central
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q10a" name="q10" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">Line of sight is horizontal</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q10b" name="q10" type="radio" value="b" />
                                 </td>
                                 <td class="style3">axis of the telescope is horizontal</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q10c" name="q10" type="radio" value="c" />
                                 </td>
                                 <td class="style3" valign="center">line of collimation is horizontal</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q10d" name="q10" type="radio" value="d" />
                                 </td>
                  <td class="style3">geometrical axis of the telescope is horizontal</td>
                              </tr>
            </table>
            </p>

            <p>
            Q11. While viewing through a level telescope and moving the eye slightly, a relative
                 movement occurs between the image of the levelling staff and the cross hairs.
                 The instrument is
            
            <table style="width:100%;">
                              <tr valign="top">
                                 <td class="style1">(a)</td>
                                 <td class="style2">
                                    <input id="q11a" name="q11" type="radio" value="a"/>
                                 </td>
                                 <td class="style3">correctly focussed</td>
                                
                  <td class="style1">(b)</td>
                                 <td class="style2">
                                    <input id="q11b" name="q11" type="radio" value="b" />
                                 </td>
                                 <td class="style3">not correctly focused</td>
                              </tr>
                              
               <tr valign="top">
                                 <td class="style1">(c)</td>
                                 <td class="style2">
                                    <input id="q11c" name="q11" type="radio" value="c" />
                                 </td>
                                 <td class="style3" valign="center">said to have parallex</td>

                                 <td class="style1">(d)</td>
                                 <td class="style2">
                                    <input id="q11d" name="q11" type="radio" value="d" />
                                 </td>
                  <td class="style3">free from parallex</td>
                              </tr>
            </table>
            </p>
            
            <p>
            <table align="center">
                              <tr>
                                 <td style="color: #000000;"  colspan="6">
                  <input type="hidden" name="sub" value="1">
                                    <input id="Sub" type="submit" value="Submit" />
                                 </td>
                              </tr>
            </table>
            </p>
         
      </form>

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
                  <p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.</p>
                  </p>
                </li>
                <li>
                  <h2>Recent Updates</h2>
                  <ul>
                    <li>
                      <a href="autolevel_mid.php">Auto Level Parts & Fly Leveling </a>
                      <span>
                        Auto Level Features </a>
                      </span>
                    </li>
                    <li>
                      <a href="profile.php">Profile Leveling Using Auto Level</a>
                      <span>Profile Leveling Using Auto Level</span>
                    </li>
                    <li>
                      <a href="total_station.php">Measurement of Vertical angle Slope Distance and Horizontal Distance Using Total Station</a>
                    </li>
            <li><a href="Planetable.php">Plain Table and its Accessories</a><span>Plain Table and its Accessories</a></span></li>
            <li><a href="radiation.php">Details plotting by Radiation Method</a><span>Details plotting by Radiation Method</span></li>
            <li><a href="intersection.php">Details plotting by Intersection Method</a><span>Details plotting by Radiation Method</span></li>
                  </ul>
                </li>
                <li>
                  <h2>Virtual Labs</h2>
                  <ul>
                    <li>
                      <a href="login/login.php" >Login</a>
                      <span>Login</span>
                    </li>
                    <li>
                      <a href="exp.php">Experiments details</a>
                      <span>Experiment details</span>
                    </li>
                    <li>
                      <a href="links.php">Related Links</a>
                      <span>Related Links</span>
                    </li>
                  </ul>
                </li>

              </ul>

            </div>
            <!-- end #sidebar -->
            <div style="clear: both;">&nbsp;</div>
          </div>
        </div>
      </div>
      <!-- end #page -->
      <div id="footer">
        <p>
          Civil Engineering Lab <a href="#">Virtual Labs - IIT Roorkee</a>.
        </p>
      </div>
      <!-- end #footer -->
    </div>
  </body>
</html>
