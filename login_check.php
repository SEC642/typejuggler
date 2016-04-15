<?php
  include("sweethash.php");
  echo "Your Username: ".$_SERVER["REMOTE_ADDR"]."</b>";
  echo "<br />";
  echo "Your temporary password is: <b>".make_key($_SERVER["REMOTE_ADDR"])."</b>";
  echo "<br />";
  echo "<br />";
  $time = 20 - (time() - ((int)(time()/20))*20); echo "<br />";
  echo "You can use this login for the next <b>$time secs</b>.<br />";
  echo "Hit the Back Key to try your new password. <br />";
?>
