<div class="gametable">
    <?php
    foreach ($sales as $key => $row) {
        $currentkey = $key
        echo '<div class="gameintable">
                <a class="gameimgTable" href='.site_url('Show_c/index/'.$row['idGame']).'>
                <img class="gameimgTable" src='.base_url().'assests/imgs/'.$row['idGame'].'.jpg>
                </a>
                <a class="gameNameTable" href='.site_url('Show_c/index/'.$row['idGame']).'><div class="text">';
        if(strpos($row['idGame'], '_')){
            $stringtoprint = str_replace('_', ' ', $row['idGame']);
            if(strpos($stringtoprint, '  ')){
                echo str_replace('  ', ': ', $stringtoprint);
            }
            else{
                echo $stringtoprint;
            }
        }
        else{
            echo $row['idGame'];
        }
        echo '<br>'.$row['price'].'</s>-'.$row['sale'].'% =>'.$row['NOW'].'¤</div></a>
                    </a>
                    <div class="priceTable">
                    <div class="addbutton">
                        <form action="Cart_c/pushing" method="post">
                            <button value='.$currentkey.' name="submit" type="submit">add to cart</button>
                        </form>
                    </div>
                </div>
                </div>';
    }

     ?>
</div>
