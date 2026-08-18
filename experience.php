<?php
$page_title = 'Experience';
include 'includes/header.php';
?>

<section style="padding-top: 160px; min-height: 80vh;">
    <div class="container">
        <div class="section-header">
            <h2>Experience & Education</h2>
            <p>My professional journey and academic background.</p>
        </div>
        
        <div class="contact-grid">
            <div>
                <h3 style="margin-bottom: 30px; font-size: 24px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-briefcase" style="color: var(--primary);"></i> Work Experience
                </h3>
                
                <div style="position: relative; padding-left: 30px; border-left: 2px solid var(--primary-light);">
                    <?php foreach($experience as $job): ?>
                    <div style="margin-bottom: 40px; position: relative;">
                        <div style="position: absolute; left: -39px; top: 0; width: 16px; height: 16px; border-radius: 50%; background: var(--primary); border: 4px solid white; box-shadow: 0 0 0 2px var(--primary-light);"></div>
                        <span style="display: inline-block; padding: 4px 12px; background: var(--primary-light); color: var(--primary); font-size: 12px; font-weight: 700; border-radius: 20px; margin-bottom: 10px;"><?php echo $job['period']; ?></span>
                        <h4 style="font-size: 18px; margin-bottom: 5px;"><?php echo $job['role']; ?></h4>
                        <div style="font-size: 14px; font-weight: 600; margin-bottom: 10px; color: var(--text-dark);"><i class="fa-solid fa-building" style="margin-right: 5px; color: var(--text-gray);"></i> <?php echo $job['company']; ?></div>
                        <p style="font-size: 14px; color: var(--text-gray);"><?php echo $job['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div>
                <h3 style="margin-bottom: 30px; font-size: 24px; display: flex; align-items: center; gap: 10px;">
                    <i class="fa-solid fa-graduation-cap" style="color: var(--primary);"></i> Education
                </h3>
                
                <div style="position: relative; padding-left: 30px; border-left: 2px solid var(--primary-light);">
                    <?php foreach($education as $edu): ?>
                    <div style="margin-bottom: 40px; position: relative;">
                        <div style="position: absolute; left: -39px; top: 0; width: 16px; height: 16px; border-radius: 50%; background: var(--primary); border: 4px solid white; box-shadow: 0 0 0 2px var(--primary-light);"></div>
                        <span style="display: inline-block; padding: 4px 12px; background: var(--primary-light); color: var(--primary); font-size: 12px; font-weight: 700; border-radius: 20px; margin-bottom: 10px;"><?php echo $edu['period']; ?></span>
                        <h4 style="font-size: 18px; margin-bottom: 5px;"><?php echo $edu['degree']; ?></h4>
                        <div style="font-size: 14px; font-weight: 600; margin-bottom: 10px; color: var(--text-dark);"><i class="fa-solid fa-university" style="margin-right: 5px; color: var(--text-gray);"></i> <?php echo $edu['institution']; ?></div>
                        <p style="font-size: 14px; color: var(--text-gray);"><?php echo $edu['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
