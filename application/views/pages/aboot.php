<div id="gamepage">


<?php
echo $gname;
if ($gname ='Fallout'){
  redirect('https://emojipedia.org/pile-of-poo/');
}
$file = fopen(base_url('assests/textf/'.$gname.'.php'), 'r') or die('file not found');
echo fread($file, filesize('assests/textf/'.$gname.'.php'));
fclose($file);
?>

</div>
