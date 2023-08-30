<?php
// Define the data as an array
$data = [
    [
        "albumId" => 100,
        "id" => 5000,
        "title" => "error quasi sunt cupiditate voluptate ea odit beatae",
        "url" => "https://via.placeholder.com/600/6dd9cb",
        "thumbnailUrl" => "https://via.placeholder.com/150/6dd9cb"
    ]
];

// Set the response header to JSON
header("Content-Type: application/json");

// Convert the data to JSON format and output it
echo json_encode($data);

?>
