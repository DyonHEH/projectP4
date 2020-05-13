<?php
require 'header.php';
?>

<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <form action="antwoordenVragen.php" class="w3-row-padding w3-light-grey w3-padding-64 w3-container" method="post">
                
                <label class="container">Moet je regelmatig hoesten?
                    <input type="checkbox" value="1" name="hoesten">
                    <span class="checkmark"></span>
                </label>

                <label class="container">Heb je koorts?
                    <input type="checkbox" value="1" name="koorts">
                    <span class="checkmark"></span>
                </label>

                <label class="container">Heb je spierpijn?
                    <input type="checkbox" value="1" name="spier"> 
                    <span class="checkmark"></span>
                </label>

                <label class="container">Heb je hoofdpijn?
                    <input type="checkbox" value="1" name="hoofdpijn">
                    <span class="checkmark"></span>
                </label>

                <label class="container"> Heb je keelpijn?
                    <input type="checkbox" value="1" name="keelpijn">
                    <span class="checkmark"></span>
                </label>

                <label class="container"> Heb je rillingen? 
                    <input type="checkbox" value="1" name="rillingen">
                    <span class="checkmark"></span>
                </label>

                <label class="container">Heb je dat smaak of geur wegvalt?
                    <input type="checkbox" value="1" name="smaakGeur">
                    <span class="checkmark"></span>
                </label>

                <label class="container">Heb je moeite met ademen?
                    <input type="checkbox" value="2" name="moeiteAdemen">
                    <span class="checkmark"></span>
                </label>

                <label class="container">Heb je constante pijn op je borst?
                    <input type="checkbox" value="2" name="borstpijn">
                    <span class="checkmark"></span>
                </label>

                <label class="container">Heb je blauwachtige lippen of gezicht?
                    <input type="checkbox" value="2" name="lippen">
                    <span class="checkmark"></span>
                </label>

                <label class="container">Heb je een andere ziekte
                    <input type="checkbox" value="true" name="andereZiekte">
                    <span class="checkmark"></span>
                </label>

                <hr>
                                
                <label class="container-persona">Woonplaats</label> 
                    <input type="text" class="w3-input" name="plaats" required><br>

                <label class="container-persona">Gemeente</label>   
                    <input type="text" class="w3-input" name="gemeente" required><br>
                
                <label class="container-persona">Provincie</label>  
                    <input type="text" class="w3-input" name="provincie" required><br>
                
                <label class="container-persona">Leeftijd</label>   
                    <input type="number" class="w3-input" name="leeftijd" required><br>

                <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" id="vragenlijst">Verzenden</button>
            </form>
            
        </div>
    </div>
</div>

<?php
require "footer.php";
?>
