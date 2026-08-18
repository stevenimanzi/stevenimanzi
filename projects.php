<?php
$page_title = 'Projects';
include 'includes/header.php';
?>

<section style="padding-top: 160px; min-height: 80vh;">
    <div class="container">
        <div class="section-header">
            <h2>Featured Projects</h2>
            <p>A selection of recent work, ranging from corporate websites to complex business management systems.</p>
        </div>
        
        <div class="projects-grid">
            <?php foreach($projects as $project): ?>
            <div class="project-card-clean">
                <div class="project-header">
                    <h3><?php echo $project['title']; ?></h3>
                    <span class="project-tag"><?php echo $project['category']; ?></span>
                </div>
                <img src="<?php echo $project['image']; ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: var(--radius-sm); margin-bottom: 20px;">
                <p><?php echo $project['description']; ?></p>
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

<?php include 'includes/footer.php'; ?>
