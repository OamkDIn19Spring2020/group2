<?php echo $_SESSION['username'] ?>
<br>
<?php
foreach ($userinfo as $key) {
    echo $key['username'].'<br>';
    echo $key['email'].'<br>';
    echo $key['phone'].'<br>';
    echo $key['country'].'<br>';
    echo $key['password'].'<br>';
    // code...
}

?>
<form  action="<?php echo site_url('Home/logout');?>" method="post">
    <input type="submit" value="Log out">
</form>
