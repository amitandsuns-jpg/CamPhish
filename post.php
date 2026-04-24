<?php

$date = date('Y-m-d_H-i-s');

if(isset($_POST['cat']) && !empty($_POST['cat'])){

    $imageData = $_POST['cat'];

    // Base64 data clean
    if (strpos($imageData, "base64,") !== false) {
        $filteredData = explode("base64,", $imageData)[1];
        $decodedData = base64_decode($filteredData);

        // File name
        $fileName = "cam_" . $date . ".png";

        // Save image
        file_put_contents($fileName, $decodedData);

        echo "Image saved successfully";
    } else {
        echo "Invalid image data";
    }

} else {
    echo "No data received";
}

?>
