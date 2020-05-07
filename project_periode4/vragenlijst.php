<?php
require "header.php";
?>
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">

        <div class="w3-twothird">

        <form action="antwoordenVragen.php" class="w3-row-padding w3-light-grey w3-padding-64 w3-container" method="post">
                moet je vaak hoesten?                       <input type="checkbox" value="1" name="hoesten"> <br>
                heb je koorts?                              <input type="checkbox" value="1" name="koorts"> <br>
                heb je spierpijn?                           <input type="checkbox" value="1" name="spier"><br>
                heb je hoofdpijn?                           <input type="checkbox" value="1" name="hoofdpijn"><br>
                heb je keelpijn?                            <input type="checkbox" value="1" name="keelpijn"><br>
                heb je rillingen?                           <input type="checkbox" value="1" name="rillingen"><br>
                heb je dat smaak of geur wegvalt?           <input type="checkbox" value="1" name="smaakGeur"><br>
                heb je moeite met ademen?                   <input type="checkbox" value="2" name="moeiteAdemen"><br>
                heb je konstante pijn op je borst?          <input type="checkbox" value="2" name="borstpijn"><br>
                heb je blauwachtige lippen of gezicht?      <input type="checkbox" value="2" name="lippen"><br>
                <br>
                Heb je een andere Ziekte                    <input type="checkbox" value="true" name="andereZiekte"><br>
                woonplaats                                  <input type="text" name="plaats" required><br>
                gemeente                                    <input type="text" name="gemeente" required><br>
                provincie                                   <input type="text" name="provincie" required><br>
                leeftijd                                    <input type="number" name="leeftijd" required><br>
            <input type="submit">
        </form>
</div></div></div>


<?php
require "footer.php";
?>
