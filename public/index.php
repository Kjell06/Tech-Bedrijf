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
        <a href="index.html"><img class="headerLogo" href="index.html" alt="logo site" src="img/lgo(3).svg">
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

       
$query = "SELECT * FROM sdg";


$result = $conn->query($query);


if ($result) {
  
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">';
      
        foreach ($row as $column => $value) {
        
            if ($column !== 'id') {
                echo $column . ": " . $value . "<br>";
            }
        }
        echo '</div>';
        echo "<br>";
    }
} else {
    echo "Error: " . $conn->error;
}


$conn->close();
?>
           
        ?>
        </div>
        <section class="randomsdg">
            <img class="randomsdgimg" src="img/cleanwater.png" alt="">
            <img class="randomsdgimg" src="img/affordableandenergy.png" alt="">
            <img class="randomsdgimg" src="img/decentwork.png" alt="">
        </section>
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
                <p class="heading">Uitleg SDG's</p>
                <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, accusamus! Adipisci
                    facilis perferendis neque mollitia hic, odit a commodi maxime consectetur! Adipisci distinctio,
                    laborum inventore enim ullam est illum impedit!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat debitis quo vitae cumque
                    necessitatibus numquam, deserunt laborum quaerat repudiandae enim, voluptatem voluptates tempore
                    dolor voluptas expedita nesciunt pariatur, rerum itaque.</p>
            </div>
            <img src="img/cleanwater.png" alt="" class="inhoud">
        </section>
    </section>
</body>

</html>