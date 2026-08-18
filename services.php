<?php
$page_title = 'Services';
include 'includes/header.php';
?>

<section style="padding-top: 160px; min-height: 80vh;">
    <div class="container">
        <div class="section-header">
            <h2>My Services</h2>
            <p>I provide a variety of high-quality digital solutions tailored for startups and businesses to increase efficiency.</p>
        </div>
        
        <div class="services-grid" style="grid-template-columns: repeat(3, 1fr); gap: 40px;">
            <?php foreach($services as $service): ?>
            <div class="service-card" style="display: flex; flex-direction: column;">
                <div class="service-icon"><i class="<?php echo $service['icon']; ?>"></i></div>
                <h3><?php echo $service['title']; ?></h3>
                <p><?php echo $service['description']; ?></p>
                
                <?php if(isset($service['includes'])): ?>
                <ul style="margin: 20px 0; padding-left: 0; list-style: none; flex-grow: 1;">
                    <?php foreach($service['includes'] as $item): ?>
                        <li style="margin-bottom: 8px; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-check" style="color: var(--primary); font-size: 12px;"></i> <?php echo $item; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>

                <div style="margin-top: 20px; padding-top: 15px; border-top: 1px solid rgba(0,0,0,0.05); display: flex; flex-direction: column; gap: 4px; color: #0a192f; font-weight: 700; font-size: 18px;">
                    <?php if(isset($service['price_rwf']) && isset($service['price_usd'])): ?>
                        <span style="font-size: 12px; color: var(--text-gray); font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">Starting at</span>
                        <div><?php echo $service['price_rwf']; ?></div>
                        <div style="font-size: 14px; color: var(--text-gray); font-weight: 500;"><?php echo $service['price_usd']; ?></div>
                    <?php elseif(isset($service['price'])): ?>
                        <span style="font-size: 12px; color: var(--text-gray); font-weight: 500; text-transform: uppercase; letter-spacing: 1px;">Pricing</span>
                        <div><?php echo $service['price']; ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
