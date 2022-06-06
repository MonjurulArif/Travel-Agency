
<?php 
session_start();
 ?>
<html>
    <body>
    <p>Sign in first</p>
    <p>You will be redirected to sign in page in 3 seconds</p>
    <script>
        var timer = setTimeout(function() {
            window.location='signin1.php'
        }, 3000);
    </script>
</body>
</html>