<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "magleona@gmail.com";
 
    $email_subject = "Rancholeona";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments']) ||
		!isset($_POST['Street']) ||
!isset($_POST['Address']) ||
!isset($_POST['City']) ||
!isset($_POST['State']) ||
!isset($_POST['Zip']) ||
!isset($_POST['Country']) ||
!isset($_POST['Work_Phone']) ||
!isset($_POST['Home_Phone']) ||
!isset($_POST['FAX']) ||
!isset($_POST['How_Did_You']) ||
!isset($_POST['Hear_About_Us']) ||
!isset($_POST['When_Would_You']) ||
!isset($_POST['Like_To_Arrive']) ||
!isset($_POST['When_Do_You']) ||
!isset($_POST['Plan_To_Depart']) ||
!isset($_POST['How_Many_People']) ||
!isset($_POST['In_Your_Group']) ||

		!isset($_POST['Organization'])){//-----------------------------------------------------------------------------------------------------------------
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     $Organization= $_POST['Organization'];//-------------------------------------------------------------------------------------------------------------
$Street= $_POST['Street'];
$Address= $_POST['Address'];
$City =$_POST['City'];
$State =$_POST['State'];
$Zip =$_POST['Zip'];
$Country =$_POST['Country'];
$Work_Phone =$_POST['Work_Phone'];
$Home_Phone =$_POST['Home_Phone'];
$FAX =$_POST['FAX'];
$How_Did_You =$_POST['How_Did_You'];
$Hear_About_Us= $_POST['Hear_About_Us'];
$When_Would_You= $_POST['When_Would_You'];
$Like_To_Arrive =$_POST['Like_To_Arrive'];
$When_Do_You =$_POST['When_Do_You'];
$Plan_To_Depart= $_POST['Plan_To_Depart'];
$How_Many_People= $_POST['How_Many_People'];
$In_Your_Group =$_POST['In_Your_Group'];
$Rafting=$_POST['Rafting'];
$float_trip=$_POST['float_trip'];
$kayak_lessons=$_POST['kayak_lessons'];
$Bird_Watching=$_POST['Bird_Watching'];
$other=$_POST['other'];
$lodging=$_POST['lodging'];
$kayaking=$_POST['kayaking'];
$web_search=$_POST['web_search'];
$guide_book=$_POST['guide_book'];
$Friend=$_POST['Friend'];
$other0=$_POST['other0'];


    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
    $email_message .= "Organization: ".clean_string($Organization)."\n";//----------------------------------------------------------------------------

$email_message .= "Street: ".clean_string($Street)."\n";
$email_message .= "Address: ".clean_string($Address)."\n";
$email_message .= "City: ".clean_string($City)."\n";
$email_message .= "State: ".clean_string($State)."\n";
$email_message .= "Zip: ".clean_string($Zip)."\n";
$email_message .= "Country: ".clean_string($Country)."\n";
$email_message .= "Work_Phone: ".clean_string($Work_Phone)."\n";
$email_message .= "Home_Phone: ".clean_string($Home_Phone)."\n";
$email_message .= "FAX: ".clean_string($FAX)."\n";
$email_message .= "How_Did_You: ".clean_string($How_Did_You)."\n";
$email_message .= "Hear_About_Us: ".clean_string($Hear_About_Us)."\n";
$email_message .= "When_Would_You: ".clean_string($When_Would_You)."\n";
$email_message .= "Like_To_Arrive: ".clean_string($Like_To_Arrive)."\n";
$email_message .= "When_Do_You: ".clean_string($When_Do_You)."\n";
$email_message .= "Plan_To_Depart: ".clean_string($Plan_To_Depart)."\n";
$email_message .= "How_Many_People: ".clean_string($How_Many_People)."\n";
$email_message .= "In_Your_Group: ".clean_string($In_Your_Group)."\n";
$email_message .= "Rafting: ".clean_string($Rafting)."\n";
$email_message .= "Float trip: ".clean_string($float_trip)."\n";
$email_message .= "Kayak lessons: ".clean_string($kayak_lessons)."\n";
$email_message .= "Bird Watching: ".clean_string($Bird_Watching)."\n";
$email_message .= "Other: ".clean_string($other)."\n";
$email_message .= "Lodging: ".clean_string($lodging)."\n";
$email_message .= "Kayaking: ".clean_string($kayaking)."\n";
$email_message .= "Web search: ".clean_string($web_search)."\n";
$email_message .= "Guide book: ".clean_string($guide_book)."\n";
$email_message .= "Friend: ".clean_string($Friend)."\n";
$email_message .= "Other: ".clean_string($other0)."\n";

 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>