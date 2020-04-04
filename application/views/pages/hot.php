<form action=" <?php echo site_url('Hot_c/hotgames') ?> " method="post">
  <fieldset class="fieldset">

    <label for="interval">Timeframe</label<br>
    <select class="interval" name="interval">
        <option value="1">Today</option>
        <option value="7">This Week</option>
        <option value="30">This Month</option>
        <option value="365">This Year</option>
    </select>

    <input type="submit" value="submit">

 </fieldset>
</form>

<form action="Show_c/index" method="post">

<div class="table">
    <div class="tr">
        <div class="td">Game</div>
        <div class="td">price</div>
        <div class="td">Amount Purchased</div>
        <div class="td">developer</div>
        <div class="td">publisher</div>
        <div class="td">release date</div>
        <div class="td">categories</div>
    </div>
    <?php
    foreach ($hot as $row) {
        echo '<button type="submit"><button name="gname" value='.$row['idGame']'><div class="tr">
            <div class="td">'.$row['idGame'].'</div>
            <div class="td">'.$row['price'].'</div>
            <div class="td">'.$row['p_count'].'</div>
            <div class="td">'.$row['developer'].'</div>
            <div class="td">'.$row['publisher'].'</div>
            <div class="td">'.$row['r_date'].'</div>
            <div class="td">'.$row['category'].'</div>
            </div></button></button>';
    }

     ?>
</div>

</form>



<!--    <table>
        <thead>
            <tr>
                <th>Game</th><th>price</th><th>Amount purchased</th><th>developer</th><th>publisher</th><th>release date</th><th>categories</th>
            </tr>
        </thead>
        <tbody>

            foreach ($hot as $row){
                echo '<tr>';
                echo '<td><form action='.site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['idGame'].'</button></form></td>
                <td><form action='.site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['price'].'</button></form></td>
                <td><form action='.site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['p_count'].'</button></form></td>
                <td><form action='.site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['developer'].'</button></form></td>
                <td><form action='.site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['publisher'].'</button></form></td>
                <td><form action='.site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['r_date'].'</button></form></td>
                <td><form action='.site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['category'].'</button></form></td>';
                echo '</tr>';
            }

        </tbody>
    </table>
-->
