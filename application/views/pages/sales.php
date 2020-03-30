<div>
I am a sales page :-D <br>
<?php
echo phpversion();
?>
<table>
    <thead>
        <tr>
            <th>Game</th><th>price</th><th>Sale</th><th>Now</th><th>developer</th><th>publisher</th><th>release date</th><th>categories</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sales as $row){
            echo '<tr>';
            echo '<td>'.$row['idGame'].'</td><td>'.$row['price'].'</td><td>'.$row['sale'].'%</td><td>'.$row['NOW'].'</td><td>'.$row['developer'].'</td><td>'.$row['publisher'].'</td><td>'.$row['r_date'].'</td><td>'.$row['category'].'</td><td>';
            echo '</tr>';
        }
         ?>
    </tbody>
</table>
</div>
