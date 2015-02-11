<?php
if ($_GET['randomId'] != "BLKSTsbaQtmABOOdicYjIB4SCWe3T4V16P64V39PhpgZrS01DiWLuynb2bCy8RUZ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
