

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link type="text/css" rel="stylesheet" href="css/ticket.css"/>
    <script src="js/moktadir.js"></script>
   

    <title>Welcome</title>
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

    <!-- body content starts from here -->
<div class="container" id="full">
    <div class="row">
        <div class="ticket">
            <div class="grid-container">
                <div class="item1">
                    <h1 style="color:green">Airline Ticket</h1>
                </div>
                <div class="item2">
                    <h3 style="color:green">Ticket#34DE2</h3>
                </div>
                
                <div class="item3">
                <?php

                include 'connection.php';

                $selectquery = " select * from reservation ORDER BY ID DESC LIMIT 1 ";
               $query = mysqli_query($conn, $selectquery);
              while($res = mysqli_fetch_array($query)){   
                ?>
             <h3>Date:<?php echo $res['checkin_time'];?></h3>
             <?php
             }
             ?>
                </div>
                <div class="item4">
                <?php

                  include 'connection.php';

                  $selectquery = " select * from reservation ORDER BY ID DESC LIMIT 1 ";
                   $query = mysqli_query($conn, $selectquery);
                  while($res = mysqli_fetch_array($query)){   
                  ?>
                   <h3>Time:<?php echo $res['air_time'];?></h3>
                  <?php
                  }
                  ?>
                </div>
                <div class="item5">
                   <?php

                   include 'connection.php';

                   $selectquery = " select * from users ORDER BY ID DESC LIMIT 1 ";
                   $query = mysqli_query($conn, $selectquery);
                   while($res = mysqli_fetch_array($query)){   
                   ?>
                   <h3>Name:<?php echo $res['username']; ?></h3>
                   <?php
                   }
                   ?>
                </div>
                
                <div class="item7">
                   <?php

                  include 'connection.php';

                  $selectquery = " select * from reservation ORDER BY ID DESC LIMIT 1 ";
                  $query = mysqli_query($conn, $selectquery);
                  while($res = mysqli_fetch_array($query)){   
                  ?>
                  <h3>From:<?php echo $res['check_in']; ?></h3>
                  <?php
                  }
                  ?>
                </div>
                <div class="item8">
                   <?php

                   include 'connection.php';

                   $selectquery = " select * from reservation ORDER BY ID DESC LIMIT 1 ";
                   $query = mysqli_query($conn, $selectquery);
                    while($res = mysqli_fetch_array($query)){   
                   ?>
                  <h3>Destination:<?php echo $res['destination']; ?></h3>
                  <?php
                   }
                   ?>
                </div>
                <div class="item9">
                    <?php

                    include 'connection.php';

                     $selectquery = " select * from reservation ORDER BY ID DESC LIMIT 1 ";
                     $query = mysqli_query($conn, $selectquery);
                     while($res = mysqli_fetch_array($query)){   
                     ?>
                     <h3>Passenger(Adult):<?php echo $res['adult'];?></h3>
                     <?php
                      }
                     ?>
                </div>
                <div class="item6">
                    <?php

                    include 'connection.php';

                     $selectquery = " select * from reservation ORDER BY ID DESC LIMIT 1 ";
                     $query = mysqli_query($conn, $selectquery);
                     while($res = mysqli_fetch_array($query)){   
                     ?>
                     <h3>Passenger(Children):<?php echo $res['children'];?></h3>
                     <?php
                      }
                     ?>
                </div>
                <div class="item10">
                  <?php

                  include 'connection.php';

                  $selectquery = " select * from users ORDER BY ID DESC LIMIT 1 ";
                  $query = mysqli_query($conn, $selectquery);
                  while($res = mysqli_fetch_array($query)){   
                  ?>
                 <h3>Phone:<?php echo $res['phone_number']; ?></h3>
                 <?php
                  }
                 ?>
                </div>
               
          </div>
        </div>
        
    </div>
</div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>