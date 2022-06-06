<?php 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "Travel_Agency";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error())
{
die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}
else
{
	$sql = "select Pa_ID,Pa_Start,Pa_Destination,Pa_Price_Adult,Pa_Price_Child from package;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    echo "Pa_ID Pr Adult Pr Adult <br>";
    while ($row = mysqli_fetch_assoc($result))
    {

    	echo $row['Pa_ID'];
    	echo "\t";
    	echo $row['Pa_Price_Adult'];
    	echo "\t";
    	echo $row['Pa_Price_Child'];
    	echo "\t";
    	echo "<br>";

    }
    if ($conn->query($sql))
    {
                    

    }
    else
    {
    echo "Error" . $sql . "<br />" . $conn->error;
    }
                    
    $conn->close();
        
}
?>
<!DOCTYPE html>
<html>

<body>
<a href="index.php">Get back to Homepage</a>
</body>
</html>