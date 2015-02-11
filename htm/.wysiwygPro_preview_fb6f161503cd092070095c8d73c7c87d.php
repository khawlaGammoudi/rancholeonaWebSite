<?php
if ($_GET['randomId'] != "4IlbFKGFLRHCQYmVogiGDBfUUKqvMRGHarC6Wp2owt3637Xl7IWlQeoxz8DcYKAv") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
