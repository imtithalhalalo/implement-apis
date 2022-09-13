<?php
    $now_time = time();
    $for_christmas = strtotime('25 December 2022');

    //find time left
    $time_left = $for_christmas - $now_time;
    
    //find days left
    $days = round($time_left/86400);

    $result = [
        "now_time" => $now_time,
        "for_christmas" => $for_christmas,
        "days" => $days
    ];
    echo json_encode($result)
?>
