<!DOCTYPE html>
<html>
<head>
	<title>
		Package info
	</title>
	<link rel="stylesheet" href="stylepkg.css">
</head>
<body>

<div class="card">
<div class="top-section">
	

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
$img1;
$img2;
$img3;
$r;
$sql2;
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
		                    
			
			$sql2 = "select Pa_ID,Pa_img1, Pa_img2, Pa_img3
			from pa_image where Pa_ID = $paID;"; 
			$r =  mysqli_query($conn,$sql2);
			$rcheck = mysqli_num_rows($r);
			if($rcheck>0)
                {
                	while ($row2 = mysqli_fetch_assoc($r)) {
                    $img1 = $row2['Pa_img1'];
                    $img2 = $row2['Pa_img2'];
                    $img3 = $row2['Pa_img3'];
                }
			}
			$conn->close();

			
?>



	<img id="image-container" src="<?php echo $img1;?>" alt="">
	<div class="nav">
	<img onclick= "change_img(this)" src="<?php echo $img1;?>">
	<img onclick= "change_img(this)" src="<?php echo $img2;?>">
	<img onclick= "change_img(this)" src="<?php echo $img3;?>">
	</div>
	</div>

<div class="product-info">
<div class="name"><?php  echo $P_Destination;?></div>
<div class="dis">
The starting location is     <b><?php  echo $P_start;?></b>.<br>
The Destination location is     <b><?php  echo $P_Destination;?></b>.<br>
Price per adult is     <b><?php echo $P_Price_Adult;?></b> taka.<br>
Price per child is     <b><?php echo $P_Price_Child;?></b> taka.<br>
The transport of choice is     <b><?php  echo $Tr_Type;?></b>.<br>
</div>
<a class="btn" href="reservation1.php?name=<?=$paID;?>">Book This Package</a>
</div>
<script type="text/javascript">
var container = document.getElementById("image-container");
function change_img(image){
	container.src = image.src;
}
</script>
</body>
</html>