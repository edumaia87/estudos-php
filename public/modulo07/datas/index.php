<?php

$date = new DateTime('2020-02-03 14:28:00');
// $date->add(DateInterval::createFromDateString('8 years 3 days 10 minutes 18 seconds'));
$date->sub(DateInterval::createFromDateString('8 years 3 days 10 minutes 18 seconds'));
// $date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

// echo "Data: {$date->format('d/m/Y H:i:s')}";

$today = new DateTime();
$reveillon = new DateTime('2023-12-31');

$diff = $today->diff($reveillon);

echo $diff->format('%y anos, %m meses, %d dias, %h horas, %i minutos e %s segundos para o réveillon');
