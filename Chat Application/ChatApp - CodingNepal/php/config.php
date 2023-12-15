<?php
 /*header('Content-Type: text/html; charset=utf-8');
  $hostname = "sql202.unaux.com";
  $username = "unaux_34446466";
  $password = "qn5nib281";
  $dbname = "unaux_34446466_codedverse";
  mysqli_set_charset($conn, "utf8");

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
 }*/
  
 /*   header('Content-Type: text/html; charset=utf-8');
    $hostname = "sql203.infinityfree.com";
    $username = "if0_34442633";
    $password = "Q1K4qVhyY3HpzCw";
    $dbname = "if0_34442633_codedverse";
    mysqli_set_charset($conn, "utf8");
  
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$conn){
      echo "Database connection error".mysqli_connect_error();
    }
*/

header('Content-Type: text/html; charset=utf-8');
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chatapp";
   
  
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$conn){
      echo "Database connection error".mysqli_connect_error();
    }

?>
