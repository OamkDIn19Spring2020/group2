<form id="hotform" action=" <?php echo site_url('Games_c/s_index') ?> " method="post">
  <fieldset class="fieldset">

    <label for="greatless">Released</label<br>
    <select name="greatless" onchange="this.form.submit()">
        <?php
        if(isset($befaft)){
            if($befaft === '>='){
                $string = 'After';
            }
            elseif ($befaft === '<=') {
                $string  = 'Before';
            }
            echo '<option hidden selected value="'.$befaft.'">'.$string.'</option>';
        }

        ?>
        <option value=">=">After</option>
        <option value="<=">Before</option>
    </select>
    <label for="release">Date</label>
    <input type="date" name="search_date" onchange="this.form.submit()" value="<?php if(isset($datum)){echo $datum;} else{ echo '1970-01-01';} ?>">

    <label for="sortby">Sort By</label>
    <select name="sortby" onchange="this.form.submit()">
        <?php
            if (isset($sortedlist)) {
                if($sortedlist === 'idGame'){
                    $string = 'Game, alphabetical order';
                }
                elseif ($sortedlist === 'idGame desc') {
                    $string  = 'Game, revese alphabetical order';
                }
                elseif ($sortedlist === 'r_date') {
                    $string  = 'Release, oldest first';
                }
                elseif ($sortedlist === 'r_date desc') {
                    $string  = 'Release, newest first';
                }
                elseif ($sortedlist === 'price') {
                    $string  = 'Price, cheapest first';
                }
                elseif ($sortedlist === 'price desc') {
                    $string  = 'Price, most expensive first';
                }
                elseif ($sortedlist === 'developer') {
                    $string  = 'Developer, aplhabetical order';
                }
                elseif ($sortedlist === 'developer desc') {
                    $string  = 'Developer, reverse alpabetical order';
                }
                elseif ($sortedlist === 'publisher') {
                    $string  = 'Publisher, alphabetical order';
                }
                elseif ($sortedlist === 'publisher desc') {
                    $string  = 'Publisher, reverse alphabetical order';
                }
                echo '<option hidden selected value="'.$sortedlist.'">'.$string.'</option>';
            }
         ?>
         <option value="r_date desc">Release, newest first</option>
         <option value="r_date">Release, oldest first</option>
         <option value="price">Price, cheapest first</option>
         <option value="price desc">Price, most expensive first</option>
         <option value="idGame">Game, alphabetical order</option>
         <option value="idGame desc">Game, revese alphabetical order</option>
         <option value="developer">Developer, aplhabetical order</option>
         <option value="developer desc">Developer, reverse alpabetical order</option>
         <option value="publisher">Publisher, alphabetical order</option>
         <option value="publisher desc">Publisher, reverse alphabetical order</option>
    </select>


    <noscript><input style="display:none;"type="submit" value="submit"></noscript>

 </fieldset>
</form>
<div class="gametable">
        <?php
        if ($games === NULL){
            $games = $results;
        }
        if ($games === NULL){
            echo '<h3> No games found </h3>';
        }
        else{
            foreach ($games as $row){
                echo '<div class="gameintable">
                        <a class="gameimgTable" href='.site_url('Show_c/index/'.$row['idGame']).'>
                        <img class="gameimgTable" src='.base_url().'assests/imgs/'.$row['idGame'].'.jpg>
                        </a>
                        <a class="gameNameTable" href='.site_url('Show_c/index/'.$row['idGame']).'><div class="text">'.$row['idGame'].'<br>'.$row['price'].'¤</div>
                            </a>
                            <div class="priceTable">
                            <div class="addbutton">
                                <form action="Cart_c/addtocart" method="post">
                                    <button value='.$row['idGame'].' name="submit" type="submit">add to cart</button>
                                </form>
                            </div>
                        </div>
                        </div>';
            }
        }
         ?>
</div>
