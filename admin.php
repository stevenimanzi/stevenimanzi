<?php
session_start();

// Hardcoded auth
$admin_user = 'admin';
$admin_pass = 'admin123';

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    if ($_POST['username'] === $admin_user && $_POST['password'] === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $login_error = "Invalid credentials";
    }
}

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Show login form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - IMANZI Labs</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { display: flex; align-items: center; justify-content: center; height: 100vh; background: #f3f6f9; margin: 0; }
        .login-box { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); width: 100%; max-width: 400px; }
        .login-box h2 { margin-bottom: 20px; color: #0a192f; text-align: center; }
        .form-group { margin-bottom: 20px; }
        .form-control { width: 100%; padding: 12px; border: 1px solid rgba(0,0,0,0.1); border-radius: 5px; outline: none; }
        .btn-primary { width: 100%; padding: 12px; background: var(--primary); color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: 600; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <?php if(isset($login_error)) echo "<p style='color: #ef4444; background: #fee2e2; padding: 10px; border-radius: 5px; text-align: center;'>$login_error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
<?php
    exit;
}

// Admin Dashboard
$file = 'data/messages.json';
$messages = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - IMANZI Labs</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { background: #f8fafc; margin: 0; }
        .admin-nav { background: #0a192f; color: white; padding: 20px 40px; display: flex; justify-content: space-between; align-items: center; }
        .admin-nav h2 { margin: 0; font-size: 20px; }
        .admin-nav a { color: white; opacity: 0.8; text-decoration: none; font-weight: 500; }
        .admin-nav a:hover { opacity: 1; }
        .dashboard-container { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-radius: 10px; overflow: hidden; }
        th, td { padding: 15px 20px; text-align: left; border-bottom: 1px solid rgba(0,0,0,0.05); font-size: 14px; }
        th { background: white; color: #0a192f; font-weight: 600; text-transform: uppercase; font-size: 12px; letter-spacing: 1px; }
        .badge { padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight: 600; }
        .badge.new { background: rgba(13, 110, 253, 0.1); color: var(--primary); }
    </style>
</head>
<body>
    <div class="admin-nav">
        <h2>IMANZI Labs CRM</h2>
        <div style="display: flex; align-items: center; gap: 20px;">
            <a href="/">View Site</a>
            <a href="admin.php?logout=1" style="background: var(--primary); padding: 8px 15px; border-radius: 5px;">Logout</a>
        </div>
    </div>
    
    <div class="dashboard-container">
        <h2 style="color: #0a192f; margin-bottom: 5px;">Lead Submissions</h2>
        <p style="color: var(--text-gray); margin-bottom: 30px; font-size: 14px;">View and manage your incoming contact requests.</p>
        
        <?php if(empty($messages)): ?>
            <div style="background: white; padding: 40px; text-align: center; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <p style="color: var(--text-gray);">No messages received yet.</p>
            </div>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($messages as $msg): ?>
                    <tr>
                        <td style="white-space: nowrap; color: var(--text-gray);"><?php echo date('M d, Y', strtotime($msg['date'])); ?></td>
                        <td><span class="badge new">New</span></td>
                        <td><strong style="color: #0a192f;"><?php echo htmlspecialchars($msg['name']); ?></strong></td>
                        <td><a href="mailto:<?php echo htmlspecialchars($msg['email']); ?>" style="color: var(--primary); text-decoration: none;"><?php echo htmlspecialchars($msg['email']); ?></a></td>
                        <td><?php echo htmlspecialchars($msg['service']); ?></td>
                        <td><div style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: var(--text-gray);"><?php echo htmlspecialchars($msg['message']); ?></div></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
