
<h1><?php echo $_SESSION['username'] ?>'s account</h1>
<br>
<form  action="<?php echo site_url('Home/logout');?>" method="post">
    <input type="submit" value="Log out">
</form><br>
<form  action="<?php echo site_url('Home/deleteuser');?>" method="post">
    <input type="submit" value="Delete account">
</form>