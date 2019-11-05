<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="topnav">
    <a href="index.php" class="active">home</a>
    <div id="myLinks">
        <a href="#">zoeken</a>
        <a href="#">verkopen</a>
        <a href="#">over</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>
<div id="container">
    <div id="trending">
        <h2>Trending</h2>
        <div class="auto">
            <h3>Merk:</h3>
            <img src="image/front-left-side-47.jpg">
            <p>kilometer-stand:</p>
            <p>brandstof:</p>
            <p>transmissie:</p>
        </div>

        <div class="auto">
            <h3>Merk:</h3>
            <img src="image/golf4dr-gls.jpg">
            <p>kilometer-stand:</p>
            <p>brandstof:</p>
            <p>transmissie:</p>
        </div>

        <div class="auto">
            <h3>Merk:</h3>
            <img src="image/420x315_white-background.jpg">
            <p>kilometer-stand:</p>
            <p>brandstof:</p>
            <p>transmissie:</p>
        </div>

        <div class="auto">
            <h3>Merk:</h3>
            <img src="image/kfz53100128_v765862-01.jpg">
            <p>kilometer-stand:</p>
            <p>brandstof:</p>
            <p>transmissie:</p>
        </div>
    </div>
</div>
<div class="verkopen">
    <h3>Je auto verkopen?</h3>
    <h3>Het is 5 minuten werk!</h3>
    <a href="verkopen.php">
        <div class="button">Klik hier</div>
    </a>
</div>
<div id="disclaimer">
    <h2>disclaimer</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Corporis dolores dolorum earum enim fugiat id illo
        inventore ipsa, itaque nihil odio optio placeat quisquam
        reprehenderit rerum sequi tenetur, ut voluptas.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Corporis dolores dolorum earum enim fugiat id illo
        inventore ipsa, itaque nihil odio optio placeat quisquam
        reprehenderit rerum sequi tenetur, ut voluptas.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Corporis dolores dolorum earum enim fugiat id illo
        inventore ipsa, itaque nihil odio optio placeat quisquam
        reprehenderit rerum sequi tenetur, ut voluptas.
    </p>
</div>

<div id="boven">
    <button onclick="topFunction()" id="myBtn" title="">naar boven</button>
</div>

<div id="linkjes">
    <ul>
        <li><a href="">privacy</a></li>
        <li><a href="">over</a></li>
        <li><a href="">volg ons op instagram</a></li>
        <li><a href="">volg ons op facebook</a></li>
    </ul>
</div>

<div id="footer">
    <img src="image/car-logo-clip-art-png-16.png"><br />
    <p>(c) copyright 2019, Xx-Darkness-xX02, alle rechten voorbehouden </p>
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

    function topFunction() {
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>