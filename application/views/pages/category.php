<form action=" <?php echo site_url('Category_c/index') ?> " method="post">
  <fieldset class="fieldset">

    <label for="cat">Search</label><br>
    <input type="text" id="cat" name="cat"><br>
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
        foreach ($cats as $row){
            echo '<tr>';
            echo '<td>'.$row['idGame'].'</td><td>'.$row['price'].'</td><td>'.$row['developer'].'</td><td>'.$row['publisher'].'</td><td>'.$row['r_date'].'</td><td>'.$row['category'].'</td>';
            echo '</tr>';
        }
         ?>
    </tbody>
</table>
</div>
