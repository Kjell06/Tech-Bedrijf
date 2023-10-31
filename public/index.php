<?php
require_once('../source/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>EarthUnity Enterprises Home</title>
</head>

<body>


    <nav class="header">
        <a href="index.html"><img class="headerLogo" href="index.html" alt="logo site" src="img/nvvn.png">
            <ul class="headerItems">
                <li> <a class="headerItem" href="">Ontdek</a></li>
                <li> <a class="headerItem" href="">Informatie</a></li>
                <li> <a class="headerItem" href="">Over ons</a></li>
            </ul>
    </nav>
    <section class="showcase">
        <h1 class="showcaseTitle">Uitgelichte SDG's</h1>
        <div class="php--content">
            <?php
            require_once('../source/config.php');
            $conn = new mysqli($servername, $username, $password, $database, $port);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $query = "SELECT titel, link FROM sdg ORDER BY RAND() LIMIT 3";
            $result = $conn->query($query);
            if ($result) {

                while ($sdg = $result->fetch_assoc()) {
                    echo '<a href="' . $sdg['link'] . '" class="card">';
                    echo '<div class="data-row"><span class="column-name">' . $sdg['titel'] . ':</span> ' . '</div>';


                    echo '</a>';
                }
            } else {
                echo "Error: " . $conn->error;
            }

            $conn->close();
            ?>
        </div>
    </section>
    <section class="ctasection">
        <section class="ctablok">
            <img class="ctablokimg" src="img/ctablok.png" alt="">
            <a class="ctabutton" href="https://sdggame.nl/">Speel nu!</a>
        </section>
    </section>



    <section class="sdguitleg">
        <section class="sdguitleginhoud">
            <div class="headingtextblok">

                <?php
                require_once('../source/config.php');
                $conn = new mysqli($servername, $username, $password, $database, $port);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $query = 'SELECT id,titel,tekst  FROM sdg WHERE id=30';
                $result = $conn->query($query);
                if ($result) {

                    while ($sdg = $result->fetch_assoc()) {
                        echo '<a href="' . $sdg['tekst'] . '" class="text">';
                        echo '<div class="data-row"><span class="column-name">' . $sdg['titel']  . ':<br>' .  $sdg['tekst']. ':</span> ' . '</div>';


                        echo '</a>';
                    }
                } else {
                    echo "Error: " . $conn->error;
                }

                $conn->close();
                ?>


                <p class="heading"></p>
                <p class="text"></p>
            </div>
            <img src="img/Wheel-SDG.png" alt="" class="inhoud">
        </section>

    </section>
</body>

</html>