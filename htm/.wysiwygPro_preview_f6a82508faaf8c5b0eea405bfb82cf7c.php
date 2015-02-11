<?php
if ($_GET['randomId'] != "0UJYSYcHI2RRxkwyJ0ozS4KPbdRYEXtEbY2UyH16NXLNFZ4wRjJ9X5YSNkHY_QWd") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
