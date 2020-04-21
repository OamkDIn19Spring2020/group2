<div id="gamepage">


<?php
echo $loadinfo;

$file = fopen(base_url('assests/textf/'.$loadinfo.'.php'), 'r') or die('file not found');
echo fread($file, filesize('assests/textf/'.$gname.'.php'));
fclose($file);

if ($loadinfo ='Fallout_76'){
    redirect('https://en.wikipedia.org/wiki/Pile_of_Poo_emoji#/media/File:Emoji_u1f4a9.svg');
}
?>

</div>
