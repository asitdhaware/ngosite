<?php 


$phone= $_POST["user"];   
$psw=$_POST["pass"];  
//echo $phone;
//echo $psw;
require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;



// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/ngocc-bd7a3-b2cd0f0169e4.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$database = $firebase->getDatabase();

#die(print_r($database));

$reference = $database->getReference('Ngo/personinfo/'.$phone);

$snapshot = $reference->getSnapshot();

$value = $snapshot->getValue();
//echo 'firebase';
//echo $value['password'];

if ($value['password']==$psw) {

        $_SESSION["phone"] = $phone;
        header("Location:post.html");
    
    //echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
    
}
else {
    echo " LOGIN FAILED!!! ";
    
?> <html><a href="login.html">click here to go back!</a></html> <?php
}



//$cursor = $collection->findOne("email"=>$email);
	
  /* foreach ($cursor as $document) {
      $pass=$document["psw"];}
if($psw!=$pass){
    echo("login failed");
header("login.html")  ;  
}
else{
    $_SESSION["email"] = $email;
    header("blog.html");}
   */


?>