<div id="gamepage">


<?php
echo $gname;
$file = fopen(base_url('assests/textf/'.$gname.'.txt'), 'r') or die('file not found');
echo fread($file, filesize('assests/textf/'.$gname.'.txt'));
fclose($file);
?>

</div>
