<?php
$file = fopen(base_url('assests/textf/'.$gname.'.txt'), 'r') or die('file not found');
echo fread($file, filesize(base_url('assests/textf/'.$gname.'.txt')));
fclose($file);
?>
