<div id="gamepage">


<?php

$file = fopen(base_url('assests/textf/'.$loadinfo.'.php'), 'r') or die('file not found');
echo fread($file, filesize('assests/textf/'.$loadinfo.'.php'));
fclose($file);

?>

</div>
