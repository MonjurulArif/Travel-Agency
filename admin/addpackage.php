<?php
session_start();
$pa_name = filter_input(INPUT_POST, 'pa_name');
$pa_img = filter_input(INPUT_POST, 'pa_img');
$pa_start = filter_input(INPUT_POST, 'pa_start');
$pa_dest = filter_input(INPUT_POST, 'pa_dest');
$pr_adult = filter_input(INPUT_POST, 'pr_adult');
$pr_child = filter_input(INPUT_POST, 'pr_child');
$t_id = filter_input(INPUT_POST, 't_id');
$seat_left = filter_input(INPUT_POST, 'seat_left');
if(!empty($pa_name))
{
    if(!empty($address))
    {
        if(!empty($pa_img))
        {
            if(!empty($pa_start))
            {
                if(!empty($pa_dest))
                {
                    if(!empty($pr_adult))
                    {
                        if(!empty($pr_child))
                        {
                            if(!empty($t_id))
                                {
                                    if(!empty($seat_left))
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
                            $sql1 = "select C_ID from customer;";
                            $result = mysqli_query($conn,$sql1);
                            $resultcheck = mysqli_num_rows($result);
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
                                }
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
