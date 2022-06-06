<?php 
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Travel_Agency";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$paID = $_GET["name"];
$P_start;
$P_Destination;
$P_Price_Adult;
$P_Price_Child;
$Tr_Type;
$sql = "select Pa_Start, Pa_Destination, Pa_Price_Adult, Pa_Price_Child,T_Type
 	from package p, transport t
 	where Pa_ID = $paID and p.T_ID = t.T_ID;";
 	$result = mysqli_query($conn,$sql);
                $resultcheck = mysqli_num_rows($result);
                if($resultcheck>0)
                {
                	while ($row = mysqli_fetch_assoc($result)) {
                    $P_start = $row['Pa_Start'];
                    $P_Destination = $row['Pa_Destination'];
                    $P_Price_Adult = $row['Pa_Price_Adult'];
                    $P_Price_Child = $row['Pa_Price_Child'];
                    $Tr_Type = $row['T_Type'];
                }
            }
            if ($conn->query($sql))
		    {
		                    

		    }
		    else
		    {
		    echo "Error" . $sql . "<br />" . $conn->error;
		    }
		                    
		    $conn->close();
?>
<!DOCTYPE html>
<html>
<body>
	<p>The starting location is <b><?php  echo $P_start;?></b></p>
	<p>TThe Destination location is <b><?php  echo $P_Destination;?></b></p>
	<p>Price per adult is  <b><?php echo $P_Price_Adult;?></b></p>	
	<p>Price per child is  <b><?php echo $P_Price_Child;?></b></p>
	<p>The transport of choice is <b><?php  echo $Tr_Type;?></b></p>
	<a href="reservation1.php?name=<?=$paID;?>">I Confirm!</a>
</body>
</html>