<?php
if ($_GET['randomId'] != "CduKAUt6_1TODyKZ7BvR5W1bZN5W9ESFcYrn_y5WcziV4rNSPajLC0yYiYJbD_9S") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
