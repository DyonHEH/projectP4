<?php
require "header.php";
?>
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">

        <div class="w3-twothird">

        <form action="antwoordenVragen.php" class="w3-row-padding w3-light-grey w3-padding-64 w3-container" method="post">
                Moet je vaak hoesten?                       <input type="checkbox" value="1" name="hoesten"> <br>
                Heb je koorts?                              <input type="checkbox" value="1" name="koorts"> <br>
                Heb je spierpijn?                           <input type="checkbox" value="1" name="spier"><br>
                Heb je hoofdpijn?                           <input type="checkbox" value="1" name="hoofdpijn"><br>
                Heb je keelpijn?                            <input type="checkbox" value="1" name="keelpijn"><br>
                Heb je rillingen?                           <input type="checkbox" value="1" name="rillingen"><br>
                Heb je dat smaak of geur wegvalt?           <input type="checkbox" value="1" name="smaakGeur"><br>
                Heb je moeite met ademen?                   <input type="checkbox" value="2" name="moeiteAdemen"><br>
                Heb je constante pijn op je borst?          <input type="checkbox" value="2" name="borstpijn"><br>
                Heb je blauwachtige lippen of gezicht?      <input type="checkbox" value="2" name="lippen"><br>
                <br>
                Heb je een andere Ziekte                    <input type="checkbox" value="true" name="andereZiekte"><br>
                Woonplaats                                  <input type="text" name="plaats" required><br>
                Gemeente                                    <input type="text" name="gemeente" required><br>
                Provincie                                   <input type="text" name="provincie" required><br>
                Leeftijd                                    <input type="number" name="leeftijd" required><br>
            <input type="submit">
        </form>
</div></div></div>


<?php
require "footer.php";
?>
