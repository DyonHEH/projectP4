<?php
    require 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        .form {
            padding-top: 70px;
            padding-left: 15px;
        }
    </style>
</head>
<body>
    
    <div class="form">

    <form METHOD="post" ACTION="mailto:dyonmaister@gmail.com">
        Naam: <BR> <INPUT TYPE="text" NAME="jouwnaam" VALUE="uw naam" size="30" required class="w3-input"> <BR>

        E-mail adres: <BR /> <INPUT TYPE="text" NAME="email" VALUE="@emaildomein.nl" SIZE="30" required class="w3-input"> <BR>

        Reden contact:<BR>
            <SELECT NAME="reden">
                <OPTION VALUE="klacht">klacht</OPTION>
                <OPTION VALUE="vraag">vraag</OPTION>
            </SELECT> 
            <BR>

        In wat voor soort woonplaats woont u?<BR />
            <SELECT NAME="wonen">
                <OPTION VALUE="stad">Stad</OPTION>
                <OPTION VALUE="dorp">Dorp</OPTION>
                <OPTION VALUE="gehucht">Gehucht</OPTION>
                <OPTION VALUE="platteland">Platteland</OPTION>
            </SELECT>

            <BR>
                <TEXTAREA NAME="bericht" ROWS="8" COLS="40" required></TEXTAREA>
            <BR>

                <INPUT TYPE="submit" VALUE="Verzenden" NAME="verzendbericht" class="w3-button w3-black w3-padding-large w3-large w3-margin-to">

    </form>

    </div>

</body>
</html>        

<?php 
    require 'footer.php';
?>