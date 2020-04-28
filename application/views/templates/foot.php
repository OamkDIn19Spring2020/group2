<div id="footer">
    
    <div id="footercont">
        <div class = 'buttons'><a href="<?php echo site_url('category'); ?>">Category</a></div>
        <div class = 'buttons'><a href="<?php echo site_url('games'); ?>">Games</a></div>
        <div class = 'buttons'><a href="<?php echo site_url('hot'); ?>">Hot</a></div>
        <div class = 'buttons'><a href="<?php echo site_url('register'); ?>">Register</a></div>
        <div class = 'buttons'><a href="<?php echo site_url('sales'); ?>">Sales</a></div>
        <div class = 'buttons' <?php if(!isset($_SESSION['username'])){echo 'style="display:none;"';}?>><a href="<?php echo site_url('support'); ?>">support.php</a></div>
    </div>
    <div class = 'buttons' <?php if(!isset($_SESSION['username'])){echo 'style="display:none;"';}?>><a href="<?php echo site_url('support'); ?>">Customer Support</a></div>
</div>
