<?php
    session_start();
    if(isset($_POST['btnlogin']))
     { 
      $myusername=$_POST['login'];
      $mypassword=$_POST['password'];
      extract($_POST);
      include 'connection.php';
      $sql="SELECT * FROM usertuttb WHERE userName='$myusername' and password='$mypassword'";
      $rs=mysqli_query($conn,$sql);
        if(mysqli_num_rows($rs) > 0)
          {  
              $_SESSION['uname'] = $myusername;
              header("location:home.php");
          }
          else
          {
            header("location:invalid.php");
          }
            mysqli_close($conn);
     }
    else if(isset($_POST['btnnewuser']))
    { 
      header("location:register.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Develop your skills with Me!!!</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
.button {
     
    /*Step 2: Basic Button Styles*/
    display: block;
    height: 20px;
    width: 80px;
    background: #34696f;
    border: 2px solid rgba(33, 68, 72, 0.59);
     
    /*Step 3: Text Styles*/
    color: rgba(0, 0, 0, 0.55);
    text-align: center;
    font: bold 1.2em/20px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
     
    /*Step 4: Fancy CSS3 Styles*/
    background: -webkit-linear-gradient(top, #34696f, #2f5f63);
    background: -moz-linear-gradient(top, #34696f, #2f5f63);
    background: -o-linear-gradient(top, #34696f, #2f5f63);
    background: -ms-linear-gradient(top, #34696f, #2f5f63);
    background: linear-gradient(top, #34696f, #2f5f63);
     
    -webkit-border-radius: 50px;
    -khtml-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
     
    -webkit-box-shadow: 0 4px 0 #1b383b;
    -moz-box-shadow: 0 8px 0 #1b383b;
    box-shadow: 0 8px 0 #1b383b;
     
    text-shadow: 0 2px 2px rgba(255, 255, 255, 0.2);
     
}
 
/*Step 3: Link Styling*/
a.button {
    text-decoration: none;
}
</style>

</head>
<body>
<div id="wrapper">
  <h1><a href="http://kumarvishal.webnode.in"><img src="images/logo_kumar_text.gif" width="177" height="36" alt="" /></a></h1>
  <ul id="nav">
    <li class="b"><a href="http://kumarvishal.webnode.in">HOME</a></li>
    <li class="a"><a href="http://kumarvishal.webnode.in">Hobbies</a></li>
    <li class="d"><a href="http://kumarvishal.webnode.in">Gallery</a></li>
    <li class="c"><a href="http://kumarvishal.webnode.in">contact</a></li>
  </ul>
  <div id="body">
    <div>
      <div>
        <div>
          <div class="inner"><img src="images/Image026.jpg" width="210" height="299" alt="My photo" class="left" />
            <div class="indent">

<fieldset >
<legend>Login Panel</legend>
<font face="verdana,arial" size=-1>

<table bgcolor="green" cellpadding='2' cellspacing='0' border='0' width='100%'>
<tr><td><table cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td align=center><b><font size=-1 color="white" face="verdana,arial"><b>Enter your login and password</b></font></th></tr>
<tr><td><br>
<form method="post" enctype="multipart/form-data">
<table>
<tr>
<td><font face="verdana,arial" color="white" size=-1>Login:</font></td>
<td><input type="text" name="login"></td>
<td>&nbsp;</td>
<td><input type="submit" name="btnlogin" value="Enter to Login"></font></td>
</tr>
<tr><td><font face="verdana,arial" color="white" size=-1>Password:</font></td>
<td><input type="password" name="password"></td>
<td>&nbsp;</td>
<td><input type="submit" name="btnnewuser" value="For New User"></td>
</tr>

</table></center>
</form>
</td></tr></table></td></tr></table>
</fieldset>
<fieldset >
<legend>Tutorial Link</legend>
<table>
<tr>
<td><a href="https://www.studentstutorial.com/php/php-introduction" class="button">PHP</a></td>
<td><a href="https://www.javatpoint.com/html5-tutorial"class="button">Html5</a></td>
<td><a href="https://www.javatpoint.com/jsp-tutorial" class="button">JSP</a></td>
<td><a href="https://www.tutorialspoint.com/asp.net/index.htm" class="button">ASP.Net</a></td>
</tr>
<tr>

<td><a href="https://www.javatpoint.com/java-tutorial" class="button">JAVA</a></td>
<td><a href="https://www.guru99.com/python-tutorials.html" class="button">Python</a></td>
<td><a href="https://www.programiz.com/c-programming" class="button">C</a></td>
<td><a href="https://www.geeksforgeeks.org/cpp-tutorial/" class="button">C++</a></td>
</tr>
</table>
</fieldset>


 </div>
       
           
            <div id="dividerx"><img src="images/divider_cut.gif" width="28" height="12" alt="" /></div>
            <div id="boxes">
              <div>
                <div class="inner">
                  <div id="left">
                    <div class="inner">
                      <h2>Join Me... </h2>
                      <p>To get a job in various field join me, register your self its free... </p>

                      <img src="images/kumar2.gif" width="59" height="102" alt="black man" class="lowright" />
                     
                      <p class="readmore"><a href="#">...Join Now</a></p>
                    </div>
                  </div>
                  <!-- end left -->
                  <div id="right">
                    <div class="inner">

                      <h2>My Blogs</h2>

                      <ul class="left">


                        <li><a href="http://kumarlpu.blogspot.in">Latest Technology<a/></li>
                        <li><a href="http://kumarjava.blogspot.in">Java</a></li>
                        <li><a href="http://kumarclanguage.blogspot.in">C Language</a></li>
                        <li><a href="http://kumarlpuecommerce.blogspot.in">E-Commerce</a></li>
			<li><a href="http://kumarlpubasics.blogspot.in">Basic Computer Skills</a></li>
                      </ul>
                      
                    </div>
                  </div>
                  <!-- end right -->

                  <div class="clear">
</div>
                </div>
              </div>
            </div>
            <!-- end boxes -->
          </div>
        </div>
      </div>
    </div>
    <!-- end .inner -->
  </div>
  <!-- end body -->
  <div id="footer"> Powered by kumar vishal </div>
  <!-- end footer -->
</div>
<!-- end wrapper -->
<div align=center></div></body>
</html>
