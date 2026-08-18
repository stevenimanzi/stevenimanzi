<?php
$page_title = 'About Me';
include 'includes/header.php';
?>

<section class="intro-section" style="padding-top: 160px; padding-bottom: 40px;">
    <div class="dot dot-md" style="top: 20%; left: 10%;"></div>
    <div class="dot dot-sm" style="bottom: 30%; right: 20%;"></div>

    <div class="container intro-grid">
        <div class="intro-image-container">
            <div class="concentric-circles" style="width: 400px; height: 400px;"></div>
            
            <div class="float-card" style="top: 20px; right: -30px;">
                <div class="stars">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <div class="float-text" style="margin-top: 5px;">
                    <strong>Top Rated</strong>
                    <span>Freelancer</span>
                </div>
            </div>
            
            <img src="assets/images/steven_imanzi.png" alt="Profile Image">
            
            <div class="float-card" style="bottom: 20px; left: -20px; background: var(--primary); color: white;">
                <div class="float-text" style="text-align: center;">
                    <strong style="font-size: 24px; color: white;">2+</strong>
                    <span style="color: white; font-size: 14px;">Years of<br>Experience</span>
                </div>
            </div>
        </div>
        
        <div class="intro-content">
            <h2 style="font-size: 42px; line-height: 1.2; margin-bottom: 10px;">Steven IMANZI</h2>
            <p style="color: var(--primary); font-weight: 600; font-size: 16px; margin-bottom: 20px;">Software Developer | Digital Marketer | E-Commerce Specialist | Graphic Designer | Entrepreneur</p>
            <p>I'm a <strong>Full-Stack Developer</strong> based in Kigali, Rwanda. I combine technical development skills with business, marketing, design, and E-Commerce knowledge.</p>
            <p>My approach is not only to build software, but to understand the business problem behind the software and create practical digital solutions that generate measurable value.</p>
            
            <div style="margin-top: 30px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="float-card" style="position: static; width: 100%;">
                    <div class="float-icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="float-text">
                        <strong>Email</strong>
                        <span><?php echo $personal_info['email']; ?></span>
                    </div>
                </div>
                <div class="float-card" style="position: static; width: 100%;">
                    <div class="float-icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="float-text">
                        <strong>Phone</strong>
                        <span><?php echo $personal_info['phone']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-content" style="padding: 60px 0;">
    <div class="container" style="color: var(--text-dark); line-height: 1.8;">
        
        <h2 style="font-size: 24px; margin-bottom: 15px; color: var(--primary);">Professional Overview</h2>
        <p style="margin-bottom: 15px;">Steven IMANZI is a young technology entrepreneur, software developer, digital marketer, graphic designer, social media manager, and E-Commerce specialist focused on using technology to help businesses operate, market, and grow in the digital economy. He is the Founder and Managing Director of IMANZI Labs, a digital technology company focused on software development, digital marketing, IT consultancy, and digital transformation. Steven combines technical development skills with business, marketing, design, and E-Commerce knowledge. His approach is not only to build software, but to understand the business problem behind the software and create practical digital solutions that generate measurable value. His long-term ambition is to become a globally recognized digital marketing and technology professional whose name is strongly associated with business digitization, digital growth, and innovative technology solutions.</p>

        <h2 style="font-size: 24px; margin-bottom: 15px; margin-top: 40px; color: var(--primary);">Learning Philosophy & Vision</h2>
        <p style="margin-bottom: 15px;">Steven does not want to learn technology only at a theoretical level. His preferred learning approach is: Learn → Understand → Build → Test → Deploy → Improve. He focuses on practical projects because real software development requires understanding how multiple technologies work together.</p>
        <p style="margin-bottom: 15px;">Steven wants to build a strong personal brand under the name "Mr. Steven". The vision is that when a business owner thinks: "We need to digitize our business" or "We need to improve our digital marketing", the name Mr. Steven becomes associated with that solution. This personal brand is intended to grow internationally rather than being limited to one country or region.</p>
        <p style="margin-bottom: 15px;">Steven's mission is to use technology and digital marketing to help businesses become more efficient, visible, competitive, and scalable. He wants to transform traditional business processes into modern digital systems while helping companies acquire and retain customers through effective digital marketing. The ultimate vision can be summarized as: Build technology. Grow businesses. Create opportunities. Think globally.</p>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
