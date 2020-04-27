<table>
    <thead>
        <tr>
            <th>Game</th><th>Price</th><th>method</th><th>date of purchase</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($purchased as $row){
            echo '<tr>';
            echo '<td>'.$row['idGame'].'</td><td>'.$row['price'].'</td><td>'.$row['method'].'</td><td>'.$row['p_date'].'</td>';
            echo '</tr>';
        }
         ?>
    </tbody>
</table>
