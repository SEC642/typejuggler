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
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--<link href="css/cover.css" rel="stylesheet">-->
  </head>
  <body>
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">
       <script src="../js/jquery.js"></script>
       <script src="../js/bootstrap.min.js"></script>
     </div></div>
     <div class="container">
     <div class="text-center">
       <h1 class="cover-lead">Welcome to the Docs!</h1>
</div>
  </div>
  <div class"container">
  <div class="inner cover">
  <div class="text-center">
    <p class="lead">The All Powerful! All Knowing!... hrm. Well sorry not all knowing. Actually you know what... I'm not even sure developers add documentation sometimes...<br /></p>
    <p>There is also not a tendancy not to use grammar or spellchecking tools.</p>
  </div>
  </div>
</body>
</html>

<?php
  if (isset($_GET['page']))
     include($_GET['page'] . ".php");
  else
  {
    echo("<p>Anyway, Do you want to see a <a href=index.php?page=cat>cat?</a></p>
    <p>Do you just fancy a <a href=index.php?page=describecat>description</a> of a cat?</p>
    <p>Or how about just go back to the <a href=../index.php>login</a> page?</p>");
  }
?>
