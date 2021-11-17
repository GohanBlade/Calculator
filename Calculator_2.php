<?php

echo "Welke operatie wil je uitvoeren? (+, -, %)"; 
$operatie = readline(); 
if ($operatie == "+") {
} elseif ($operatie == "-") {
} elseif ($operatie == "%") {
} else {
    echo $operatie . " is geen geldige operatie"; 
    exit;
} echo "Eerste getal?"; 
$een = readline(); 
if (is_numeric($een)) {
} else {
    echo $een . " is geen getal"; 
    exit;
} echo "Tweede getal?"; 
$twee = readline(); 
if (is_numeric($twee)) {
} else {
    echo $twee . " is geen getal"; 
    exit;
} if ($operatie == "+") {
    echo "Uw resultaat is: " . ($een + $twee);
} elseif ($operatie == "-") {
    echo "Uw resultaat is: " . ($een - $twee);
} elseif ($operatie == "%") {
    echo "Uw resultaat is: " . ($een % $twee);
}
?>