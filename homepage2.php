<?php 
    include('Connection.php');
    // $dest=$_POST['destination'];
    
   




    $dest = isset($_POST['destination']) ? $_POST['destination'] : "";
    $from= isset($_POST['from']) ? $_POST['from'] : "";
    // $query="select * from airlines where destination='$destination'";
    $query = "SELECT * FROM airlines WHERE destination = '".$dest."' AND depart = '".$from."'";  
    $result=mysqli_query($conn,$query);
    $count= mysqli_num_rows($result);

    session_start();

    $_SESSION['trip_type'] =$_POST['trip_type'];
    $_SESSION['from']=$_POST['from'];
    $_SESSION['CIdate']=$_POST['CIdate'];
    $_SESSION['COdate']=$_POST['COdate'];
    $_SESSION['adult_no']=$_POST['adult_no'];
    $_SESSION['child_no']=$_POST['child_no'];
   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/homepage.css"/>
    <script src="js/moktadir.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


    <script>


    </script>
</head>
<body> 
    
        <div class="row" >
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" width="30" height="30" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="homepage.html">Home </a>
                        <a class="nav-item nav-link" href="profile.html">Profile</a>
                        <a class="nav-item nav-link" href="#">Contacts</a>
                        <a class="nav-item nav-link" href="login.html">Log Out</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <div class="container" id="full">
        
        <div class="row">
            <div class="container p-3 my-3 bg-white text-black" style="color:black">
            <?php 
                                            if($count > 0){
                                                while($rows_count_tickets = mysqli_fetch_array($result)){
                                        ?>
                                            <div style="display: inline-block;" class="col-md-2">
                                            <h3>Destination</h3>
                                           
                                                <h5><?php echo $rows_count_tickets['destination'];?></h5>
                                            </div>
                                            <div style="display: inline-block;" class="col-md-2">
                                                <h3>From</h3>
                                                <h5><?php echo $rows_count_tickets['depart'];?></h5>
                                            </div>
                                            <div style="display: inline-block;" class="col-md-2">
                                            <h3>Time</h3>
                                            <h5><?php echo $rows_count_tickets['flight_time'];?></h5>
                                            </div>
                                            <div style="display: inline-block;" class="col-md-2">
                                                <h3>Seat Available</h3>
                                                <h5><?php echo $rows_count_tickets['total_seat'];?></h5>
                                            </div>
                                            <div style="display: inline-block;" class="col-md-2">
                                                <h3>Fare</h3>
                                                <h5><?php echo $rows_count_tickets['fare'];?></h5>
                                            </div>
                                       
                                        <form action="payment.php" method="post">
                                        <input type="hidden" name="air_id" value="<?php echo $rows_count_tickets['id'];?>">
                                            <button type="submit" class="btn btn-primary">Buy it</button>
                                        </form>
                                      
                               
                                        <?php
                                                }
                                            }
                                        ?>
                </div>
            </div>
         
            
        </div>
    </div>
    <script>
        
    </script>

    
    



<script src="js/moktadir.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

