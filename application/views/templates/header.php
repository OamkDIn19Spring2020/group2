<div id="header">
    <div id="tags">
        <a href="<?php echo site_url('sales'); ?>" class="buttons sales">Sales</a>
        <a href="<?php echo site_url('hot'); ?>" class="buttons hot">Hot</a>
        <a href="<?php echo site_url('games'); ?>" class="buttons games">Games</a>
        <form action=" <?php echo site_url('Games_c/s_index') ?> " method="post" class="buttons s_games">
            <input type="text" name="search" id="search">
            <input type="submit" value="Search">
        </form>

        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
            echo '<a href='.site_url('account').' id="Login">'.$_SESSION['username'].'</a>';
            echo '<a href='.site_url('cart').' id="cart">Shopping cart     <span style="color:red;">';
            if (count($_SESSION['testarray']) === NULL)
            {
                echo '0';
            }
            else{
                echo count($_SESSION['testarray']) - 1;
            }
            echo '</span></a>';
        }
        else{
            echo "<div id='logreg'>";
            echo '<a href='.site_url('login').' id="Login">Login</a>';
            echo '<a href='.site_url('register').' id="register">register</a>';
            echo '</div>';
        }
        ?>

    </div>
</div>
