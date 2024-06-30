<?php
$apartments = [
    ["name" => "Tidepool Terrace", "img" => "images/houses/1.jpg", "bedrooms" => 3, "price" => 240, "rating" => 5],
    ["name" => "Coral Cove Suite", "img" => "images/houses/2.jpg", "bedrooms" => 3, "price" => 240, "rating" => 5],
    ["name" => "Seashell Sanctuary", "img" => "images/houses/3.jpg", "bedrooms" => 3, "price" => 240, "rating" => 5],
    ["name" => "Mangrove Manor", "img" => "images/houses/4.jpg", "bedrooms" => 3, "price" => 240, "rating" => 5],
    ["name" => "Pelican's Perch", "img" => "images/houses/5.jpg", "bedrooms" => 3, "price" => 240, "rating" => 5],
    ["name" => "Adradis Lounge", "img" => "images/houses/6.jpg", "bedrooms" => 3, "price" => 240, "rating" => 4],
    ["name" => "Mermaid's Haven", "img" => "images/houses/7.jpg", "bedrooms" => 3, "price" => 240, "rating" => 5]
];

foreach ($apartments as $apartment) {
    echo '<div class="apartment_box">';
    echo '<div class="apartment_img"><img src="' . $apartment['img'] . '" alt="' . $apartment['name'] . '" /></div>';
    echo '<div class="description">';
    echo '<div class="apartment_name">' . $apartment['name'] . '<br /><br /></div>';
    echo 'Bedrooms:' . $apartment['bedrooms'] . '<br /><br />';
    echo 'Price: ' . $apartment['price'] . ' € / Night<br /><br />';
    echo '<div class="ratings">Rated by our guests';
    for ($i = 0; $i < 5; $i++) {
        echo '<span class="fa fa-star' . ($i < $apartment['rating'] ? ' checked' : '') . '"></span>';
    }
    echo '</div></div></div><div class="line2"></div>';
}
