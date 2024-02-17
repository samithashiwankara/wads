<?php
 $email=$_POST['email'];
 $password=$_POST['pwd'];

 $conn=new mysqli('localhost','root','','grocerydb');
 if($conn ->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }
  else{
      $stmt=$conn->prepare("select * from registraion where email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result=$stmt->get_result();
      if($stmt_result->num_rows > 0)
      {
          $data=$stmt_result->fetch_assoc();
          if($data['password']=== $password)
          {
             header('location:/index.php');
          }
          else{
            header('location:/Login.html');
          }
      }
      else{
        header('location:/Login.html');
      }

    }





?>