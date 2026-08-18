<?php
// Fallback routing if the server routes all extensionless URLs to index.php
$req_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($req_uri !== '' && $req_uri !== 'index' && $req_uri !== 'index.php') {
    $target = __DIR__ . '/' . $req_uri . '.php';
    if (file_exists($target)) {
        include $target;
        exit;
    }
}

$page_title = 'Home';
include 'includes/header.php';
?>

<!-- 1. Hero Section -->
<section class="hero">
    <div class="dot dot-lg" style="top: 15%; left: 30%;"></div>
    <div class="dot dot-sm" style="top: 20%; right: 20%;"></div>
    <div class="dot dot-md" style="bottom: 25%; right: 10%;"></div>
    
    <div class="container hero-grid">
        <div class="hero-content">
            <h1>Welcome to<br><span><?php echo $personal_info['name']; ?></span></h1>
            <p>I build reliable websites, web applications, e-commerce platforms, and business systems for startups and SMEs.</p>
            <a href="contact" class="btn btn-primary">Make an Appointment</a>
        </div>
        
        <div class="hero-image-container">
            <div class="concentric-circles"></div>
            
            <div class="float-card" style="top: -20px; left: -40px;">
                <div style="display: flex; gap: 5px;">
                    <img src="assets/images/Profile.png" style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover;">
                </div>
                <div class="float-text">
                    <strong>10+</strong>
                    <span>Projects Completed</span>
                </div>
            </div>
            
            <img src="assets/images/Profile.png" alt="<?php echo $personal_info['name']; ?>">
            
            <div class="float-card" style="bottom: 40px; right: -50px;">
                <div class="float-icon"><i class="fa-solid fa-calendar"></i></div>
                <div class="float-text">
                    <strong>August 2026</strong>
                    <span>Available for work</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Intro / About Section -->
<section class="intro-section">
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
            <h2><?php echo $personal_info['name']; ?></h2>
            <p>I'm a <strong><?php echo $personal_info['roles'][0]; ?></strong> based in <?php echo $personal_info['location']; ?>. I have extensive experience in building dynamic and responsive web applications using modern technologies.</p>
            <p>My philosophy is simple: technology should solve real problems without adding complexity. I focus on creating scalable and secure digital products that significantly improve your business operations.</p>
            <br>
            <a href="contact" class="btn btn-primary">Book Appointment</a>
        </div>
    </div>
</section>

<!-- 3. Services Section -->
<section>
    <div class="container">
        <div class="section-header">
            <h2>My Services</h2>
            <p>I provide a variety of high-quality digital solutions tailored for startups and businesses to increase efficiency.</p>
        </div>
        
        <div class="services-grid">
            <?php 
            $featured_services = array_slice($services, 0, 4);
            foreach($featured_services as $service): 
            ?>
            <div class="service-card">
                <div class="service-icon"><i class="<?php echo $service['icon']; ?>"></i></div>
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. Skills & Experience Section -->
<section style="background: white;">
    <div class="container">
        <div class="section-header">
            <h2>Skill & Experience</h2>
            <p>A track record of delivering successful digital projects with extensive hands-on expertise.</p>
        </div>
        
        <div class="skills-diagram">
            <div class="concentric-circles" style="width: 500px; height: 500px;"></div>
            
            <img src="assets/images/Profile.png" class="skills-center-img" alt="Experience">
            
            <div class="skill-node" style="top: 0; left: 10%;">
                <div style="color: var(--primary); font-weight: 700; margin-bottom: 5px;">2024 - Present</div>
                <h4>Full-Stack Developer</h4>
                <p>Developing responsive and dynamic web apps.</p>
            </div>
            
            <div class="skill-node" style="top: 40%; left: 0;">
                <div style="color: var(--primary); font-weight: 700; margin-bottom: 5px;">2025 - Present</div>
                <h4>Founder & CEO</h4>
                <p>IMANZI Labs</p>
            </div>
            
            <div class="skill-node" style="top: 10%; right: 10%;">
                <div style="color: var(--primary); font-weight: 700; margin-bottom: 5px;">HTML/CSS/JS</div>
                <h4>Frontend Expert</h4>
                <p>95% Proficiency Level</p>
            </div>
            
            <div class="skill-node" style="bottom: 20%; right: 5%;">
                <div style="color: var(--primary); font-weight: 700; margin-bottom: 5px;">PHP/Laravel</div>
                <h4>Backend Master</h4>
                <p>88% Proficiency Level</p>
            </div>
            
            <div class="float-card" style="bottom: -20px; left: 20%;">
                <div class="float-text">
                    <span>Total Projects</span>
                    <strong style="font-size: 20px;">10+</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Testimonials (Using Projects Data to match 3 cards) -->
