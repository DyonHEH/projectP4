<?php
    require 'header.php';
    //test
?>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>Coronavirus</h1>
            <h5 class="w3-padding-32">Het Coronavirus oftewel COVID-19 is een erg besmettelijke ziekte die met name bij personen met een verminderde afweer, zoals ouderen en chronisch zieken erg gevaarlijk kan zijn. De belangrijkste symptomen van het virus zijn koorts, hoesten en kortademigheid, de ziekte kan uitlopen op een ernstige longontsteking met soms dodelijke afloop.</h5>

            <p class="w3-text-grey">De ziekte dook eind 2019 op in Wuhan, hoofdstad van de Chinese provincie Hubei, en verspreidde zich vervolgens in drie maanden naar andere delen van de wereld. Vanaf 11 maart 2020 is er officieel sprake van een wereldwijde pandemie.
                Wij weten in Nederland niet precies hoeveel mensen het Coronavirus hebben gehad en waar het Coronavirus zich op dit moment het meest voordoet. Dit schept veel verwarring en onwetendheid, en ontstaan er gevaarlijke situaties waarbij er grote kans is om besmetting voort te zetten.
                Om de veiligheid van de Nederlanders te waarborgen zoekt de Nederlandse overheid nu naar een applicatie of website om bij te houden wie deze ziekte al wel heeft gehad en wie niet.<br><br>

                Deze website hebben wij gemaakt, hieronder kunt u checken hoeveel coronagevallen er zijn in uw omgeving. Op onze andere pagina kunt u annoniem een vragenlijst invullen die aangeeft of u er een kans is dat u het coronavirus heeft.</p>
        </div>

        <div class="w3-third w3-center">
            <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
        </div>
    </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">


        <div class="w3-twothird">
            <h1>Aantal coronagevallen in uw regio</h1>
            <h5 class="w3-padding-32">Vul hier uw provincie, gemeente of stad in en kom te weten hoeveel coronagevallen er bij u in de omgeving zijn.</h5>


            <form action="Aantalbesmetting.php" method="post">
                <input type="text" name="plaats" required><br>plaats

                    <div id="radiobutton">
                        <input type="radio" name="keuze" value="3"> provincie
                        <input type="radio" name="keuze" value="2"> gemeente
                        <input type="radio" name="keuze" value="1"> stad <br>
                        <input type="number" name="leeftijd"  > leeftijd waarin je zoekt <br>
                        <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"> zoek</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<?php
    require 'footer.php';
?>

