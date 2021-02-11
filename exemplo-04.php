<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D"); // soma 15 dias a data

$dt->add($periodo); // usa a instancia de soma criada em $periodo para adicionar

echo $dt->format("d/m/Y H:i:s"); //vai mostrar a data 15 dias no futuro por causa do DateInterval() e do add()

?>