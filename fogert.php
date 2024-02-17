<?php

$email=$_POST['email'];
$nwpassword=$_POST['nwpwd'];
$renewpass=$_POST['re-nwpwd'];

$conn=new mysqli('localhost','root','','grocerydb');
 if($conn ->connect_error){
     die('Connection Failed :'.$conn->connect_error);
   }
 else{
     $stmt= $conn ->prepare("update registraion set password = ?,repeatpassword=? where email=?");
     $stmt->bind_param("sss",$nwpassword,$renewpass,$email);
     $stmt->execute();
     header('location:/index.php');
     $stmt->close(); 
     $conn->close();
      
 }
}
?>

 