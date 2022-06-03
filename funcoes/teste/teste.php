<form>
    <input type="number" name="n1">
    <input type="number" name="n2">
    <input type="submit" value="ok">
</form>

<?php

if (isset($_GET)){
    echo $_GET["n1"] + $_GET["n2"];
}

