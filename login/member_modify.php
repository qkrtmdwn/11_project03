<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php 
  include "../include/define.php";
    
  $id   = $_GET["id"]; 

  $pass = $_POST["pass"]; 
  $name = $_POST["name"]; 
  $email1  = $_POST["email1"]; 
  $email2  = $_POST["email2"];
  
  $email = $email1."@".$email2; 
  
  $con = mysqli_connect(DBhost, DBuser, DBpass, DBname);
  $sql = "update members set pass='$pass', name='$name', email='$email'"; 
  $sql .= "where id='$id'";
  
  mysqli_query($con, $sql); 
  mysqli_close($con);
  
  echo " 
      <script>   
          location.href = '../main/index.php';
          //location.href = '../index.php'; 
      </script> 
  "; 
?>      