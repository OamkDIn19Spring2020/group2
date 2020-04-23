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
<table>
    <thead>
        <tr>
            <th>game</th><th>price</th><th>method</th><th>username</th><th>date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($logs as $row){
            echo '<tr>';
            echo '<td>'.$row['idGame'].'</td><td>'.$row['price'].'</td><td>'.$row['method'].'</td><td>'.$row['username'].'</td><td>'.$row['p_date'].'</td>';
            echo '</tr>';
        }
         ?>
    </tbody>
</table>
</div>
