<div id="cartcont">
<h1>Here are your items:</h1>

        <?php
            $total = 0;
        foreach ($_SESSION['testarray'] as $game=>$value){

            foreach ($value as $row){
                $total = $total + $row['NOW'];
                echo '<div class="gameInCart">';
                    echo '<div class="gameImgCart"><img class="gameImgCart" src='.base_url().'assests/imgs/'.$row['idGame'].'.jpg></div>';
                    echo '<div class="gameNameCart">';
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
                    echo '</div>';
                    echo '<div class="priceCart">'.$row['NOW'].'¤</div>';
                    echo '<form action="Cart_c/removeFromCart" method="post" class="removeGame"><button type="submit" value='.$row['idGame'].' name="smth">remove</button></form>';
                echo '</div>';
            }

        }

        if (count($_SESSION['testarray']) >  0){
        echo 'Total: '.$total.'¤';
        echo    '<form action='.site_url('Cart_c/index').' method="post">
            <fieldset class="fieldset">
            <label for="method">method</label<br>
            <select class="meth" name="meth">
            <option value="skrill">Skrill</option>
            <option value="chunguscoin">Chunguscoin</option>
            <option value="paypal">Paypal</option>
            <option value="renminbi">Renminbi</option>
            </select><br>

            <label for="promo">Promocode</label><br>
            <input type="promocode" name="promo"><br>
            <button type="submit" name="button">Purchase</button>

            </fieldset>
            </form>';
        }
        else{
            echo 'your cart is empty! <br><a href='.site_url('games').' stye="color:#120eb7;"> Spend some money, will ya?</a>';
        }
        ?>
</div>
