<?php
session_start();
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$c_id = filter_input(INPUT_POST, 'c_id');
$c_ph = filter_input(INPUT_POST, 'c_ph');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');
$experience = filter_input(INPUT_POST, 'experience');
if(!empty($username))
{
    if(!empty($address))
    {
        if(!empty($c_ph))
        {
            if(!empty($email))
            {
                if(!empty($experience))
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
                            $sql = "Insert into customer(C_Name,Address,C_Ph_Number,Email,Exp,C_Pass)
                                   values('$username','$address','$c_ph','$email','$experience','$password')";

                            if($conn->query($sql))
                            {
                                echo "Sign Up successfull.";
                                header("Location: timeoutup2in.html");
                                echo $c_id;
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
                    echo "Experience should not be empty";
                }

            }
            else
            {
                echo "Email should not be empty";
            }
        }
        else
        {
            echo "Phone Number should not be empty";
        }
    }
    else
    {
        echo "Address should not be empty";
    }
}
else
{
    echo "Username should not be empty";
}


?>
