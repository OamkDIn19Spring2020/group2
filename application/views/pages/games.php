
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
                echo '<td>'.$row['idGame'].'</td><td>'.$row['price'].'</td><td>'.$row['developer'].'</td><td>'.$row['publisher'].'</td><td>'.$row['r_date'].'</td><td>'.$row['category'].'</td><td>';
                echo '</tr>';
            }
        }
         ?>
    </tbody>
</table>
</div>
