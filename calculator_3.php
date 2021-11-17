<?php 

$user = readline("Welke operatie wil je uitvoeren? (+, -, %, *, /) ");
if ($user == "+" || $user == "-" || $user == "%" || $user == "*" || $user == "/") {
} else {
    echo "$user is geen geldige operatie";
    exit;
} $een = readline("Eerste getal? ");
if (!is_numeric($een)) {
    echo "$een is geen getal, probeer opnieuw";
    exit;
} $twee = readline("Tweede getal?");
if (!is_numeric($twee)) {
    echo "$twee is geen getal, probeer opnieuw";
    exit;
}
if ($user == "+") {
    echo "Uw resultaat is: " . ($een + $twee);
} elseif ($user == "-") {
    echo "Uw resultaat is: " . ($een - $twee);
} elseif ($user == "%") {
    echo "Uw resultaat is: " . ($een % $twee);
} elseif ($user == "*") {
    echo "Uw resultaat is: " . ($een * $twee);
} elseif ($user == "/") {
    echo "Uw resultaat is: " . ($een / $twee);
}
?>