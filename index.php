<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--<link href="css/cover.css" rel="stylesheet">-->
  </head>
  <body>
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">
       <script src="js/jquery.js"></script>
       <script src="js/bootstrap.min.js"></script>
     </div></div>
     <div class="container">
     <div class="text-center">
       <h1 class="cover-lead">PHP Type Juggling Issues</h1>  
       <form method="post" action="win.php"/>
     Your Username is not modifiable and will be: <input type="text" name="user" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"readonly /><br />
     Password: <input type="text" name="pass" /><br />
       <input type="submit" value="login?"/>
       </form>
       
       <form action="login_check.php"/>
       <input type="submit" value="Generate New Password"/>
       <p>
       </form>
       <p>Do you need help? We have <a href="docs/index.php">DOCS!</a></p>
     </div>
   </div>
  </div>
  <div class"container">
  <div class="inner cover">
  <div class="text-center">
    <!-- <p class="lead">The website that you see here is a simple login form. The <b>source</b> code for that login form is shown <b>below</b>: <br /></p>
  </div>
  </div>
  </div>
      <div class="boxed">
      <pre class="boxed"><br />

        &lt?php
          $flag = "I didn't put the flag in this snippet, because it should be a suprise";
          
          function make_key($user) {
             $time = (int)(time()/20); 
             $seed = md5().md5($_SERVER['HTTP_USER_AGENT'];
             $password = sha1($time.$user.$seed);
             return $password;
          }
          
          if (isset($_POST["user") && isset($_POST["pass"])) {
            $password = make_key($_POST["user"];
            sleep(5); //Hey! I don't want people to bruteforce the site, that would be...bad?
          
          if (strcmp($password, $_POST["pass"]) == 0) {
          echo "You are close, but no cigar! &ltbr /&gt";
          
          if ($_POST["user"] == "127.0.0.1") {
              echo "You got the flag, and the flag is: ".$flag."&ltbr /&gt
          }
          
          } else {
              echo "Try again!";
          }
        ?&gt
      </pre>
    </div>
    </div> -->
  </body>
</html>
