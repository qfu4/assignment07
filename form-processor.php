

<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "kfang2@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = $_POST['email'];
$subject = "Queens-Foodie";
// $txt = "Dear,";


// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY...

// these are from the text INPUT fields...
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$address = Trim(stripslashes($_POST['address'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
// $_____________ = $_POST['_____________']; 
// $_____________ = $_POST['_____________']; 
// $_____________ = $_POST['_____________']; 
// $_____________ = $_POST['_____________']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$favorite = $_POST['favorite']; 
// notice: no matter how many radio buttons, there's only one answer

// // this is from the TEXTAREA field...
// $_____________ = Trim(stripslashes($_POST['_____________'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

// $body = "Information"; // initialize the variable, then start concatenating
//             // backslash-n means new-line in emails

$body .= "Dear "; //...a label
$body .= $name;      //...a variable
$body .= ",\n\n";              //...a new line
$body .= "Thank you for filling up this survey!\n";
$body .= "This is a confirmation email from "; //...a label
$body .= $subject;      //...a variable
$body .= ".\n\n";              //...a new line
$body .= "Bon appétit!\n\n";  
 //...a label
// $body .= $address;      //...a variable             //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
// $body .= "_____________: \n";       // a heading for your checkbox section

// if (isset($_____________)) {        // a checkbox variable
//     $body .= $_____________ . "\n"; // the same checkbox variable
// }
// if (isset($_____________)) {        // a checkbox variable
//     $body .= $_____________ . "\n"; // the same checkbox variable
// }
// if (isset($_____________)) {        // a checkbox variable
//     $body .= $_____________ . "\n"; // the same checkbox variable
// }
// if (isset($_____________)) {        // a checkbox variable
//     $body .= $_____________ . "\n"; // the same checkbox variable
// }
// $body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
// $body .= "Have you ever heard of Michelin restaurant guides before?: \n";       // a heading for your radio button section
// $body .= $favorite1;            // the (one) radio button variable
// $body .= "\n\n";

// $body .= "Do you consider yourself as a foodie?: \n";       // a heading for your radio button section
// $body .= $favorite2;            // the (one) radio button variable
// $body .= "\n\n";

// $body .= "After reviewing our introduction, do you think Michelin restaurant guide is reliable or not?: \n";       // a heading for your radio button section
// $body .= $favorite3;            // the (one) radio button variable
// $body .= "\n\n";

// $body .= "Will you try a Michelin restaurant in the future?: \n";       // a heading for your radio button section
// $body .= $favorite4;            // the (one) radio button variable
// $body .= "\n\n";

// $body .= "On scale of 0 ~ 5, how helpful do you think our website is?: \n";       // a heading for your radio button section
// $body .= $score5;            // the (one) radio button variable
// $body .= "\n\n";


// This is for your TEXTAREA
// $body .= "_____________: \n";       // a heading for your text area
// $body .= $_____________;            // the variable for your text area
// $body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
     SECTION FOUR: thank the user in HTML;
     Below, there needs to be an HTML 
     webpage with a customized message 
     for the user
     ********************************** -->

<?php

include "inc/html-top.inc";
?>


<main class= "full-width">

	 <h2>Thank You! Bon appétit.<?php echo $name; ?></h2>
  <p>Go back to <a href="survey.php">the survey</a>.</p>

</main>




</body>

</html>