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
                echo '<td><form action='.echo site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['idGame'].'</button></form></td>
                <td><form action='.echo site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['price'].'</button></form></td>
                <td><form action='.echo site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['p_count'].'</button></form></td>
                <td><form action='.echo site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['developer'].'</button></form></td>
                <td><form action='.echo site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['publisher'].'</button></form></td>
                <td><form action='.echo site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['r_date'].'</button></form></td>
                <td><form action='.echo site_url('Show_c/index').' method="post"><button type="submit" value='.$row['idGame'].' name="gname">'.$row['category'].'</button></form></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
