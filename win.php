<?php
  
  include("sweethash.php");
  $flag = "The Power is Yours";

  if (isset($_POST["user"]) && isset($_POST["pass"])) {
    $password = make_key($_POST["user"]);
    sleep(5);
    
    if (strcmp($password, $_POST["pass"]) == 0) {
    echo "You are close, but no cigar! <br />";

    if ($_POST["user"] == "127.0.0.1") {
         echo "You got the flag, and the flag is: ".$flag."<br /> ";
      }
    
      } else {
         echo "Try again!";
      }
    
    }
?>


