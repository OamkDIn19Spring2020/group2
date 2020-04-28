<div id="gamepage">


<?php
echo $loadinfo;
if(file_exists(base_url('assests/textf/'.$loadinfo))) {
    echo $loadinfo
}
/*else{

    $pageifnonefound = $loadinfo." is a game about things where you do stuff. <br>It was released at some point, near the release of another game. <br>Core features include nothing and everything.";
    echo $pageifnonefound;
}*/
?>

</div>
