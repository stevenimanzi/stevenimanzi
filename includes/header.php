<?php
// includes/header.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once 'data.php';

// Determine active page
$request_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($request_uri == '' || $request_uri == 'index.php' || $request_uri == 'index') {
    $current_page = 'index';
} else {
    $current_page = basename($request_uri, '.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | ' . $personal_info['name'] : $personal_info['name'] . ' | Portfolio'; ?></title>
    <link rel="icon" type="image/png" href="assets/images/Profile.png">
    <link rel="apple-touch-icon" href="assets/images/Profile.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>

<header>
    <div class="container nav-container">
        <a href="/" class="logo">
            <div class="icon"><i class="fa-solid fa-code"></i></div>
            <span><?php echo $personal_info['name']; ?></span>
        </a>
        
        <nav class="nav-links">
            <a href="/" class="<?php echo $current_page == 'index' ? 'active' : ''; ?>">Home</a>
            <a href="about" class="<?php echo $current_page == 'about' ? 'active' : ''; ?>">About</a>
            <a href="services" class="<?php echo $current_page == 'services' ? 'active' : ''; ?>">Services</a>
            <a href="skills" class="<?php echo $current_page == 'skills' ? 'active' : ''; ?>">Skills</a>
            <a href="projects" class="<?php echo $current_page == 'projects' ? 'active' : ''; ?>">Projects</a>
            <a href="experience" class="<?php echo $current_page == 'experience' ? 'active' : ''; ?>">Experience</a>
            <a href="contact" class="<?php echo $current_page == 'contact' ? 'active' : ''; ?>">Contact</a>
        </nav>
        
        <a href="contact" class="btn btn-primary d-none-mobile">Let's Talk</a>
        
        <div class="menu-toggle" id="mobile-menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>
