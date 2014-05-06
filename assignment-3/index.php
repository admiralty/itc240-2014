<?php

$parks = [
        [ "name" => "Greenlake Park", "neighborhood" => "Greenlake", "rating" => "10/10" ],
        [ "name" => "Kerry Park", "neighborhood" => "Upper Queen Ann", "rating" => "10/10" ],
        [ "name" => "Madrona Park", "neighborhood" => "Madrona", "rating" => "9/10" ],
        [ "name" => "Ravenna Park", "neighborhood" => "Ravenna", "rating" => "8/10" ],
        [ "name" => "Volunteer Park", "neighborhood" => "Capitol Hill", "rating" => "6/10" ],
];

$show = "all";
if (isset($_REQUEST["show"])) {
        $show = $_REQUEST["show"];
}
        
include("webpage.php");