<div class="col-xs-12 col-sm-6 pad-vert-20">
    <div class="title-box">
        <p class="no-margin">UTILITIES | PETS</p>
    </div>
    <ul class="utilities-list">
        <li style="<?php if ($field_db['electric_gas'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['electric_gas'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['electric_gas'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Electric / Gas
        </li>
        <li style="<?php if ($field_db['cable'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['cable'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['cable'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Cable
        </li>   
        <li style="<?php if ($field_db['trash'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['trash'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['trash'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Trash
        </li>
        <li style="<?php if ($field_db['internet'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['internet'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['internet'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Internet
        </li>
        <li style="<?php if ($field_db['water'] == "N") {echo "color:#989898;";} ?>">
           <?php 
            if ($field_db['water'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['water'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Water
        </li>
    </ul>
    <ul class="utilities-list">
        <li style="<?php if ($field_db['dogs_allowed'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['dogs_allowed'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['dogs_allowed'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Dogs Allowed
        </li>   
        <li style="<?php if ($field_db['cats_allowed'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['cats_allowed'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['cats_allowed'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Cats Allowed
        </li>   
        <li style="<?php if ($field_db['other_pets_allowed'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['other_pets_allowed'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['other_pets_allowed'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Other Allowed
        </li>   
    </ul>
</div>
