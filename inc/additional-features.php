<div class="col-xs-12 col-sm-6 pad-vert-20">
    <div class="title-box">
        <p class="no-margin">ADDITIONAL</p>
    </div>
    <ul class="amenities-list">
        <li>
            <?php 
            if ($field_db['additional_one'] !== "") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span> ' . $field_db['additional_one'];
            }?>
        </li>
        <li>
            <?php 
            if ($field_db['additional_two'] !== "") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span> ' . $field_db['additional_two'];
            }?>
        </li>
        <li>
            <?php 
            if ($field_db['additional_three'] !== "") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span> ' . $field_db['additional_three'];
            }?>
        </li>
        <li>
            <?php 
            if ($field_db['additional_four'] !== "") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span> ' . $field_db['additional_four'];
            }?>
        </li>
        <li>
            <?php 
            if ($field_db['additional_five'] !== "") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span> ' . $field_db['additional_five'];
            }?>
        </li>
        <li>
            <?php 
            if ($field_db['additional_six'] !== "") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span> ' . $field_db['additional_six'];
            }?>
        </li>
        <li>
            <?php 
            if ($field_db['additional_seven'] !== "") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span> ' . $field_db['additional_seven'];
            }?>
        </li>
        <li>
            <?php 
            if ($field_db['additional_eight'] !== "") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span> ' . $field_db['additional_eight'];
            }?>
        </li>
    </ul>
</div>
