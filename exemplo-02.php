<?php

echo strtotime("2003-01-20"); // AAAA-MM-DD

$teste = strtotime("+5 day +1 week"); //strtotime("2003-01-20")

echo "<br>";

echo date("d/m/Y" , $teste);

?>