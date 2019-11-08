<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Controleer of de image wel echt is.
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['fileToUpload']["tmp_name"]);
    if ($check !== false) {
        echo "File is een image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is geen afbeelding.";
        $uploadOk = 0;
    }
}

// Controleer of de image niet al is toegevoegd.
if (file_exists($target_file)) {
    echo "Sorry, het bestand bestaat al.";
    $uploadOk = 0;
}

// controleer de grote van het bestand.
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, het bestand is te groot.";
    $uploadOk = 0;
}

// Sta alleen bepaalde file types toe (jpg, jpeg, png, gif).
if ($imageFileType != "jpg" && $imageFileType != "jpeg" &&
    $imageFileType != "png" && $imageFileType != "gif") {
    echo "Sorry alleen jpg, jpeg, png en gif's zijn toegestaan";
    $uploadOk = 0;
}

// Controleer of $uploadOk 0 is bij een error.
if ($uploadOk == 0){
    echo "Sorry de afbeelding is niet geupload";
    // als alles ok is probeer de afbeeling te uploaden
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "De file " . basename($_FILES["fileToUpload"]["name"]) . "is geupload";
    } else {
        echo "Sorry, er is iets mis gegaan";
    }

}
