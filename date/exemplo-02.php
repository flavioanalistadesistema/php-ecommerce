<?php
$ts = strtotime("1977-10-23");// essa função aceita a expressão ex: now, +1day, +1 week etc

$date =  date("d-m-Y", $ts);

switch(date("N", $ts)) {
    
    case 1;
        echo "Segunda, " . $date;
        break;
    case 2;
        echo "Terça, " . $date;
        break;
    case 3;
        echo "Quarta, " . $date;
        break;
    case 4;
        echo "Quinta, " . $date;
        break;
    case 5;
        echo "Sexta, " . $date;
        break;
    case 6;
        echo "Sabado, " . $date;
        break;
    case 7;
        echo "Domingo, " . $date;
        break;
}

?>