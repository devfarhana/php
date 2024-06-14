<?php
// echo date('d');
// echo "\n";
// echo date('D');
// echo "\n";
// echo date('m');
// echo "\n";
// echo date('M');
// echo "\n";
// echo date('y');
// echo "\n";
// echo date('Y');
// echo "\n";
// echo date('y/M/D');
// echo "\n";
// echo date('d-m-y');
// echo "\n";
// echo date('H');
// echo "\n";
// echo date('h');
// echo "\n";
// echo date('i');
// echo "\n";
// echo date('s');
// echo "\n";
// echo date('a');
// date_default_timezone_set("America/New_York");
// echo date('h.i.sa');
// echo "\n";
// $set_time = mktime(10, 30, 00, 01, 02, 2024);
// echo date("Y-m-d h:i:sa", $set_time);


// $birthdate = new DateTime("04/19/1999");
// $todate = new DateTime();
// echo $todate->format("d/m/y");
// echo "\n";
// $age = $todate->diff($birthdate);
// echo $age->format("%y year,%m month,%d day")


// $variable = date( 'Y-m-d', strtotime( '+1 month' ) );
// echo "\n\nAdd one month: " . $variable;

 //echo readfile("message.txt");
 $message = fopen("message.txt","r") or die("not");
// echo $filelength;
 //exit();
// echo $message;
 // echo fread($message,$filelength);
  //close("$message");
  //echo fgets($message);
  echo fgetc($message);
  // while(!feof($message)){
   
  //   //echo fgets($message) ;
  // }
 ?>
