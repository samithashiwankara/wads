<?php 

$Name =$_POST['Name'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$RepeatPassword=$_POST['Repwd'];

$conn=new mysqli('localhost','root','','grocerydb');
 if($conn ->connect_error){
     die('Connection Failed :'.$conn->connect_error);
   }
 else{
     $stmt= $conn ->prepare("insert into registraion(name,email,password,repeatpassword )values(?,?,?,?)");
     $stmt->bind_param("ssss",$Name,$email,$password,$RepeatPassword);
     $stmt->execute();
     header('location:/index.php');
     $stmt->close(); 
     $conn->close();
      
 }
?>