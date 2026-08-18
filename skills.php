<?php
$page_title = 'Skills';
include 'includes/header.php';
?>

<section style="padding-top: 160px; min-height: 80vh;">
    <div class="container">
        <div class="section-header">
            <h2>Skill & Expertise</h2>
            <p>Modern technologies and frameworks I use to bring ideas to life.</p>
        </div>
        
        <div class="contact-grid">
            <div>
                <h3 style="margin-bottom: 30px; font-size: 24px;">Technical Skills</h3>
                <?php foreach($skills as $category => $data): ?>
                <div style="margin-bottom: 30px;">
                    <h4 style="margin-bottom: 15px; font-size: 18px; display: flex; align-items: center; gap: 10px;">
                        <i class="<?php echo $data['icon']; ?>" style="color: var(--primary);"></i> <?php echo $category; ?>
                    </h4>
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        <?php foreach($data['items'] as $item): ?>
                        <span style="background: white; border: 1px solid rgba(0,0,0,0.05); padding: 8px 15px; border-radius: 50px; font-size: 14px; box-shadow: var(--shadow-sm);"><?php echo $item; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div>
                <h3 style="margin-bottom: 30px; font-size: 24px;">Proficiency Levels</h3>
                <?php foreach($skill_levels as $skill): ?>
                <div style="margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 14px; font-weight: 600;">
                        <span><i class="<?php echo $skill['icon']; ?>" style="color: var(--primary); margin-right: 8px;"></i> <?php echo $skill['name']; ?></span>
                        <span><?php echo $skill['level']; ?></span>
                    </div>
                    <div style="height: 8px; background: var(--primary-light); border-radius: 10px; overflow: hidden;">
                        <div style="height: 100%; width: <?php echo $skill['level']; ?>; background: var(--primary); border-radius: 10px;"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
