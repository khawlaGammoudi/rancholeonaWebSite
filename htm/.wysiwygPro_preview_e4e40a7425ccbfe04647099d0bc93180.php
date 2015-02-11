<?php
if ($_GET['randomId'] != "7VySOgMVgyMd589yNFEGGO2RZrA22ZQg0m38FY7llaId3VggfIrgC3vL9DJ0PA3X") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
