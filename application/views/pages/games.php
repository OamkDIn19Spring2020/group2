
<table>
    <thead>
        <tr>
            <th>Game</th><th>price</th><th>developer</th><th>publisher</th><th>release date</th><th>categories</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($games === NULL){
            $games = $results;
        }
        if ($games === NULL){
            echo '<h3> No games found </h3>';
        }
        else{
            foreach ($games as $row){
                echo '<tr>';
                echo '<td><a href='.site_url($row['idGame']).'>'.$row['idGame'].'</a></td>
                <td><a href='.site_url($row['idGame']).'>'.$row['price'].'</a></td>
                <td><a href='.site_url($row['idGame']).'>'.$row['r_date'].'</a></td>
                <td><a href='.site_url($row['idGame']).'>'.$row['developer'].'</a></td>
                <td><a href='.site_url($row['idGame']).'>'.$row['publisher'].'</a></td>
                <td><a href='.site_url($row['idGame']).'>'.$row['category'].'</a></td>';
                echo '</tr>';
            }
        }
         ?>
    </tbody>
</table>
</div>
