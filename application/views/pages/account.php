<?php echo $_SESSION['username'] ?>
<br>
<button type="button" onclick="<?php destroy_session(); redirect('sales');?>">logout</button>
