<?php
$pageTitle = 'Contact Us — OnlineConvert.co';
require_once 'includes/header.php';

$sent = false;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name && $email && $subject && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $db = getDB();
            $db->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?,?,?,?)")
               ->execute([$name, $email, $subject, $message]);
            $sent = true;
        } catch (Exception $e) {
            $error = 'Failed to send message. Please email us directly.';
        }
    } else {
        $error = 'Please fill in all fields with valid information.';
    }
}
?>
<section class="section">
  <div class="container-sm">
    <div class="text-center mb-32">
      <div class="label-tag">📬 Contact</div>
      <h1>Get in Touch</h1>
      <p>Have a question, bug report, or feature request? We'd love to hear from you.</p>
    </div>
    <?php if ($sent): ?>
    <div class="alert alert-success">✓ Your message has been sent. We'll get back to you within 24 hours.</div>
    <?php elseif ($error): ?>
    <div class="alert alert-error">⚠ <?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <div class="card">
      <form method="POST">
        <div class="grid-2"><div class="form-group"><label>Your Name</label><input type="text" name="name" required placeholder="John Doe" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"></div>
        <div class="form-group"><label>Email Address</label><input type="email" name="email" required placeholder="you@example.com" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"></div></div>
        <div class="form-group"><label>Subject</label>
        <select name="subject"><option>General Question</option><option>Bug Report</option><option>Feature Request</option><option>Premium Support</option><option>Business Inquiry</option></select></div>
        <div class="form-group"><label>Message</label><textarea name="message" required placeholder="Describe your question or issue in detail..." style="min-height:140px"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea></div>
        <button type="submit" class="btn btn-primary btn-lg">Send Message →</button>
      </form>
    </div>
    <div class="grid-2 mt-24">
      <div class="card text-center"><div style="font-size:2rem;margin-bottom:10px">📧</div><h4>Email</h4><p><a href="mailto:hello@onlineconvert.co">hello@onlineconvert.co</a></p></div>
      <div class="card text-center"><div style="font-size:2rem;margin-bottom:10px">⏱</div><h4>Response Time</h4><p>Usually within 24 hours on business days</p></div>
    </div>
  </div>
</section>
<?php require_once 'includes/footer.php'; ?>
