<?php
//$userlist_open = fopen("userlist.txt","w");
$userlist_open = fopen("userlist.txt","a");
$username = "farhana afrin";
$pass ="1234567";
// if(fwrite($userlist_open,$username)){
//     echo "success";
// };
fwrite($userlist_open,$username);
fwrite($userlist_open,$pass);
fclose($userlist_open);

?>