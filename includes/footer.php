<?php
// includes/footer.php
?>
<footer>
    <div class="container">
        <div class="footer-grid">
            <div>
                <div class="footer-logo">
                    <i class="fa-solid fa-code"></i> <?php echo $personal_info['name']; ?>
                </div>
                <p style="color: rgba(255,255,255,0.8); font-size: 14px; line-height: 1.6; margin-bottom: 20px;">
                    I am dedicated to providing the best digital solutions and highly optimized business management systems.
                </p>
                <div class="social-icons" style="justify-content: flex-start;">
                    <?php foreach($personal_info['socials'] as $network => $link): ?>
                        <a href="<?php echo $link; ?>" target="_blank"><i class="fa-brands fa-<?php echo $network; ?>"></i></a>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="footer-links">
                <h4>Company</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About Me</a></li>
                    <li><a href="services">Services</a></li>
                    <li><a href="projects">Portfolio</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Support</h4>
                <ul>
                    <li><a href="contact">Contact Me</a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="privacy">Privacy Policy</a></li>
                    <li><a href="terms">Terms of Service</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h4>Get in Touch</h4>
                <ul>
                    <li style="color: rgba(255,255,255,0.8); font-size: 14px; display: flex; align-items: flex-start; gap: 8px;"><i class="fa-solid fa-location-dot" style="margin-top: 4px;"></i> <?php echo $personal_info['location']; ?></li>
                    <li style="color: rgba(255,255,255,0.8); font-size: 14px; display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-envelope"></i> <?php echo $personal_info['email']; ?></li>
                    <li style="color: rgba(255,255,255,0.8); font-size: 14px; display: flex; align-items: center; gap: 8px;"><i class="fa-solid fa-phone"></i> <?php echo $personal_info['phone']; ?></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            &copy; <?php echo date('Y'); ?> <?php echo $personal_info['name']; ?>. All Rights Reserved.
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        if (menuBtn && navLinks) {
            menuBtn.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                const icon = menuBtn.querySelector('i');
                if (navLinks.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                } else {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            });
        }
    });
</script>
</body>
</html>
