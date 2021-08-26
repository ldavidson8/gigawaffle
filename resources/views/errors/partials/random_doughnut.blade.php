<?php
    $random_image_number = rand(0, 2);
    $random_rotation = rand(0, 360);
    $random_image_string = "";

    switch($random_image_number)
    {
        case 0:
            $random_image_string = asset('img/error pages/Waffle-1.png');
            break;
        case 1:
            $random_image_string = asset('img/error pages/Waffle-3.png');
            break;
        case 2:
            $random_image_string = asset('img/error pages/Waffle-4.png');
            break;
    }

    echo
        "<div class='waffle-image-outer'>",
        "<img rel='preload' src='$random_image_string' class='waffle-image' style='transform: translate(-50%, -50%) rotate({$random_rotation}deg);' />",
        "</div>";
  