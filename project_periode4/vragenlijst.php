<?php
require "header.php";
?>

<html>
<body>
<form action="">
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
    <input type="submit">
</form>

</body>
</html>

<?php
require "footer.php";
?>