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
            <form action="" method="post">
                <label for="merk">merk:</label>
                <input type="text" name="merk"> <br/>
                <label for="model">model:</label>
                <input type="text" name="model"><br/>
                <label for="kenteken">kenteken:</label>
                <input type="text" name="kenteken"><br/>
                <label for="kilmometerstand">kilometerstand:</label>
                <input type="text" name="kilometerstand"><br/>
                <label for="brandstof">brandstof:</label>
                <input class="brandstof" type="radio" name="brandstof">
                <p class="brandstof_type">benzine</p>
                <input class="brandstof" type="radio" name="brandstof">
                <p class="brandstof_type">diesel</p>
                <input class="brandstof" type="radio" name="brandstof">
                <p class="brandstof_type">hybride</p>
                <input class="brandstof" type="radio" name="brandstof">
                <p class="brandstof_type">LPG</p>
                <input class="brandstof" type="radio" name="brandstof">
                <p class="brandstof_type">Elektrisch</p><br/>
                <label for="transmissie">transmissie:</label>
                <input class="transmissie" type="radio" name="transmissie">
                <p class="transmissie_type">handgeschakeld</p>
                <input class="transmissie" type="radio" name="transmissie">
                <p class="transmissie_type">automaat</p><br/>
                <label for="carrosserie">carrosserie:</label>
                <input type="text" name="carrosserie"><br/>
                <input type="button" value="klik hier">
            </form>
        </div>
    </div>

</div>
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