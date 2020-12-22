<?php

/*
	GitHub: https://github.com/matheusjohannaraujo/makemvcss
	Country: Brasil
	State: Pernambuco
	Developer: Matheus Johann Araujo
	Date: 2020-12-22
*/

require_once "work.php";

echo "Inicio\r\n";

$uid = setInterval(function(){
    echo "Interval\r\n";
}, 250);

setTimeout(function() use ($uid) {
    echo "Timeout\r\n";
    clearInterval($uid);
}, 2000);

echo "Processamento...\r\n";

workWait();

echo "Fim\r\n";
