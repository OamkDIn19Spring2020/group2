<div id="accountBox">
    <?php
    foreach ($userinfo as $key) {
        echo 'Username: '.$key['username'].'<br>';
        echo 'Email: '.$key['email'].'<br>';
        echo 'Phone:'.$key['phone'].'<br>';
        echo 'country: '.$key['country'].'<br>';
        echo 'password: '.$key['password'].'<br>';
    // code...
    }

    ?>
    <button type="button" name="button" ><a href="<?php echo site_url('Cart_c/history')?>">Purchase History</a></button>
    <button type="button" name="button" ><a href="<?php echo site_url('changepass')?>">change password</a></button>
</div>
<form  action="<?php echo site_url('Home/logout');?>" method="post">
    <input type="submit" value="Log out">
</form>
