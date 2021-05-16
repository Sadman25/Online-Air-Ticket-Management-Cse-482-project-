<?php
        include('Connection.php');
// if(isset($_POST['submit'])){
    // $trip_type =$_POST['trip_type'];
    // $from=$_POST['from'];
    // $CIdate=$_POST['CIdate'];
    // $COdate=$_POST['COdate'];
    // $adult_no=$_POST['adult_no'];
    // $child_no=$_POST['child_no'];
    //  $air_id=$rows_count_tickets['id'];
    //     $query1="INSERT INTO temp_data (trip_type,CIdate,COdate,adult,child,air_id) VALUES 
    //     ('{$trip_type}','{$CIdate}','{$COdate}','{$adult_no}','{$child_no}','{$air_id}');";

    //     $performQuery=mysqli_query($conn, $query1);

// }
  

    session_start();
    $air_id=$_POST['air_id'];
    $trip_type =$_SESSION['trip_type'];
    $froms=$_SESSION['from'];
    $CIdate=$_SESSION['CIdate'];
    $COdate=$_SESSION['COdate'];
    
    echo $CIdate;
    echo ($froms);
    echo ($air_id);

   
     ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link type="text/css" rel="stylesheet" href="css/payment.css"/>
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
        <div class="payment-details">
            <h1 style="text-align: center;">Payment Details</h1>
            <div class="details">
                <table>
                    <tr>
                        <td>
                            <h3 style="font-size:20px;"> Fare:</h3>
                        </td>

                        <?php

                            include 'connection.php';

                            $selectquery = " select * from reservation ORDER BY ID DESC LIMIT 1 ";
                            

                            $query = mysqli_query($conn, $selectquery);

                            

                            while($res = mysqli_fetch_array($query)){
                                 
                                ?>

                            <td>
                                <h3 style="font-size:20px;"><?php echo $res['adult']; ?> X BDT 4500</h3>
                            </td>
                              
                          <?php
                           }


                            ?>
                        
                    </tr>
                    <tr>
                        <td>
                            <h3 style="font-size:20px;"> +Service Charge:</h3>
                        </td>
                        <td>
                            <h3 style="font-size:20px;">BDT 60.0</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 style="font-size:20px;">+ Insurance Fee:</h3>
                        </td>
                        <td>
                            <h3 style="font-size:20px;">BDT 0.0</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 style="font-size:20px;">- Discount:</h3>
                        </td>
                        <td>
                            <h3 style="font-size:20px;">  BDT 0.0</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 style="font-size:20px;">Grand Total:</h3>
                        </td>
                        <td>
                            <h3 style="font-size:20px;">BDT 4560.0</h3>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-4" id="form">
            <div class="container-payment">

                <form>
                <h1>Confirm Your Payment</h1>
                <div class="first-row">
                    <div class="owner">
                        <h3 style="font-size:20px;">Owner</h3>
                        <div class="input-field">
                            <input type="text" required="">
                        </div>
                    </div>
                    <div class="cvv">
                        <h3 style="font-size:20px;">CVV</h3>
                        <div class="input-field">
                            <input type="password" required="">
                        </div>
                    </div>
                </div>

                <div class="second-row">
                    <div class="card-number">
                        <h3 style="font-size:20px;">Card Number</h3>
                        <div class="input-field">
                            <input type="number" required="">
                        </div>
                    </div>
                </div>

                <div class="third-row">
                    <h3 style="font-size:20px;">Expiry Date</h3>
                    <div class="selection">
                        <div class="date">
                            <select name="months" id="months" style="border-radius: 6px;">
                                <option value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option value="Mar">Mar</option>
                                <option value="Apr">Apr</option>
                                <option value="May">May</option>
                                <option value="Jun">Jun</option>
                                <option value="Jul">Jul</option>
                                <option value="Aug">Aug</option>
                                <option value="Sep">Sep</option>
                                <option value="Oct">Oct</option>
                                <option value="Nov">Nov</option>
                                <option value="Dec">Dec</option>
                              </select>
                              <select name="years" id="years" style="border-radius: 6px;">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2024</option>
                                <option value="2024">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                              </select>
                        </div>
                        <div class="cards">
                            <img src="images/mc.png" alt="">
                            <img src="images/vi.png" alt="">
                            <img src="images/pp.png" alt="">
                        </div>
                    </div>    
                        <a href="https://www.google.com/search?q=the+planets+2019&sxsrf=ALeKk02vWWKNBPRzx_u-NLUNmpb1ErtsLg%3A1620281325088&ei=7YeTYJz2BM-6rQGhzLrAAQ&gs_ssp=eJzj4tVP1zc0zDAuMsiwKDM3YPQSKMlIVSjIScxLLSlWMDIwtAQAoVQJmA&oq=the+planets+&gs_lcp=Cgdnd3Mtd2l6EAMYATIECAAQQzIECC4QQzIECC4QQzICCAAyAggAMgIILjICCAAyAggAMgIIADICCAA6BwgAEEcQsAM6BwgAELADEEM6CgguELADEMgDEENKBQg4EgExUKsdWKsdYI02aAFwAngAgAGvAYgBzgKSAQMwLjKYAQCgAQGqAQdnd3Mtd2l6yAEPwAEB&sclient=gws-wiz">
                             <button type="submit">Confirm</button>
                        </a>

                        
               </div>
               </form>
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

