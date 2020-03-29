<form action=" <?php echo site_url('Games/index') ?> " method="post">
  <fieldset class="fieldset">
    <label for="s_game">Search</label><br>
    <input type="text" id="s_game" name="s_game">

    <input type="submit" value="submit">

  </fieldset>
</form>
<table>
    <thead>
        <tr>
            <th>Game</th><th>price</th><th>developer</th><th>publisher</th><th>release date</th><th>categories</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($games as $row){
            echo '<tr>';
            echo '<td>'.$row['idGame'].'</td><td>'.$row['price'].'</td><td>'.$row['developer'].'</td><td>'.$row['publisher'].'</td><td>'.$row['r_date'].'</td><td>'.$row['category'].'</td><td>';
            echo '</tr>';
        }
         ?>
    </tbody>
</table>
</div>
