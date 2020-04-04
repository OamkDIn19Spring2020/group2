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
            echo '<td><a href='.site_url($row['idGame']).'>'.$row['idGame'].'</a></td>
                    <td><a href='.site_url($row['idGame']).'>'.$row['price'].'</a></td>
                    <td><a href='.site_url($row['idGame']).'>'.$row['sale'].'%</a></td>
                    <td><a href='.site_url($row['idGame']).'>'.$row['NOW'].'</a></td>
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
