<form id="hotform" action=" <?php echo site_url('Hot_c/hotgames') ?> " method="post">
  <fieldset class="fieldset">

    <label for="interval">Timeframe</label<br>
    <select class="interval" name="interval" onchange="this.form.submit()">
        <?php
        if(isset($inter)){
            if($inter === '1'){
                $string = 'Today';
            }
            elseif ($inter === '7') {
                $string  = 'This Week';
            }
            elseif ($inter === '30') {
                $string  = 'This Month';
            }
            elseif ($inter === '365') {
                $string  = 'This Year';
            }
            echo '<option hidden selected value="'.$inter.'">'.$string.'</option>';
        }

        ?>
        <option value="1">Today</option>
        <option value="7">This Week</option>
        <option value="30">This Month</option>
        <option value="365">This Year</option>
    </select>

    <noscript><input style="display:none;"type="submit" value="submit"></noscript>

 </fieldset>
</form>


<div class="gametable">
    <?php
    foreach ($hot as $row){
        echo '<div class="gameintable">
                <a class="gameimgTable" href='.site_url('Show_c/index/'.$row['idGame']).'>
                <img class="gameimgTable" src='.base_url().'assests/imgs/'.$row['idGame'].'.jpg>
                </a>
                <a class="gameNameTable" href='.site_url('Show_c/index/'.$row['idGame']).'><div class="text">';
        if(strpos($row['idGame'], '_')){
            $stringtoprint = str_replace('_', ' ', $row['idGame']);
            if(strpos($stringtoprint, '  ')){
                echo str_replace('  ', ': ', $stringtoprint);
            }
            else{
                echo $stringtoprint;
            }
        }
        else{
            echo $row['idGame'];
        }
        echo '<br>'.$row['NOW'].'¤</div>
                    </a>
                    <div class="priceTable">
                    <div class="addbutton">
                        <form action="Cart_c/pushing" method="post">
                            <button value='.$row['idGame'].' name="submit" type="submit">add to cart</button>
                        </form>
                    </div>
                </div>
                </div>';
    }

     ?>
</div>
