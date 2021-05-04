<?php 

    include('Connection.php');

    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $email = $_POST['email'];
        $contact =$_POST['contact'];
        $password=$_POST['password']; 


    $query= "INSERT INTO users (username,email,phone_number,password) VALUES( '{$username}', '{$email}' , '{$contact}', '{$password}');"; 


    $performQuery= mysqli_query($conn, $query); 

    if(!$performQuery)
        echo 'Query Unsuccesful';
    else
        header('location:successMsg.html');

    $insertedId=mysqli_insert_id($conn);
        
} 
?>
