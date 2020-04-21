<div id="gamepage">


<?php
$pageifnonefound = $loadinfo." is a game about things where you do stuff. <br>It was release at some point, near the release of another game. <br>Core features include nothing and everything.";

if(fopen(base_url('assests/textf/'.$loadinfo.'.php'), 'r')){
    $file = fopen(base_url('assests/textf/'.$loadinfo.'.php'), 'r');
    echo fread($file, filesize('assests/textf/'.$loadinfo.'.php'));
    fclose($file);
}
else{
    echo $pageifnonefound;
}
?>

</div>
