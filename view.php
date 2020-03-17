
<?php
$title = 'Login';

//include header template
include 'header.php';


?>
<link rel="stylesheet" href="css/style.css">

<main class="view">
<h2> Hi <?php echo $_SESSION["user"];?> Here are you bookings.<center>
<?php
        
            include("db_connect.php");

            $curruser=$_SESSION['user'];
            $sql = mysqli_query($conn,"select * from bookings where username='$curruser'");
   
            echo "<table >";
            echo "<tr>";
            echo "<th>Booking Id</th>";

            echo "<th>Source</th>";
            echo "<th>Destination</th>";

            echo "<th>On date</th>";
            echo "<th>Class</th>";
            echo "<th>Airlines</th>";

            echo "</tr>";
          
            
           
 
while($row = mysqli_fetch_array($sql))
{


echo "<tr>";
echo "<td>" . $row['booking_id'] ."</td>";
echo "<td>" . $row['source'] ."</td>";
echo "<td>" . $row['destination'] ."</td>";
echo "<td>" . $row['fromdate'] ."</td>";
echo "<td>" . $row['class'] ."</td>";
echo "<td>" . $row['flight'] ."</td>";

echo "</tr>";


}
echo "</table>";
    
        ?>
        </center>
        </main>