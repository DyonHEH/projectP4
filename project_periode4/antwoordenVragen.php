<?php
require "header.php";
$aantal = 0;
$directgevaar = 0;
$besmet = false;
$andereZiekte = false;

if(isset($_POST['andereZiekte']))
{
    $andereZiekte = true;
}

if(isset($_POST['hoesten']) && $_POST['hoesten'] == '1')
{
    $aantal++;
}

if(isset($_POST['koorts']) && $_POST['koorts'] == '1')
{
    $aantal++;
}

if(isset($_POST['spier']) && $_POST['spier'] == '1')
{
    $aantal++;
}

if(isset($_POST['hoofdpijn']) && $_POST['hoofdpijn'] == '1')
{
    $aantal++;
}

if(isset($_POST['keelpijn']) && $_POST['keelpijn'] == '1')
{
    $aantal++;
}

if(isset($_POST['rillingen']) && $_POST['rillingen'] == '1')
{
    $aantal++;
}

if(isset($_POST['smaakGeur']) && $_POST['smaakGeur'] == '1')
{
    $aantal++;
    $directgevaar++;
}

if(isset($_POST['moeiteAdemen']) && $_POST['moeiteAdemen'] == '1')
{
    $aantal++;
    $directgevaar++;
}

if(isset($_POST['borstpijn']) && $_POST['borstpijn'] == '2')
{
    $aantal++;
    $directgevaar++;
}

if(isset($_POST['lippen']) && $_POST['lippen'] == '2')
{
    $aantal++;
    $directgevaar++;
}
?>
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-container w3-padding-64 w3-center ">
        
<?php
    

if($aantal == 0)
{
    echo "<h2>Je bent kern gezond.</h2>" ;
}

if($aantal >= 1 && $aantal <= 4)
{
    echo "<h2>Er is een mogelijkheid dat je het hebt, maar het kan ook een griepje zijn.</h2>";
}

if($aantal >= 5 && $directgevaar == 0)
{
    echo "<h2>Bel een dokter, er is een kans dat je het coronavirus hebt. </h2>" ;
    $besmet = true;
}

if($directgevaar >= 1)
{
    echo "<h2> Bel zo snel mogelijk een dokter er is een hele grote kans dat je het coronavirus hebt.</h2>";
    $besmet = true;
}
?>
        </div>
    </div>
</div>
<?php

$plaats = $_POST['plaats'];
$gemeente = $_POST['gemeente'];
$provincie = $_POST['provincie'];
$leeftijd = $_POST['leeftijd'];

$sql = "INSERT INTO gegevens (plaats, gemeente, provincie, leeftijd, andereZiekte, besmet) VALUES ('$plaats', '$gemeente', '$provincie', '$leeftijd', '$andereZiekte', '$besmet')";
$conn->query($sql);

require "footer.php";

