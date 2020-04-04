<form action=" <?php echo site_url('Hot_c/hotgames') ?> " method="post">
  <fieldset class="fieldset">

    <label for="interval">Timeframe</label<br>
    <select class="interval" name="interval">
        <option value="none" selected disabled hidden>
          This Week
      </option>
        <?php if(isset($inter))
        echo '<option value='.$inter.'>';
        if ($inter = '1'){
            echo 'Today';
        }
        elseif ($inter = '7') {
            echo 'This Week';
        }
        elseif ($inter = '30') {
            echo 'This Month';
        }
        elseif ($inter = '365') {
            echo 'This Year';
        }
        echo '</option>';
        ?>
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
            echo '<td><a href='.site_url($row['idGame']).'>'.$row['idGame'].'</td>
            <td><a href='.site_url($row['idGame']).'>'.$row['price'].'</a></td>
            <td><a href='.site_url($row['idGame']).'>'.$row['p_count'].'</a></td>
            <td><a href='.site_url($row['idGame']).'>'.$row['developer'].'</a></td>
            <td><a href='.site_url($row['idGame']).'>'.$row['publisher'].'</a></td>
            <td><a href='.site_url($row['idGame']).'>'.$row['r_date'].'</a></td>
            <td><a href='.site_url($row['idGame']).'>'.$row['category'].'</a></td>';
            echo '</tr>';
        }
         ?>
    </tbody>
</table>
</div>
