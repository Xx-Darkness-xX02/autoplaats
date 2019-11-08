<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/verkopen.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="topnav">
    <a href="index.php" class="active">home</a>
    <div id="myLinks">
        <a href="#">zoeken</a>
        <a href="verkopen.php">verkopen</a>
        <a href="#">over</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>
<div class="container">
    <div id="formulier_container">
        <div id="formulier_holder">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="merk">merk:</label>
                <input type="text" name="merk"> <br/>
                <label for="model">model:</label>
                <input type="text" name="model"><br/>
                <label for="kenteken">kenteken:</label>
                <input type="text" name="kenteken"><br/>
                <label for="kilmometerstand">kilometerstand:</label>
                <input type="text" name="kilometerstand"><br/>
                <label for="brandstof">brandstof:</label>
                <select name="brandstof" id="brandstof">
                    <option class="benzine" value="benzine">benzine</option>
                    <option class="diesel" value="diesel">diesel</option>
                    <option class="LPG" value="LPG">LPG</option>
                    <option class="hybride" value="hybride">hybride</option>
                    <option class="elektrisch" value="elektrisch">elektrisch</option>
                </select><br />
                <label for="transmissie">transmissie:</label>
                <input class="transmissie" type="radio" name="transmissie">
                <p class="transmissie_type">handgeschakeld</p>
                <input class="transmissie" type="radio" name="transmissie">
                <p class="transmissie_type">automaat</p><br/>
                <label for="carrosserie">carrosserie:</label>
                <input type="text" name="carrosserie"><br/>
                <label for="prijs">prijs:</label>
                <input type="text" name="prijs" value="€"><br />
                <label for="afbeelding_auto">afbeelding:</label>
                <input class="file" type="file" name="fileToUpload">
                <input class="submit" type="submit" name="submit" value="klik hier">
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $merk = $_POST['merk'];
    $model = $_POST['model'];
    $kenteken = $_POST['kenteken'];
    $kilometerstand = $_POST['kilometerstand'];
    $brandstof = $_POST['brandstof'];
    $transmissie = $_POST['transmissie'];
    $carrosserie = $_POST['carrosserie'];
    $prijs = $_POST['prijs'];
    $bedrijf = $_FILES['fileToUpload']['name'];
     $dbc = mysqli_connect("localhost", "root", "", "auto");
     $query = "INSERT INTO voertuigen (merk, model, kenteken, brandstof, transmissie, carrosserie, afbeelding) VALUES ('$merk', '$model', '$kenteken', '$brandstof', '$transmissie', '$carrosserie', '$bedrijf')";
     mysqli_query($dbc, $query);
     mysqli_close($dbc);
}



?>

<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
</body>
</html>