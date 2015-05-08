<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 pad-vert-20">
    <div class="title-box">
        <p class="no-margin">DORM FEATURES</p>
    </div>
    <ul class="amenities-list">
        <li style="<?php if ($field_db['academic_support_center'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['academic_support_center'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['academic_support_center'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Academic Support Center
        </li>
        <li style="<?php if ($field_db['computer_lab'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['computer_lab'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['computer_lab'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Computer Lab
        </li>   
        <li style="<?php if ($field_db['library'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['library'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['library'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Library
        </li>
        <li style="<?php if ($field_db['ud-academic_advising'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['ud-academic_advising'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['ud-academic_advising'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> UD Academic Advising
        </li>
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
        <li style="<?php if ($field_db['carpet_in_room'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['carpet_in_room'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['carpet_in_room'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Carpet in Room
        </li>   
        <li style="<?php if ($field_db['dining_onsite'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['dining_onsite'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['dining_onsite'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Dining Onsite
        </li>   
        <li style="<?php if ($field_db['music_practice_room'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['music_practice_room'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['music_practice_room'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Music Practice Room
        </li>   
        <li style="<?php if ($field_db['piano'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['piano'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['piano'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Piano
        </li>   
        <li style="<?php if ($field_db['dance_studio'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['dance_studio'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['dance_studio'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Dance Studio
        </li>   
        <li style="<?php if ($field_db['exercise_room'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['exercise_room'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['exercise_room'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Exercise Room
        </li>   
        <li style="<?php if ($field_db['game_room'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['game_room'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['game_room'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Game Room
        </li>   
        <li style="<?php if ($field_db['laundry_room_on_floor'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['laundry_room_on_floor'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['laundry_room_on_floor'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Laundry Room on Floor
        </li>
        <li style="<?php if ($field_db['laundry_ground_floor'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['laundry_ground_floor'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['laundry_ground_floor'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Laundry Room on Ground Floor
        </li>
        <li style="<?php if ($field_db['quiet_study_area'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['quiet_study_area'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['quiet_study_area'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Quiet Study Area
        </li> 
        <li style="<?php if ($field_db['community_kitchen'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['community_kitchen'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['community_kitchen'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> Community Kitchen
        </li>  
        <li style="<?php if ($field_db['iu_secure_wifi'] == "N") {echo "color:#989898;";} ?>">
            <?php 
            if ($field_db['iu_secure_wifi'] == "Y") {
                echo '<span class="glyphicon glyphicon-ok-circle" style="color:green"></span>';
            } else if ($field_db['iu_secure_wifi'] == "N") {
                echo '<span class="glyphicon glyphicon-remove-circle" style="color:red"></span>';
            } else {
                echo '<span class="glyphicon glyphicon-question-sign"></span>'
            ;}?> IU Secure WIFI
        </li>                                         
    </ul>
</div>
