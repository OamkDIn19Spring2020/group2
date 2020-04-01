<div id="header">
    <div id="tags">
        <a href="<?php echo site_url('sales'); ?>" class="buttons sales">Sales</a>
        <a href="<?php echo site_url('hot'); ?>" class="buttons hot">Hot</a>
        <a href="<?php echo site_url('games'); ?>" class="buttons games">Games</a>
        <form action=" <?php echo site_url('Games_c/s_index') ?> " method="post" class="buttons s_games">
            <input type="text" name="search" id="search">
            <input type="submit" value="Search">
        </form>
    </div>
    <div id='funcs'>
        <a href="<?php echo site_url('register'); ?>" id="Login">Login</a>
        <a href="<?php echo site_url('cart'); ?>" id="cart">Shopping cart</a>
    </div>
</div>
