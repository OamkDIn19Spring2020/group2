<div id="gamepage">


<?php
echo $loadinfo;
if(file_exists(base_url('assests/textf/'.$loadinfo))) {
    $file = fopen(base_url('assests/textf/'.$loadinfo), 'r');
    echo fread($file, filesize('assests/textf/'.$loadinfo));
    fclose($file);
}
else{
    if(strpos($loadinfo, '_')){
        $loadinfo = str_replace('_', ' ', $loadinfo);
        if(strpos($loadinfo, '  ')){
            $loadinfo = str_replace('  ', ': ', $loadinfo);
        }
    }

    $pageifnonefound = $loadinfo." is a game about things where you do stuff. <br>It was released at some point, near the release of another game. <br>Core features include nothing and everything.";
    echo $pageifnonefound;
}
?>

</div>
