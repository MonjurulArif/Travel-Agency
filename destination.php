<?php
session_start();
$destination = filter_input(INPUT_POST, 'destination');
$av = 0;
    if(!empty($destination))
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "Travel_Agency";
        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error())
        {
            die('Connect Error ('.mysqli_connect_errno().')'
                .mysqli_connect_error());
        }
        else
        {
            $sql = "select Pa_Destination from package;";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
            echo "Available packages are : ";
            echo "<br>";
            $rc = $resultcheck;
            if($resultcheck>0)
            {
                while ($row = mysqli_fetch_assoc($result)) {
                    if($row['Pa_Destination']==$destination)
                         {
                            $av = 1;
                         }
                         else
                         {
                            if($av != 1)
                            {
                                $av = 0;
                            }
                            
                         }
                        echo $row['Pa_Destination'];
                        echo "<br>";
                         
                         
                }
                if($av==1)
                {
                    echo "This package is available";
                    echo "<br>";

                }
                else
                {
                    echo "This package is not available yet.";
                    echo "<br>";
                }
                if($conn->query($sql))
                {
                    echo "Query succesfull";
                }
                else
                {
                    echo "Error".$sql."<br>".$conn->error;
                }
                $conn->close();
            }
        }
    }
    else
    {
        echo "Destination should not be empty";
    }

?>
<html>
<body>
<p>You will be redirected to homepage in 6 seconds</p>
<script>
var timer = setTimeout(function() {
window.location='index.php'
}, 6000);
</script>
</body>
</html>