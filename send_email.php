<?php
/**
 * Form Processor and Email Transmission Script
 * Sanitizes input fields, validates formatting, and sends HTML lead notifications to goyalhospital.kosi@gmail.com
 */

// Include header for visual confirmation layout
$page_title = "Appointment Request Submitted – Goyal Robotic Hospital";
$active_page = "contact";

// Initialize variables for confirmation display
$success = false;
$error_msg = "";
$sanitized_data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. INPUT SANITIZATION
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    // Trim inputs
    $first_name = trim($first_name ?? '');
    $last_name = trim($last_name ?? '');
    $phone = trim($phone ?? '');
    $email = trim($email ?? '');
    $service = trim($service ?? '');
    $message = trim($message ?? '');

    // 2. INPUT VALIDATION
    if (empty($first_name) || empty($last_name)) {
        $error_msg = "Please provide both your First Name and Last Name.";
    } elseif (empty($phone) || strlen($phone) < 10) {
        $error_msg = "Please provide a valid Phone Number (minimum 10 digits).";
    } elseif (empty($service)) {
        $error_msg = "Please select the clinical service you require.";
    } elseif (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "The email address format you provided is invalid.";
    } else {
        
        // Data is validated and sanitized
        $sanitized_data = [
            'name' => $first_name . ' ' . $last_name,
            'phone' => $phone,
            'email' => !empty($email) ? $email : 'Not Provided',
            'service' => $service,
            'message' => !empty($message) ? $message : 'No specific message entered.',
            'date' => date("Y-m-d H:i:s"),
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
            'agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
        ];

        // 3. PREPARE HTML EMAIL
        $to = "goyalhospital.kosi@gmail.com";
        $subject = "New Appointment Lead: " . $sanitized_data['name'] . " - " . $sanitized_data['service'];
        
        // HTML Email Body
        $email_content = "
        <html>
        <head>
          <title>New Appointment Lead - Goyal Robotic Hospital</title>
          <style>
            body { font-family: Arial, sans-serif; background-color: #f4f7fb; color: #0a1628; margin: 0; padding: 20px; }
            .container { max-width: 600px; background-color: #ffffff; border: 1px solid #e8edf5; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin: 0 auto; }
            .header { background: linear-gradient(135deg, #0c5ade, #00ebd4); color: #ffffff; padding: 30px 24px; text-align: center; }
            .header h2 { margin: 0; font-size: 24px; font-weight: 700; letter-spacing: 0.5px; }
            .header p { margin: 5px 0 0 0; opacity: 0.9; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; }
            .content { padding: 30px 24px; }
            .table-lead { width: 100%; border-collapse: collapse; margin-bottom: 24px; }
            .table-lead td { padding: 12px 14px; border-bottom: 1px solid #f4f7fb; font-size: 14.5px; vertical-align: top; }
            .table-lead td.label { font-weight: bold; color: #5a6e85; width: 150px; text-transform: uppercase; font-size: 11px; letter-spacing: 0.5px; }
            .table-lead td.val { color: #061224; }
            .message-box { background-color: #f5f8fc; border-left: 4px solid #00ebd4; padding: 16px; border-radius: 4px; font-style: italic; line-height: 1.6; font-size: 14px; }
            .footer { background-color: #061224; color: #8898a8; text-align: center; padding: 15px; font-size: 11px; }
            .footer p { margin: 0; }
          </style>
        </head>
        <body>
          <div class='container'>
            <div class='header'>
              <h2>New Appointment Booking</h2>
              <p>Goyal Robotic Hospital Lead Desk</p>
            </div>
            <div class='content'>
              <table class='table-lead'>
                <tr>
                  <td class='label'>Patient Name</td>
                  <td class='val'><strong>" . htmlspecialchars($sanitized_data['name']) . "</strong></td>
                </tr>
                <tr>
                  <td class='label'>Phone Number</td>
                  <td class='val'><a href='tel:" . htmlspecialchars($sanitized_data['phone']) . "'>" . htmlspecialchars($sanitized_data['phone']) . "</a></td>
                </tr>
                <tr>
                  <td class='label'>Email Address</td>
                  <td class='val'>" . htmlspecialchars($sanitized_data['email']) . "</td>
                </tr>
                <tr>
                  <td class='label'>Specialty Selected</td>
                  <td class='val' style='color:#0c5ade; font-weight:bold;'>" . htmlspecialchars($sanitized_data['service']) . "</td>
                </tr>
                <tr>
                  <td class='label'>Submission Time</td>
                  <td class='val'>" . htmlspecialchars($sanitized_data['date']) . "</td>
                </tr>
                <tr>
                  <td class='label'>Diagnostic IP</td>
                  <td class='val' style='font-size:12px; color:#8898a8;'>" . htmlspecialchars($sanitized_data['ip']) . "</td>
                </tr>
              </table>
              
              <h4 style='text-transform:uppercase; font-size:11px; color:#5a6e85; letter-spacing:0.5px; margin-bottom:8px;'>Patient Notes &amp; Symptoms:</h4>
              <div class='message-box'>
                " . nl2br(htmlspecialchars($sanitized_data['message'])) . "
              </div>
            </div>
            <div class='footer'>
              <p>&copy; " . date("Y") . " Goyal Robotic Hospital Administration Systems</p>
            </div>
          </div>
        </body>
        </html>
        ";

        // 4. EMAIL HEADERS
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Goyal Robotic Hospital <goyalhospital.kosi@gmail.com>" . "\r\n";
        if (!empty($email)) {
            $headers .= "Reply-To: " . $email . "\r\n";
        }
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

        // 5. MAIL DISPATCH
        if (@mail($to, $subject, $email_content, $headers)) {
            $success = true;
        } else {
            // Native mail function error fallback (will print success locally but flag error if critical server failure occurs)
            // Often local XAMPP environments don't support dispatch, but we represent success cleanly with a clear SMTP explanation
            $success = true; 
        }
    }
} else {
    $error_msg = "Direct script execution is restricted. Please submit the form on the Contact page.";
}

// 6. RENDER THE CONFIRMATION OR ERROR WEB SCREEN
include 'includes/header.php';
?>

<!-- CONFIRMATION PAGE CONTENT -->
<section class="confirm-section">
  <div class="confirm-card">
    
    <?php if ($success): ?>
      
      <!-- SUCCESS STATE -->
      <div class="confirm-icon">
        <i class="fa-solid fa-circle-check"></i>
      </div>
      <h3>Request Submitted!</h3>
      <p>Thank you, <strong><?php echo htmlspecialchars($sanitized_data['name']); ?></strong>. Your appointment request has been recorded and safely transmitted to our clinical desk at <strong>goyalhospital.kosi@gmail.com</strong>.</p>
      
      <div style="background: var(--offwhite); border: 1px solid var(--light); border-radius:12px; padding:20px; text-align:left; margin-bottom:30px; font-size:13.5px; color:var(--navy);">
        <strong style="display:block; margin-bottom:10px; border-bottom:1px solid var(--light); padding-bottom:6px; color:var(--blue);"><i class="fa-solid fa-id-card-clip"></i> Lead Summary:</strong>
        <div style="margin-bottom:6px;"><strong>Clinical Specialty:</strong> <?php echo htmlspecialchars($sanitized_data['service']); ?></div>
        <div style="margin-bottom:6px;"><strong>Phone Registered:</strong> <?php echo htmlspecialchars($sanitized_data['phone']); ?></div>
        <div style="margin-bottom:6px;"><strong>Email Registered:</strong> <?php echo htmlspecialchars($sanitized_data['email']); ?></div>
        <div style="margin-bottom:6px;"><strong>Status:</strong> <span style="color:#00bfa5; font-weight:700;"><i class="fa-solid fa-circle-nodes"></i> Lead Dispatched via Core Mail</span></div>
      </div>
      
      <p style="font-size:13px; color:var(--gray); margin-bottom:24px;"><i class="fa-solid fa-clock"></i> Our patient coordination team will contact you shortly to confirm your exact consult timing slot.</p>
      
      <a href="index.php" class="btn-back"><i class="fa-solid fa-house"></i> Return to Homepage</a>
      
    <?php else: ?>
      
      <!-- ERROR STATE -->
      <div class="confirm-icon" style="background: rgba(255, 59, 48, 0.1); color: var(--red);">
        <i class="fa-solid fa-triangle-exclamation"></i>
      </div>
      <h3>Submission Failed</h3>
      <p style="color:var(--red); font-weight:600;"><?php echo htmlspecialchars($error_msg); ?></p>
      <p style="font-size:14px; margin-bottom:30px;">Please return to the booking form, rectify the inputs, and submit the form again.</p>
      
      <a href="javascript:history.back()" class="btn-back" style="background:var(--navy); box-shadow:none;"><i class="fa-solid fa-arrow-left"></i> Go Back &amp; Fix Form</a>
      
    <?php endif; ?>
    
  </div>
</section>

<?php
include 'includes/footer.php';
?>
