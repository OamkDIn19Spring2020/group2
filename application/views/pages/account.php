<?php echo $_SESSION['username'] ?>
<br>
<form  action="<?php echo site_url('Home/logout');?>" method="post">
    <input type="submit" value="Log out">
</form>