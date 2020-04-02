<?php echo $_SESSION['username'] ?>
<br>
<button type="button" onclick="<?php session_destroy(); redirect('sales');?>">logout</button>
