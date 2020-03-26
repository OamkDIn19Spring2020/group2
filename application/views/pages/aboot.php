ïnsert a picture of a boot in here => (.)
  <form action=" <?php echo site_url('Aboot') ?> " method="post">
    <fieldset class="fieldset">

      <legend>User info</legend>

      <label for="uname">Username:</label><br>
      <input type="text" id="uname" name="username"><br>

      <label for="password">Password:</label><br>
      <input type="yexy" id="pword" name="password"><br>

      <label for="email">E-mail address:</label><br>
      <input type="email" id="email" name="email"><br>

      <label for="phone">phone</label><br>
      <input type="number" id="phone" name="phone"><br>

      <label for="country">country</label><br>
      <input type="text" id="country" name="country"><br>

      <input type="submit" value="submit">

    </fieldset>
  </form>
  <table>
      <thead>
          <tr>
              <th>username</th><th>email</th><th>password</th><th>creation time</th><th>phone#</th><th>country</th>
          </tr>
      </thead>
      <tbody>
          <?php
          foreach ($user as $row){
              echo '<tr>';
              echo '<td>'.$row['username'].'</td><td>'.$row['email'].'</td><td>'.$row['password'].'</td><td>'.$row['create_time'].'</td><td>'.$row['phone'].'</td><td>'.$row['country'].'</td><td>';
              echo '</tr>';
          }
           ?>
      </tbody>
  </table>
