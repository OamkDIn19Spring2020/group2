

<?php $this->load->helper('form'); ?>
<div id="loginForm">
  <?php echo form_open('Login_c/validatelogin'); ?>

    <label for="uname">Username:</label><br>
    <?php echo form_error('uname'); ?>
    <input type="text" id="uname" name="uname" value="<?php echo set_value('username'); ?>"><br>

    <label for="password">Password:</label><br>
    <?php echo form_error('password'); ?>
    <input type="password" id="password" name="password"><br>

    <input type="submit" name="submit" value="Log in">

  </form>

  <p>Don't have an account? <a href="<?php echo site_url('register'); ?>" id="Register">Make one here!</a></p>  
</div>