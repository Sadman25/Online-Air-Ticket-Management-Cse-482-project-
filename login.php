<?php 

    include('Connection.php');
     session_start();
     

if(isset($_POST['submit']))
{
      
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query ="SELECT * FROM users WHERE email = '$email' AND password ='$password' ";

  $query_run = mysqli_query($conn,$query);

  if (mysqli_num_rows ($query_run) > 0)
  {

    

    $sql ="SELECT * FROM users WHERE email='$email' AND password ='$password'";
    $query_run = mysqli_query($conn,$sql);

    if (mysqli_num_rows($query_run) > 0)
    {
	
      $sql1 ="SELECT * FROM users WHERE email = '$email' AND password ='$password'";
      $query_run = mysqli_query($conn,$sql1);
      
      if (mysqli_num_rows($query_run) > 0) 
      {		  
        $result= mysqli_fetch_array($query_run);
        
        $userID = $result['id'];
        $loggedIn = 1; 
        
        
        $_SESSION['userID'] = $userID;
        $_SESSION['loggedIn'] = $loggedIn;
        echo "<script> location.href='Homepage.php'; </script>";
      }
      else
      {
        echo '<script type="text/javascript"> alert ("Login Error")</script>';
      }
    }
    else
    {
      echo '<script type="text/javascript"> alert ("Please Verify your email")</script>';
    }
  }
  else {
    echo '<script type="text/javascript"> alert ("Invalid Login Info")</script>';
  }

}
?>
//     if(isset($_POST['submit'])){		  
//         $email=$_POST['email'];
//         $password=$_POST['password'];

//         $query = "SELECT * FROM users WHERE email = '$email' AND password ='$password'";

//         $query_run = mysqli_query($conn,$query);
//         // if (mysqli_num_rows ($query_run) > 0) {           
                      
//         //     header('location:homepage.html');
//         // }
//         // else {
//         //     echo "Login Failed..";
//         // }

//     if (mysqli_num_rows($query_run) > 0)
//     {
	
//       $sql1 ="SELECT * FROM users WHERE email = '$email' ";
//       $query_run = mysqli_query($con,$sql1);
      
//       if (mysqli_num_rows($query_run) > 0) 
//       {		  
//         $result= mysqli_fetch_array($query_run);
        
//         $userID = $result['uniqueId'];
//         $loggedIn = 1; 
        
        
//         $_SESSION['userID'] = $userID;
//         $_SESSION['loggedIn'] = $loggedIn;
//         echo "<script> location.href='UserProfile.php'; </script>";
//       }
//       else
//       {
//         echo '<script type="text/javascript"> alert ("Login Error")</script>';
//       }
//     }
//     else
//     {
//       echo '<script type="text/javascript"> alert ("Please Verify your email")</script>';
//     }
//   }
//   else {
//     echo '<script type="text/javascript"> alert ("Invalid Login Info")</script>';
//   }
// }
// mysqli_close($conn);
<<<<<<< HEAD
 ?>
=======
 ?>
>>>>>>> 8aff1c086ddf9f2ff25093e0c10eb8ae53367c68
