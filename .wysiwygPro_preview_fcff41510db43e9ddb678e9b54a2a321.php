<?php
if ($_GET['randomId'] != "2iCilELd47Jr_Sbq0hPa711SLJbb9RkH9TdhFYbX3vWgRIwZBd8aNjpchMQ6_5vr") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
