<div class="gametable">
        <?php
        if ($games === NULL){
            $games = $results;
        }
        if ($games === NULL){
            echo '<h3> No games found </h3>';
        }
        else{
            foreach ($games as $row){
                echo '<div class="gameintable">
                        <a class="gameimgTable" href='.site_url('Show_c/index/'.$row['idGame']).'>
                        <img class="gameimgTable" src='.base_url().'assests/imgs/'.$row['idGame'].'.jpg>
                        </a>
                        <a class="gameNameTable" href='.site_url('Show_c/index/'.$row['idGame']).'><div class="text">'.$row['idGame'].'</div></a>
                        <div class="priceTable">
                            <a href='.site_url('Show_c/index/'.$row['idGame']).'>
                                <div class="gamePrice">'.$row['price'].'¤</div>
                            </a>
                            <div class="addbutton">
                                <form action="Cart_c/addtocart" method="post">
                                    <button value='.$row['idGame'].' name="submit" type="submit">add to cart</button>
                                </form>
                            </div>
                        </div>
                        </div>';
            }
        }
         ?>
</div>
