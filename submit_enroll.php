<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer
require __DIR__ . '/../PHPMailer-master/src/Exception.php';
require __DIR__ . '/../PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $full_name   = $_POST['full_name'];
    $email       = $_POST['email'];
    $contact     = $_POST['contact'];
    $city        = $_POST['city'];
    $course_name = $_POST['course_name'];

    // Gmail credentials
    $adminEmail = "aanunm2005@gmail.com";       // Your Gmail
    $adminPassword = "oijzayajwwgqqenp";       // App Password

    $mail = new PHPMailer(true);
    try {
        // SMTP config
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $adminEmail;
        $mail->Password = $adminPassword;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender & recipient
        $mail->setFrom($adminEmail, 'Course Enrollment');
        $mail->addAddress($adminEmail); // send to yourself

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Enrollment for $course_name";
        $mail->Body = "
            <h2>New Enrollment Details</h2>
            <p><strong>Full Name:</strong> $full_name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Contact:</strong> $contact</p>
            <p><strong>City:</strong> $city</p>
            <p><strong>Course:</strong> $course_name</p>
        ";

        $mail->send();
// Show modal popup instead of alert
echo '
<div id="successModal" class="modal">
  <div class="modal-content">
    <span id="closeModal" class="close">&times;</span>
    <h3>Thank You!</h3>
    <p>Your enrollment has been submitted successfully.</p>
  </div>
</div>

<style>
.modal { display: block; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.5); }
.modal-content { background-color: #fff; margin: 15% auto; padding: 20px; border-radius: 10px; width: 50%; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.3); }
.close { color: #aaa; float: right; font-size: 28px; font-weight: bold; cursor: pointer; }
.close:hover { color: #000; }
</style>

<script>
// Get the modal
var modal = document.getElementById("successModal");

// When user clicks on X, close modal and redirect
document.getElementById("closeModal").onclick = function() {
    modal.style.display = "none";
    window.location.href = "course-details.php"; // ⬅ redirect here
}

// Also close modal if user clicks outside
window.onclick = function(event) { 
    if(event.target == modal) { 
        modal.style.display = "none";
        window.location.href = "course-details.php"; // ⬅ redirect here
    }
}
</script>
';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
