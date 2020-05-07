<?php
require "header.php";
//
$aantal = 0;
$directgevaar = 0;
$besmet = false;

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


if($aantal <= 4)
{
    echo "het is een mogelijkheid dat je het hebt maar het kan ook maar een griepje zijn";
}

if($aantal >= 5)
{
    echo "bel een doktor op er is een kans dat je het coronavirus hebt";
    $besmet = true;
}

if($directgevaar >= 1)
{
    echo" bel zo snel mogelijk een doctor er is een hele grote kans dat je het coronavirus hebt";
    $besmet = true;
}

$andereZiekte = $_POST['andereZiekte'];
$plaats = $_POST['plaats'];
$gemeente = $_POST['gemeente'];
$provincie = $_POST['provincie'];
$leeftijd = $_POST['leeftijd'];

$sql = "INSERT INTO gegevens (plaats, gemeente, provincie, leeftijd, andereZiekte, besmet) VALUES ('$plaats', '$gemeente', '$provincie', '$leeftijd', '$andereZiekte', '$besmet')";
$conn->query($sql);
require "footer.php";