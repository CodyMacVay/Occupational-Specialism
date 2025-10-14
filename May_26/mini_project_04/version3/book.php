<?php

echo "<form method='post' action=''>";

echo "<input type='time' name='app_time'>";

echo "<select name='staff'>";

foreach ($staff as $staf) {
    if($staf['role'] = "doc"){
        $role = "Doctor";
    } else if ($staf['role'] = "nur"){
        $role = "Nurse";
    }
    echo "<option value='".$staf['staffid'].">".$role." ".$staf['sname']." ".$staf['fname']." Room ".$staf['room']."</option>";
}