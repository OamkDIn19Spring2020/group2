<div id="gamepage">


<?php

if(!fopen(base_url('assests/textf/'.$loadinfo.'.php'), 'r')){
    if(strpos($loadinfo, '_')){
        $loadinfo = str_replace('_', ' ', $loadinfo);
        if(strpos($loadinfo, '  ')){
            $loadinfo = str_replace('  ', ': ', $loadinfo);
        }
    }
    $pageifnonefound = $loadinfo." is a game about things where you do stuff. <br>It was released at some point, near the release of another game. <br>Core features include nothing and everything.";
    echo $pageifnonefound;
}
else{
    $file = fopen(base_url('assests/textf/'.$loadinfo.'.php'), 'r');
    echo fread($file, filesize('assests/textf/'.$loadinfo.'.php'));
    fclose($file);
}

?>

</div>
