<?php

$servername = "localhost";
$username = "89133";
$password = "#1Geheim!";
$dbname = "db89133";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  $data1 = "Did not connect";
  echo("<script>console.log('PHP: " . $data1 . "');</script>");
}
else {
  $data2 = "Connected successfully";
  echo("<script>console.log('PHP: " . $data2 . "');</script>");
}

$sql1 = "SELECT name, date, languages FROM INTRO_WEEK_PROJECTS ORDER BY date DESC";
$result1 = $conn->query($sql1);


if ($result1->num_rows > 0) {
    // output data of each row
    while ($row = $result1->fetch_assoc()) {
        $projectname .= "<br>". $row["name"];
        $projectlang .= "<br>". $row["languages"];
        $projectdate .= "<br>". $row["date"];
    }
    }

$conn->close();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio</title>
        <link href="CSS/pfcss.css" type="text/css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="media/favicon.png">
    </head>
    <body>
    <center>
    <div id="div1">
        <img class="logo" src="media/Aryzon_2022_avatar.jpg" alt="ary_logo">
        <h1>Super Mega Ultra Epic Portfolio</h1>
    </div>
    </center>
    <div id="ldiv1">
        <center>
        <h2>Navigation</h2>
        </center>
        <button class="menubtn" onclick="divswitch(1)">Home</button>
        <button class="menubtn" onclick="divswitch(2)">Projects</button>
        <button class="menubtn" onclick="divswitch(3)">About</button>
        <button class="menubtn" onclick="divswitch(4)">Contact</button>
      </div>
      <div class="div2" id="div21">
        <center>
        <h1>The Name's Mark</h1>
        <p class="p1">Welkom naar mijn profiel pagina. Hier kan je alles over mij vinden.
          In het kort ik ben nu een student op Grafisch Lyceum Rotterdam op het gebied Software Developer en ik ben nu in het 2de jaar.
          De rest is te vinden in mijn CV hieronder of in het About pagina.
        </p>
        <button class="bannerbtn" onclick="divswitch(5)"><p class="p1">CV</p></button>
        </center>
      </div>
      <div class="div2" id="div22">
        <center>
        <h1>Projects</h1>
        <p class="p1">Hier vind je de projecten die ik op school heb gedaan. Alle videos zijn op mijn Youtube channel te vinden.</p>
        <button class="bannerbtn" onclick="window.location.href='https://www.youtube.com/channel/UCfdfVj1r3zguT0GF91VK7Dg';"><p class="p1">Youtube Channel</p></button>
        </center>
        <p class="p1" id="projectname"><?= $projectname ?></p>
        <p class="p1" id="projectdate"><?= $projectdate ?></p>
        <p class="p2" id="projectlang"><?= $projectlang ?></p>
      </div>
      <div class="div2" id="div23">
        <center>
        <h1>About</h1>
        </center>
        <p class="p1">Ik speel games, maak Youtube videos 1 keer per tien duizen jaar en probeer nu een software developer te worden.
          Ik wil uiteindelijk een game developer worden, dat is mijn endgoal. Maar ik weet dat het vaak mis gaat met zulke baan en dus focus ik meer
          op algemeen programeren.<br>
          Ik probeer nu al mijn werk te optimizeren. Deze site bijvoorbeeld is zo simpel mogelijk gemaakt zodat het snel en soepel werkt.
          Ik kan op dit moment werken met HTML, CSS, Javascript en PHP. Maar ik focus meer op Javascript en PHP (dus de backend).

        </p>
      </div>
      <div class="div2" id="div24">
        <h1>Contact</h1>
        <form name="ContactForm" method="post" action="PHP/contact.php">
          <p class="p1">Naam: <input class="p3" type="text" name="c_name" id="c_name" maxlength="30" required/></p>
          <p class="p1">Email: <input class="p3" type="email" name="c_email" id="c_email" maxlength="50" required/></p>
          <p class="p1">Bericht: <input class="p3" type="text" name="c_message" id="c_message" maxlength="2000" required />

          </p><input type="submit" name="c_submit" id="c_submit" value="Verzenden"/>
          </form>
      </div>
      <div class="div2" id="div25">
        <center>
        <h1>CV</h1>
        </center>
        <h2 class="h2_2">Persoonlijke Gegevens</h2>
        <p class="p2">Voornaam: Mark</p>
        <p class="p2">Achternaam: Mihailenko</p>
        <p class="p2">Geboortedatum en -plaats: 13 november 2001, Riga (Letland).</p>
        <p class="p2">Adres: Gijsingstraat 104b, 3026RS, Rotterdam</p>
        <p class="p2">Telefoon: 06 15284416</p>
        <p class="p2">E-mailadres: Aryzon@proton.me</p>
        <h2 class="h2_2">Opleiding en diploma’s</h2>
        <p class="p2">2013-2019: HAVO op SG.Spieringshoek. Profiel: Natuur en Techniek + Natuur en Gezondheid. (Diploma behaald).</p>
        <p class="p2">2016: Russische Taal B1 voor tweetalige studenten. (Diploma behaald).</p>
        <p class="p2">Genomineerd voor PWS Awards 2019 op SG.Spieringshoek. (Thema: Video Game Engines).</p>
        <p class="p2">2019: Informatica op Hogeschool Rotterdam.</p>
        <p class="p2">2020: Technische Informatica op Hogeschool Rotterdam.</p>
        <p class="p2">2022 - nu: Software Developer op Grafisch Lyceum Rotterdam</p>
        <h2 class="h2_2">Werkervaring</h2>
        <p class="p2">Horeca & bezorging bij Dutch Diner.</p>
        <p class="p2">Vakantiehulp bij Laurens zorg.</p>
        <p class="p2">Kwaliteit en vakkenvullen bij Albert Heijn.</p>
        <p class="p2">Distributie en orderpicking bij Royal Flora Holland.</p>
        <p class="p2">Verpakking bij GOAT.</p>
        <h2 class="h2_2">Vaardigheden</h2>
        <p class="p2">Nederlands (tweede moedertaal).</p>
        <p class="p2">Engels (vloeiend).</p>
        <p class="p2">Russisch (moedertaal).</p>
        <p class="p2">7 jaar ervaring met Sony Vegas en Davinci Resolve (video editing en production).</p>
        <p class="p2">Basiskennis van HTML, CSS, Javascript, Python, Java en C.</p>
        <center>
        <a href="media/CV.pdf" download>
        <button class="downloadbtn"><p class="p1">Download</p></button>
        </a>
        <button class="bannerbtn" onclick="divswitch(5)"><p class="p1">Close</p></button>
        </center>
      </div>
    <script src="Javascript/pfjs.js"></script>
    </body>
</html>