<div id="community" class="col-xs-12 col-sm-6 pad-vert-20">
    <div class="title-box">
        <p class="no-margin">COMMUNITY</p>
    </div>
    <ul class="amenities-list">
        <li style="<?php if ($field_db['laundry_facilities'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['laundry_facilities'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Laundry Facilities
        </li>
        <li style="<?php if ($field_db['computer_lab'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['computer_lab'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Computer Lab
        </li>   
        <li style="<?php if ($field_db['fitness_center'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['fitness_center'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Fitness Center
        </li>
        <li style="<?php if ($field_db['lounge'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['lounge'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Lounge
        </li>
        <li style="<?php if ($field_db['controlled_access'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['controlled_access'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Controlled Access
        </li>
        <li style="<?php if ($field_db['swimming_pool'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['swimming_pool'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Swimming Pool
        </li>   
        <li style="<?php if ($field_db['on-site-maintenance'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['on-site-maintenance'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Onsite Maintenance
        </li>   
        <li style="<?php if ($field_db['courtyard'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['courtyard'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Courtyard
        </li>   
        <li style="<?php if ($field_db['parking'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['parking'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Parking
        </li>   
        <li style="<?php if ($field_db['resident_functions'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['resident_functions'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Resident Functions
        </li>   
        <li style="<?php if ($field_db['on_bus_route'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['on_bus_route'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> On Bus Route
        </li>   
        <li style="<?php if ($field_db['elevator'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['elevator'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';} else {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            }?> Elevator
        </li>                                   
    </ul>
</div>
