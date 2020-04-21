<div id="gamepage">


<?php
echo $gname;

$file = fopen(base_url('assests/textf/'.$gname.'.php'), 'r') or die('file not found');
echo fread($file, filesize('assests/textf/'.$gname.'.php'));
fclose($file);

if ($gname ='Fallout_76'){
    redirect('https://en.wikipedia.org/wiki/Pile_of_Poo_emoji#/media/File:Emoji_u1f4a9.svg');
}
?>

</div>
