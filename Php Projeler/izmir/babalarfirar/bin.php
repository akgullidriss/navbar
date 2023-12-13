<?php
session_start();
ob_start();
if(!isset($_SESSION["login"])){
header('Location:login.php');
}
if(isset($_GET['BIN'])){
  $BIN = $_GET['BIN'];
  $opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n")); 
  $context = stream_context_create($opts);
  $Site = @file_get_contents('https://lookup.binlist.net/'.$BIN,false,$context);
  $Lookup = json_decode($Site, true);
  $BankName = $Lookup["bank"]["name"];
  $Brand = $Lookup["brand"];
  $Type = $Lookup["type"];
  $Scheme = $Lookup["scheme"];
  $Currency = $Lookup["country"]["currency"];
  if($Type=='credit'){
    $Type = 'Kredi Kartı';
  }elseif($Type=='debit'){
    $Type = 'Debit Kart';
  }elseif($Type=='amex'){
    $Type=='AMEX Kart';
  }else{
    $Type=='Bilinmeyen';
  }
  ?>
<?php   
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
// Function call
function_alert("$BankName $Brand");
echo "<script>window.location.href='index.php';</script>";
?>  
  <?php
  }
  ?>