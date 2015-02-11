<?php
if ($_GET['randomId'] != "riBh4bLTsiOw9zOo9SaELxN1M9b40fNX5S4_couYmA0bsQR_RNdaLDfFGsgbrk_h") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
