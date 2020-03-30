
<?php $this->load->helper('form'); ?>

<div id="regForm" style="border: 1px solid black; width: 50%; margin: auto; content-align: center;">

  <?php echo validation_errors(); ?>
  <?php echo form_open('Register_c/createuser'); ?>

    <label for="uname">Username:</label>
    <input type="text" id="uname" name="uname"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>

    <label for="email">E-mail address:</label>
    <input type="text" id="email" name="email"><br>

    <label for="phone">Phone number:</label>
    <input type="text" id="phone" name="phone"><br>

    <label for="country">Country</label>
    <input type="text" id="country" name="country"><br>

    <input type="submit" name="submit" value="Register">

  </form>
</div>
