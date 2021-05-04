<?php 

    include('Connection.php');

    if(isset($_POST['submit'])){		  
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email' AND password ='$password'";

        $query_run = mysqli_query($conn,$query);
        if (mysqli_num_rows ($query_run) > 0) {           
            $_SESSION['email']=$email;
            header('location:successMsg.html');
        }
        else {
            echo "Login Failed..";
        }
}
mysqli_close($conn);
?>
