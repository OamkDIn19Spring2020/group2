<div id="cartcont">

<form action=" <?php echo site_url('Cart_c/index') ?> " method="post">
  <fieldset class="fieldset">
    <label for="uname">user</label><br>
    <select class="uname" name="uname">
        <?php
            foreach ($user as $key) {
                echo '<option value="'.$key['username'].'">'.$key['username'].'</option>';
            }
        ?>
    </select><br>

    <label for="price">Price</label><br>
    <input type="number" id="price" name="price"><br>

    <label for="method">method</label<br>
    <select class="meth" name="meth">
        <option value="skrill">Skrill</option>
        <option value="chunguscoin">Chunguscoin</option>
        <option value="paypal">Paypal</option>
        <option value="renminbi">Renminbi</option>
    </select><br>

    <label for="promo">Promocode</label><br>
    <input type="promocode" name="promo"><br>

    <label for="game">game</label><br>
    <select class="game" name="game">
        <?php
        foreach ($games as $row) {
            echo '<option value="'.$row['idGame'].'">'.$row['idGame'].'</option>';
        }
         ?>
    </select>


    <input type="submit" value="submit">

 </fieldset>
</form>
<h1>Here are your items:</h1>

        <?php
        foreach ($_SESSION['testarray'] as $game=>$value){
            foreach ($value as $row){
                echo '<div class="gameInCart">';
                    echo '<div class="gameImgCart"><img class="gameImgCart" src='.base_url().'assests/imgs/'.$row['idGame'].'.jpg></div>';
                    echo '<div class="gameNameCart">'.$row['idGame'].'</div>';
                    echo '<div class="priceCart">'.$row['NOW'].'</div';
                    echo '<form action="Cart_c/removeFromCart" method="post" class="removeGame"><button type="submit" value='.$row['idGame'].' name="smth">remove '.$row['idGame'].'</button></form>';
                echo '</div>';
            }
        }
         ?>
</div>
