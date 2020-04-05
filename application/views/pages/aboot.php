<?php
$file = fopen(base_url('assests/texft/'.$gname.'.txt'), 'r') or die('file not found');
echo fread($file, filesize($file));
fclose($file);
?>
