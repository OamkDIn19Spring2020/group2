
<?php $this->load->helper('form'); ?>

<div id="regForm" style="border: 1px solid black; width: 50%; box-sizing: border-box; margin: auto; padding: 30px 60px;">

  <?php echo form_open('Register_c/createuser'); ?>

    <label for="uname">* Username:</label><br>
    <?php echo form_error('uname'); ?>
    <input type="text" id="uname" name="uname" value="<?php echo set_value('username'); ?>"><br>

    <label for="password">* Password:</label><br>
    <?php echo form_error('password'); ?>
    <input type="password" id="password" name="password"><br>

    <label for="password">* Confirm password:</label><br>
    <?php echo form_error('passconf'); ?>
    <input type="password" id="passconf" name="passconf"><br>

    <label for="email">* E-mail address:</label><br>
    <?php echo form_error('email'); ?>
    <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>"><br>

    <label for="phone">Phone number:</label><br>
    <?php echo form_error('phone'); ?>
    <input type="text" id="phone" name="phone" value="<?php echo set_value('phone'); ?>"><br>

    <label for="country">Country</label><br>
    <?php echo form_error('country'); ?>
    <input type="text" id="country" name="country" value="<?php echo set_value('country'); ?>"><br>

    <input type="submit" name="submit" value="Register">

  </form>
</div>
