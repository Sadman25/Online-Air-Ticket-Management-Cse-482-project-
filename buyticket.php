<?php
 include('Connection.php');
 
session_start();
$air_id=$_POST['air_id'];
$trip_type =$_SESSION['trip_type'];
$froms=$_SESSION['from'];
$CIdate=$_SESSION['CIdate'];
$COdate=$_SESSION['COdate'];
$adult=$_SESSION['adult_no'];
$child=$_SESSION['child_no'];
$des=$_SESSION['destination'];
$selectquery = " select * from airlines WHERE id='$air_id' ";

                            

$query = mysqli_query($conn, $selectquery);
$airline= mysqli_fetch_array($query);

$air_name = $airline["airlines_name"];
$air_time= $airline["flight_time"];


$sql="insert into reservation (airlines_name,reservation_no,destination,check_in,adult,children,user_id,airlines_id,checkin_time,air_time) values ('$air_name','hjdk','$des','$froms','$adult','$child','1','$air_id','$CIdate','$air_time')";
mysqli_query($conn,$sql);
header("Location: ticket.php");

?>