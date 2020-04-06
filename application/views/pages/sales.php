<div class="gametable">
    <?php
    foreach ($sales as $row) {
        echo '<div class="gameintable">
                <a class="gameimgTable" href='.site_url('Show_c/index/'.$row['idGame']).'>
                <img class="gameimgTable" src='.base_url().'assests/imgs/'.$row['idGame'].'.jpg>
                </a>
                <a class="gameNameTable" href='.site_url('Show_c/index/'.$row['idGame']).'><div class="text">'.$row['idGame'].'<br>'.$row['price'].'</s>-'.$row['sale'].'% =>'.$row['NOW'].'¤</div></a>
                    </a>
                    <div class="priceTable">
                    <div class="addbutton">
                        <form action="Cart_c/addtocart" method="post">
                            <button value='.$row['idGame'].' name="submit" type="submit">add to cart</button>
                        </form>
                    </div>
                </div>
                </div>';
    }

     ?>
</div>
