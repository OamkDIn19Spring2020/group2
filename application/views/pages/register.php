
<?php $this->load->helper('form'); ?>

<div id="regForm">
  <p>Items marked with an asterisk (*) are required fields.</p>

  <p>Already have an account? <a href="<?php echo site_url('login'); ?>" id="login">Click here to log in!</a></p>

  <?php echo form_open('Register_c/createuser'); ?>

    <label for="uname">Username:*</label><br>
    <?php echo form_error('uname'); ?>
    <input type="text" id="uname" name="uname" value="<?php echo set_value('username'); ?>"><br>

    <label for="password">Password:*</label><br>
    <?php echo form_error('password'); ?>
    <input type="password" id="password" name="password"><br>

    <label for="password">Confirm password:*</label><br>
    <?php echo form_error('passconf'); ?>
    <input type="password" id="passconf" name="passconf"><br>

    <label for="email">E-mail address:*</label><br>
    <?php echo form_error('email'); ?>
    <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>"><br>

    <label for="phone">Phone number:</label><br>
    <?php echo form_error('phone'); ?>
    <input type="tel" id="phone" name="phone" placeholder="1112223333" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value="<?php echo set_value('phone'); ?>"><br>

    <label for="country">Country</label><br>
    <?php echo form_error('country'); ?>
    <input type="text" id="country" name="country" value="<?php echo set_value('country'); ?>"><br>

    <input type="submit" name="submit" value="Register">

  </form>
</div>
