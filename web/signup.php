<?php 
include 'db.php';
   
$name=mysqli_real_escape_string($conn,$_POST["name"]);     
$email=mysqli_real_escape_string($conn,$_POST["mail"]);   
$psw1=mysqli_real_escape_string($conn,$_POST["psw1"]);
$psw2=mysqli_real_escape_string($conn,$_POST["psw2"]);


$fname= explode(" ", $name);
/*$insertOneResult = $collection->insertOne(['fname' => '$fname',
        'lname' => '$lname',
        'bday' => '$bday',
        'gender' => '$gender',
        'tel_no' => '$tel_no',
        'email' => '$email',
        'psw' => '$psw']);

    $document = array( 
      "fname" => $fname,
        "lname" => $lname,
        "bday" => $bday,
        "gender" => $gender,
        "tel_no" => $tel_no,
        "email" => $email,
        "psw" => $psw
   );
	
   $collection->insertOne($document);
   echo "Document inserted successfully";*/

$finame = $fname[0];
 $lname = $fname[1];

$sql = "INSERT INTO infoP (email,psw,fname,lname)
VALUES ('$email','$psw1','$finame','$lname')";

if ($conn->query($sql) === TRUE) {
    header("Location:login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>