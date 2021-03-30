<?php
//$mysql_hostname = "localhost";
//$mysql_user ="root";
///$mysql_password ="usbw";
//$mysql_database ="db_jobportal";

//$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("oops !Could not connect database");
//mysql_select_db($mysql_database, $bd) or die("opps! database not connected");


   //$server = "localhost";
   //$user = "aimanzamin";
   //$pass = "aiman179";


   $server = "localhost";
   $user = "root";
   $pass = "usbw";

   //$con = new mysqli($server, $user, $pass, "db_jobportal");
  $con = new mysqli($server, $user, $pass, );
   if($con->connect_error){
       die("Connection Error");
   }

?>
