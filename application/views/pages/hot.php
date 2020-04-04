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
<form action="<?php echo site_url('Show_c/index'); ?>" method="post">
    <input name="inp">
    <table>
        <thead>
            <tr>
                <th>Game</th><th>price</th><th>Amount purchased</th><th>developer</th><th>publisher</th><th>release date</th><th>categories</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($hot as $row){
                echo '<tr>';
                echo '<td contenteditable="true"><input type="hidden" value='.$row['idGame'].' name="gname">'.$row['idGame'].'</td>
                <td contenteditable="true"><input type="hidden" value='.$row['idGame'].' name="gname">'.$row['price'].'</td>
                <td contenteditable="true"><input type="hidden" value='.$row['idGame'].' name="gname">'.$row['p_count'].'</td>
                <td contenteditable="true"><input type="hidden" value='.$row['idGame'].' name="gname">'.$row['developer'].'</td>
                <td contenteditable="true"><input type="hidden" value='.$row['idGame'].' name="gname">'.$row['publisher'].'</td>
                <td contenteditable="true"><input type="hidden" value='.$row['idGame'].' name="gname">'.$row['r_date'].'</td>
                <td contenteditable="true"><input type="hidden" value='.$row['idGame'].' name="gname">'.$row['category'].'</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <input type="submit" name="submit" value="Submit">
</form>
