<div id="unit" class="col-xs-12 col-sm-6 pad-vert-20">
    <div class="title-box">
        <p class="no-margin">UNIT</p>
    </div>
    <ul class="amenities-list">
        <li style="<?php if ($field_db['ac'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['ac'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['ac'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> AC
        </li>
        <li style="<?php if ($field_db['patio_balcony'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['patio_balcony'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['patio_balcony'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Patio / Balcony
        </li>   
        <li style="<?php if ($field_db['microwave'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['microwave'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['microwave'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Microwave
        </li>
        <li style="<?php if ($field_db['walk_in_closets'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['walk_in_closets'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['walk_in_closets'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Walk-In Closets
        </li>
        <li style="<?php if ($field_db['refrigerator'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['refrigerator'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['refrigerator'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Refrigerator
        </li>
        <li style="<?php if ($field_db['locking_room_doors'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['locking_room_doors'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['locking_room_doors'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Locking Room Doors
        </li>   
        <li style="<?php if ($field_db['washer_dryer'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['washer_dryer'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['washer_dryer'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Washer / Dryer
        </li>   
        <li style="<?php if ($field_db['storage_space'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['storage_space'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['storage_space'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Storage Space
        </li>   
        <li style="<?php if ($field_db['dishwasher'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['dishwasher'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['dishwasher'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Dishwasher
        </li>   
        <li style="<?php if ($field_db['furnished'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['furnished'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['furnished'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Furnished
        </li>   
        <li style="<?php if ($field_db['garbage_disposal'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['garbage_disposal'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['garbage_disposal'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Garbage Disposal
        </li>   
        <li style="<?php if ($field_db['ceiling_fans'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['ceiling_fans'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['ceiling_fans'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Ceiling Fans
        </li>                                   
    </ul>
</div>
