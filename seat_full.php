<?php 
session_start();
echo "Sorry! We don't have that many seats left";
 ?>

<html>
<body>
<p>You will be redirected in 3 seconds</p>
<script>
    var timer = setTimeout(function() {
        window.location='index.php'
    }, 3000);
</script>
</body>
</html>