<?php  
//  if(isset($_POST["submit"]))  
//  {  
//       $output = '';  
//       $connect = mysqli_connect("localhost", "root", "", "reservation");  
//       $query = "SELECT * FROM airlines WHERE destination = '".$_POST["destination"]."'";  
//       $result = mysqli_query($connect, $query);  
//       $output .= '  
//       <div class="table-responsive">  
//            <table class="table table-bordered">';  
//       while($row = mysqli_fetch_array($result))  
//       {  
//            $output .= '  
//                 <tr>  
//                      <td width="30%"><label>Name</label></td>  
//                      <td width="70%">'.$row["airlines_name"].'</td>  
//                 </tr>  
//                 <tr>  
//                      <td width="30%"><label>Address</label></td>  
//                      <td width="70%">'.$row["flight_time"].'</td>  
//                 </tr>  
//                 <tr>  
//                      <td width="30%"><label>Gender</label></td>  
//                      <td width="70%">'.$row["fare"].'</td>  
//                 </tr>  
//                 <tr>  
//                      <td width="30%"><label>Designation</label></td>  
//                      <td width="70%">'.$row["destination"].'</td>  
//                 </tr>  
//                 <tr>  
//                      <td width="30%"><label>Age</label></td>  
//                      <td width="70%">'.$row["from"].'</td>  
//                 </tr>  
//                 ';  
//       }  
//       $output .= "</table></div>";  
//       echo $output;  
//  }  
 ?>
<?php

include('Connection.php');
// $conn = mysqli_connect("localhost", "root", "", "reservation");
if(isset($destination)){
    echo "variable set";
}
else
    $dest=$_POST['destination'];

// $query="select * from airlines where destination='$destination'";
$query = "SELECT * FROM airlines WHERE destination = '".$dest."'";  
$result=mysqli_query($conn,$query);
$count= mysqli_num_rows($result);

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
    <h5><?php echo $rows_count_tickets['from'];?></h5>
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
<?php
    }
}
?>

?>