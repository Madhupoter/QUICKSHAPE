<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "connect@quickshape.net";
    $subject = "Career Application for " . $_POST['position'];
    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Position: " . $_POST['position'] . "\n";
    $message .= "Cover Letter:\n" . $_POST['message'];

    // File upload handling
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['resume']['tmp_name'];
        $resume_name = $_FILES['resume']['name'];
        move_uploaded_file($tmp_name, "resumes/" . $resume_name);
        $message .= "\n\nResume: " . "https://quickshape.net/resumes/" . $resume_name;
    }

    // Additional headers
    $headers = "From: " . $_POST['email'] . "\r\n";

    // Send email
    if (mail($to_email, $subject, $message, $headers)) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Career Form Submitted Successfully, We Will Contact You Shortly')
				window.location.href='https://quickshape.net';
				</SCRIPT>");
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>