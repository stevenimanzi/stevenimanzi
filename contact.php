<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$page_title = 'Contact';
include 'includes/header.php';

$form_success = false;
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $service = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $date = date('Y-m-d H:i:s');

    if ($name && $email && $message) {
        $entry = [
            'id' => uniqid(),
            'name' => $name,
            'email' => $email,
            'service' => $service,
            'message' => $message,
            'date' => $date,
            'status' => 'new'
        ];

        // 1. Save to JSON
        $file = 'data/messages.json';
        $current_data = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
        if (!is_array($current_data)) $current_data = [];
        array_unshift($current_data, $entry);
        file_put_contents($file, json_encode($current_data, JSON_PRETTY_PRINT));

        // 2. Send Email via PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'stivenimanzi1@gmail.com';
            $mail->Password   = 'jvoa saai vskm mrys';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('stivenimanzi1@gmail.com', 'IMANZI Labs Portfolio');
            $mail->addAddress('stivenimanzi1@gmail.com', 'Steven IMANZI');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = "New Lead: $service from $name";
            $mail->Body    = "<h3>New Contact Form Submission</h3>
                              <b>Name:</b> $name<br>
                              <b>Email:</b> $email<br>
                              <b>Service:</b> $service<br>
                              <br>
                              <b>Message:</b><br>" . nl2br($message);
            $mail->AltBody = "New Lead from $name ($email)\nService: $service\n\n$message";

            $mail->send();
            $form_success = true;
        } catch (Exception $e) {
            $form_error = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $form_error = "Please fill in all required fields.";
    }
}
?>

<section class="contact-section" style="padding-top: 160px; min-height: 80vh;">
    <div class="container">
        <div class="section-header">
            <h2>Contact Me</h2>
            <p>The clear answers to all your questions.</p>
        </div>
        
        <div class="contact-grid">
            <?php if($form_success): ?>
                <div style="background: rgba(13, 110, 253, 0.1); color: var(--primary); padding: 20px; border-radius: 10px; margin-bottom: 20px; text-align: center; border: 1px solid rgba(13, 110, 253, 0.2);">
                    <i class="fa-solid fa-circle-check" style="font-size: 24px; margin-bottom: 10px;"></i>
                    <h4 style="margin-bottom: 5px;">Message Sent Successfully!</h4>
                    <p style="font-size: 14px;">Thank you for reaching out. I will get back to you shortly.</p>
                </div>
            <?php else: ?>
                <form action="" method="POST">
                    <?php if($form_error): ?>
                        <div style="background: #fee2e2; color: #ef4444; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-size: 14px; text-align: center;">
                            <i class="fa-solid fa-circle-exclamation"></i> <?php echo $form_error; ?>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label>Drop me a message</label>
                        <input type="text" name="name" class="form-control" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                        <select name="service" class="form-control" required>
                            <option value="">Select Service</option>
                            <?php foreach($services as $service): ?>
                            <option value="<?php echo $service['title']; ?>"><?php echo $service['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Message details..." required></textarea>
                    </div>
                    <button type="submit" name="submit_contact" class="btn btn-primary" style="width: auto;">Send Message</button>
                </form>
            <?php endif; ?>
            
            <div>
                <h3 style="margin-bottom: 30px; font-size: 20px;">Contact Information</h3>
                <div class="contact-info-item">
                    <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="info-text">
                        <h4>Email Address</h4>
                        <p><?php echo $personal_info['email']; ?></p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="info-text">
                        <h4>Phone Number</h4>
                        <p><?php echo $personal_info['phone']; ?></p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="info-text">
                        <h4>Location</h4>
                        <p><?php echo $personal_info['location']; ?></p>
                    </div>
                </div>
                
                <h3 style="margin-bottom: 20px; font-size: 20px; margin-top: 40px;">Social Profiles</h3>
                <div style="display: flex; gap: 15px;">
                    <?php foreach($personal_info['socials'] as $network => $link): ?>
                        <a href="<?php echo $link; ?>" target="_blank" style="width: 45px; height: 45px; border-radius: 50%; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 20px; transition: all 0.3s;"><i class="fa-brands fa-<?php echo $network; ?>"></i></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