<section>
    <div class="container">
        <div class="section-header">
            <h2>Featured Projects</h2>
            <p>Here is what I have built for my clients.</p>
        </div>
        
        <div class="projects-grid">
            <?php 
            $featured_projects = array_slice($projects, 0, 3);
            foreach($featured_projects as $project): 
            ?>
            <div class="project-card-clean">
                <div class="project-header">
                    <h3><?php echo $project['title']; ?></h3>
                    <span class="project-tag"><?php echo $project['category']; ?></span>
                </div>
                <img src="<?php echo $project['image']; ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: var(--radius-sm); margin-bottom: 20px; border: 1px solid rgba(0,0,0,0.05);">
                <p><?php echo substr($project['description'], 0, 80) . '...'; ?></p>
                <?php if(isset($project['metrics'])): ?>
                <div style="margin: 15px 0; padding: 10px; background: rgba(13, 110, 253, 0.05); border-radius: 5px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-arrow-trend-up" style="color: var(--primary);"></i>
                    <span style="font-weight: 600; font-size: 14px; color: var(--text-dark);"><?php echo $project['metrics']['Metric']; ?>:</span>
                    <span style="font-weight: 700; font-size: 14px; color: var(--primary);"><?php echo $project['metrics']['Value']; ?></span>
                </div>
                <?php endif; ?>

                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 15px; margin-top: auto;">
                    <a href="#" onclick="alert('Demo video coming soon!'); return false;" style="color: var(--text-gray); font-size: 14px; font-weight: 600; display: flex; align-items: center; gap: 5px;"><i class="fa-solid fa-circle-play"></i> Watch Demo</a>
                    <a href="<?php echo $project['link']; ?>" target="_blank" style="color: var(--primary); font-size: 14px; font-weight: 600;"><i class="fa-solid fa-arrow-right"></i> View Live</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5.5 Testimonials -->
<section style="background: white;">
    <div class="container">
        <div class="section-header">
            <h2>Client Testimonials</h2>
            <p>What business owners are saying about IMANZI Labs.</p>
        </div>
        
        <div class="marquee-wrapper">
            <div class="marquee-track">
                <!-- First set of testimonials -->
                <?php foreach($testimonials as $testi): ?>
                <div class="service-card marquee-item" style="padding: 30px; text-align: left;">
                    <div class="stars" style="margin-bottom: 15px;">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p style="font-style: italic; color: var(--text-dark); margin-bottom: 20px; font-size: 15px;">"<?php echo $testi['text']; ?>"</p>
                    <div style="display: flex; align-items: center; gap: 15px; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 15px; margin-top: auto;">
                        <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0;">
                            <?php echo substr($testi['name'], 0, 1); ?>
                        </div>
                        <div>
                            <h4 style="font-size: 16px; margin: 0; color: #0a192f;"><?php echo $testi['name']; ?></h4>
                            <span style="font-size: 12px; color: var(--text-gray);"><?php echo $testi['role']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
                <!-- Duplicate set for infinite scroll effect -->
                <?php foreach($testimonials as $testi): ?>
                <div class="service-card marquee-item" style="padding: 30px; text-align: left;">
                    <div class="stars" style="margin-bottom: 15px;">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p style="font-style: italic; color: var(--text-dark); margin-bottom: 20px; font-size: 15px;">"<?php echo $testi['text']; ?>"</p>
                    <div style="display: flex; align-items: center; gap: 15px; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 15px; margin-top: auto;">
                        <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0;">
                            <?php echo substr($testi['name'], 0, 1); ?>
                        </div>
                        <div>
                            <h4 style="font-size: 16px; margin: 0; color: #0a192f;"><?php echo $testi['name']; ?></h4>
                            <span style="font-size: 12px; color: var(--text-gray);"><?php echo $testi['role']; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 6. Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="section-header">
            <h2>Contact Me</h2>
            <p>The clear answers to all your questions.</p>
        </div>
        
        <div class="contact-grid">
            <form action="#" method="POST">
                <div class="form-group">
                    <label>Drop us message</label>
                    <input type="text" class="form-control" placeholder="Your name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email address">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Message details..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: auto;">Send Message</button>
            </form>
            
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
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
