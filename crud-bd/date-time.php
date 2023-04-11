<?php
  $today = new DateTime();
  $event = new DateTime('2023-12-31');

  $date = new DateTime('2020-01-01 15:35:00');
  $date2 = new DateTime('2020-01-01 15:35:00');
  // $date->add( DateInterval::createFromDateString('2 days 5 minutes') );

  $date->setTimezone( new DateTimeZone('America/Sao_Paulo') );
  $date2->setTimezone( new DateTimeZone('America/Sao_Paulo') );

  echo $date->format('d-m-Y H:i:s').'<br />';
  echo $date2->format('d-m-Y H:i:s').'<br />';

  if ($date > $date2) {
    echo "Date 1 é maior que Date 2";
  } else {
    echo "Date 2 é maior que Date 1";
  }

  echo '<br />';

  $diff = $today->diff($event);
  if ($today < $event) {
    echo $diff->format('%a dias');
  } else {
    echo 'Já passou';
  }