<div id="gamepage">


<?php
echo $loadinfo;
if($loadinfo = "Fallout_76"){
    redirect('https://en.wikipedia.org/wiki/Pile_of_Poo_emoji#/media/File:Emoji_u1f4a9.svg');
}
$file = fopen(base_url('assests/textf/'.$loadinfo.'.php'), 'r') or die('file not found');
echo fread($file, filesize('assests/textf/'.$loadinfo.'.php'));
fclose($file);

?>

</div>
