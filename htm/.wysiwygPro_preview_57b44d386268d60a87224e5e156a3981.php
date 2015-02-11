<?php
if ($_GET['randomId'] != "aXWFaMzlJQpCDR94b64Z1w_tzgTWubaiIfECi_1zK68oRahw1_Np_XdtgqdSheN5") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
