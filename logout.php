<?php

 require 'dbconfig/config.php'

 ?>
 
<?php
   session_start();
   session_destroy();
   unset($_SESSION["username"]);
   
   header("location:index.php");
   ?>