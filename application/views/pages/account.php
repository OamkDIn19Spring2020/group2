<?php echo $_SESSION['username'] ?>
<br>
<?php
echo $userinfo['username'].'<br>';
echo $userinfo['email'].'<br>';
echo $userinfo['phone'].'<br>';
echo $userinfo['country'].'<br>';
echo $userinfo['password'].'<br>';
?>
<form  action="<?php echo site_url('Home/logout');?>" method="post">
    <input type="submit" value="Log out">
</form>
