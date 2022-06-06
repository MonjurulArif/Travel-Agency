<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if(!empty($username))
{
    if(!empty($password))
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
            $sql = "select C_Name, C_Pass from customer;";
            $result = mysqli_query($conn,$sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck>0)
            {
                while ($row = mysqli_fetch_assoc($result)) {
                    if($row['C_Name']==$username && $row['C_Pass']==$password)
                         {
                            echo "Log in succesful. Redirecting to Home page";
                            header("Location: timeout.html");
                         }
                         else
                         {
                            echo "Log in unsuccesful. Redirecting to Sign in page";
                                header("Location: signin.html");
                         }
                }
            }
            if($conn->query($sql))
            {
                echo "New Record is inserted succesfully";
            }
            else
            {
                echo "Error".$sql."<br>".$conn->error;
            }
            $conn->close();
        }
    }
    else
    {
        echo "Password should not be empty";
    }
}
else
{
    echo "Username should not be empty";
}

?>
