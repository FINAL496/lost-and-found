<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lostOrFound = $_POST["lost_or_found"];
    $rrnNo = $_POST["number"];
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $description = $_POST["description"];
    
    // Notify the operator (change this to the operator's email address)
    $to = "finalstrike496@gmail.com"; // Replace with the operator's email address
    $subject = "Lost and Found Report";
    $message = "A new report has been submitted for verification:\n\n"
             . "Lost/Found: $lostOrFound\n"
             . "RRN No: $rrnNo\n"
             . "Name: $name\n"
             . "Contact: $contact\n"
             . "Description: $description";
    $headers = "finalstrike496@gmail.com"; // Replace with your website's email address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Response recorded. The operator has been notified for verification. Thank you!";
    } else {
        echo "Failed to send the email. Please try again later.";
    }
}
?>
