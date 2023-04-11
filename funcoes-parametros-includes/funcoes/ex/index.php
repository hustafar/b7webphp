<?php

  function printDate($date)
  {
    switch (date('D', $date)) {
      case "Mon":
        $diaSemana = "Segunda-feira";
        break;
      case "Tue":
        $diaSemana = "Terça-feira";
        break;
      case "Wed":
        $diaSemana = "Quarta-feira";
        break;
      case "Thu":
        $diaSemana = "Quinta-feira";
        break;
      case "Fri":
        $diaSemana = "Sexta-feira";
        break;
      case "Sat":
        $diaSemana = "Sabado";
        break;
      case "Sun":
        $diaSemana = "Domingo";
        break;
    }
    return date('d/m/Y', $date) . " - " . $diaSemana;
  }

  $date = strtotime(filter_input(INPUT_GET, 'd', FILTER_SANITIZE_SPECIAL_CHARS));
  
  echo printDate($date);
