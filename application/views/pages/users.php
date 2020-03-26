<table>
    <thead>
        <tr>
            <th>username</th><th>email</th><th>password</th><th>creation time</th><th>phone#</th><th>country</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($accounts as $row){
            echo '<tr>';
            echo '<td>'.$row['username'].'</td><td>'.$row['email'].'</td><td>'.$row['password'].'</td><td>'.$row['create_time'].'</td><td>'.$row['phone'].'</td><td>'.$row['country'].'</td><td>';
            echo '</tr>';
        }
         ?>
    </tbody>
</table>
